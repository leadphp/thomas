<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Mail\Contact;
use App\contact_form;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	

    public function Contact(Request $request)
    {
         $this->validate($request,[
                    'name' => 'required',
                    'email' => 'required',
                    'subject' => 'required',
                    'message' => 'required',
                    
                    
             ]);
        
    	$name = $request->name;
    	$email = $request->email;
    	$subject = $request->subject;
    	$message = $request->message;
    	
    	$contact_form = new contact_form;
    	$contact_form->name = $request->name;
    	$contact_form->email = $request->email;
    	$contact_form->subject = $request->subject;
    	$contact_form->message = $request->message;
        $contact_form->save();
    	
        Mail::to('csc@csc-inc.ca')->send(new Contact($name,$email,$subject,$message));
        Session::flash('contact', 'Mail has been successfully send');
            return redirect()->back(); 
    }





}
