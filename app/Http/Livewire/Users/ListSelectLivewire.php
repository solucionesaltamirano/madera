<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use stdClass;

class ListSelectLivewire extends Component
{
    public $all;
    public $usersAssigned;
    public $search;
    public $allUsers;


    public function mount($all, $users){
        $this->all = $all;
        $this->usersAssigned = collect();

        foreach($users as $user){
            $item = new stdClass();
            $item = ['id' => $user->id];
            $this->usersAssigned->push($item);
        }
    }

    public function userSelect($id){
        $item = new stdClass();
        if($this->usersAssigned->where('id', $id)->count() == 0){
            $item = ['id' => $id];
            $this->usersAssigned->push($item);
        }else{
            $item = $this->usersAssigned->where('id', $id);
            $this->usersAssigned->forget($item->keys()[0]);
        }
    }

    public function selectAll(){
        $this->usersAssigned = collect();
        foreach($this->allUsers as $user){
            $item = new stdClass();
            $item = ['id' => $user->id];
            $this->usersAssigned->push($item);
        }
    }

    public function unselectAll(){
        $this->usersAssigned = collect();
    }

    public function render()
    {
        if($this->all) {
            $this->allUsers = User::where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('id',  $this->search)
            ->get();
        } else {
            $this->allUsers = User::where('name', 'LIKE', '%'.$this->search.'%')
            ->where('id', '!=', auth()->id())
            ->orWhere('id',  $this->search)
            ->get();
        }

        // dd($this->usersAssigned);

        return view('livewire.users.list-select-livewire',[
            'users' => $this->allUsers,
            'usersAssigned' => $this->usersAssigned
        ]);
    }
}
