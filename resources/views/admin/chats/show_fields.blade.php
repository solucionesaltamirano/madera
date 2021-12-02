<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $chat->message }}</p>
</div>

<!-- User Send Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_send_id', 'User Send Id:') !!}
    <p>{{ $chat->user_send_id }}</p>
</div>

<!-- User Receive Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_receive_id', 'User Receive Id:') !!}
    <p>{{ $chat->user_receive_id }}</p>
</div>

