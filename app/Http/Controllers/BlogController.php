<?php

namespace App\Http\Controllers;
use App\cms;
use App\blog;
use App\blog_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;


class BlogController extends Controller
{
   public function image()
   {
   		return view ('admin.blog.image');
   } 
   public function move(Request $request)
   {
   	$path = $request->image->getClientOriginalName();
   	$request->image->move(public_path('images/blog'),$request->image->getClientOriginalName());
   	//
   }  

   public function slug($slug)
   {
   	$cms = DB::table('cms')->where(['slug'=>$slug])->get();

   	 return abort(404);
    //dd($cms);


   }

   public function category()
   {
      $blog_categories = DB::table('blog_categories')->simplePaginate(15);
      return view('admin.blog.category.category',compact('blog_categories'));
      
   }

   public function category_add()
   {
      return view ('admin.blog.category.category_add');
   }

   public function category_view($id)
   {
        $blog_category= blog_category::find($id);

        return view('admin.blog.category.category_view',compact('blog_category'));
   }

   public function category_save(Request $request)
   {
     

        $this->validate($request,[
                    'category_title' => 'required|unique:blog_categories',
                    'slug' => 'required|unique:blog_categories',
                    'banner_image' => 'required',
                    'alt_banner_image' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
                          
             ]);

      $blog_category = new blog_category;
      $slug = str_replace(' ', '_', strtolower($request->slug));
      $blog_category->category_title = $request->category_title; 
      $blog_category->slug = $slug; 





      $image = time();
      $image_ext = $request->banner_image->getClientOriginalExtension();
      $blog_category->banner_image = $image.".".$image_ext;
      $request->banner_image->move(public_path('images/blog/category'),$blog_category->banner_image);


      $blog_category->alt_banner_image = $request->alt_banner_image;
      $blog_category->meta_title = $request->meta_title;
      $blog_category->meta_description = $request->meta_description;
      $blog_category->meta_keyword = $request->meta_keyword; 
      //$blog_category->slug = $slug;
      $blog_category->save();
      Session::flash('Success', 'Record Successfully submit');
      return redirect()->back();

   }

   public function category_edit($id)
   {
      $blog_category= blog_category::find($id);    
      return view ('admin.blog.category.category_edit',compact('blog_category'));
   }

   public function category_update(Request $request)
   {

    $unlink_image = blog_category::where('id', $request->id)->get();

      $this->validate($request,[
                    'category_title' => 'required|unique:blog_categories,category_title,'.$request->id,
                    'slug' => 'required|unique:blog_categories,slug,'.$request->id,    

                    'alt_banner_image' => 'required|max:255',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',                 
             ]);
     
    $slug = str_replace(' ', '_', strtolower($request->category_title));

     if (empty($request->banner_image))
        {
            $banner_image = $request->old_banner_img; 
        
                      
        }
        else
        {  

            $banner_img= time();
            $banner_ext = $request->banner_image->getClientOriginalExtension();
            $banner_image = $banner_img.".".$banner_ext;
        
            $request->banner_image->move(public_path('images/admin/blog/category'),$banner_image);

            $image_path = public_path("images/admin/blog/category/".$unlink_image[0]->banner_image);   
            unlink($image_path);
            
        }


    $test=blog_category::where('id', $request->id)->update([ 'category_title'=>$request->category_title , 'slug'=>$slug,'banner_image'=>$banner_image ,'alt_banner_image'=>$request->alt_banner_image, 'meta_title'=>$request->meta_title ,'meta_description'=>$request->meta_description ,'meta_keyword'=>$request->meta_keyword]);
       
        Session::flash('update', 'Record Updated Successfully');
        
        return redirect()->route('blog-category');

    dd($request->category_title);
   }
   public function category_delete($id)
   {
    $unlink_image = blog_category::where('id', $id)->get();
       $image = public_path("images/blog/category/".$unlink_image[0]->banner_image);   
      unlink($image);

      DB::table('blog_categories')->where('id', $id)->delete();
        Session::flash('delete', 'Record Deleted Successfully');
        return redirect()->back(); 
   }

