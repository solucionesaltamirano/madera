<?php

namespace App\Http\Livewire\Partial;

use Livewire\Component;

class Toast extends Component
{
    public $title;
    public $icon;

    public function mount($title = 'Success', $icon = 'success')
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('livewire.partial.toast');
    }
}
