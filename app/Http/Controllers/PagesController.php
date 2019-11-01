<?php

namespace App\Http\Controllers;

use DB;   //to connnect database
use App\cms;
use Session;
use Illuminate\Http\Request;  //to get the request
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Mail\test;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function cms()
    {
    	$cms_data = DB::table('cms')->where('type', 'other')->simplePaginate(15);
        return view('admin.pages.cms',compact('cms_data'));
    }


    public function cms_add()
    {
    	return view ('admin.pages.cms_add');
    }

    public function cms_save(Request $request)
    {       
            $this->validate($request,[
                    'page_name' => 'required|unique:cms',
                    'body' => 'required',
                    'image' => 'required',
                    'alt_image' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required',
                    'meta_keyword' => 'required',
                    
             ]);	


            $slug = str_replace(' ', '-', strtolower($request->page_name));

    		$cms = new cms;
            $cms->type = $request->type;
            $cms->function = $request->function;
    		$cms->page_name = $request->page_name;	
    		$cms->slug = $slug;
    		$cms->body = $request->body;


            $img= time();
            $ext = $request->image->getClientOriginalExtension();
            $cms->image = $img.".".$ext;
        
            $request->image->move(public_path('images/cms'),$cms->image);

            $cms->alt_image = $request->alt_image;

    		$cms->meta_title = $request->meta_title;
    		$cms->meta_description = $request->meta_description;
    		$cms->meta_keyword = $request->meta_keyword;
            if(empty($request->status))
            {
                $cms->status = 'null';
                
            }
            else
            {
                $cms->status = $request->status;
            }
    		$cms->save();
            Session::flash('Success', 'Record Successfully submit');
            
            return redirect()->route('cms');                   

    }

    public function cms_edit($id)
    {
    	$CsmEdit= cms::find($id);

        return view('admin.pages.cms_edit',compact('CsmEdit'));
    }


    public function cms_update(Request $request)
    {
        $this->validate($request,[
                   
                    'page_name' => 'required|unique:cms,page_name,'.$request->id,
                    'body' => 'required',
                    'alt_image' => 'required|max:255',
                    'meta_title' => 'required',
                    'meta_description' => 'required',
                    'meta_keyword' => 'required',
   
             ]);

            $slug = str_replace(' ', '-', strtolower($request->page_name));


              if(empty($request->status))
            {
                $status = 'null';
                
            }
            else
            {
                $status = $request->status;
            }

            if (empty($request->image))
            {
            $image = $request->old_img; 
        
                      
            }
            else
            {  
            $img= time();
            $ext = $request->image->getClientOriginalExtension();
            $image = $img.".".$ext;
        
            $request->image->move(public_path('images/cms'),$image);
            
            }


        cms::where('id', $request->id)->update([ 'page_name'=>$request->page_name , 'body'=>$request->body,'image'=>$image,'alt_image'=>$request->alt_image,'meta_title'=>$request->meta_title,'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword , 'status'=>$status ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->back(); 
    }

    public function cms_delete($id)
    {
        DB::table('cms')->where('id', $id)->delete();
        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->back(); 
    }

    public function cms_status_ajax(Request $request)   
    {
        
        
        if($request->status =='on')
        {   

            cms::where('id', $request->id)->update(['status'=>'null']);  
            //return 'null';  
        }       
        elseif($request->status =='null')
        {    
            cms::where('id', $request->id)->update(['status'=>'on']);     
            //return 'on';          
        }
    }

    public function cms_view($id)
    {
    	$cmsview= cms::find($id);
        
        return view('admin.pages.cms_view',compact('cmsview'));
    }

    public function main_cms()
    {
        $main_cms_data = DB::table('cms')->where('type', 'main')->simplePaginate(15);
        return view('admin.pages.main_cms',compact('main_cms_data'));
    }

     public function main_cms_view($id)
    {
        
        $cmsview= cms::find($id);

        return view('admin.pages.main_cms_view',compact('cmsview'));
    }

      public function main_cms_edit($id)
    {
        
        $CsmEdit= cms::find($id);

        return view('admin.pages.main_cms_edit',compact('CsmEdit'));
    }

    public function main_cms_update(Request $request)
    {

        $this->validate($request,[
                   
                   
                    'body' => 'required',
                    'alt_image' => 'required',
                    'meta_title' => 'required',
                    'meta_description' => 'required',
                    'meta_keyword' => 'required',
   
             ]);

            $slug = str_replace(' ', '-', strtolower($request->page_name));

        if (empty($request->image))
        {
            $image = $request->old_img; 
        
                      
        }
        else
        {  
            $img= time();
            $ext = $request->image->getClientOriginalExtension();
            $image = $img.".".$ext;
        
            $request->image->move(public_path('images/cms'),$image);
            
        }
           
           
                $status = 'on';
            


        cms::where('id', $request->id)->update([ 'body'=>$request->body,'image'=>$image,'alt_image'=>$request->alt_image,'meta_title'=>$request->meta_title,'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword , 'status'=>$status ]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('main_cms'); 
    }


}
