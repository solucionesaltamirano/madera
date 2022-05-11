<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\ClienteEmpresa;
use Livewire\Component;

class ClienteEmpresas extends Component
{
    public $clientes;
    public $clienteSelected;
    public $empresas = [];
    public $empresaSelected = "0";
    public $destino;

    public function mount($clienteSelected = Null, $empresaSelected = null)
    {
        // dd($empresaSelected);
        $this->clientes = Cliente::get();
        $this->clienteSelected = $this->empresas = auth()->user()->empresa->first()->id;
        $this->empresas = ClienteEmpresa::where('cliente_id', $this->clienteSelected)->get();

        if($clienteSelected){
            $this->clienteSelected = $clienteSelected;
            $this->empresas = ClienteEmpresa::where('cliente_id', $this->clienteSelected)->get();
        }

        if($empresaSelected){
            $this->empresaSelected = $empresaSelected;
        }

    }

    public function updatedClienteSelected()
    {
        $this->empresas = ClienteEmpresa::where('cliente_id', $this->clienteSelected)->get();
        $this->empresaSelected = "0";
    }

    public function updatedEmpresaSelected()
    {
        $this->destino = ClienteEmpresa::find($this->empresaSelected)->direccion;
        
    }

    public function render()
    {
        return view('livewire.cliente-empresas');
    }
}
