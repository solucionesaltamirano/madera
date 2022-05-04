LO PUEDE VER solo SI ESTA LOGUEADO
@if(auth()->user())
    {{ auth()->user()->name }}
@endif