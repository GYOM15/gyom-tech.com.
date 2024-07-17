<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;

class ContactRequestEvent
{
    use Dispatchable, SerializesModels;

    private $message;

    /**
     * Create a new event instance.
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the message instance.
     *
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }
}

