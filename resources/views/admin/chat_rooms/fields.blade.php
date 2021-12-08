<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name Chat Room:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 250]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 250]) !!}
</div>

<!-- image_path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_path', 'Image url:') !!}
    {!! Form::text('image_path', null, ['class' => 'form-control','maxlength' => 250]) !!}
</div>


<div class="form-group col-sm-6 ">
    {!! Form::label('private', 'Private:') !!}
    <div class="border rounded pt-2 pb-1 px-2">
        <span class="  px-4">
            YES {{ Form::radio('private', '1', true) }}
        </span>
        <span class=" px-4">
            NO {{ Form::radio('private', '0', ) }}
        </span>
    </div>
        
</div>

@if(isset($chatRoom))
    <div class="form-group col-sm-6">
        Dueño: {{ $chatRoom->userOwn->name }}
    </div>
    <input name="user_id" id="user_id" type="hidden", value="{{ $chatRoom->userOwn->id }}">
@else
    <input name="user_id" id="user_id" type="hidden", value="{{ auth()->user()->id }}">
@endif

<div class="card card-primary card-outline min-vh-100 col-12">
    <div class="card-header">
        <div class="card-title w-100">
            <div class="row ">
                <div class="col strong pt-1">
                    <i class="fal fa-users-medical"></i>
                    <span class="ml-3">
                        Select Users 
                    </span>
                </div>
            </div>
        </div>
    </div>

    @php
        if( old('users') ){
            
            $urs = old('users');
            $users = collect();

            foreach ($urs as $u ) {
                $item = new stdClass();
                $item->id =  $u;
                $users->push($item);
            }
        }
    @endphp

    <div class="card-body px-1 px-sm-4">
        @livewire('users.list-select-livewire', [
            'all' => false,
            'users' => $users ?? [],
        ])
    </div>  
</div>