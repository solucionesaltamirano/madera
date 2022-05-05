<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;



class Telefonos extends Component
{
    public $list = [];

    public function mount()
    {
        $this->list = [
            [
                'numero' => '',
                'nombre' => '',
            ]
        ];
    }

    public function addItem(){
        $this->list[] = [
            'numero' => '',
            'nombre' => '',
        ];
    }


    public function removeItem($index){
        unset($this->list[$index]);
        $this->list = array_values($this->list);
    }

    public function render()
    {
        return view('livewire.clientes.telefonos');
    }
}
