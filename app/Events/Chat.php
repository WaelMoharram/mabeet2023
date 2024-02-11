<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Chat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $text;
    public $sender_id;
    public $time;
    public $offer_id;
    public function __construct($text, $sender_id, $time, $offer_id)
    {
        $this->text = $text;
        $this->sender_id = $sender_id;
        $this->time = $time;
        $this->offer_id = $offer_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [$this->offer_id];
    }
    public function broadcastAs()
    {
        return 'chat';
    }
}
