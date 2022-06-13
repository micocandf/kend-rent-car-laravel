<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PesananSetuju extends Mailable
{
    use Queueable, SerializesModels;

    // public $details;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->details = $details;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.pesanansetuju');
        // return $this->subject('Pemesanan Mobil')
        //             ->view('email.myTestMail');
    }
}