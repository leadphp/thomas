<?php

namespace App\Http\Controllers;


use App\home_banner;
use App\how_it_work;
use App\social;
use App\benefit;
use App\code;
use DB;   //to connnect database
use Session;
use Illuminate\Http\Request;  //custom laravel validation
use Response;
use Illuminate\Support\Facades\Validator;
use Redirect;


use App\Mail\test;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{


	

    public function test()
    {
        $email = 'newdeftsoft@gmail.com';
        Mail::to('gautamg64@gmail.com')->send(new test($email));
    }

    public function banner_add()
    {
    	return view('admin.home.banner_add');
    }

    public function banner()
    {

        $banner_homes = DB::table('home_banners')->simplePaginate(5);

        return view('admin.home.banner',compact('banner_homes'));

    		
    }



    public function banner_save(Request $request)
    {

         $this->validate($request,[
                    'image' => 'required',
                    'image_alt' => 'required|max:150',
                    'line_1' => 'required|max:150',
                    'line_2' => 'required|max:150',
                    'line_3' => 'required|max:150',
                    'button' => 'required|max:150',
                    'button_href' => 'required|max:150',
                    
             ]);

        $home_banner = new home_banner;


        
        
        $banner_img= time();
        $banner_ext = $request->image->getClientOriginalExtension();
        $home_banner->image = $banner_img.".".$banner_ext;
        $request->image->move(public_path('images/front/home/banner'),$home_banner->image);



        $home_banner->image_alt = $request->image_alt;
        
        $home_banner->line_1 = $request->line_1;
        $home_banner->line_2 = $request->line_2;
        $home_banner->line_3 = $request->line_3;
        $home_banner->button = $request->button;
        $home_banner->button_href = $request->button_href;
        
        $home_banner->save();

            Session::flash('Success', 'Record Successfully saved');
            return redirect()->route('banner');
    }



    public function banner_view($id)
    {
        
        $home_banner_view= home_banner::find($id);

        return view('admin.home.banner_view',compact('home_banner_view'));

            
    }

    public function banner_edit($id)
    {

        $home_banner_edit= home_banner::find($id);
        return view('admin.home.banner_edit',compact('home_banner_edit'));
            
    }

    public function banner_update(Request $request)
    {
        $unlink_image = home_banner::where('id', $request->id)->get();
        
        $this->validate($request,[
                    
                    'image_alt' => 'required|max:150',
                    'line_1' => 'required|max:150',
                    'line_2' => 'required|max:150',
                    'line_3' => 'required|max:150',
                    'button' => 'required|max:150',
                    'button_href' => 'required|max:150',
                    
             ]);

        if (empty($request->image))
        {
            $image = $request->old_image;
            
        }
        else
        {
            
            $banner_img= time();
            $banner_ext = $request->image->getClientOriginalExtension();
            $image = $banner_img.".".$banner_ext;
            $request->image->move(public_path('images/front/home/banner'),$image);

            $image_path = public_path("images/front/home/banner/".$unlink_image[0]->image);   
            unlink($image_path);
        }

        home_banner::where('id', $request->id)->update([ 'image'=>$image , 'image_alt'=>$request->image_alt,'line_1'=>$request->line_1,'line_2'=>$request->line_2 , 'line_3'=>$request->line_3 , 'button'=>$request->button , 'button_href'=>$request->button_href ]);
        
        Session::flash('update', 'Record Updated Successfully');

        return redirect()->route('banner');
              
    }

    public function banner_delete($id)
    {

        $unlink_image = home_banner::where('id', $id)->get();
        $image_path = public_path("images/front/home/banner/".$unlink_image[0]->image);   
        unlink($image_path);

        DB::table('home_banners')->where('id', $id)->delete();
        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->back(); 
    }


    public function how_it_works(Request $request)
    {
         $how_it_works = DB::table('how_it_works')->paginate('10');
         return view('admin/how_it_works/how_it_works',compact('how_it_works'));
        
    }

    public function how_it_works_add(Request $request)
    {
        return view('admin/how_it_works/how_it_works_add');        
    }

    public function how_it_works_save(Request $request)
    {
        $how_it_work = new how_it_work;
        $how_it_work->content = $request->content;        
        $how_it_work->save();  
        Session::flash('Success', 'Record Successfully saved');
            return redirect()->back();      
    }

    public function how_it_works_edit($id)
    {

        $how_it_work_edit= how_it_work::find($id);
        return view('admin/how_it_works/how_it_works_edit',compact('how_it_work_edit'));
    }

    public function how_it_works_update(Request $request)
    {
        $this->validate($request,[
                  
            'content' => 'required|max:255',
           ]);

        how_it_work::where('id', $request->id)->update(['content'=>$request->content ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('how-it-works');
        //return redirect()->back();
      
    }

    public function how_it_works_view($id)
    {
       $how_it_works_view= how_it_work::find($id);

        return view('admin/how_it_works/how_it_works_view',compact('how_it_works_view'));
      
    }

    public function logo()
    {
         return view('admin.logo.logo');
    }

    public function logo_change(Request $request)
    {
        $this->validate($request,[
                  
            'logo' => 'required',
           ]);

        $image_path = public_path("images/admin/logo.png");   
        unlink($image_path);
        
          $request->logo->move(public_path('images/admin'),'logo.png');
          Session::flash('Success', 'Record Successfully saved');
            return redirect()->back();
    }

    public function social()
    {
        $social_view = DB::table('socials')->get();
        return view('admin.footer.social_view',compact('social_view'));
        
    }

    public function social_edit()
    {
        $social_edit = DB::table('socials')->get();        
        return view('admin.footer.social_edit',compact('social_edit'));        
    }

    public function social_update(Request $request)
    {
            $this->validate($request,[
                  
            'facebook' => 'required|max:255',
            'twitter' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'youtube' => 'required|max:255',
           ]);


        social::where('id', $request->id)->update(['facebook'=>$request->facebook ,'twitter'=>$request->twitter,'linkedin'=>$request->linkedin,'youtube'=>$request->youtube ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('social');
    }


    public function copy_right()
    {


        return view('admin.footer.copyright');
    }



    public function benefits()
    {
        $benefits = DB::table('benefits')->paginate('10');
         return view('admin/benefits/benefits',compact('benefits'));
    }

    public function benefits_edit($id)
    {

        $benefit = benefit::find($id);

        return view('admin/benefits/benefits_edit',compact('benefit'));
    }
    public function benefits_update(Request $request)
    {
      benefit::where('id', $request->id)->update(['title'=>$request->title ,'description'=>$request->description ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('benefits');
    }
    public function benefits_view($id)
    {
        $benefit= benefit::find($id);

        return view('admin/benefits/benefits_view',compact('benefit'));
    }



    public function codes()
    {
        $codes = DB::table('codes')->paginate('10');
         return view('admin/codes/codes',compact('codes'));
    }

    public function code_add()
    {
        return view('admin.codes.code_add');
    }

    public function code_save(Request $request)
    {
        $code = new code;
        $code->title = $request->title;
        $code->leaf = $request->leaf;
        $code->type = $request->region;
        $code->name_1 = $request->name_1;
        $code->href_1 = $request->href_1;
        $code->name_2 = $request->name_2;
        $code->href_2 = $request->href_2;
        $code->name_3 = $request->name_3;
        $code->href_3 = $request->href_3;   
        $code->rate_type = $request->rate_type;
        $code->provincial_rate = $request->provincial_rate;
        $code->canada_rate = $request->canada_rate;   
        $code->save();  

        Session::flash('Success', 'Record Successfully saved');
        return redirect()->route('acodes');
    }

    public function code_edit($id)
    {

        $code = code::find($id);

        return view('admin/codes/code_edit',compact('code'));
    }

    public function code_update(Request $request)
    {
        code::where('id', $request->id)->update(['title'=>$request->title ,'leaf'=>$request->leaf,'type'=>$request->region,'name_1'=>$request->name_1, 'href_1'=>$request->href_1 , 'name_2'=>$request->name_2, 'href_2'=>$request->href_2 , 'name_3'=>$request->name_3, 'href_3'=>$request->href_3,'rate_type'=>$request->rate_type,'provincial_rate'=>$request->provincial_rate,'canada_rate'=>$request->canada_rate]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('acodes');
        
    }

    public function code_view($id)
    {
         $code = code::find($id);

        return view('admin/codes/code_view',compact('code'));
    }

    public function code_delete($id)
    {
        DB::table('codes')->where('id', $id)->delete();
        Session::flash('delete', 'Record Deleted Successfully');
       return redirect()->route('acodes'); 
    }
    

    public function quote()
    {
        $quotes = DB::table('quotes')->get();
        return view('admin/quote/quote',compact('quotes'));
    }
    
    public function quote_csv()
    {
          $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=quotes.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $quotes = DB::table('quotes')->get();
    $columns = array('Id','Name','Last Name','Email','Phone','Company Name','Put it into ','Material','Type','Attention Domes or Wayfinding Bars','Area','Shipped','Additional');

    $callback = function() use ($quotes, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($quotes as $quote) {
            fputcsv($file, array($quote->id,$quote->name,$quote->lname,$quote->email,$quote->phone,$quote->company_name,$quote->put,$quote->material,$quote->type,$quote->att_domes,$quote->area,$quote->shipped,$quote->additional));
        }
        fclose($file);
    };
    return Response::stream($callback, 200, $headers);
    }
    
    public function contact_form()
    {
        $contact_forms = DB::table('contact_forms')->get();
        return view('admin/contact_form/contact_form',compact('contact_forms'));
    }
   
    public function contact_form_csv()
{
          $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=contact_forms.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $contact_forms = DB::table('contact_forms')->get();
    $columns = array('Id','Name','Email','Subject','Message');

    $callback = function() use ($contact_forms, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($contact_forms as $contact_form) {
            fputcsv($file, array($contact_form->id,$contact_form->name,$contact_form->email,$contact_form->subject,$contact_form->message));
        }
        fclose($file);
    };
    return Response::stream($callback, 200, $headers);
}

    public function exit_qoute()
    {
        $exit_signs = DB::table('exit_signs')->get();
        return view('admin/quote/exit_quote',compact('exit_signs'));
    }


    public function stair_qoute()
    {

        $stair_nosings = DB::table('stair_nosings')->get();
        return view('admin/quote/stair_quote',compact('stair_nosings'));
    }

    public function stair_quote_csv()
    {
         $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=stair_quote.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $stair_nosings = DB::table('stair_nosings')->get();
    $columns = array('Id','Name','Last Name','Email','Phone','Company Name','Put it into','Photoluminescent','Stairs and their Width','Shipped','Additional');

    $callback = function() use ($stair_nosings, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($stair_nosings as $stair_nosing) {
            fputcsv($file, array($stair_nosing->id,$stair_nosing->name,$stair_nosing->lname,$stair_nosing->email,$stair_nosing->phone,$stair_nosing->company_name,$stair_nosing->stair_put,$stair_nosing->photoluminescent,$stair_nosing->stair_width,$stair_nosing->shipped,$stair_nosing->additional));
        }
        fclose($file);
    };
    return Response::stream($callback, 200, $headers);
    } 

    public function exit_quote_csv()
    {
        $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=exit_quote.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $exit_signs = DB::table('exit_signs')->get();
    $columns = array('Id','Name','Last Name','Email','Phone','Company Name','Put Exit Signs On','Mounting Kit','Which Direction(s)','Need','Shipped','Additional');

    $callback = function() use ($exit_signs, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($exit_signs as $exit_sign) {
            fputcsv($file, array($exit_sign->id,$exit_sign->name,$exit_sign->lname,$exit_sign->email,$exit_sign->phone,$exit_sign->company_name,$exit_sign->exit_put,$exit_sign->mountain_kit,$exit_sign->direction,$exit_sign->need,$exit_sign->shipped,$exit_sign->additional));
        }
        fclose($file);
    };
    return Response::stream($callback, 200, $headers);
    }

}
