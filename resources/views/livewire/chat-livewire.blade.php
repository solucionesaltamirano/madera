<div class="">
    <div class="row">
        <div class="col-3">
            <!-- Contacts are loaded here -->
            <div style="height:90vh"  class="card card-success card-outline direct-chat direct-chat-success ">
                <div class="card-header">
                    <h3 class="card-title"> Contacts</h3>
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Search Contacts" class="form-control" wire:model="serchUser">
                        
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="contacts-list">
                        @if($userReceivers->count() > 0 )
                            @foreach ($userReceivers as $userReceiver)
                                <li class="btn text-left w-100 {{ $userReceiver->id == $userReceiverSelectedId ? 'bg-primary' : '' }} " wire:click.prevent="receiverSelected({{ $userReceiver->id }}) ">
                                    <a href=""   class="">
                                        <div class=""> 
                                            <img class="contacts-list-img mr-2" src="{{ $userReceiver->profile_photo_path ?? $userReceiver->profile_photo_url  }}" alt="User Avatar">
                                        <!-- /.contacts-list-info -->
                                            <span class=""> {{ $userReceiver->name }}</span> 
                                        </div>
                                    </a>
                                    {{-- <small class="">
                                        {!! $userReceiver->chatReceives->sortBy('create_at')->where('user_send_id', $userSender->id)->first() ?
                                            '<i class="fal fa-paper-plane"></i> ' . 
                                            $userReceiver->chatReceives->sortBy('create_at')->where('user_send_id', $userSender->id)->first()->message : 
                                            '<i class="fal fa-envelope-open-text"></i> ' . 
                                            $userReceiver->chatSends->sortBy('create_at')->where('user_send_id', $userSender->id)->first()->message 
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
        <div class="col-9">
            <div style="height:90vh"  class="card card-primary card-outline direct-chat direct-chat-primary ">
                @if($chatSelected->count() > 0)
                    <div class="card-header">
                        <h3 class="card-title">Direct Chat whit <b>{{ $userReceiverSelected->name }}</b></h3>
            
                        {{-- <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-primary">3</span>
                            
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            
                        </div> --}}
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
                    <div class="card-footer"  x-data="{open: @entangle('sending')}">
                        {{-- <form action="#" method="post"> --}}
                            <div class="input-group" >
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control" wire:model.defer="message" wire:keydown.enter="sendMessage">
                                <span class="input-group-append" >
                                    <button  class="btn btn-primary" wire:click="sendMessage"   x-on:click="$wire.set('sending', true)">Send</button>
                                </span>
                            </div>
                            @if ($sending)
                                <span class="text-gray" ><small>Sending...</small></span>
                            @endif
                        {{-- </form> --}}
                    </div>
                    <!-- /.card-footer-->
                @else
                    <div class="card-header">
                        <h3 class="card-title">Select a User for start conversation </h3>
                    </div>
                    <div class="card-body direct-chat-messages px-4" id="messageBody">
                        <!-- Conversations are loaded here -->
                        <div style="height:72vh" class="body-chat" >
                        </div>
                    </div>
                    
                    @if($userReceiverSelected)
                        <div class="card-footer"  x-data="{open: @entangle('sending')}">
                            {{-- <form action="#" method="post"> --}}
                                <div class="input-group" >
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" wire:model="message" wire:keydown.enter="sendMessage">
                                    <span class="input-group-append" >
                                        <button  class="btn btn-primary" wire:click="sendMessage"   x-on:click="$wire.set('sending', true)">Send</button>
                                    </span>
                                </div>
                                @if ($sending)
                                    <span class="text-gray" ><small>Sending...</small></span>
                                @endif
                            {{-- </form> --}}
                        </div>
                    @endif

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
