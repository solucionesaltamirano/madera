<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Flash;
use Livewire\Component;

class Restore extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;

    }

    public function restoreUser(){
        $this->user->deleted_at = null;
        $this->user->save();

        Flash::success('User restored successfully.');
        
        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.user.restore');
    }
}
