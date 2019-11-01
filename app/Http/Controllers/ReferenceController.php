<?php

namespace App\Http\Controllers;

use DB;   

use App\reference;
use App\reference_pdf;
use App\csc_category;
use App\sub_reference;
use Session;
use Illuminate\Http\Request;  

use Illuminate\Support\Facades\Validator;
use Redirect;

class ReferenceController extends Controller
{
    //

	public function reference()
	{
		$references = DB::table('references')->paginate('10');
	    return view('admin.reference.reference',compact('references'));
	}


    public function add()
    {
			return view ('admin.reference.add');    	
    }

    public function save(Request $request)
    {
    	         $this->validate($request,[
                    'name' => 'required|max:255',
                   



                    
             ]);    

    	$reference = new reference;
    	$reference->name = $request->name;
    	
    	$reference->type = $request->reference_type; 

    	if($reference->save())
    	{
	    	if(!empty($request->pdf))
	    	{
	    		
	    		$last = DB::table('references')->latest('id')->first();
	    		foreach($request->pdf as $pdf)
	            {
	            	$reference_pdf = new reference_pdf;

	                $reference_pdf->original_pdf =$pdf->getClientOriginalName();
	                /*$image = time();*/
	                $pdf_ext = $pdf->getClientOriginalExtension();
	      			
	      			$reference_pdf->type = $request->type;
	      			$reference_pdf->list_id = $last->id;

	      			
	                $pdf->move(public_path().'/images/reference/', $reference_pdf->original_pdf);  
					$reference_pdf->save();     
					         
	            }
	    	}
    	}	

    	Session::flash('Success', 'Record Successfully submit');
      	return redirect()->route('admin_reference');
    	    
    }

    public function view($id)
    {

    	$reference_view= reference::find($id);
    	$pdf_view= reference_pdf::where('type','main')->where('list_id',$id)->get();
    	
    	return view('admin.reference.view',compact('reference_view','pdf_view'));

    }

    public function edit($id)
    {
    	$reference_view= reference::find($id);
    	$pdf_view= reference_pdf::where('type','main')->where('list_id',$id)->get();
    	
    	return view('admin.reference.edit',compact('reference_view','pdf_view'));

    }
    public function update(Request $request)
    {
    	$unlink_pdf = reference_pdf::where('list_id', $request->id)->where('type','main')->get();
    	
    	reference::where('id', $request->id)->update([ 'name'=>$request->name  ]);

    	if(!empty($request->pdf))
    	{
    		foreach($unlink_pdf as $pdf)
    		{	
    		 $pdf_path = public_path("images/reference/".$pdf->original_pdf); 
              unlink($pdf_path);
            }  
            reference_pdf::where('list_id', $request->id)->where('type','main')->delete();

    		
	    		
	    		foreach($request->pdf as $pdf)
	            {
	            	$reference_pdf = new reference_pdf;

	                $reference_pdf->original_pdf =$pdf->getClientOriginalName();
	                /*$image = time();*/
	            
	      			
	      			$reference_pdf->type = $request->type;
	      			$reference_pdf->list_id = $request->id;

	      			
	                $pdf->move(public_path().'/images/reference/', $reference_pdf->original_pdf);  
					$reference_pdf->save();   
				}	
    	}

    	 Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('admin_reference');

    }

    public function delete($id)
    {

    	reference::where('id', $id)->delete();
    	
    	$unlink_pdf = reference_pdf::where('list_id', $id)->where('type','main')->get();

    	if($unlink_pdf->isempty())
    	{
    		
    	}
    	else
    	{
    		foreach($unlink_pdf as $pdf)
    		{	
    		  $pdf_path = public_path("images/reference/".$pdf->original_pdf); 
              unlink($pdf_path);
            }  
    	}

    	reference_pdf::where('id', $id)->where('type','main')->delete();

    	Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('admin_reference');
    }


