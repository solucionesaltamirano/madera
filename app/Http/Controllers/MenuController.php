<?php

namespace App\Http\Controllers;

use App\DataTables\MenuDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MenuController extends AppBaseController
{
    public function __construct(){
        // $this->middleware('can:menus.show')->only(['index', 'show']);
        // $this->middleware('can:menus.create')->only(['create', 'store']);
        // $this->middleware('can:menus.edit')->only(['edit', 'update']);
        // $this->middleware('can:menus.destroy')->only('destroy');
    }
    /**
     * Display a listing of the Menu.
     *
     * @param MenuDataTable $menuDataTable
     * @return Response
     */
    public function index(MenuDataTable $menuDataTable)
    {
        return $menuDataTable->render('admin.menus.index');
    }

    /**
     * Show the form for creating a new Menu.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.menus.create');
    }

    /**
     * Store a newly created Menu in storage.
     *
     * @param CreateMenuRequest $request
     *
     * @return Response
     */
    public function store(CreateMenuRequest $request)
    {
        $input = $request->all();

        $i=0;
        $items = [];
        foreach($request->items as $item){
            $items[] = [
                intval($item) => [
                    'order' => intval($i),
                ]
            ];

            $i++;
        }

        dd($items);

        /** @var Menu $menu */
        $menu = Menu::create($input);

        $menu->items()->detach();
        $menu->items()->attach($items);

        Flash::success('Menu saved successfully.');

        return redirect(route('menus.index'));
    }

    /**
     * Display the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Menu $menu */
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('admin.menus.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Menu $menu */
        $menu = Menu::find($id);

        $items = $menu->items;

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('admin.menus.edit',[
            'menu' => $menu,
            'items' => $items
        ]);
    }

    /**
     * Update the specified Menu in storage.
     *
     * @param  int              $id
     * @param UpdateMenuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenuRequest $request)
    {
        /** @var Menu $menu */
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        $menu->fill($request->all());
        $menu->save();

        $menu->items()->sync($request->items);

        Flash::success('Menu updated successfully.');

        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified Menu from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Menu $menu */
        $menu = Menu::find($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        $menu->delete();

        Flash::success('Menu deleted successfully.');

        return redirect(route('menus.index'));
    }
}
