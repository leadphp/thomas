<?php

namespace App\Http\Controllers;

use DB;   

use App\solution;
use App\category;
use App\sub_category;
use App\detail;
use App\tiles_specification;
use App\colour;
use App\sol_cat;
use App\cat_subcat;
use Session;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Validator;
use Redirect;


class SolutionController extends Controller
{
    public function solution()
    {
    	$solutions = DB::table('solutions')->paginate('10');
	    return view('admin.solution.solution',compact('solutions'));

    }

    public function solution_add()
    {

    	return view ('admin.solution.solution_add');
    	
    }

    public function solution_save(Request $request)
    {

    	 
         $this->validate($request,[
                    'title' => 'required|unique:solutions|max:255',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    'description' => 'required',
                    
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',



                    
             ]);	


      $solution = new solution;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $solution->banner_image = $banner_image.".".$banner_ext;
      $request->banner_image->move(public_path('images/admin/solution/banner'),$solution->banner_image);

      $solution->alt_banner_image = $request->alt_banner_image;

      $solution->title = $request->title; 
      $solution->slug = $slug;
      $solution->description = $request->description;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $solution->image = $image.".".$image_ext;
      $request->image->move(public_path('images/admin/solution'),$solution->image);

      $solution->image_alt = $request->image_alt;

      $solution->meta_title = $request->meta_title;
      $solution->meta_description = $request->meta_description;
      $solution->meta_keyword = $request->meta_keyword;
      
      $solution->product_features = $request->product_features;
      $solution->size_price = $request->size_price;
      $solution->application = $request->application;
      $solution->price = $request->price;
      
      if($solution->save())
      {
        $data = DB::table('solutions')->latest('id')->first(); 

        solution::where('id', $data->id)->update([ 'number'=>$data->id ]);
      }

      
    /*  if($solution->save())
      {
        $data = DB::table('solutions')->latest('id')->first();
        
        foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $data->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }
      }*/
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('solution');
    }

