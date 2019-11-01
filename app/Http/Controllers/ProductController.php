<?php

namespace App\Http\Controllers;

use DB;   

use App\csc_category;
use App\csc_tiles_specification;
use App\csc_colour;
use App\csc_sub_category;
use App\csc_cat_sub;
use App\csc_detail;
use App\csc_sub_det;
use Session;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Validator;
use Redirect;

class ProductController extends Controller
{
    public function csc_category()
    {
    	$csc_products = DB::table('csc_categories')->paginate('10');
	    return view('admin.product.category',compact('csc_products'));
    }

    public function csc_category_add()
    {

    	return view ('admin.product.category_add');
    }

    public function csc_category_save(Request $request)
    {
      	
    	 $this->validate($request,[
                    'title' => 'required|unique:csc_categories|max:255',
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


      $csc_category = new csc_category;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $csc_category->banner_image = $banner_image.".".$banner_ext;
      $request->banner_image->move(public_path('images/product/banner'),$csc_category->banner_image);

      $csc_category->alt_banner_image = $request->alt_banner_image;

      $csc_category->title = $request->title; 
      $csc_category->slug = $slug;
      $csc_category->description = $request->description;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $csc_category->image = $image.".".$image_ext;
      $request->image->move(public_path('images/product'),$csc_category->image);

      $csc_category->image_alt = $request->image_alt;

      $csc_category->meta_title = $request->meta_title;
      $csc_category->meta_description = $request->meta_description;
      $csc_category->meta_keyword = $request->meta_keyword;
      
      $csc_category->product_features = $request->product_features;
      $csc_category->size_price = $request->size_price;
      $csc_category->application = $request->application;
      $csc_category->price = $request->price;
      
      $csc_category->csc_type = $request->csc_type ;
      $csc_category->save();

        if(!empty($request->size[0])) {
        
        
        
      // if($request->size->isEmpty())
      // {
      //   dd('ttt');
      // }
        $data = DB::table('csc_categories')->latest('id')->first();
        
        foreach($request->size as $key=>$size)
        { 
            $tile = new csc_tiles_specification;
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
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }
      }  
      
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('csc-category');
    	
    }

    public function csc_category_edit($id)
    {
    	$product_edit = DB::table('csc_categories')->where('id',$id)->first();

    	$tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','category')->get();
        $colours = csc_colour::where('list_id', $id)->where('type','category')->get();
    	
	    return view('admin.product.category_edit',compact('product_edit','tiles_specification','colours'));
    }

    public function csc_category_update(Request $request)
    {

    	  $unlink_image = csc_category::where('id', $request->id)->get();
        
        
    	$this->validate($request,[
                   
                    'title' => 'required|max:255|unique:csc_categories,title,'.$request->id,
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
        
            $request->banner_image->move(public_path('images/product/banner'),$banner_image);

            $image_path = public_path("images/product/banner/".$unlink_image[0]->banner_image);   
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

              $request->image->move(public_path('images/product'),$image);
              
              $image_path = public_path("images/product/".$unlink_image[0]->image); 
              unlink($image_path);
        }

        if($request->csc_type != 'only')
        {

          DB::table('csc_colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();


        DB::table('csc_tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();
        }



    	csc_category::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'csc_type'=>$request->csc_type,'description'=>$request->description,'product_features'=>$request->product_features,'size_price'=>$request->size_price,'application'=>$request->application,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

      if(!empty($request->size[0]) && $request->csc_type == 'only')
      {

      

            DB::table('csc_colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();


        DB::table('csc_tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

           foreach($request->size as $key=>$size)
        { 
            $tile = new csc_tiles_specification;
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
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }
      }  

        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('csc-category');
    }

    public function csc_category_view($id)
    {
    	$product_view= csc_category::where('id',$id)->first();
      

        $tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','category')->get();
        $colours = csc_colour::where('list_id', $id)->where('type','category')->get();
        return view('admin.product.category_view',compact('product_view','tiles_specification','colours'));
    }

    public function csc_category_delete($id)
    {

    	$unlink_image = csc_category::where('id', $id)->first();

        DB::table('csc_categories')->where('id', $id)->delete();
        DB::table('csc_tiles_specifications')->where('list_id', $id)->where('type','category')->delete();
        DB::table('csc_colours')->where('list_id', $id)->where('type','category')->delete();

        $banner = public_path("images/product/banner/".$unlink_image->banner_image);   
        unlink($banner);

        $image = public_path("images/product/".$unlink_image->image);   
        unlink($image);

        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('csc-category');

    }

    public function sub_category()
    {
    	$sub_product = DB::table('csc_sub_categories')->get();
    	return view ('admin.product.sub_category',compact('sub_product'));
    }

    public function sub_category_view($id)
    {

    	 $sub_product = DB::table('csc_sub_categories')
        ->leftJoin('csc_categories', 'csc_sub_categories.category_id', '=', 'csc_categories.id')
        ->select('csc_sub_categories.*', 'csc_categories.title as csc_categories')    
        ->where('csc_sub_categories.id', $id)    
        ->get();
        


        $tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','sub-category')->get();
        $colours = csc_colour::where('list_id', $id)->where('type','sub-category')->get();

    	return view('admin.product.sub_category_view',compact('sub_product','tiles_specification','colours'));
    }
    public function sub_category_add()
    {
    
    	$csc_category = DB::table('csc_categories')->get();
    	return view('admin.product.sub_category_add',compact('csc_category')); 

    
    }

    public function sub_category_save(Request $request)
    {


    	$this->validate($request,[
                   
                    'title' => 'required|max:255',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    'description' => 'required',
                    'application' => 'required',
                    'size_price' => 'required',
                    'product_features' => 'required',
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
   
             ]);

      $csc_sub_category = new  csc_sub_category;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $csc_sub_category->banner_image = $banner_image.".".$banner_ext;
      $request->banner_image->move(public_path('images/product/banner'),$csc_sub_category->banner_image);

      

      $csc_sub_category->alt_banner_image = $request->alt_banner_image;

      $csc_sub_category->title = $request->title; 
      $csc_sub_category->slug = $slug;
      $csc_sub_category->price = $request->price;
      $csc_sub_category->description = $request->description;

      $csc_sub_category->product_features = $request->product_features;
      $csc_sub_category->size_price = $request->size_price;
      $csc_sub_category->application = $request->application;

      



      if(!empty($request->category))
      {  
      /*$cat = implode(",",$request->category);*/
      $csc_sub_category->category_id = $request->category;
    }
      $product = $request->category;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $csc_sub_category->image = $image.".".$image_ext;
      $request->image->move(public_path('images/product'),$csc_sub_category->image);


      $csc_sub_category->image_alt = $request->image_alt;

      $csc_sub_category->meta_title = $request->meta_title;
      $csc_sub_category->meta_description = $request->meta_description;
      $csc_sub_category->meta_keyword = $request->meta_keyword;
      
      


      
      if($csc_sub_category->save())
      {
        $data = DB::table('csc_sub_categories')->latest('id')->first();
        
       if($request->tile_spec_type == 'tile')
        {
          
             foreach($request->size as $key=>$size)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $data->id;
              $tile->size = $size;
              $tile->sqft = $request->sqft[$key];
              $tile->cost_per_title = $request->cost_per_title[$key];
              $tile->titles_per_box = $request->titles_per_box[$key];
              $tile->cost_per_box = $request->cost_per_box[$key];
              $tile->description = $request->spec_description[$key];
              $tile->tile_code = $request->tile_code[$key];
              $tile->save();
            }    
        }
        elseif($request->tile_spec_type == 'stair')
        {
            foreach($request->spec_price as $key=>$price)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $data->id;
              $tile->price = $price;
              $tile->description = $request->spec_description[$key];
              $tile->price_per_domes = $request->price_per_domes[$key];
              $tile->domes_per_box = $request->domes_per_box[$key];
              $tile->tile_code = $request->tile_code[$key];

            $img_spec = time();

            if(!empty($request->img[$key]))
            {
              $tile->img = $request->img[$key]->getClientOriginalName();
              

              $request->img[$key]->move(public_path('images/tiles'),$tile->img);
            }
            else{
              $tile->img =$request->spec_old_img[$key];
            }
            $tile->save();
          }  
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
        
            $colour->save();
            
        }
        if(!empty($request->category))
        {  
              $csc_cat_sub = new csc_cat_sub;
              $csc_cat_sub->category_id = $request->category;
              $csc_cat_sub->sub_category_id = $data->id;
              $csc_cat_sub->save();
/*          foreach($request->category as $key=>$id)
          { 
          }*/
        }  
      }
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('csc-sub-category');

    }
    public function sub_category_edit($id)
    {
    	 $sub_product = DB::table('csc_sub_categories')
        ->leftJoin('csc_categories', 'csc_sub_categories.category_id', '=', 'csc_categories.id')
        ->select('csc_sub_categories.*', 'csc_categories.title as csc_categories')    
        ->where('csc_sub_categories.id', $id)    
        ->get();
        
        $csc_product = DB::table('csc_categories')->get();

        $tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','sub-category')->get();

        $colours = csc_colour::where('list_id', $id)->where('type','sub-category')->get();

    	return view('admin.product.sub_category_edit',compact('sub_product','csc_product','tiles_specification','colours'));
    }
    public function sub_category_update(Request $request)
    {

    	
    	 $unlink_image = csc_sub_category::where('id', $request->id)->get();

      $this->validate($request,[
                   
                  'title' => 'required|max:255',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    'description' => 'required',
                    'application' => 'required',
                    'size_price' => 'required',
                    'product_features' => 'required',
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
        
            $request->banner_image->move(public_path('images/product/banner'),$banner_image);

             $image_path = public_path("images/product/banner/".$unlink_image[0]->banner_image); 
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

              $request->image->move(public_path('images/product'),$image);

              $image_path = public_path("images/product/".$unlink_image[0]->image); 
              unlink($image_path);
        }

        if(!empty($request->category))
        {
        $category = $request->category;
        }
        else
        {
          $category = ''; 
        }


        csc_sub_category::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'category_id'=>$category,'description'=>$request->description,'product_features'=>$request->product_features,'size_price'=>$request->size_price,'application'=>$request->application,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

        DB::table('csc_colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('csc_tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('csc_cat_subs')
        ->where('sub_category_id', $request->id)
        ->delete();

        if($request->tile_spec_type == 'tile')
          {
            foreach($request->size as $key=>$size)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $request->id;
              $tile->size = $size;
              $tile->sqft = $request->sqft[$key];
              $tile->cost_per_title = $request->cost_per_title[$key];
              $tile->titles_per_box = $request->titles_per_box[$key];
              $tile->cost_per_box = $request->cost_per_box[$key];
              $tile->description = $request->spec_description[$key];
              $tile->tile_code = $request->tile_code[$key];
              $tile->save();
            } 
          }
        elseif($request->tile_spec_type == 'stair')
        {
          foreach($request->spec_price as $key=>$price)
            {  
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $request->id;  
              $tile->price = $price;
              $tile->description = $request->spec_description1[$key];
              $tile->price_per_domes = $request->price_per_domes[$key];
              $tile->domes_per_box = $request->domes_per_box[$key];
              $tile->tile_code = $request->tile_code1[$key];
              

              $img_spec = time();

              if(!empty($request->img[$key]))
              {
                $tile->img = $request->img[$key]->getClientOriginalName();
                

                $request->img[$key]->move(public_path('images/tiles'),$tile->img);
              }
              else{
              	$tile->img =$request->spec_old_img[$key];
              }
              $tile->save();
          }
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
            $colour->colour_code = $request->colour_code[$key];
            
            $colour->save();
            
        }

        if(!empty($request->category))
        {
            $sol_cat = new csc_cat_sub;
            $sol_cat->category_id = $request->category;
            $sol_cat->sub_category_id = $request->id;
            $sol_cat->save();
        /*foreach($request->category as $key=>$id)
        { 
        }*/
      }

        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('csc-sub-category');
    }

    public function sub_category_delete($id)
    {

    	$unlink_image = csc_sub_category::where('id', $id)->get();

        DB::table('csc_sub_categories')->where('id', $id)->delete();
        DB::table('csc_tiles_specifications')->where('list_id', $id)->where('type','sub-category')->delete();

        DB::table('csc_colours')->where('list_id', $id)->where('type','sub-category')->delete();
        DB::table('csc_cat_subs')->where('sub_category_id', $id)->delete();


        $banner = public_path("images/product/banner/".$unlink_image[0]->banner_image);   
        unlink($banner);

        $image = public_path("images/product/".$unlink_image[0]->image);   
        unlink($image);



        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('csc-sub-category');
    }

    public function detail()
    {

    	$detail = DB::table('csc_details')->paginate('10');
    	return view ('admin.product.detail',compact('detail'));

    }
    public function detail_add()
    {
    	$csc_sub_category = DB::table('csc_sub_categories')->get();
    	return view('admin.product.detail_add',compact('csc_sub_category')); 
    }
	public function detail_save(Request $request)
	{
		$this->validate($request,[
                   
                    'title' => 'required|max:255',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    'description' => 'required',
                    'application' => 'required',
                    'size_price' => 'required',
                    'product_features' => 'required',
                    'image' => 'required',
                    'image_alt' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
   
             ]);

      $csc_details = new csc_detail;
      

      $slug = str_replace(' ', '-', strtolower($request->title));

      $banner_image = time();
      $banner_ext = $request->banner_image->getClientOriginalExtension();
      $csc_details->banner_image = $banner_image.".".$banner_ext;
      $request->banner_image->move(public_path('images/product/banner'),$csc_details->banner_image);

      

      $csc_details->alt_banner_image = $request->alt_banner_image;

      $csc_details->title = $request->title; 
      $csc_details->slug = $slug;
      $csc_details->price = $request->price;
      $csc_details->description = $request->description;

      $csc_details->product_features = $request->product_features;
      $csc_details->size_price = $request->size_price;
      $csc_details->application = $request->application;

      



      if(!empty($request->sub_category))
      {  
      /*$cat = implode(",",$request->sub_category);*/
      $csc_details->sub_category_id = $request->sub_category;
    }
      //$product = $request->sub_category;

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $csc_details->image = $image.".".$image_ext;
      $request->image->move(public_path('images/product'),$csc_details->image);


      $csc_details->image_alt = $request->image_alt;

      $csc_details->meta_title = $request->meta_title;
      $csc_details->meta_description = $request->meta_description;
      $csc_details->meta_keyword = $request->meta_keyword;
      
      


      
      if($csc_details->save())
      {
        $data = DB::table('csc_details')->latest('id')->first();
        
   if($request->tile_spec_type == 'tile')
        {

             foreach($request->size as $key=>$size)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $data->id;
              $tile->size = $size;
              $tile->sqft = $request->sqft[$key];
              $tile->cost_per_title = $request->cost_per_title[$key];
              $tile->titles_per_box = $request->titles_per_box[$key];
              $tile->cost_per_box = $request->cost_per_box[$key];
              $tile->description = $request->spec_description[$key];
              $tile->tile_code = $request->tile_code[$key];
              $tile->save();
            }    
        }
        elseif($request->tile_spec_type == 'stair')
        {
            foreach($request->spec_price as $key=>$price)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $data->id;
              $tile->price = $price;
              $tile->description = $request->spec_description[$key];
              $tile->price_per_domes = $request->price_per_domes[$key];
              $tile->domes_per_box = $request->domes_per_box[$key];
              $tile->tile_code = $request->tile_code[$key];

            $img_spec = time();

            if(!empty($request->img[$key]))
            {
              $tile->img = $request->img[$key]->getClientOriginalName();
              

              $request->img[$key]->move(public_path('images/tiles'),$tile->img);
            }
            else{
              $tile->img =$request->spec_old_img[$key];
            }
            $tile->save();
          }  
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $data->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
            $colour->colour_code = $request->colour_code[$key];
            $colour->save();
            
        }
        if(!empty($request->sub_category))
        {  
           $csc_cat_sub = new csc_sub_det;
              $csc_cat_sub->sub_category_id = $request->sub_category;
              $csc_cat_sub->detail_id = $data->id;
              $csc_cat_sub->save();

        /*  foreach($request->sub_category as $key=>$id)
          { 
              $csc_cat_sub = new csc_sub_det;
              $csc_cat_sub->sub_category_id = $id;
              $csc_cat_sub->detail_id = $data->id;
              $csc_cat_sub->save();
          }*/
        }  
      }
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->route('csc-detail');
	}

	public function detail_view($id)
	{
		 $sub_product = DB::table('csc_details')
        ->leftJoin('csc_sub_categories', 'csc_details.sub_category_id', '=', 'csc_sub_categories.id')
        ->select('csc_details.*', 'csc_sub_categories.title as csc_categories')    
        ->where('csc_details.id', $id)    
        ->get();
        


        $tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','detail')->get();
        $colours = csc_colour::where('list_id', $id)->where('type','detail')->get();

    	return view('admin.product.detail_view',compact('sub_product','tiles_specification','colours'));
	}
	public function detail_edit($id)
	{
		 $sub_product = DB::table('csc_details')
        ->leftJoin('csc_sub_categories', 'csc_details.sub_category_id', '=', 'csc_sub_categories.id')
        ->select('csc_details.*', 'csc_sub_categories.title as csc_categories')    
        ->where('csc_details.id', $id)    
        ->get();
        

		$csc_sub_category = DB::table('csc_sub_categories')->get();

        $tiles_specification = csc_tiles_specification::where('list_id', $id)->where('type','detail')->get();
        $colours = csc_colour::where('list_id', $id)->where('type','detail')->get();

    	return view('admin.product.detail_edit',compact('sub_product','tiles_specification','colours','csc_sub_category'));
	}
	public function detail_update(Request $request)
	{
    
		 $unlink_image = csc_detail::where('id', $request->id)->get();

      $this->validate($request,[
                   
                  'title' => 'required|max:255',
                    'alt_banner_image' => 'required|max:255',
                    'price' => 'required|max:255',
                    'description' => 'required',
                    'application' => 'required',
                    'size_price' => 'required',
                    'product_features' => 'required',
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
        
            $request->banner_image->move(public_path('images/product/banner'),$banner_image);

             $image_path = public_path("images/product/banner/".$unlink_image[0]->banner_image); 
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

              $request->image->move(public_path('images/product'),$image);

              $image_path = public_path("images/product/".$unlink_image[0]->image); 
              unlink($image_path);
        }

        if(!empty($request->sub_category))
        {
        /*$sub_category = implode(",",$request->sub_category);*/
        $sub_category = $request->sub_category;
        }
        else
        {
          $sub_category = ''; 
        }


        csc_detail::where('id', $request->id)->update([ 'title'=>$request->title , 'slug'=>$slug,'price'=>$request->price,'banner_image'=>$banner_image,'alt_banner_image'=>$request->alt_banner_image,'sub_category_id'=>$sub_category,'description'=>$request->description,'product_features'=>$request->product_features,'size_price'=>$request->size_price,'application'=>$request->application,'image'=>$image,'image_alt'=>$request->image_alt,'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description , 'meta_keyword'=>$request->meta_keyword ]);

        DB::table('csc_colours')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('csc_tiles_specifications')
        ->where('list_id', $request->id)
        ->where('type', $request->type)
        ->delete();

        DB::table('csc_sub_dets')
        ->where('detail_id', $request->id)
        ->delete();

        if($request->tile_spec_type == 'tile')
        {
             foreach($request->size as $key=>$size)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $request->id;
              $tile->size = $size;
              $tile->sqft = $request->sqft[$key];
              $tile->cost_per_title = $request->cost_per_title[$key];
              $tile->titles_per_box = $request->titles_per_box[$key];
              $tile->cost_per_box = $request->cost_per_box[$key];
              $tile->description = $request->spec_description[$key];
              $tile->tile_code = $request->tile_code[$key];
              $tile->save();
            }    
        }
        elseif($request->tile_spec_type == 'stair')
        {
          
            foreach($request->spec_price as $key=>$price)
            { 
              $tile = new csc_tiles_specification;
              $tile->type = $request->type;
              $tile->list_id = $request->id;
             $tile->price = $price;
            $tile->description = $request->spec_description1[$key];
            $tile->price_per_domes = $request->price_per_domes[$key];
            $tile->domes_per_box = $request->domes_per_box[$key];
            $tile->tile_code = $request->tile_code1[$key];

            $img_spec = time();

            if(!empty($request->img[$key]))
            {
              $tile->img = $request->img[$key]->getClientOriginalName();
              

              $request->img[$key]->move(public_path('images/tiles'),$tile->img);
            }
            else{
              $tile->img =$request->spec_old_img[$key];
            }
            $tile->save();
          }  
            
        }

          foreach($request->name as $key=>$name)
        { 
            $colour = new csc_colour;
            $colour->type = $request->type;
            $colour->list_id = $request->id;
            $colour->name = $request->name[$key];
            $colour->number = $request->number[$key];
            $colour->background_colour = $request->background_colour[$key];
            $colour->colour_code = $request->colour_code[$key];
            $colour->save();
            
        }

        if(!empty($request->sub_category))
        {

            $sol_cat = new csc_sub_det;
            $sol_cat->sub_category_id = $request->sub_category;
            $sol_cat->detail_id = $request->id;
            $sol_cat->save();

        /*foreach($request->sub_category as $key=>$id)
        { 
            $sol_cat = new csc_sub_det;
            $sol_cat->sub_category_id = $id;
            $sol_cat->detail_id = $request->id;
            $sol_cat->save();
        }*/
      }

        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('csc-detail');
	}
	public function detail_delete($id)
	{
		$unlink_image = csc_detail::where('id', $id)->get();

        DB::table('csc_details')->where('id', $id)->delete();
        DB::table('csc_tiles_specifications')->where('list_id', $id)->where('type','detail')->delete();

        DB::table('csc_colours')->where('list_id', $id)->where('type','detail')->delete();
        DB::table('csc_sub_dets')->where('detail_id', $id)->delete();


        $banner = public_path("images/product/banner/".$unlink_image[0]->banner_image);   
        unlink($banner);

        $image = public_path("images/product/".$unlink_image[0]->image);   
        unlink($image);



        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->route('csc-detail');
	}

public function image_get()
{
  if(isset($_FILES['upload']['name']))
  {
    $file = $_FILES['upload']['tmp_name'];
    $file_name = $_FILES['upload']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
    $new_image_name = rand().'.'.$extension;
    $allow_extension = array("jpg","gif","png");
    if(in_array($extension , $allow_extension))
    {

              
  move_uploaded_file($file, public_path('images') .$new_image_name); 
        $function_number = $_GET['CKEditorFuncNum'];
        $url = 'images/' . $new_image_name;
        $message = '';
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number,'$url','$message');</script>";     
    }
  }
}
public function uploader(Request $request){
             if ($this->input->server('REQUEST_METHOD') == 'OPTIONS')
           {
               return true;
           }

       if ($this->input->server('REQUEST_METHOD') == 'POST')
           {
               
               if (!empty($_FILES['upload']['tmp_name'])) {




                           $name = $_FILES['upload']['name'];
                           $size = $_FILES['upload']['size'];
                           $tmp = $_FILES['upload']['tmp_name'];
                           $ext = $this->getExtension($name);
                          
                            
                           $image_name_actual = time().".".$ext;


                            
                       $result = $this->upload_S3Amazon($tmp,$image_name_actual);       

                     

                     
                             if(is_array($result) && isset($result['success'])){
                         
                         $file=array('fileName'=>$image_name_actual,'uploaded'=>1,'url'=>$result['file_link']);
                         echo(json_encode($file));
                         die;

                      }else{
                       $error = "error";
                      }
                            



              }
               
           }
   

       

       die;
}   
}