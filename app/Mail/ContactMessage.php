<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $senderName;
    protected $senderAddress;
    protected $senderMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $sender, $message)
    {
        $this->senderName = $name;
        $this->senderAddress = $sender;
        $this->senderMessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Contact Form Message ($this->senderAddress)";

        return $this
            ->from('contact@matthewmincher.dev')
            ->replyTo($this->senderAddress)
            ->subject($subject)
            ->view('emails.contact.message')
            ->with([
                'subject' => $subject,
                'senderName' => $this->senderName,
                'senderAddress' => $this->senderAddress,
                'senderMessage' => $this->senderMessage
            ]);
    }
}
