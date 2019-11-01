<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Tactile extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$lname,$email,$phone,$company_name,$put,$material,$type,$att_domes,$area,$shipped,$additional)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->put = $put;
        $this->material = $material;
        $this->type = $type;
        $this->att_domes = $att_domes;
        $this->area = $area;
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
                     ->view('email.tactile')
                     ->with([
                        'name' => $this->name,
                        'lname' => $this->lname,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'company_name' => $this->company_name,
                        'put' => $this->put,
                        'material' => $this->material,
                        'att_domes' => $this->att_domes,
                        'type' => $this->type,
                        'area' => $this->area,
                        'shipped' => $this->shipped,
                        'additional' => $this->additional,
                        

                    ]);
    }
}
