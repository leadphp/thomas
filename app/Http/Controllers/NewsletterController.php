<?php

namespace App\Http\Controllers;


use App\newsletter;
use DB;   
use Session;
use Illuminate\Http\Request;  
use App\Mail\Cstmletter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Redirect;


use App\Mail\test;


class NewsletterController extends Controller
{
    public  function newsletter()
    {
    	$newsletters = DB::table('newsletters')->get();

        return view('admin.newsletter.newsletter',compact('newsletters'));

    }
    public function newsletter_email(Request $request)
    {
    	$id = $request->mail;
    	return view('admin.newsletter.send_mail',compact('id'));
    	
    }
    public function send_mail(Request $request)
    {
    	$ids = explode(",",$request->id);
    	foreach($ids as $id)
    	{
    		
    		$info = DB::table('newsletters')->where('id',$id)->first();
    		
    		Mail::to($info->email)->send(new Cstmletter($request->description,$info->email));

    	}
            return redirect()->route('anewsletter');
    }
}
