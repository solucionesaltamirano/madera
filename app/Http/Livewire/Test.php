<?php

namespace App\Http\Livewire;

use stdClass;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Test extends Component
{

    public $count = 10;

    public function increment()
    {
        $this->count++;
    }

    // this is a test

    public function render()
    {
        return view('livewire.test');
    }
}
