<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class RoomChatLivewire extends Component
{
    public $userSender;
    public $userReceiverSelected ;
    public $message;
    public $serchUser;
    public $sending;

    public function mount()
    {
        $this->userSender = auth()->user();
    }

    public function receiverSelected(User $userReceiver)
    {
        $this->userReceiverSelected = $userReceiver;
    }

    public function sendMessage()
    {
        $this->sending = true;
        $this->validate([
            'message' => 'required',
        ]);

        $chat = new Chat();
        $chat->user_send_id = $this->userSender->id;
        $chat->user_receive_id = $this->userReceiverSelected->id;
        $chat->message = $this->message;
        $chat->save();

        $this->message = '';

        $this->render();

    }

    public function render()
    {
        $this->sending = false;
        $this->emit('reload');
        $chats = Chat::where('user_send_id', $this->userSender->id)
        ->get();

        if($this->serchUser == null){
            $userReceivers = User::whereIn('id', $chats->pluck('user_receive_id'))->get();
        }else{
            $userReceivers = User::where('name', 'like', '%'.$this->serchUser.'%')
            ->where('id', '!=',$this->userSender->id)
            ->get();
        }

        if($this->userReceiverSelected){
            $chatSends = $chats->where('user_receive_id', $this->userReceiverSelected->id)->pluck('id')->toArray();
            $chatReceives = Chat::where('user_send_id', $this->userReceiverSelected->id)->where('user_receive_id', $this->userSender->id)->get()->pluck('id')->toArray();
            $userReceiverSelectedId = $this->userReceiverSelected->id;
        }else{
            $chatSends = [];
            $chatReceives = [];
            $userReceiverSelectedId = 0;
        }


        $chatmerge = array_merge($chatSends, $chatReceives);

        $chatSelected = Chat::whereIn('id', $chatmerge)
        ->with('userSend')
        ->orderBy('created_at', 'asc')
        ->get();


        return view('livewire.room-chat-livewire',[
            'userReceivers' => $userReceivers,
            'chatSelected' => $chatSelected,
            'userReceiverSelectedId' => $userReceiverSelectedId,
        ]);
    }
}
