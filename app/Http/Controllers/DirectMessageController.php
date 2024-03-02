<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Group;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DirectMessageController extends Controller
{

    public function index()
    {
        $groups = Group::all();
        return Inertia::render('Core/Messenger/Index', [
            'groups' => $groups,
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
        $message = $user->messages()->create([
            'message' => $request->message
        ]);

    }
}
