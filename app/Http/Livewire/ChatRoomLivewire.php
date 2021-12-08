<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\ChatRoom;
use App\Models\User;
use Livewire\Component;

class ChatRoomLivewire extends Component
{
    public $userSender;
    public $roomSelected ;
    public $message;
    public $searchRoom;
    public $sending;
    public $filterRoom;

    public function mount()
    {
        $this->userSender = auth()->user();
    }

    public function room_select(ChatRoom $roomReceived)
    {
        $this->roomSelected = $roomReceived;
    }

    public function filter($filter)
    {
        $this->filterRoom = $filter;
    }

    public function sendMessage()
    {
        $this->sending = true;
        $this->validate([
            'message' => 'required',
        ]);

        $chat = new Chat();
        $chat->user_send_id = $this->userSender->id;
        $chat->chat_room_id = $this->roomSelected->id;
        $chat->message = $this->message;
        $chat->save();

        $this->message = '';

        $this->render();

    }

    public function render()
    {
        $this->sending = false;
        $this->emit('reload');
        
        $rooms = ChatRoom::where('name', 'LIKE', '%'.$this->searchRoom.'%')
        ->where('private', 0)
        ->orWhereHas('users', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })
        ->orWhere('user_id', $this->userSender->id)
        ->get();

        if($this->filterRoom == 1){
            $rooms = ChatRoom::where('name', 'LIKE', '%'.$this->searchRoom.'%')
            ->where('private', 0)
            ->orWhereHas('users', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })
            ->orWhere('user_id', $this->userSender->id)
            ->get();
        }

        if($this->filterRoom == 2){
            $rooms = $this->userSender->myChatRooms()->where('name', 'LIKE', '%'.$this->searchRoom.'%')->get();
        }

        if($this->filterRoom == 3){
            $rooms = $this->userSender->chatRooms()->where('name', 'LIKE', '%'.$this->searchRoom.'%')->get();
        }

        if($this->roomSelected){
            $chatSends = Chat::where('chat_room_id', $this->roomSelected->id)->pluck('id')->toArray();
            $roomSelectedId = $this->roomSelected->id;
        }else{
            $chatSends = [];
            $roomSelectedId = 0;
        }

        $chatSelected = Chat::whereIn('id', $chatSends)
        ->with('userSend')
        ->orderBy('created_at', 'asc')
        ->get();


        return view('livewire.chat-room-livewire',[
            'rooms' => $rooms,
            'chatSelected' => $chatSelected,
            'roomSelectedId' => $roomSelectedId,
        ]);
    }
}
