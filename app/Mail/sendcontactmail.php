<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendcontactmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $content;
    
    public function __construct($subject,$content)
    {
        $this->subject = $subject;
        $this->content = $content;
    }
    public function build()
    {
        return $this->markdown('emails.sendcontactmail')->from("")->subject($this->subject)->with('body',$this->content);
    }
    public function attachments()
    {
        return [];
    }
}
