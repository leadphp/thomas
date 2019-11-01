<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Quote_exit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$lname,$email,$phone,$company_name,$shipped,$additional,$exit_put,$mountain_kit,$direction,$need)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->shipped = $shipped;
        $this->additional = $additional;
        
        $this->exit_put = $exit_put;
        $this->mountain_kit = $mountain_kit;
        $this->direction = $direction;
        $this->need = $need;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from($this->email)
                     ->view('email.quote_exit')
                     ->with([
                        'name' => $this->name,
                        'lname' => $this->lname,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'company_name' => $this->company_name,
                        'shipped' => $this->shipped,
                        'additional' => $this->additional,
                        'exit_put' => $this->exit_put,
                        'mountain_kit' => $this->mountain_kit,
                        'direction' => $this->direction,
                        'need' => $this->need,
                        

                    ]);
    }
}
