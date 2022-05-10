<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;

class UserController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:users.index')->only(['index', 'show']);
        $this->middleware('can:users.create')->only(['create', 'store']);
        $this->middleware('can:users.edit')->only(['edit', 'update']);
        $this->middleware('can:users.destroy')->only('destroy');
    }

    //model_controller
    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $role_id = auth()->user()->roles->min('id') ?? Role::all()->max('id') + 1;

        if($role_id <= 3){
            $minRole = $role_id;
        }else{
            $minRole = $role_id + 1;
        }

        // dd(User::get()->toArray());

        /** @var User $users */
        $users = User::withTrashed()
        // ->where('id', '!=', auth()->user()->id)
        ->get()
        ->where('minRole', '>=', $minRole)
        ;

        return view('admin.users.index',[
            'users' => $users,
        ]);
            
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        
        $input['password'] = Hash::make($input['password']);
        
        /** @var User $user */
        $user = User::create($input);


        if($request->media){
            $user->addMedia($request->media)->toMediaCollection();
            $user->save();
            $user->profile_photo_path = $user->getMedia()->last()->getUrl();
            $user->save();
        }

        $user->roles()->sync($request->roles);
        $user->permissions()->sync($request->permissions);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::withTrashed()->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var User $user */
        $user = User::withTrashed()->find($id);
        $roles = $user->roles;
        $permissions = $user->permissions;

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.edit',[
            'user' => $user,
            'roles' => $roles,
            'permissions' => $permissions
        ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        if( is_null($request->password)){
            $request->offsetSet('password', $user->password);
        }else{
            $newPasword = Hash::make($request->get('password'));
            $request->offsetSet('password', $newPasword)  ;
        }

        $user->fill($request->all());
        if($request->media){
            $user->addMedia($request->media)->toMediaCollection();
            $user->profile_photo_path = $user->getMedia()->last()->getUrl();
        }

        $user->save();
    
        $user->roles()->sync($request->roles);
        $user->permissions()->sync($request->permissions);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        $current_user_roll = auth()->user()->roles->min('id');
        $user_roll = $user->roles->min('id') ?? Role::all()->max('id') + 1;

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        if( $current_user_roll >= $user_roll ){
            Flash::error('You can not delete this user');
            return redirect(route('users.index'));
        }else{

            $user->delete();

            Flash::success('User deleted successfully.');

            return redirect(route('users.index'));

        }
    }
}
