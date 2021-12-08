<?php

namespace App\Http\Controllers;

use App\DataTables\ChatRoomDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateChatRoomRequest;
use App\Http\Requests\UpdateChatRoomRequest;
use App\Models\ChatRoom;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\User;
use Response;
use stdClass;

class ChatRoomController extends AppBaseController
{
    public function __construct(){
        // $this->middleware('can:chatRooms.show')->only(['index', 'show']);
        // $this->middleware('can:chatRooms.create')->only(['create', 'store']);
        // $this->middleware('can:chatRooms.edit')->only(['edit', 'update']);
        // $this->middleware('can:chatRooms.destroy')->only('destroy');
    }
    /**
     * Display a listing of the ChatRoom.
     *
     * @param ChatRoomDataTable $chatRoomDataTable
     * @return Response
     */
    public function index(ChatRoomDataTable $chatRoomDataTable)
    {
        return $chatRoomDataTable->render('admin.chat_rooms.index');
    }

    /**
     * Show the form for creating a new ChatRoom.
     *
     * @return Response
     */
    public function create()
    {

        return view('admin.chat_rooms.create');
    }

    /**
     * Store a newly created ChatRoom in storage.
     *
     * @param CreateChatRoomRequest $request
     *
     * @return Response
     */
    public function store(CreateChatRoomRequest $request)
    {
        $input = $request->all();


        /** @var ChatRoom $chatRoom */
        $chatRoom = ChatRoom::create($input);

        $chatRoom->users()->sync($request->users);

        Flash::success('Chat Room saved successfully.');

        return redirect(route('auth.chat-room'));
    }

    /**
     * Display the specified ChatRoom.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ChatRoom $chatRoom */
        $chatRoom = ChatRoom::find($id);

        if (empty($chatRoom)) {
            Flash::error('Chat Room not found');

            return redirect(route('chatRooms.index'));
        }

        return view('admin.chat_rooms.show',[
            'chatRoom' => $chatRoom,
        ]);
    }

    /**
     * Show the form for editing the specified ChatRoom.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ChatRoom $chatRoom */
        $chatRoom = ChatRoom::find($id);

        $users = $chatRoom->users;

        if (empty($chatRoom)) {
            Flash::error('Chat Room not found');

            return redirect(route('chatRooms.index'));
        }

        return view('admin.chat_rooms.edit',[
            'chatRoom'=> $chatRoom,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified ChatRoom in storage.
     *
     * @param  int              $id
     * @param UpdateChatRoomRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChatRoomRequest $request)
    {
        /** @var ChatRoom $chatRoom */
        $chatRoom = ChatRoom::find($id);


        if (empty($chatRoom)) {
            Flash::error('Chat Room not found');

            return redirect(route('chatRooms.index'));
        }

        $chatRoom->fill($request->all());
        $chatRoom->save();

        $chatRoom->users()->sync($request->users);

        Flash::success('Chat Room updated successfully.');

        return redirect(route('chatRooms.index'));
    }

    /**
     * Remove the specified ChatRoom from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ChatRoom $chatRoom */
        $chatRoom = ChatRoom::find($id);

        if (empty($chatRoom)) {
            Flash::error('Chat Room not found');

            return redirect(route('chatRooms.index'));
        }

        $chatRoom->delete();

        Flash::success('Chat Room deleted successfully.');

        return redirect(route('chatRooms.index'));
    }
}
