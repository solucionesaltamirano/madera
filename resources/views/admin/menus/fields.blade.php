<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<div class="card card-primary card-outline min-vh-100 col-12">
    <div class="card-header">
        <div class="card-title w-100">
            <div class="row ">
                <div class="col strong pt-1">
                    <i class="fal fa-users-medical"></i>
                    <span class="ml-3">
                        Select Items menu
                    </span>
                </div>
            </div>
        </div>
    </div>

    @php
        if( old('items') ){
            
            $olds = old('items');
            $items = collect();

            foreach ($olds as $i ) {
                $item = new stdClass();
                $item->id =  $i;
                $items->push($item);
            }
        }
    @endphp

    <div class="card-body px-1 px-sm-4">
        @livewire('items.list-select-livewire', [
            'all' => true,
            'items' => $items ?? [],
        ])
    </div>  
</div>