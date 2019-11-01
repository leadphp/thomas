<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order_Confirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf_path,$cartCollection,$email)
    {
        $this->pdf_path = $pdf_path;
        $this->cartCollection = $cartCollection;
        $this->email = $email;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('csc@csc-inc.ca')
                     ->attach($this->pdf_path)
                     ->view('email.invoice')
                     ->with([
                        
                        'cartcollection' => $this->cartCollection,
                        'email' =>$this->email
                        
                    ]);
    }
}

