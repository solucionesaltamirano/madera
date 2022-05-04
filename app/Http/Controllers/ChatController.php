<?php

namespace App\Http\Controllers;

use App\DataTables\ChatDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateChatRequest;
use App\Http\Requests\UpdateChatRequest;
use App\Models\Chat;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ChatController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:chats.index')->only(['index', 'show']);
        $this->middleware('can:chats.create')->only(['create', 'store']);
        $this->middleware('can:chats.edit')->only(['edit', 'update']);
        $this->middleware('can:chats.destroy')->only('destroy');
    }
    /**
     * Display a listing of the Chat.
     *
     * @param ChatDataTable $chatDataTable
     * @return Response
     */
    public function index(ChatDataTable $chatDataTable)
    {
        return $chatDataTable->render('admin.chats.index');
    }

    /**
     * Show the form for creating a new Chat.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.chats.create');
    }

    /**
     * Store a newly created Chat in storage.
     *
     * @param CreateChatRequest $request
     *
     * @return Response
     */
    public function store(CreateChatRequest $request)
    {
        $input = $request->all();

        /** @var Chat $chat */
        $chat = Chat::create($input);

        Flash::success('Chat saved successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Display the specified Chat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        return view('admin.chats.show')->with('chat', $chat);
    }

    /**
     * Show the form for editing the specified Chat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        return view('admin.chats.edit')->with('chat', $chat);
    }

    /**
     * Update the specified Chat in storage.
     *
     * @param  int              $id
     * @param UpdateChatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChatRequest $request)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        $chat->fill($request->all());
        $chat->save();

        Flash::success('Chat updated successfully.');

        return redirect(route('chats.index'));
    }

    /**
     * Remove the specified Chat from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Chat $chat */
        $chat = Chat::find($id);

        if (empty($chat)) {
            Flash::error('Chat not found');

            return redirect(route('chats.index'));
        }

        $chat->delete();

        Flash::success('Chat deleted successfully.');

        return redirect(route('chats.index'));
    }
}
