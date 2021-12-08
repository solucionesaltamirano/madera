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

    public function render()
    {
        if($this->all) {
            $users = User::where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('id',  $this->search)
            ->get();
        } else {
            $users = User::where('name', 'LIKE', '%'.$this->search.'%')
            ->where('id', '!=', auth()->id())
            ->orWhere('id',  $this->search)
            ->get();
        }

        // dd($this->usersAssigned);

        return view('livewire.users.list-select-livewire',[
            'users' => $users,
            'usersAssigned' => $this->usersAssigned
        ]);
    }
}
