<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\request as requests;

class RequestController extends Controller
{
    public function index()
    {
    	$requests = DB::table('requests')->get();
    	$qst2_value = explode(",",$requests[0]->qst2_value);
    	$surface_value = explode(",",$requests[0]->surface_value);
    	$wet_value = explode(",",$requests[0]->wet_value);
    		
    		
    	return view('admin.request.request',compact('requests','qst2_value','surface_value','wet_value'));
    	
    }

    public function request_save(Request $request)
    {
    	$requests = new requests;
    	$q2_value = implode(",",$request->q2name);
    	$wet_value = implode(",",$request->wet_value);
    	$surface_value = implode(",",$request->surface_value);

    	$requests->fname = $request->fname;
    	$requests->lname = $request->lname;
    	$requests->email = $request->email;
    	$requests->phone = $request->phone;
    	$requests->company = $request->company;


    	$requests->question1 = $request->question1;
    	$requests->question2 = $request->question2;
    	$requests->question3 = $request->question3;
    	$requests->question4 = $request->question4;
    	$requests->question5 = $request->question5;
    	$requests->question6 = $request->question6;

    	$requests->qst2_value = $q2_value;
    	$requests->wet_value = $wet_value;
    	$requests->surface_value = $surface_value;

    	$requests->save(); 
    	
  		return redirect()->route('request');

    }

    public function request_edit()
    {
    	$requests = DB::table('requests')->get();
    	$qst2_value = explode(",",$requests[0]->qst2_value);
    	$surface_value = explode(",",$requests[0]->surface_value);
    	$wet_value = explode(",",$requests[0]->wet_value);
    		
    		
    	return view('admin.request.request_edit',compact('requests','qst2_value','surface_value','wet_value'));
    	
    }

    public function request_update(Request $request)
    {
    	  $this->validate($request,[
                    'fname' => 'required|max:255',
                    'lname' => 'required|max:255',
                    'email' => 'required|max:255',
                    'phone' => 'required|max:255',
                    'company' => 'required|max:255',
                    'question1' => 'required|max:255',
                    'question2' => 'required|max:255',
                    'question3' => 'required|max:255',
                    'question4' => 'required|max:255',
                    'question5' => 'required|max:255',
                    'question6' => 'required|max:255',
                    
             ]);
          
    	$qst2_value = implode(",",$request->q2name);
    	$wet_value = implode(",",$request->wet_value);
    	$surface_value = implode(",",$request->surface_value);

    	requests::where('id', $request->id)->update([ 'fname'=>$request->fname , 'lname'=>$request->lname,'email'=>$request->email,'phone'=>$request->phone,'company'=>$request->company,'question1'=>$request->question1,'question2'=>$request->question2,'question3'=>$request->question3,'question4'=>$request->question4,'question5'=>$request->question5,'question6'=>$request->question6,'qst2_value'=>$qst2_value,'wet_value'=>$wet_value , 'surface_value'=>$surface_value  ]);


        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('request');
    }
}
