<?php

namespace App\Http\Controllers;


use App\advertisement;
use DB;   
use Session;
use Illuminate\Http\Request;  

use Illuminate\Support\Facades\Validator;
use Redirect;




class AdvertisementController extends Controller
{
    public function advertisement()
    {
    	$advertisement = advertisement::get();

    	return view('admin.advertisement.index',compact('advertisement'));	
    }

    public function advertisement_edit($id)
    {
    	$advert = advertisement::find($id);
    	return view('admin.advertisement.advert-edit',compact('advert'));
    	dd($id);
    }

    public function advert_update(Request $request)
    {
    	 $this->validate($request,[
                    'title' => 'required|max:255',
                    'description' => 'required',
                    'link' => 'required|max:255',
           
             ]);       
                
    	  $unlink_image = advertisement::where('id', $request->id)->get();

          if (empty($request->image))
        {
            $image = $request->old_image;

            
        }
        else
        {
            


            $img= strtotime("now");
            $ext = $request->image->getClientOriginalExtension();
            $image = $img.".".$ext;
        
            $request->image->move(public_path('images/advertisement'),$image);

           $image_path = public_path("images/advertisement/".$unlink_image[0]->image);   
            unlink($image_path);



        }

        if(empty($request->status))
          {
            $status = 'null';        
           }
        else
           {
             $status = $request->status;
           }
        
		
        advertisement::where('id', $request->id)->update([ 'title'=>$request->title , 'description'=>$request->description,'image'=>$image,'link'=>$request->link,'status'=>$status ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('advertisement'); 
    }
}
