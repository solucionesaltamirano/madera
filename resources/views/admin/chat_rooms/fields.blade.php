<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name Chat Room:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
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
    <div class="card-body px-1 px-sm-4">
        @livewire('users.list-select-livewire', [
            'all' => false,
            'users' => $users,
        ])
    </div>
</div>