<?php

namespace App\Mail;

use Illuminate\Mail\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    private $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Contact Us')
                    ->from('your@gmail.com', 'Welcome')
                    ->replyTo($this->data['email']);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return (new Content())->with(['data' => $this->data])->markdown('emails.contact');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