    public function solution_edit($id)
    {
    	$solution_edit= solution::find($id);
        $tiles_specification = tiles_specification::where('list_id', $id)->where('type','solution')->get();
        $colours = colour::where('list_id', $id)->where('type','solution')->get();

        return view('admin.solution.solution_edit',compact('solution_edit','tiles_specification','colours'));
    }
    public function solution_update(Request $request)
    {

        $unlink_image = solution::where('id', $request->id)->get();
        

    	$this->validate($request,[
                   
                    'title' => 'required|max:255|unique:solutions,title,'.$request->id,
                    'alt_banner_image' => 'required|max:255',
                    'description' => 'required',
                    'image_alt' => 'required|max:255',
                    'price' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
                    
   
             ]);

    	$slug = str_replace(' ', '-', strtolower($request->title));

          if (empty($request->banner_image))
        {
            $banner_image = $request->old_banner_img; 
        
                      
        }
        else
        {  

            $banner_img= time();
            $banner_ext = $request->banner_image->getClientOriginalExtension();
            $banner_image = $banner_img.".".$banner_ext;
        
            $request->banner_image->move(public_path('images/admin/solution/banner'),$banner_image);

            $image_path = public_path("images/admin/solution/banner/".$unlink_image[0]->banner_image);   
            unlink($image_path);
            
        }

          if (empty($request->image))
        {
            $image = $request->old_img;            
        }
        else
        {  
              $img = time();
              $image_ext = $request->image->getClientOriginalExtension();
              $image = $img.".".$image_ext;

              $request->image->move(public_path('images/admin/solution'),$image);
              
              $image_path = public_path("images/admin/solution/".$unlink_image[0]->image); 
              unlink($image_path);
        }





    	solution::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'description'=>$request->description,'product_features'=>$request->product_features,'size_price'=>$request->size_price,'application'=>$request->application,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

            DB::table('colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

       /*    foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $request->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }*/

        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('solution');

    	
    }
    public function solution_view($id)
    {  	
    	$solution_view= solution::find($id);
         $tiles_specification = tiles_specification::where('list_id', $id)->where('type','solution')->get();
        $colours = colour::where('list_id', $id)->where('type','solution')->get();
        return view('admin.solution.solution_view',compact('solution_view','tiles_specification','colours'));
    }

    public function solution_delete($id)
    {
        $unlink_image = solution::where('id', $id)->get();

        DB::table('solutions')->where('id', $id)->delete();
        DB::table('tiles_specifications')->where('list_id', $id)->where('type','solution')->delete();
        DB::table('colours')->where('list_id', $id)->where('type','solution')->delete();

        $banner = public_path("images/admin/solution/banner/".$unlink_image[0]->banner_image);   
        unlink($banner);

        $image = public_path("images/admin/solution/".$unlink_image[0]->image);   
        unlink($image);

        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('solution');
    }

    public function category(Request $request)
    {
    	/*$category = DB::table('categories')
        ->leftJoin('solutions', 'categories.solution_id', '=', 'solutions.id')
        ->select('categories.*', 'solutions.title as solution')        
        ->paginate('10');*/
        $category = DB::table('categories')->paginate('10');
        
    	return view ('admin.solution.category',compact('category'));
    }

    public function category_add()
    {
    	$solution = DB::table('solutions')->get();
      $csc_categories = DB::table('csc_categories')->get();
    	return view('admin.solution.category_add',compact('solution','csc_categories'));    	
    }

    public function category_save(Request $request)
    {
        

    		$this->validate($request,[
                   
                    'title' => 'required|max:255|unique:categories,title,'.$request->id,
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    
                    
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
   
             ]);
      $category = new category;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $category->banner_image = $banner_image.".".$banner_ext;
      $request->banner_image->move(public_path('images/admin/solution/banner'),$category->banner_image);

      

      $category->alt_banner_image = $request->alt_banner_image;

      $category->title = $request->title; 
      $category->slug = $slug;
      $category->price = $request->price;
      $category->description = $request->description;

      $category->product_features = $request->product_features;
      $category->size_price = $request->size_price;
      $category->application = $request->application;

      
      $category->csc_category_id = $request->csc_category;


      if(!empty($request->solution))
      {  
      $solutions = implode(",",$request->solution);
      $category->solution_id = $solutions;
    }
      $solution = $request->solution;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $category->image = $image.".".$image_ext;
      $request->image->move(public_path('images/admin/solution'),$category->image);


      $category->image_alt = $request->image_alt;

      $category->meta_title = $request->meta_title;
      $category->meta_description = $request->meta_description;
      $category->meta_keyword = $request->meta_keyword;
      
      


      
      if($category->save())
      {
        $data = DB::table('categories')->latest('id')->first();
        
    /*    foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $data->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }*/

        /*  foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }*/
        if(!empty($request->solution))
        {  
          foreach($request->solution as $key=>$id)
          { 
              $sol_cat = new sol_cat;
              $sol_cat->solution_id = $id;
              $sol_cat->category_id = $data->id;
              $sol_cat->save();
          }
        }  
      }
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('category');

        
     

    }

    public function category_view($id)
    {
    	$category = DB::table('categories')
        ->leftJoin('solutions', 'categories.solution_id', '=', 'solutions.id')
        ->select('categories.*', 'solutions.title as solution')    
        ->where('categories.id', $id)    
        ->get();

        $tiles_specification = tiles_specification::where('list_id', $id)->where('type','category')->get();
        $colours = colour::where('list_id', $id)->where('type','category')->get();

    	return view('admin.solution.category_view',compact('category','tiles_specification','colours'));
    }

    public function category_edit($id)
    {

    	$category = DB::table('categories')
        ->leftJoin('solutions', 'categories.solution_id', '=', 'solutions.id')
        ->select('categories.*', 'solutions.title as solution')    
        ->where('categories.id', $id)    
        ->get();
        

        $solution = DB::table('solutions')->get();

        $csc_categories = DB::table('csc_categories')->get();

        $tiles_specification = tiles_specification::where('list_id', $id)->where('type','category')->get();
        $colours = colour::where('list_id', $id)->where('type','category')->get();

    	return view('admin.solution.category_edit',compact('category','solution','tiles_specification','colours','csc_categories'));
    }

    public function category_update(Request $request)
    {

      $unlink_image = category::where('id', $request->id)->get();

    	$this->validate($request,[
                   
                  'title' => 'required|max:255|unique:categories,title,'.$request->id,
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    
                    
                    'image_alt' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
   
             ]);

      $slug = str_replace(' ', '-', strtolower($request->title));

        if (empty($request->banner_image))
        {
            $banner_image = $request->old_banner_img; 
        
                      
        }
        else
        {  

            $banner_img= time();
            $banner_ext = $request->banner_image->getClientOriginalExtension();
            $banner_image = $banner_img.".".$banner_ext;
        
            $request->banner_image->move(public_path('images/admin/solution/banner'),$banner_image);

             $image_path = public_path("images/admin/solution/banner/".$unlink_image[0]->banner_image); 
              unlink($image_path);


            
        }

          if (empty($request->image))
        {
            $image = $request->old_img;            
        }
        else
        {  
              $img = time();
              $image_ext = $request->image->getClientOriginalExtension();
              $image = $img.".".$image_ext;

              $request->image->move(public_path('images/admin/solution'),$image);

              $image_path = public_path("images/admin/solution/".$unlink_image[0]->image); 
              unlink($image_path);
        }

        if(!empty($request->solution))
        {
        $solution = implode(",",$request->solution);
        }
        else
        {
          $solution = ''; 
        }


      category::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'solution_id'=>$solution,'csc_category_id'=>$request->csc_category,'description'=>$request->description,'product_features'=>$request->product_features,'size_price'=>$request->size_price,'application'=>$request->application,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

        DB::table('colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('sol_cats')
        ->where('category_id', $request->id)
        ->delete();

       /*    foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $request->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }*/

     /*     foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }*/

        if(!empty($request->solution))
        {
        foreach($request->solution as $key=>$id)
        { 
            $sol_cat = new sol_cat;
            $sol_cat->solution_id = $id;
            $sol_cat->category_id = $request->id;
            $sol_cat->save();
        }
      }

        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('category');

    }

    public function category_delete($id)
    {
      $unlink_image = category::where('id', $id)->get();

        DB::table('categories')->where('id', $id)->delete();
        DB::table('tiles_specifications')->where('list_id', $id)->where('type','category')->delete();
        DB::table('colours')->where('list_id', $id)->where('type','category')->delete();

        DB::table('sol_cats')->where('category_id', $id)->delete();

        $banner = public_path("images/admin/solution/banner/".$unlink_image[0]->banner_image);   
        unlink($banner);

        $image = public_path("images/admin/solution/".$unlink_image[0]->image);   
        unlink($image);



        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('category');
    }

    public function sub_category(Request $request)
    {
    	$sub_category_view = DB::table('sub_categories')
        ->leftJoin('categories','sub_categories.category_id', '=', 'categories.id')
        ->select('sub_categories.*','categories.title as category')        
        ->paginate('10');
        
    	return view ('admin.solution.sub_category',compact('sub_category_view'));
    }

    public function sub_category_add(Request $request)
    {
    	$category = DB::table('categories')->get();	 
      $csc_categories = DB::table('csc_categories')->get();
    	return view ('admin.solution.sub_category_add',compact('category','csc_categories'));
    }

    public function sub_category_save(Request $request)
    {
      

    	 $this->validate($request,[
                    'title' => 'required|max:255',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'description' => 'required',
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'category' => 'required',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
                    
             ]);

     
      $sub_category = new sub_category;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $sub_category->banner_image = $banner_image.".".$banner_ext;
      
      
      $request->banner_image->move(public_path('images/admin/solution/banner'),$sub_category->banner_image);


      

      $sub_category->alt_banner_image = $request->alt_banner_image;

      $sub_category->title = $request->title; 
      $sub_category->slug = $slug;
      $sub_category->price = $request->price; 
      $sub_category->description = $request->description;
      /*$sub_category->category_id = $request->category;*/
      //$categories = implode(",",$request->category);

      $sub_category->csc_category_id = $request->csc_category;

      $sub_category->category_id = $request->category;
      /*$category = $request->category;*/
      
      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $sub_category->image = $image.".".$image_ext;
      $request->image->move(public_path('images/admin/solution'),$sub_category->image);

      $sub_category->image_alt = $request->image_alt;

      $sub_category->meta_title = $request->meta_title;
      $sub_category->meta_description = $request->meta_description;
      $sub_category->meta_keyword = $request->meta_keyword;
      
      
      $sub_category->save();

      
/*      if($sub_category->save())
      {
        $data = DB::table('sub_categories')->latest('id')->first();
        
        foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $data->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }

        foreach($request->category as $key=>$id)
        { 
            $cat_subcat = new cat_subcat;            
            $cat_subcat->category_id = $id;
            $cat_subcat->sub_category_id = $data->id;
            $cat_subcat->save();           
        }
      }*/

      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('sub-category');

    }

    public function sub_category_view($id)
    {
    	$sub_category = DB::table('sub_categories')
        ->leftJoin('categories','sub_categories.category_id', '=', 'categories.id')
        ->select('sub_categories.*','categories.title as category')        
        ->where('sub_categories.id', $id)
        ->get();


          $tiles_specification = tiles_specification::where('list_id', $id)->where('type','sub-category')->get();
        $colours = colour::where('list_id', $id)->where('type','sub-category')->get();
        
        
    	return view ('admin.solution.sub_category_view',compact('sub_category','tiles_specification','colours'));
    }

    public function sub_category_edit($id)
    {

    	$categories = DB::table('categories')->get();

      $csc_categories = DB::table('csc_categories')->get();


    	 $sub_category_edit = DB::table('sub_categories')
        ->leftJoin('categories','sub_categories.category_id', '=', 'categories.id')
        ->select('sub_categories.*','categories.title as category')        
        ->where('sub_categories.id', $id)
        ->get();
        
        

       $tiles_specification = tiles_specification::where('list_id', $id)->where('type','sub-category')->get();
        $colours = colour::where('list_id', $id)->where('type','sub-category')->get();

    	return view('admin.solution.sub_category_edit',compact('sub_category_edit','categories','tiles_specification','colours','csc_categories'));
    }

    public function sub_category_update(Request $request)
    {
    	
    	$this->validate($request,[
                   
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'meta_keyword' => 'required|max:255',
   
        ]);
      $slug = str_replace(' ', '-', strtolower($request->title));

        if (empty($request->banner_image))
        {
            $banner_image = $request->old_banner_img; 
        
                      
        }
        else
        {  

            $banner_img= time();
            $banner_ext = $request->banner_image->getClientOriginalExtension();
            $banner_image = $banner_img.".".$banner_ext;
        
            $request->banner_image->move(public_path('images/admin/solution/banner'),$banner_image);
            
        }

          if (empty($request->image))
        {
            $image = $request->old_img;            
        }
        else
        {  
              $img = time();
              $image_ext = $request->image->getClientOriginalExtension();
              $image = $img.".".$image_ext;

              $request->image->move(public_path('images/admin/solution'),$image);
        }


       // $category = implode(",",$request->category);


      sub_category::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'category_id'=>$request->category,'csc_category_id'=>$request->csc_category,'description'=>$request->description,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

/*        DB::table('colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('cat_subcats')
        ->where('sub_category_id', $request->id)
        ->delete();

        foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $request->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }*/

       /*  foreach($request->category as $key=>$id)
        { 
            $cat_subcat = new cat_subcat;            
            $cat_subcat->category_id = $id;
            $cat_subcat->sub_category_id = $request->id;
            $cat_subcat->save();           
        }*/
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('sub-category');
    }

    public function sub_category_delete($id)
    {
        DB::table('sub_categories')->where('id', $id)->delete();
        DB::table('tiles_specifications')->where('list_id', $id)->where('type','sub-category')->delete();
        DB::table('colours')->where('list_id', $id)->where('type','sub-category')->delete();
        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('sub-category');
    }

    public function detail()
    {
    	$detail = DB::table('details')
        ->leftJoin('sub_categories','details.sub_category_id', '=', 'sub_categories.id')
        ->select('details.*','sub_categories.title as sub_category')        
        ->paginate('10');
        
        return view ('admin.solution.detail',compact('detail'));
    }

    public function detail_add(Request $request)
    {
    	$sub_category = DB::table('sub_categories')->get();	 

    	return view ('admin.solution.detail_add',compact('sub_category'));
    }

    public function detail_save(Request $request)
    {
    	$this->validate($request,[
                    'title' => 'required|unique:details|max:255',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255', 
                    'description' => 'required',
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'sub_category' => 'required',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
                    
             ]);

       $detail = new detail;
      

      $slug = str_replace(' ', '-', strtolower($request->title));
      
      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $detail->banner_image = $banner_image.".".$banner_ext;
      
      
      $request->banner_image->move(public_path('images/admin/solution/banner'),$detail->banner_image);

      $detail->alt_banner_image = $request->alt_banner_image;

      $detail->title = $request->title; 
      $detail->slug = $slug;
      $detail->description = $request->description;
      $detail->sub_category_id = $request->sub_category;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $detail->image = $image.".".$image_ext;

      $request->image->move(public_path('images/admin/solution'),$detail->image);
      $detail->image_alt = $request->image_alt;

      $detail->meta_title = $request->meta_title;
      $detail->meta_description = $request->meta_description;
      $detail->meta_keyword = $request->meta_keyword;
      
      


      
        if($detail->save())
        {
          $data = DB::table('details')->latest('id')->first();
          
          foreach($request->size as $key=>$size)
          { 
              $tile = new tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $data->id;
              $tile->size = $size;
              $tile->sqft = $request->sqft[$key];
              $tile->cost_per_title = $request->cost_per_title[$key];
              $tile->titles_per_box = $request->titles_per_box[$key];
              $tile->cost_per_box = $request->cost_per_box[$key];
              $tile->save();
              
          }

            foreach($request->name as $key=>$name)
          { 
              $colour = new colour;
              $colour->type = $request->type;
              $colour->list_id = $data->id;
              $colour->name = $request->name[$key];
              $colour->number = $request->number[$key];
              $colour->background_colour = $request->background_colour[$key];
          
              $colour->save();
              
          }   

      }
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('detail');
    }  

    public function detail_view($id)
    {
    	
    	$detail = DB::table('details')
        ->leftJoin('sub_categories','details.sub_category_id', '=', 'sub_categories.id')
        ->select('details.*','sub_categories.title as sub_category')        
        ->where('details.id', $id)
        ->get();


        $tiles_specification = tiles_specification::where('list_id', $id)->where('type','detail')->get();
        $colours = colour::where('list_id', $id)->where('type','detail')->get();
        
        return view ('admin.solution.detail_view',compact('detail','tiles_specification','colours'));
    }

    public function detail_edit($id)
    {
    	$sub_categories = DB::table('sub_categories')->get();

    	$detail = DB::table('details')
        ->leftJoin('sub_categories','details.sub_category_id', '=', 'sub_categories.id')
        ->select('details.*','sub_categories.title as sub_category')        
        ->where('details.id', $id)
        ->get();


        $tiles_specification = tiles_specification::where('list_id', $id)->where('type','detail')->get();
        $colours = colour::where('list_id', $id)->where('type','detail')->get();
        
        return view ('admin.solution.detail_edit',compact('detail','sub_categories','tiles_specification','colours'));
    }

    public function detail_update(Request $request)
    {

    		$this->validate($request,[
                   
            'title' => 'required|max:255|unique:details,title,'.$request->id,
            'description' => 'required',
            'sub_category' => 'required',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'meta_keyword' => 'required|max:255',
   
        ]);


    	  $slug = str_replace(' ', '-', strtolower($request->title));

        if (empty($request->banner_image))
        {
            $banner_image = $request->old_banner_img; 
        
                      
        }
        else
        {  

            $banner_img= time();
            $banner_ext = $request->banner_image->getClientOriginalExtension();
            $banner_image = $banner_img.".".$banner_ext;
        
            $request->banner_image->move(public_path('images/admin/solution/banner'),$banner_image);
            
        }

          if (empty($request->image))
        {
            $image = $request->old_img;            
        }
        else
        {  
              $img = time();
              $image_ext = $request->image->getClientOriginalExtension();
              $image = $img.".".$image_ext;

              $request->image->move(public_path('images/admin/solution'),$image);
        }





      detail::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'sub_category_id'=>$request->sub_category,'description'=>$request->description,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

        DB::table('colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

           foreach($request->size as $key=>$size)
        { 
            $tile = new tiles_specification;
            $tile->type = $request->type;
            $tile->list_id = $request->id;
            $tile->size = $size;
            $tile->sqft = $request->sqft[$key];
            $tile->cost_per_title = $request->cost_per_title[$key];
            $tile->titles_per_box = $request->titles_per_box[$key];
            $tile->cost_per_box = $request->cost_per_box[$key];
            $tile->save();
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('detail');


    }

    public function detail_delete($id)
    {
        DB::table('details')->where('id', $id)->delete();

        DB::table('tiles_specifications')->where('list_id', $id)->where('type','detail')->delete();
        DB::table('colours')->where('list_id', $id)->where('type','detail')->delete();


        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('detail');
    }

 public function test($id)
 {
  dd($id);
 }   
}

 