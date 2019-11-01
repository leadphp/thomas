<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Stair extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($name,$lname,$email,$phone,$company_name,$stair_put,$photoluminescent,$stair_width,$shipped,$additional)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->stair_put = $stair_put;
        $this->photoluminescent = $photoluminescent;
        $this->stair_width = $stair_width;
        $this->shipped = $shipped;
        $this->additional = $additional;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from($this->email)
                     ->view('email.stair')
                     ->with([
                        'name' => $this->name,
                        'lname' => $this->lname,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'company_name' => $this->company_name,
                        'stair_put' => $this->stair_put,
                        'photoluminescent' => $this->photoluminescent,
                        'stair_width' => $this->stair_width,
                        'shipped' => $this->shipped,
                        'additional' => $this->additional,
                        

                    ]);
    }
}
