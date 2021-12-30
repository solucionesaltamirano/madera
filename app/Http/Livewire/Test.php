<?php

namespace App\Http\Livewire;

use App\Events\TestEvent;
use stdClass;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Test extends Component
{
    public $notification = false;

    public function notifyEvent(){
        event(new TestEvent());
    }

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo:channel-test,TestEvent' => 'notify'];

    public function notify()
    {
        $this->count++;
    }

    public $count = 10;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