   public function blog()
   {
      $blog = DB::table('blogs')
        ->leftJoin('blog_categories', 'blogs.category', '=', 'blog_categories.id')
        ->select('blogs.*', 'blog_categories.category_title')
        ->get();
        
      return view('admin.blog.blog',compact('blog'));
        
   }

   public function blog_add()
   {
      $blog_category = DB::table('blog_categories')->get();
      return view('admin.blog.blog_add',compact('blog_category'));
      
   }

   public function blog_save(Request $request)
   {

       $this->validate($request,[
                    'title' => 'required|unique:blogs|max:255',
                    'description' => 'required',
                    'image' => 'required',
                    'alt_image' => 'required|max:255',
                    'category' => 'required',
                    'meta_title' => 'required|max:255',
                    'meta_description' => 'required|max:255',
                    'meta_keyword' => 'required|max:255',
                    
             ]);

      $slug = str_replace(' ', '_', strtolower($request->title));

      $blog = new blog;  
      $blog->title = $request->title;
      $blog->slug = $slug;
      $blog->description = $request->description;




       
      

      $image = time();
      $image_ext = $request->image->getClientOriginalExtension();
      $blog->image = $image.".".$image_ext;

      $request->image->move(public_path('images/blog'),$blog->image);



      $blog->alt_image = $request->alt_image;
      $blog->category = $request->category;
      $blog->meta_title = $request->meta_title;
      $blog->meta_description = $request->meta_description;
      $blog->meta_keyword = $request->meta_keyword;

      $blog->save();
     
      Session::flash('Success', 'Record Successfully saved');
      return redirect()->route('ablog'); 
   }

   public function blog_view($id)
   {
      
      $blog = DB::table('blogs')
        ->leftJoin('blog_categories', 'blogs.category', '=', 'blog_categories.id')
        ->select('blogs.*', 'blog_categories.category_title')
        ->where('blogs.id', $id)
        ->get();
      
      
      return view('admin.blog.blog_view',compact('blog'));
      
   }

   public function blog_delete($id)
   {
      $unlink_image = blog::where('id', $id)->get();

      DB::table('blogs')->where('id', $id)->delete();

      $image = public_path("images/blog/".$unlink_image[0]->image);   
      unlink($image);

      Session::flash('delete', 'Record Deleted Successfully');
      return redirect()->back();
   }

   public function blog_edit($id)
   {
      $blog_edit = DB::table('blogs')
        ->leftJoin('blog_categories', 'blogs.category', '=', 'blog_categories.id')
        ->select('blogs.*', 'blog_categories.category_title')
        ->where('blogs.id', $id)
        ->get();

      $blog_category = DB::table('blog_categories')->get();  
      
      return view('admin.blog.blog_edit',compact('blog_edit' ,'blog_category'));
      
   }

   public function blog_update(Request $request )
   {
        $unlink_image = blog::where('id', $request->id)->get();

          if (empty($request->image))
        {
            $image = $request->old_image;

            
        }
        else
        {
            


            $banner_img= time();
            $banner_ext = $request->image->getClientOriginalExtension();
            $image = $banner_img.".".$banner_ext;
        
            $request->image->move(public_path('images/blog'),$image);

            $image_path = public_path("images/blog/".$unlink_image[0]->image);   
            unlink($image_path);



        }
        $slug = str_replace(' ', '_', strtolower($request->title));

        blog::where('id', $request->id)->update([ 'title'=>$request->title ,'slug'=>$slug ,'description'=>$request->description,'image'=>$image,'alt_image'=>$request->alt_image , 'category'=>$request->category , 'meta_title'=>$request->meta_title , 'meta_description'=>$request->meta_description  , 'meta_keyword'=>$request->meta_keyword]);
        
        Session::flash('update', 'Record Updated Successfully');
        return redirect()->route('ablog'); 
   }
}
