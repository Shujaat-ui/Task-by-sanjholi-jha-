<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class userNotice extends Mailable
{
    use Queueable, SerializesModels;
    //public($data)

     public function __construct()
    {
        $this->data = $data;
    }

   public function build(){
        return $this->subject('New form is added succesfully')
                    ->view('admin_mail')
                    ->with('data' , $this->data);
    }
}
