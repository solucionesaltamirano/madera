<div>
    <div class="row pb-2">
        <div class="col-12 col-sm-8 mb-2">
            <input class="form-control" type="text" wire:model="search" placeholder="Search items">
        </div>
        <div class=" col-12 col-sm-2 mb-2">
            <div class="form-control btn btn-outline-primary" wire:click="selectAll">Select all</div>
        </div>
        <div class="col-12 col-sm-2 ">
            <div class="form-control btn btn-outline-danger" wire:click="unselectAll">Unselect all</div>
        </div>
    </div>
    <div class="row border py-2 rounded bg-light">
        @foreach ($items as $item)
            <div class="col-12 col-sm-4 ">
                <div class="w-100 my-1" wire:click="itemselect({{ $item->id }})">
                    <div class="text-left w-100 btn {{$itemsAssigned->where('id', $item->id)->count() <= 0  ? ' btn-outline-secondary': 'btn btn-success' }} ">
                        {{ $item->name }} - {{ $item->id }}
                        @if($itemsAssigned->where('id', $item->id)->count() > 0)
                            <div class="float-right ">
                                <i class="fal fa-check-circle "></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    
    @foreach ($itemsAssigned as $item)
        <input type="hidden" name="items[]" value="{{ $item['id'] }}">
        
    @endforeach
</div>