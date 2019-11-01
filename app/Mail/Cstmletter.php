<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Cstmletter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($description,$email)
    {
        $this->description = $description;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('newdeftsoft@gmail.com')
                     ->view('email.newsletter')
                     ->with([
                        'description' => $this->description,
                        'email' => $this->email,
                        

                    ]);
    }
}
