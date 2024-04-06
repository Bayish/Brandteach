<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('chat-group.{chatGroupId}', function ($user, $chatGroupId) {
    return auth()->check();
});


Broadcast::channel('direct-message.{chatDirectId}', function ($user, $chatDirectId) {
    return auth()->check();
});
