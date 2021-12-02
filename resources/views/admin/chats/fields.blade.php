<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- User Send Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_send_id', 'User Send Id:') !!}
    {!! Form::number('user_send_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Receive Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_receive_id', 'User Receive Id:') !!}
    {!! Form::number('user_receive_id', null, ['class' => 'form-control']) !!}
</div>