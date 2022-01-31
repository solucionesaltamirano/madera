<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Item;
use Illuminate\Http\Request;
use App\DataTables\ItemDataTable;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Controllers\AppBaseController;

class ItemController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:items.index')->only(['index', 'show']);
        $this->middleware('can:items.create')->only(['create', 'store']);
        $this->middleware('can:items.edit')->only(['edit', 'update']);
        $this->middleware('can:items.destroy')->only('destroy');
        $this->middleware('can:items.from-routes')->only(['itemsFrom-routes', 'itemsFromRoutesSave']);
    }
    /**
     * Display a listing of the Item.
     *
     * @param ItemDataTable $itemDataTable
     * @return Response
     */
    public function index(ItemDataTable $itemDataTable)
    {
        return $itemDataTable->render('admin.items.index');
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItemRequest $request
     *
     * @return Response
     */
    public function store(CreateItemRequest $request)
    {
        $input = $request->all();

        /** @var Item $item */
        $item = Item::create($input);

        Flash::success('Item saved successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Display the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Item $item */
        $item = Item::find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('admin.items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Item $item */
        $item = Item::find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('admin.items.edit')->with('item', $item);
    }

    /**
     * Update the specified Item in storage.
     *
     * @param  int              $id
     * @param UpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemRequest $request)
    {
        /** @var Item $item */
        $item = Item::find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $item->fill($request->all());
        $item->save();

        Flash::success('Item updated successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Item $item */
        $item = Item::find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $item->delete();

        Flash::success('Item deleted successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Display a listing of the Route will be Items.
     *
     * @return Response
     */
    public function itemsFromRoutes()
    {
        return view('admin.items.from-routes');
    }

    /**
     * Store Items in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function itemsFromRoutesSave(Request $request)
    {
        foreach ($request->all()['items_array'] as $value) {
            if($value['name'] != null and $value['icon'] != null and $value['description'] != null){
                $item = new Item;
                $item->name = $value['name'];
                $item->description = $value['description'];
                $item->route = $value['route'];
                $item->icon = $value['icon'];
                $item->save();
            } 
        }

        Flash::success('Items saved successfully.');
        return redirect()->route('items.from-routes');
    }

    


}
