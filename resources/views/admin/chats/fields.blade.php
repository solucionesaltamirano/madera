<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control','maxlength' => 1000,'maxlength' => 1000]) !!}
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

<!-- Chat Room Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chat_room_id', 'Chat Room Id:') !!}
    {!! Form::number('chat_room_id', null, ['class' => 'form-control']) !!}
</div>