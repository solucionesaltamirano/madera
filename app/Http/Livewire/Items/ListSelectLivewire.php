<?php

namespace App\Http\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use stdClass; 

class ListSelectLivewire extends Component
{
    public $all;
    public $itemsAssigned;
    public $search;
    public $allItems;


    public function mount($all, $items){
        $this->all = $all;
        $this->itemsAssigned = collect();

        foreach($items as $item){
            $i = new stdClass();
            $i = ['id' => $item->id];
            $this->itemsAssigned->push($i);
        }
    }

    public function itemselect($id){
        $item = new stdClass();
        if($this->itemsAssigned->where('id', $id)->count() == 0){
            $item = ['id' => $id];
            $this->itemsAssigned->push($item);
        }else{
            $item = $this->itemsAssigned->where('id', $id);
            $this->itemsAssigned->forget($item->keys()[0]);
        }
    }

    public function selectAll(){
        $this->itemsAssigned = collect();
        foreach($this->allItems as $item){
            $item = new stdClass();
            $item = ['id' => $item->id];
            $this->itemsAssigned->push($item);
        }
    }

    public function unselectAll(){
        $this->itemsAssigned = collect();
    }

    public function render()
    {
        if($this->all) {
            $this->allItems = Item::where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('id',  $this->search)
            ->get();
        } else {
            $this->allItems = Item::where('name', 'LIKE', '%'.$this->search.'%')
            ->where('id', '!=', auth()->id())
            ->orWhere('id',  $this->search)
            ->get();
        }

        return view('livewire.items.list-select-livewire',[
            'items' => $this->allItems,
            'itemsAssigned' => $this->itemsAssigned
        ]);
    }
}
