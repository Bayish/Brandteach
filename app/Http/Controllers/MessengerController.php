<?php

namespace App\Http\Controllers;

use App\Events\ChatGroupMessageSent;
use App\Events\MessageSent;
use App\Models\ChatGroup;
use App\Models\ChatGroupMessage;
use App\Models\Group;
use App\Models\Message;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MessengerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $chatGroups = ChatGroup::whereHas('members', function ($query) use ($user) {
            $query->where('member_id', $user->id);
        })->get();
        return Inertia::render('Core/Messenger/Index', [
            'chatGroups' => $chatGroups,
            'user' => $user
        ]);
    }

    function message(Group $groupId)
    {
        $message = Message::with('user')->get();
        return Inertia::render('Core/Chat/GroupChat', [
            'messages' => $message,
            'user' => auth()->user(),
            'group' => $groupId
        ]);
    }
    function store(Request $request)
    {
        $user = auth()->user();
        $chatGroupMessage = ChatGroupMessage::create([
            'content' => $request["content"],
            'sender_id' => $user->id,
            'chat_group_id' => $request['chat_group_id'],
            'type' => 'text',
        ]);

        broadcast(new MessageSent($user, $chatGroupMessage))->toOthers();
    }
}
