<div class="">
    {{-- @dump( $roomSelected ? $roomSelected->user_id : '')
    @dump($userSender->id)
    @dump($roomSelected->users()->where('user_id', $userSender->id)->count()) --}}
    <div class="row ">
        <div class="col-sm-3 col-12">
            <!-- Contacts are loaded here -->
            <div style="height:90vh"  class="card card-success card-outline direct-chat direct-chat-success ">
                <div class="card-header">
                    <h3 class="card-title py-1 ">Rooms</h3>
                    <a href="{{ route('chatRooms.create') }}" class="float-right btn btn-outline-primary btn-sm">
                        New Room <i class="fal fa-users-class"></i>
                    </a>
                </div>
                    
                <div class=" w-100 ml-0 p-2 border-bottom ">
                    <div class="btn-group btn-group-toggle w-100 " role="group" aria-label="Rooms">
                        <button type="button" class="btn btn-dark" wire:click="filter(1)">All </button>
                        <button type="button" class="btn btn-dark" wire:click="filter(2)">Own <i class="fal fa-crown text-warning "></i></button>
                        <button type="button" class="btn btn-dark" wire:click="filter(3)">Allowed <i class="fal fa-check-circle text-success"></i></button>
                    </div>
                </div>
                <div class="input-group p-2 border-bottom">
                    <input type="text" name="message" placeholder="Search Room" class="form-control" wire:model="searchRoom" autocomplete="off">
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="contacts-list mx-0 ">
                        @if($rooms->count() > 0 )
                            @foreach ($rooms as $room)
                                <li class="my-1  text-left w-100 {{ $room->id == $roomSelectedId ? 'bg-primary' : '' }}
                                    " wire:click.prevent="room_select({{ $room->id }}) ">
                                    <a href=""   class="">
                                        <div class="align-middle"> 
                                            <img class="contacts-list-img mr-1" src="https://ui-avatars.com/api/?name={{ urlencode($room->name) }}" alt="User Avatar">
                                        <!-- /.contacts-list-info -->
                                            <span class=""> {{ $room->name }} </span> 
                                            {!! $room->users()->where('id',$userSender->id)->count() > 0 ? '<i class="fal fa-check-circle text-success float-right"></i>' : '' !!} 
                                            {!! $room->user_id == $userSender->id ? '<i class="fal fa-crown text-warning float-right"></i>' : '<small class="text-dark text-truncate">'. $room->userOwn->name .'</small>'!!}
                                            
                                        </div>
                                    </a>
                                    {{-- <small class="">
                                        {!! $room->chatReceives->sortBy('create_at')->where('user_send_id', $userSender->id)->first() ?
                                            '<i class="fal fa-paper-plane"></i> ' . 
                                            $room->chatReceives->sortBy('create_at')->where('user_send_id', $userSender->id)->first()->message : 
                                            '<i class="fal fa-envelope-open-text"></i> ' . 
                                            $room->chatSends->sortBy('create_at')->where('user_send_id', $userSender->id)->first()->message 
                                        !!}
                                    </small>  --}}
                                </li>
                            @endforeach
                        @endif
                        <!-- End Contact Item -->
                    </ul>
                </div>
                <!-- /.contatcts-list -->   
            </div>
            <!-- /.direct-chat-pane -->
        </div>
        <div class="col-sm-9 col-12">
            <div style="height:90vh"  class="card card-primary card-outline direct-chat direct-chat-primary ">
                @if($roomSelectedId > 0 )
                    <div class="card-header ">
                        <div class="card-title  ">
                            <div class=" ">
                                <span class="small ">Room <b>{{ $roomSelected->name }}</b></span>
                                <small class="ml-2 border-bottom  pt-2">
                                    {!! $roomSelected->private == 1 ? '<i class="fal fa-lock-alt text-warning px-1"></i> Access only with invitation' : '<i class="fal fa-lock-open-alt text-success px-1"></i> Free access' !!}
                                </small>
                            </div>
                        </div>
                        
                        @if($roomSelected->user_id == $userSender->id)
                            <span class="float-right ">
                                <a href="{{ route('chatRooms.edit', $room->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="fal fa-edit"></i>
                                </a>
                            </span>
                        @else
                            @if($roomSelected->users()->where('id', $userSender->id)->count() > 0  )
                                <span class="float-right ">
                                    <div class="btn btn-outline-danger btn-sm" wire:click="detachMe({{ $roomSelected }}, {{ $userSender->id }} )">
                                        <i class="fal fa-sign-out-alt"></i>
                                    </div>
                                </span>
                            @else
                                <span class="float-right ">
                                    <div class="btn btn-outline-success btn-sm" wire:click="attachMe({{ $roomSelected }}, {{ $userSender->id }} )">
                                        <i class="fal fa-sign-in-alt"></i>
                                    </div>
                                </span>
                            @endif
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body direct-chat-messages px-4" id="messageBody">
                        <!-- Conversations are loaded here -->
                        <div style="height:72vh" class="body-chat" >
                            <!-- Message. Default to the left -->
                            @foreach ($chatSelected as $chat)
                                <div class="direct-chat-msg {{ $userSender->id == $chat->user_send_id ? 'right' : '' }}">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-timestamp {{ $userSender->id == $chat->user_send_id ? 'float-left' : 'float-right' }}">{{ $chat->created_at }}</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{ $chat->userSend->profile_photo_path ?? $chat->userSend->profile_photo_url  }}" alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text body-chat2">
                                        {{ $chat->message }}
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                            @endforeach
                            <!-- /.direct-chat-msg -->
                        </div>
                        <!--/.direct-chat-messages-->
                    </div>
                    <!-- /.card-body -->
                    @if($userSender->id == $roomSelected->user_id )
                        <div class="card-footer"  x-data="{open: @entangle('sending')}">
                            {{-- <form action="#" method="post"> --}}
                                <div class="input-group" >
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" wire:model="message" wire:keydown.enter="sendMessage" autocomplete="off">
                                    <span class="input-group-append" >
                                        <button  class="btn btn-primary" wire:click="sendMessage"   x-on:click="$wire.set('sending', true)">Send</button>
                                    </span>
                                </div>
                                @if ($sending)
                                    <span class="text-gray" ><small>Sending...</small></span>
                                @endif
                            {{-- </form> --}}
                        </div>
                    @elseif($roomSelected->users()->where('id',$userSender->id)->count() > 0)
                        <div class="card-footer"  x-data="{open: @entangle('sending')}">
                            {{-- <form action="#" method="post"> --}}
                                <div class="input-group" >
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" wire:model="message" wire:keydown.enter="sendMessage" autocomplete="off">
                                    <span class="input-group-append" >
                                        <button  class="btn btn-primary" wire:click="sendMessage"   x-on:click="$wire.set('sending', true)">Send</button>
                                    </span>
                                </div>
                                @if ($sending)
                                    <span class="text-gray" ><small>Sending...</small></span>
                                @endif
                            {{-- </form> --}}
                        </div>
                    @else
                        <div class="card-footer">
                            <span class="text-gray" ><small>You are not allowed to send message in this room</small></span>
                        </div>
                    @endif
                    <!-- /.card-footer-->
                @else
                    <div class="card-header">
                        <h3 class="card-title">Select a Room for start conversation </h3>
                    </div>
                    <div class="card-body direct-chat-messages px-4" id="messageBody">
                        <!-- Conversations are loaded here -->
                        <div style="height:72vh" class="body-chat" >
                        </div>
                    </div>  
                    <div class="card-footer"  x-data="{open: @entangle('sending')}">
                        
                    </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const objDiv = document.getElementById("messageBody");
            objDiv.scrollTop = objDiv.scrollHeight;
            Livewire.on('reload', () => {
                objDiv.scrollTop = objDiv.scrollHeight;
            });
        </script>
    @endpush
</div>