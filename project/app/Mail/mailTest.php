<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailTest extends Mailable
{
    use Queueable, SerializesModels;

    public $text;
    public function __construct($text)
    {
        $this -> text = $text;
    }

  
    public function build()
    {
        return $this
            -> from('mario.rossi@alice.it') 
            -> view('body-email');
    }
}
