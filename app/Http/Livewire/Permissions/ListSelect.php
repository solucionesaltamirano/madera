<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use App\Models\Permission;
use stdClass;

class ListSelect extends Component
{
    public $permissionsAssigned;
    public $search;
    public $allPermissions;

    public function mount( $permissions){
        $this->permissionsAssigned = collect();

        foreach($permissions as $item){
            $i = new stdClass();
            $i = ['id' => $item->id];
            $this->permissionsAssigned->push($i);
        }
    }

    public function permissionselect($id){
        $item = new stdClass();
        if($this->permissionsAssigned->where('id', $id)->count() == 0){
            $item = ['id' => $id];
            $this->permissionsAssigned->push($item);
        }else{
            $item = $this->permissionsAssigned->where('id', $id);
            $this->permissionsAssigned->forget($item->keys()[0]);
        }
    }

    public function selectAll(){
        $this->permissionsAssigned = collect();
        foreach($this->allPermissions as $permission){
            $item = new stdClass();
            $item = ['id' => $permission->id];
            $this->permissionsAssigned->push($item);
        }
    }

    public function unselectAll(){
        $this->permissionsAssigned = collect();
    }

    public function render()
    {
        
        $this->allPermissions = Permission::where('description', 'LIKE', '%'.$this->search.'%')
        ->orWhere('id',  $this->search)
        ->get();

        return view('livewire.permissions.list-select',[
            'permissions' => $this->allPermissions,
            'permissionsAssigned' => $this->permissionsAssigned
        ]);
    }
}
