<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;
use stdClass;

class ListSelectWithPermissions extends Component
{
    public $allRoles;
    public $rolesAssigned;
    public $searchRole;
    public $permissionsFromRoles;
    public $permissionsFromUser;
    public $allPermissions;
    public $permissionsAssigned;
    public $searchPermission;
    public $userSelected;

    public function mount($roles, $permissions, $user){
        $this->rolesAssigned = collect();
        $this->permissionsFromUser = collect();
        $this->permissionsFromRoles = collect();
        $this->userSelected = $user;

        foreach($permissions as $permission){
            $i = new stdClass();
            $i = ['id' => $permission->id, 'role' => false];
            $this->permissionsFromUser->push($i);
        }

        foreach($roles as $role){
            $i = new stdClass();
            $i = ['id' => $role->id];
            $this->rolesAssigned->push($i);

            foreach($role->permissions as $permission){
                $i = new stdClass();
                $i = ['id' => $permission->id, 'role' => true];
                $this->permissionsFromRoles->push($i);
            }
        }
    }

    public function rolesSelect($id){
        $item = new stdClass();
        
        if($this->rolesAssigned->where('id', $id)->count() == 0){
            $item = ['id' => $id];
            $this->rolesAssigned->push($item);
            
        }else{
            $item = $this->rolesAssigned->where('id', $id);
            $this->rolesAssigned->forget($item->keys()[0]);
        }

        $allPermissions = [];
        foreach(Role::whereIn('id', $this->rolesAssigned)->get() as $role){
            $permissionsFromRoles = $role->permissions->pluck('id')->toArray();
            $allPermissions = array_merge($allPermissions, $permissionsFromRoles);
            $permissionsFromRoles = array_unique($allPermissions);
        }
        
        if($this->rolesAssigned->count() == 0){
            $this->permissionsFromRoles = collect();
        }else{
            $this->permissionsFromRoles = collect();
            foreach($permissionsFromRoles as $permission_id){
                $this->permissionRollSelect($permission_id, true);
            }
        }
    }

    public function selectAllRoles(){
        $this->rolesAssigned = collect();
        foreach($this->allRoles as $role){
            $item = new stdClass();
            $item = ['id' => $role->id];
            $this->rolesAssigned->push($item);
        }
    }

    public function unselectAllRoles(){
        $this->rolesAssigned = collect();
    }

    public function permissionRollSelect($id, $role){
        $item = new stdClass();
        if($this->permissionsFromRoles->where('id', $id)->count() == 0){
            $item = ['id' => $id, 'role' => $role];
            $this->permissionsFromRoles->push($item);
        }else{
            $item = $this->permissionsFromRoles->where('id', $id);

            if($item->where('role', false)->count() > 0){
                $this->permissionsFromRoles->forget($item->keys()[0]);
            }
        }
    }

    public function permissionSelect($id, $role = false){
        $item = new stdClass();
        if($this->permissionsFromUser->where('id', $id)->count() == 0){
            $item = ['id' => $id, 'role' => $role];
            $this->permissionsFromUser->push($item);
        }else{
            $item = $this->permissionsFromUser->where('id', $id);

            if($item->where('role', false)->count() > 0){
                $this->permissionsFromUser->forget($item->keys()[0]);
            }
        }
    }

    public function selectAllPermissions(){
        $this->permissionsFromUser = collect();
        foreach($this->allPermissions as $permission){
            $item = new stdClass();
            $item = ['id' => $permission->id, 'role' => false];
            $this->permissionsFromUser->push($item);
        }
    }

    public function unselectAllPermissions(){
        $this->permissionsFromUser = collect();
    }

    public function render()
    {
        $role_id = auth()->user()->roles->min('id') ?? Role::all()->max('id') + 1;

        if($role_id <= 3){
            $minRole = $role_id;
        }else{
            $minRole = $role_id + 1;
        }

        $this->allRoles = Role::where('name', 'LIKE', '%'.$this->searchRole.'%')
        ->where('id', '>=', $minRole)
        ->get();

        $this->allPermissions = Permission::where('name', 'LIKE', '%'.$this->searchPermission.'%')
        ->get();

        $this->permissionsAssigned = collect();

        foreach($this->permissionsFromRoles as $permission){
            $item = new stdClass();
            $item = ['id' => $permission['id'], 'role' => true];
            $this->permissionsAssigned->push($item);
        }

        foreach($this->permissionsFromUser as $permission){
            $item = new stdClass();
            $item = ['id' => $permission['id'], 'role' => $permission['role']];
            $this->permissionsAssigned->push($item);
        }


        return view('livewire.roles.list-select-with-permissions',[
            'roles' => $this->allRoles,
            'rolesAssigned' => $this->rolesAssigned,
            'permissions' => $this->allPermissions,
            'permissionsAssigned' => $this->permissionsAssigned
        ]);
    }
}
