<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DirectGroupMessageStatusUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Information about the shipping status update.
     *
     * @var string
     */
    public $message;
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\PrivateChannel
     */
    public function broadcastOn(): array
    {
        return new PrivateChannel('direct-message.'.$this->message->directMessageStatus->id);
    }
}
