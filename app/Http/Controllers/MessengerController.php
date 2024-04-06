<?php

namespace App\Http\Controllers;

use App\Events\ChatGroupMessageSent;
use App\Events\DirectMessageSent;
use App\Models\ChatDirect;
use App\Models\ChatDirectMessage;
use App\Models\ChatGroup;
use App\Models\ChatGroupMessage;
use App\Models\ChatGroupMessageStatus;
use App\Models\DirectMessage;
use App\Models\Group;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MessengerController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $directs = ChatDirect::where(function ($query) use ($user) {
            $query->where('first_member_id', $user->id)
                ->orWhere('second_member_id', $user->id);
        })->get();

        $chatGroups = ChatGroup::whereHas('members', function ($query) use ($user) {
            $query->where('member_id', $user->id);
        })->get();

        return Inertia::render('Core/Messenger/Index', [
            'chatGroups' => $chatGroups,
            'directs' => $directs,
            'user' => $user
        ]);
    }

    function store(Request $request)
    {
        $user = auth()->user();
        if($request->type === 'group'){
            $chatGroupMessage = ChatGroupMessage::create([
                'content' => $request["content"],
                'sender_id' => $user->id,
                'chat_group_id' => $request['chat_id'],
                'type' => 'text',
            ]);

            $chatGroup = ChatGroup::find($request['chat_id']);
            foreach ($chatGroup->members as $member){
                ChatGroupMessageStatus::create([
                    'chat_group_message_id' => $chatGroupMessage->id,
                    'member_id' =>$member->id,
                    'viewed' => false
                ]);
            }

            broadcast(new ChatGroupMessageSent($chatGroupMessage))->toOthers();
        }else {
            $direct = ChatDirect::find($request['chat_id']);
            if ($direct) {
                $chatDirectMessage = ChatDirectMessage::create([
                    'chat_direct_id' => $request['chat_id'],
                    'sender_id' => $user->id,
                    'content' => $request["content"],
                    'type' => 'text',
                    'viewed' => false
                ]);

            } else {
                $chatDirect = ChatDirect::create([
                    'first_member_id' => $user->id,
                    'second_member_id' => $request['second_member_id'],
                ]);

                $chatDirectMessage = ChatDirectMessage::create([
                    'chat_direct_id' => $chatDirect->id,
                    'sender_id' => $user->id,
                    'content' => 'test test',
                    'type' => 'text',
                    'viewed' => false
                ]);

            }
            broadcast(new DirectMessageSent($chatDirectMessage))->toOthers();
        }
    }
}