    public function sub_reference()
    {
    	/*$sub_references = DB::table('sub_references')->paginate('10');*/
        $sub_references = DB::table('sub_references')
        ->leftJoin('references', 'sub_references.reference_id', '=', 'references.id')
        ->select('sub_references.*', 'references.name as ref_name')        
        ->paginate('10');
        
	    return view('admin.reference.sub-reference',compact('sub_references'));
    }

    public function sub_reference_add()
    {
    	$references = DB::table('references')->get();
		return view ('admin.reference.sub_reference_add',compact('references'));    	
    }

    public function sub_reference_save(Request $request)
    {

    	$sub_reference = new sub_reference;
    	$sub_reference->name = $request->name;
    	
    	$sub_reference->reference_id = $request->reference_id; 

    	if($sub_reference->save())
    	{
	    	if(!empty($request->pdf))
	    	{
	    		
	    		$last = DB::table('sub_references')->latest('id')->first();
	    		foreach($request->pdf as $pdf)
	            {
	            	$reference_pdf = new reference_pdf;

	                $reference_pdf->original_pdf =$pdf->getClientOriginalName();
	                /*$image = time();*/
	                $pdf_ext = $pdf->getClientOriginalExtension();
	      			
	      			$reference_pdf->type = $request->type;
	      			$reference_pdf->list_id = $last->id;

	      			
	                $pdf->move(public_path().'/images/reference/', $reference_pdf->original_pdf);  
					$reference_pdf->save();     
					       
	            }
	    	}
    	}	

    	Session::flash('Success', 'Record Successfully submit');
      	return redirect()->route('sub-reference');
    }

    public function sub_reference_view($id)
    {

    	$sub_reference_view= sub_reference::find($id);
    	$pdf_view= reference_pdf::where('type','sub')->where('list_id',$id)->get();
    	
    	return view('admin.reference.sub_reference_view',compact('sub_reference_view','pdf_view'));

    }

    public function sub_reference_edit($id)
    {
    	$references = reference::get();
    	$csc_categories = csc_category::get();
    	$sub_reference_view= sub_reference::find($id);
    	$pdf_view= reference_pdf::where('type','sub')->where('list_id',$id)->get();
    	
    	return view('admin.reference.sub_reference_edit',compact('sub_reference_view','pdf_view','references','csc_categories'));
    }

    public function sub_reference_update(Request $request)
    {

    	$unlink_pdf = reference_pdf::where('list_id', $request->id)->where('type','sub')->get();
    	
    	sub_reference::where('id', $request->id)->update([ 'name'=>$request->name ,'reference_id'=>$request->reference_id ,'category_id'=>$request->category_id ]);

    	

            
            if(!empty($request->pdf))
            {   
    		foreach($unlink_pdf as $pdf)
    		{	
    		 $pdf_path = public_path("images/reference/".$pdf->original_pdf); 
              unlink($pdf_path);
            }  
            reference_pdf::where('list_id', $request->id)->where('type','sub')->delete();
	    		foreach($request->pdf as $pdf)
	            {
	            	$reference_pdf = new reference_pdf;

	                $reference_pdf->original_pdf =$pdf->getClientOriginalName();
	                /*$image = time();*/
	                $pdf_ext = $pdf->getClientOriginalExtension();
	      			
	      			$reference_pdf->type = $request->type;
	      			$reference_pdf->list_id = $request->id;

	      			
	                $pdf->move(public_path().'/images/reference/', $reference_pdf->original_pdf);  
					$reference_pdf->save();  
                    
				}	
			}	
    	

    	 Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('sub-reference');
    }

    public function sub_reference_delete($id)
    {
    	sub_reference::where('id', $id)->delete();
    	
    	$unlink_pdf = reference_pdf::where('list_id', $id)->where('type','sub')->get();
        
    	if($unlink_pdf->isempty())
    	{
    		
    	}
    	else
    	{
    		foreach($unlink_pdf as $pdf)
    		{	
    		  $pdf_path = public_path("images/reference/".$pdf->original_pdf); 
              unlink($pdf_path);
            }  
    	}

    	reference_pdf::where('id', $id)->where('type','sub')->delete();

    	Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('sub-reference');
    }


}
