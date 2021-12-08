<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

@if(isset($chatRoom))
    <div class="form-group col-sm-6">
        {{ $chatRoom->userOwn->name; }}
    </div>
@else
    <input name="user_id" id="user_id" type="hidden", value="{{ auth()->user()->id }}">
@endif