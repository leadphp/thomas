<?php

namespace App\Http\Controllers;



use PDF;


use DB;   //to connnect database
use App\cms;
use App\newsletter;
use App\tiles_specification;
use App\colour;
use App\csc_tiles_specification;
use App\csc_colour;
use App\quote;
use App\stair_nosing;
use App\exit_sign;
use App\cart_user;
use App\cart_product;

use App\csc_category;
use App\personal_detail;

use Cart;

use App\Mail\Tactile;
use App\Mail\Quote_exit;
use App\Mail\Stair;
use App\Mail\Order_Confirmation;
use App\Mail\Order_Confirmation_Admin;
use App\Mail\Subscription;
use App\Mail\Adminnewsletter;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


   

   
    public function home(Request $request)
    {
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();    

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    

        $requests = DB::table('requests')->get();  

        $references = DB::table('references')->get();  
        
        $sub_references = DB::table('sub_references')->get();                              
               
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();           

        $home_banners = DB::table('home_banners')->get();
        $blog_data = DB::table('blogs')
                    ->leftJoin('blog_categories', 'blog_categories.id', '=', 'blogs.category')
                    ->select('blogs.*' ,'blog_categories.slug as category_slug', DB::raw("DATE_FORMAT(blogs.created_at,  '%D %b %Y') as date"))
                    ->get();
        $how_it_works = DB::table('how_it_works')->get(); 

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();   

        $csc_categories = csc_category::get();                
                
       $about =  DB::table('cms')
                        ->where('slug', 'about')
                        ->first();  

        $solutions =  DB::table('solutions')
                        ->whereIn('id',array(1,4,10,15))
                        ->get();   

        $benefits = DB::table('benefits')->get();                                  

        return view('front.index',compact('header_data','other_cms','home_banners','blog_data','how_it_works','socials','requests','data','references','sub_references','csc_categories','about','solutions','benefits','advert_footer'));
        
    }

    public function about(Request $request)
    {
         
  
     
      //return $pdf->download('customers.pdf');
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first(); // for meta tags 

         $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                  

         return view('front.about_us',compact('header_data','other_cms','socials','requests','advert_footer','data'));                
    }

    public function solutions(Request $request)
    {
        /*return redirect()->action('HomeController@solution_page')->with();*/
        
        


         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first(); // for meta tags 
                        
        $solutions =  DB::table('solutions')->orderBy('number', 'ASC')->get(); 

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  
                         

        return view('front.solution',compact('header_data','other_cms','socials','requests','data','solutions','advert_footer'));
    }

    public function reference(Request $request)
    {
         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();    

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first();                   

        $requests = DB::table('requests')->get();  

        $references = DB::table('references')->get();  

        $sub_references = DB::table('sub_references')->get();   
        
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();    

        return view('front.reference',compact('header_data','other_cms','socials','requests','data','requests','references','sub_references','advert_footer'));

    }
    public function codes(Request $request)
    {
         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();    

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first();                   

        $requests = DB::table('requests')->get();  

        $codes = DB::table('codes')->get();
        
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();     

        return view('front.code',compact('header_data','other_cms','socials','requests','data','requests','codes','advert_footer'));
    }

    public function categories(Request $request)
    {

        /*return redirect('category')->with('');*/

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first(); // for meta tags 
                        
        $csc_categories =  DB::table('csc_categories')->get(); 

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  
                         

        return view('front.csc_category_main',compact('header_data','other_cms','socials','requests','data','csc_categories','advert_footer'));

    }

    public function blog()
    {
       return redirect('blogs')->with('');
    }

    public function contact(Request $request)
    {

        
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first(); 
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                  
                        
        return view('contact.contact',compact('header_data','other_cms','socials','requests','data','advert_footer'));
    }

    public function contact_mail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        
        Mail::to('gautamg64@gmail.com')->send(new Contact($name,$email,$subject,$message));
        Session::flash('contact', 'Mail has been successfully send');
            return redirect()->back(); 
    }

    public function cms(Request $request)
    {
         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $data =  DB::table('cms')
                        ->where('slug', $request->path())
                        ->first();

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                  

        return view('front.cms',compact('header_data','other_cms','socials','requests','data','advert_footer'));                 
    }

    public function inner($slug)
    {
    
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    
        $requests = DB::table('requests')->get();

         $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();       

         $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first(); 
                        //$request->session()->forget('shipping');
                       /// $request->session()->forget('user_details');
                        
                //dd(session()->all());        
       
        return view('front.inner',compact('header_data','other_cms','socials','requests','data','advert_footer'));
    }

        public function inner4()
    {
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                                      
        
        return view('front.inner4',compact('header_data','other_cms','socials','requests','data','advert_footer'));
    }



       public function inner2()
    {
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        //return redirect()->action('HomeController@inner','ss');                                    
        
       return view('front.inner2',compact('header_data','other_cms','socials','requests','data','advert_footer'));
    }

         public function inner3()
    {
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();      

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                                    
        
        return view('front.inner3',compact('header_data','other_cms','socials','requests','data','advert_footer'));
    }





    public function newsletter(Request $request)
    {
        $this->validate($request,[
                    
                    'email' => 'required|max:150|unique:newsletters',
                    
                    
             ]);

        $newsletter = new newsletter;
        $newsletter->email = $request->email;       
        $newsletter->save();
        Mail::to($request->email)->send(new Subscription($request->email));
        Mail::to('csc@csc-inc.ca')->send(new Adminnewsletter($request->email));
        
        Session::flash('newsletter', 'Successfully submit');
        return Redirect::back();
    }

   

    public function solution_page($slug)
    {
      
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        
                        
        $solutions =  DB::table('solutions')->orderBy('number', 'ASC')->get(); 

        

        if(empty($slug))
        {
               $data =  DB::table('solutions')->orderBy('id', 'ASC')->first();// use for meta tags as well
               if (empty($data))
            {
             return abort(404); 
            }
               
            
        }
        else
        {
            $data =  DB::table('solutions')->where('slug',$slug)->first(); // use for meta tags as well
            
            if (empty($data))
            {
             return abort(404); 
            }  
        }

                         
        $category_data = DB::table('categories')
                    ->leftJoin('sol_cats', 'categories.id', '=', 'sol_cats.category_id')
                    ->leftjoin('csc_categories', 'categories.csc_category_id', '=', 'csc_categories.id')
                    ->select('categories.*','csc_categories.slug as csc_slug')    
                    ->where('sol_cats.solution_id',$data->id)  
                    ->get();  
                    ///// Solution Related Category


         $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();             

        return view('front.solution_page',compact('header_data','other_cms','socials','requests','data','solutions','category_data','advert_footer'));
    }      

    public function solution_category($slug,$slug1)
    {
        
         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  
                        
        $solutions =  DB::table('solutions')->orderBy('number', 'ASC')->get(); 

        $main_solution =  DB::table('solutions')->where('slug',$slug)->first();
        
        if(!empty($main_solution))
        {
            $data = DB::table('categories')
                    ->leftJoin('sol_cats', 'categories.id', '=', 'sol_cats.category_id')
                    ->leftjoin('csc_categories', 'categories.csc_category_id', '=', 'csc_categories.id')
                    ->select('categories.*','csc_categories.slug as csc_slug')    
                    ->where('sol_cats.solution_id',$main_solution->id)
                    ->where('categories.slug',$slug1)  
                    ->first();  
                    
            if(!empty($data))
            {
                /*$sub_category = DB::table('sub_categories')->where('category_id',$data->id)->get();*/

                $category_data = DB::table('sub_categories')
                    
                    ->leftjoin('csc_categories', 'sub_categories.csc_category_id', '=', 'csc_categories.id')
                    ->select('sub_categories.*','csc_categories.slug as csc_slug')    
                    
                    ->where('sub_categories.category_id',$data->id)  
                    ->get();

                    
            }   
            else
            {
                return abort(404);
            }     
        }
        else
        {
            return abort(404); 
        }

        return view('front.solution_sub_page',compact('header_data','other_cms','socials','requests','data','solutions','category_data','main_solution','advert_footer'));

    }

  /*   public function solution_singlepage($slug)
    {
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();      

        $requests = DB::table('requests')->get();      

        $data = DB::table('solutions')
                     ->where('slug', $slug)
                     ->first();

        if (empty($data))
        {
         return abort(404); 
        }               

        $tiles_specification = tiles_specification::where('list_id',$data->id)->where('type','solution')->get();
        $colours = colour::where('list_id',$data->id)->where('type','solution')->get();             
        
                                       
        
        return view('front.solution-single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours'));
    }*/


   /* public function category_page($slug)
    {

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();   ///used for header

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  //used for footer cms

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();  //used for social icons

        $requests = DB::table('requests')->get();  //used for requests

        
                        
        $solutions =  DB::table('solutions')->get(); // used navigation

        $data =  DB::table('categories')->where('slug',$slug)->first(); // use for meta tags as well
        
         if (empty($data))
        {
         return abort(404); 
        } 

        $sub_category = DB::table('sub_categories')
                        ->leftJoin('cat_subcats', 'sub_categories.id', '=', 'cat_subcats.sub_category_id')
                        ->select('sub_categories.*')    
                        ->where('cat_subcats.category_id',$data->id)  
                        ->get();
                    ///// Solution Related Category




        return view('front.category_page',compact('header_data','other_cms','socials','requests','data','solutions','sub_category'));              

       
    } */     

  /*  public function category_singlepage($slug)
    {

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();   ///used for header

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  //used for footer cms

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();  //used for social icons

        $requests = DB::table('requests')->get();  //used for requests

        
                        
        

        $data =  DB::table('categories')->where('slug',$slug)->first(); // use for meta tags as well
        
         if (empty($data))
        {
         return abort(404); 
        }  

        $tiles_specification = tiles_specification::where('list_id',$data->id)->where('type','category')->get();
        $colours = colour::where('list_id',$data->id)->where('type','category')->get();    

        return view('front.category-single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours'));
    }*/

/*    public function sub_category_page($slug)
    {
        dd($slug);
    }*/

    public function csc_category_page($slug='')
    {
         $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();          
                        
        $csc_category =  DB::table('csc_categories')->get(); 

        

        if(empty($slug))
        {
               $data =  DB::table('csc_categories')->orderBy('id', 'ASC')->first();// use for meta tags as well
               if (empty($data))
            {
             return abort(404); 
            }
               
            
        }
        else
        {
            $data =  DB::table('csc_categories')->where('slug',$slug)->first(); // use for meta tags as well
            
            if (empty($data))
            {
             return abort(404); 
            }  
            else
            {
                $quote_variable = $data->product_type;
                $quote_id = $data->id;
            }

        }

        if($data->csc_type == 'only')
        {
            $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','category')->get();
            $colours = csc_colour::where('list_id',$data->id)->where('type','category')->get();
            $codes = DB::table('codes')->get();
            $references = DB::table('references')->get();       
            $sub_references = DB::table('sub_references')->get(); 

            $advert_sidebar = DB::table('advertisements')
                        ->where('type', 'sidebar')
                        ->first();  

        return view('front.product_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','codes','references','sub_references','advert_footer','advert_sidebar'));
        }
        else
        {
            $sub_categories = DB::table('csc_sub_categories')
                        ->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
                        ->select('csc_sub_categories.*')    
                        ->where('csc_cat_subs.category_id',$data->id) 
                        ->orderBy('csc_sub_categories.id', 'ASC') 
                        ->get();  
                        
            return view('front.csc_category',compact('header_data','other_cms','socials','requests','data','csc_category','sub_categories','quote_variable','quote_id','advert_footer'));
        }
    }

    public function csc_sub_category_page($slug,$slug1)
    {
           $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        $csc_category =  DB::table('csc_categories')->get(); 

        $main_category =  DB::table('csc_categories')->where('slug',$slug)->first();

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        if(!empty($main_category))
        {
           // $slug1 =  DB::table('csc_sub_categories')->where('slug',$slug1)->get();    
                    
            //$check = DB::table('csc_cat_subs')->where('category_id',$main_category->id)->where('sub_category_id',$data->id)->first();
                    
               $data = DB::table('csc_sub_categories')
                        ->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
                        ->select('csc_sub_categories.*') 
                        ->where('csc_sub_categories.slug' ,$slug1)   
                        ->where('csc_cat_subs.category_id',$main_category->id)  
                        ->first();

                     
                

                if(empty($data))
                {
                    return abort(404);
                }        
                else
                {
                     $check = DB::table('csc_cat_subs')->where('category_id',$main_category->id)->where('sub_category_id',$data->id)->first();
                     if(empty($check))
                     {
                        return abort(404);
                     }
                }
        }
        else
        {
                return abort(404); 
        }


        if($main_category->csc_type == 'single')
        {
             $related_data = DB::table('csc_sub_categories')
                     ->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
                     ->select('csc_sub_categories.*') 
                     ->where('csc_cat_subs.category_id',$main_category->id)  
                     ->get();

            $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','sub-category')->get();
            $colours = csc_colour::where('list_id',$data->id)->where('type','sub-category')->get(); 
            $codes = DB::table('codes')->get();
            $references = DB::table('references')->get();        
            $sub_references = DB::table('sub_references')->get(); 

            $advert_sidebar = DB::table('advertisements')
                        ->where('type', 'sidebar')
                        ->first();  

            return view('front.product_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','related_data','main_category','codes','references','sub_references','advert_footer','advert_sidebar'));
        }
        else
        {

             $related_product = DB::table('csc_details')
                        ->leftJoin('csc_sub_dets', 'csc_details.id', '=', 'csc_sub_dets.detail_id')
                        ->select('csc_details.*')    
                        ->where('csc_sub_dets.sub_category_id',$data->id)  
                        ->orderBy('csc_details.id', 'ASC')
                        ->get();  
              if($related_product->isempty())          
              {

                $related_data = DB::table('csc_sub_categories')
                     ->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
                     ->select('csc_sub_categories.*') 
                     ->where('csc_cat_subs.category_id',$main_category->id)  

                     ->get();


                $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','sub-category')->get();
                $colours = csc_colour::where('list_id',$data->id)->where('type','sub-category')->get();
                $codes = DB::table('codes')->get();
                $references = DB::table('references')->get();  
                $sub_references = DB::table('sub_references')->get(); 

                $advert_sidebar = DB::table('advertisements')
                        ->where('type', 'sidebar')
                        ->first();  
            
                return view('front.product_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','main_category','related_data','codes','references','sub_references','advert_footer','advert_sidebar'));
              }
              else
              {
                
                return view('front.csc_sub_category',compact('header_data','other_cms','socials','requests','data','csc_category','related_product','main_category','advert_footer'));
               } 
        }











    }

    public function csc_category_single_page($slug)
    {

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();   ///used for header

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  //used for footer cms

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();  //used for social icons

        $requests = DB::table('requests')->get();  //used for requests

        
         $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();                 
        

        $data =  DB::table('csc_categories')->where('slug',$slug)->first(); // use for meta tags as well
        
         if (empty($data))
        {
         return abort(404); 
        }  

        $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','category')->get();
        $colours = csc_colour::where('list_id',$data->id)->where('type','category')->get();    

        return view('front.csc_category_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','advert_footer'));
    }

    public function csc_sub_category_single_page($slug,$slug1)
    {


        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();   ///used for header

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  //used for footer cms

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();  //used for social icons

        $requests = DB::table('requests')->get();  //used for requests

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  


         $category =  DB::table('csc_categories')->where('slug',$slug)->first();
        if(!empty($category))
        {
            $data =  DB::table('csc_sub_categories')->where('slug',$slug1)->first();
        }
        else
        {
                return abort(404); 
        }

          $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','sub-category')->get();
        $colours = csc_colour::where('list_id',$data->id)->where('type','sub-category')->get();    

        return view('front.csc_sub_category_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','advert_footer'));
    }


    public function csc_product($slug,$slug1,$slug2)
    {
        $category =  DB::table('csc_categories')->where('slug',$slug)->first();

        if(!empty($category))
        {
            $sub_category = DB::table('csc_sub_categories')
                        ->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
                        ->select('csc_sub_categories.*') 
                        ->where('csc_sub_categories.slug' ,$slug1)   
                        ->where('csc_cat_subs.category_id',$category->id)  
                        ->first();
                        
             if(!empty($sub_category))
             {

                        
                        $data = DB::table('csc_details')
                        ->leftJoin('csc_sub_dets', 'csc_details.id', '=', 'csc_sub_dets.detail_id')
                        ->select('csc_details.*')    
                        ->where('csc_sub_dets.sub_category_id',$sub_category->id)  
                        ->where('csc_details.slug',$slug2)  
                        ->first();  


                        
                        if(empty($data))
                        {
                            return abort(404);
                        }
                     
                               
             }
             else
             {
                return abort(404);
             }

        }   
        else
        {
            return abort(404);
        }

           $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();   ///used for header
            $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();              

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  //used for footer cms

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();  //used for social icons

        $requests = DB::table('requests')->get();  //used for requests

        $tiles_specification = csc_tiles_specification::where('list_id',$data->id)->where('type','detail')->get();
        $colours = csc_colour::where('list_id',$data->id)->where('type','detail')->get();  

        $related_data = DB::table('csc_details')
                ->leftJoin('csc_sub_dets', 'csc_details.id', '=', 'csc_sub_dets.detail_id')
                ->select('csc_details.*')    
                ->where('csc_sub_dets.sub_category_id',$sub_category->id)  
                ->get();  
        $codes = DB::table('codes')->get();
        $references = DB::table('references')->get();         
        $sub_references = DB::table('sub_references')->get(); 

        $quote_variable = $category->product_type;
        $quote_id = $category->id;
        $end_leaf = $data->put_type;

        $advert_sidebar = DB::table('advertisements')
                        ->where('type', 'sidebar')
                        ->first();  

        return view('front.product_single',compact('header_data','other_cms','socials','requests','data','tiles_specification','colours','category','sub_category','related_data','codes','references','sub_references','quote_variable','quote_id','end_leaf','advert_footer','advert_sidebar'));
        

    }




/*    Blog Functions  Blog Functions  Blog Functions   */


    public function blogs($slug='')
    {
    

       $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

        
                        
        $blog_categories =  DB::table('blog_categories')->get(); 

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        if(empty($slug))
        {
               $data =  DB::table('blog_categories')->orderBy('id', 'ASC')->first();// use for meta tags as well
               
               if (empty($data))
                {
                    return abort(404); 
                }
              
               
            
        }
        else
        {
            $data =  DB::table('blog_categories')->where('slug',$slug)->first(); // use for meta tags as well
            
            if (empty($data))
            {
             return abort(404); 
            }  
        }

                         
        $blog_data = DB::table('blogs')
                    ->leftJoin('blog_categories', 'blogs.category', '=', 'blog_categories.id')
                    ->select('blogs.*','blog_categories.slug as cat_slug')    
                    ->where('blog_categories.id',$data->id)  
                    ->get();  
                    /////   Category Related Blogs  

                    


        return view('front.blog_page',compact('header_data','other_cms','socials','requests','blog_categories','data','blog_data','advert_footer'));
    }

    public function blogs_single($slug,$slug1)
    {



        $category =  DB::table('blog_categories')->where('slug',$slug)->first();

        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        if(!empty($category))
        {
            $data =  DB::table('blogs')->where('slug',$slug1)->where('category',$category->id)->first(); 

            $related_blogs =  DB::table('blogs')->where('category',$category->id)->get(); 
            
            if(empty($data))
            {
                return abort(404);       
            }          
        }
        else
        {
             return abort(404); 
        }


        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();  

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get(); 

        $requests = DB::table('requests')->get();

         return view('front.blog-page-single',compact('header_data','other_cms','socials','requests','data','related_blogs','category','advert_footer'));
    }



/*    Blog Functions  Blog Functions  Blog Functions   */






public function test()
{
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();    

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    

        $requests = DB::table('requests')->get();                              
                   
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        $home_banners = DB::table('home_banners')->get();

        $blog_data = DB::table('blogs')
                    ->leftJoin('blog_categories', 'blog_categories.id', '=', 'blogs.category')
                    ->select('blogs.*' ,'blog_categories.slug as category_slug', DB::raw("DATE_FORMAT(blogs.created_at,  '%D %b %Y') as date"))
                    ->get();

                    

        $how_it_works = DB::table('how_it_works')->get(); 

        $data =  DB::table('cms')
                        ->where('slug', 'home')
                        ->first();            
                
       

        return view('front.test',compact('header_data','other_cms','home_banners','blog_data','how_it_works','socials','requests','data','advert_footer'));    
}
    
    public function quote(Request $request)
    {   
        
        if($request->product == 'Tactile')
        {
            $quote = new quote();
            $quote->name = $request->name;
            $quote->lname = $request->lname;
            $quote->email = $request->email;
            $quote->phone = $request->phone;
            $quote->company_name = $request->company_name; 
            $quote->put = $request->put;
            $quote->material = $request->material;
            if($quote->material == 'Wet Concrete')
            {
                $quote->type = $request->wet_type;   
            }
            elseif($quote->material == 'Glue it on top of existent surface')
            {
                $quote->type = $request->surface_type;       
            }
            elseif($quote->material == 'Drill Single Domes or Bars')
            {
                $quote->type = $request->dome_type;       
            }
            
            $quote->att_domes = $request->att_domes;
              
            $quote->area = $request->area;
            $quote->shipped = $request->shipped;
            $quote->additional = $request->additional;
            $quote->save();

              Mail::to('csc@csc-inc.ca')->send(new Tactile($request->name,$request->lname,$request->email,$request->phone,$request->company_name,$request->put,$request->material,$quote->type,$request->att_domes,$request->area,$request->shipped,$request->additional));
            return Redirect::back();
        }
        elseif($request->product == 'Stair Nosing')
        {
            $stair_nosing = new stair_nosing();
            $stair_nosing->name = $request->name;
            $stair_nosing->lname = $request->lname;
            $stair_nosing->email = $request->email;
            $stair_nosing->phone = $request->phone;
            $stair_nosing->company_name = $request->company_name;
            $stair_nosing->stair_put = $request->stair_put;
            $stair_nosing->photoluminescent = $request->photoluminescent;
            $stair_nosing->stair_width = $request->stair_width;
            $stair_nosing->shipped = $request->shipped;
            $stair_nosing->additional = $request->additional;
            $stair_nosing->save();
            Mail::to('csc@csc-inc.ca')->send(new Stair($request->name,$request->lname,$request->email,$request->phone,$request->company_name,$request->stair_put,$request->photoluminescent,$request->stair_width,$request->shipped,$request->additional));

            return Redirect::back();
        }
        elseif($request->product =='Exit Signs')
        {

            $exit_sign = new exit_sign();
            $exit_sign->name = $request->name;
            $exit_sign->lname = $request->lname;
            $exit_sign->email = $request->email;
            $exit_sign->phone = $request->phone;
            $exit_sign->company_name = $request->company_name;
            $exit_sign->shipped = $request->shipped;
            $exit_sign->additional = $request->additional;
            $exit_sign->exit_put = $request->exit_put;
            if($request->exit_put == 'At Exit Door')
            {
                
                $exit_sign->mountain_kit = $request->mountain_kit;
                $exit_sign->direction = $request->exit_direction;
                $exit_sign->need = $request->exit_need;
            }
            elseif ($request->exit_put == 'Pathmarking to Exit Door')
            {
                
                $exit_sign->direction = $request->path_direction;
                $exit_sign->need = $request->path_need;
                

            }
            $exit_sign->save();
            Mail::to('csc@csc-inc.ca')->send(new Quote_exit($exit_sign->name,$exit_sign->lname,$exit_sign->email,$exit_sign->phone,$exit_sign->company_name,$exit_sign->shipped,$exit_sign->additional,$exit_sign->exit_put,$exit_sign->mountain_kit,$exit_sign->direction,$exit_sign->need));
            return Redirect::back();

        }    
        
        
    }

    public function cstm_search(Request $request)
    {
        if($request->ajax())
     {
      $output = '';
      $query = $request->get('value');

      if($query != '')
      {
          //========================= Solutions  ======================  
               $solutions = DB::table('solutions')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')                        
                         ->get();

              $sol = $solutions->count();

                $output .= '<li class="search-title"><a href="javascript:void(0);">Solution</a></li>';
               if($sol > 0)
              {
                 foreach($solutions as $solution)
               {
            
                
                $url='solution/'.$solution->slug;    

                $output .= '
                <li><a href="'.url($url).'">'.$solution->title.'</a></li>';
               }
              }
              else
              {
                 $output .= '<li><a href="javascript:void(0);">No data Found</a></li>';
              } 

  



     //========================= Solutions  ======================     
     //========================= Category  ======================    
       $data = DB::table('csc_categories')
         ->where('title', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orWhere('product_features', 'like', '%'.$query.'%')
         ->orWhere('size_price', 'like', '%'.$query.'%')
         ->orWhere('application', 'like', '%'.$query.'%')
         
         ->get();

         

               $total_row = $data->count();

                $output .= '<li class="search-title"><a href="javascript:void(0);">Brands</a></li>';
              if($total_row > 0)
              {

                 foreach($data as $row)
               {
                $url='category/'.$row->slug;
                $output .= '
                <li><a href="'.url($url).'">'.$row->title.'</a></li>';
               }
              }
              else
              {
                 $output .= '<li><a href="javascript:void(0);">No data Found</a></li>';
              } 

     //========================= Category  ======================          

 //========================= Sub Category  ======================
              $sub_category = DB::table('csc_sub_categories')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')
                         ->orWhere('product_features', 'like', '%'.$query.'%')
                         ->orWhere('size_price', 'like', '%'.$query.'%')
                         ->orWhere('application', 'like', '%'.$query.'%')                         
                         ->get();

              $sub = $sub_category->count();

                $output .= '<li class="search-title"><a href="javascript:void(0);">Applications</a></li>';
               if($sub > 0)
              {
                 foreach($sub_category as $sub_cat)
               {
                $main_category = DB::table('csc_categories')
                         ->where('id',$sub_cat->category_id)->first();
                $url='category/'.$main_category->slug.'/'.$sub_cat->slug;    

                $output .= '
                <li><a href="'.url($url).'">'.$sub_cat->title.'</a></li>';
               }
              }
              else
              {
                 $output .= '<li><a href="javascript:void(0);">No data Found</a></li>';
              } 
         
     //========================= Sub Category  ======================

     //========================= Detail  ======================
         $details = DB::table('csc_details')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')
                         ->orWhere('product_features', 'like', '%'.$query.'%')
                         ->orWhere('size_price', 'like', '%'.$query.'%')
                         ->orWhere('application', 'like', '%'.$query.'%')                        
                         ->get();

              $detail = $details->count();

                $output .= '<li class="search-title"><a href="javascript:void(0);">Products</a></li>';
               if($detail > 0)
              {
                 foreach($details as $det)
               {
                $related_category = DB::table('csc_categories')
                    ->leftJoin('csc_sub_categories', 'csc_categories.id', '=', 'csc_sub_categories.category_id')
                    ->select('csc_categories.slug as category','csc_sub_categories.slug as sub_category')    
                    ->where('csc_sub_categories.id',$det->sub_category_id)  
                    ->first(); 
                
                $url='category/'.$related_category->category.'/'.$related_category->sub_category.'/'.$det->slug;    

                $output .= '
                <li><a href="'.url($url).'">'.$det->title.'</a></li>';
               }
              }
              else
              {
                 $output .= '<li><a href="javascript:void(0);">No data Found</a></li>';
              } 
           
     //========================= Detail  ======================    
       
         
         
      }   
      else
      {
         $output = '<li><a href="index.html">No data Found</a></li>';
      }
      $data = array(
       'table_data'  => $output,
       
      );

      echo json_encode($data);
    }
    }

    public function cstm_search_page(Request $request)
    {


            $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();    

        $socials = DB::table('socials')
                        ->where('id', '1')
                        ->get();    

        $requests = DB::table('requests')->get();   


        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first(); 
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        if(!empty($request->search))

        {

            $query= $request->search;
                 $category = DB::table('csc_categories')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')
                         ->orWhere('product_features', 'like', '%'.$query.'%')
                         ->orWhere('size_price', 'like', '%'.$query.'%')
                         ->orWhere('application', 'like', '%'.$query.'%')
                         ->get();
                         DB::enableQueryLog();
           $solutions = DB::table('solutions')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')                        
                         ->get();

    $sub_category = DB::table('csc_sub_categories')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')
                         ->orWhere('product_features', 'like', '%'.$query.'%')
                         ->orWhere('size_price', 'like', '%'.$query.'%')
                         ->orWhere('application', 'like', '%'.$query.'%')                         
                         ->get();


    $details = DB::table('csc_details')
                         ->where('title', 'like', '%'.$query.'%')
                         ->orWhere('description', 'like', '%'.$query.'%')
                         ->orWhere('product_features', 'like', '%'.$query.'%')
                         ->orWhere('size_price', 'like', '%'.$query.'%')
                         ->orWhere('application', 'like', '%'.$query.'%')                        
                         ->get();            
                         

         $exist='yes';                                 
                           
        return view('front.search',compact('header_data','other_cms','socials','requests','data','category','solutions','sub_category','details','advert_footer','exist'));                   

        $home_banners = DB::table('home_banners')->get();
        }
        else
        {
            $exist='no';
            return view('front.search',compact('header_data','other_cms','socials','requests','data','advert_footer','exist'));  
        }
    }

    public function add_to_cart(Request $request)
    {
        //echo "$request->cart_id";
        $product = DB::table('csc_tiles_specifications')->where('id', $request->cart_id)->first(); 
        
        
        if($product->type =='sub-category' && ($product->list_id == '17' ||$product->list_id == '18'))
        {
            $exit ='yes';
        }
        else
        {
            $exit ='no';
        }
        if(!empty($product->size))
        {
            $colour=''; 
        }
        else
        {
            $colour='no colour';
        }
        if(!empty($product->cost_per_box))
        {
            $price = $product->cost_per_box; 
        }
        else
        {
            $price = $product->price;
        }
        $cartCollection =  Cart::get($product->id);
           if(empty($cartCollection))
           {
                Cart::add(array(
                    'id' => "$product->id",
                    'name' => "$product->description",
                    'price' => "$price",
                    'quantity' => 1,
                    'attributes' => array(
                        'product_url' => "$request->product_url",
                        'product_price' => "$price",
                        'product_type' => "$product->type",
                        'list_id' => "$product->list_id",
                        'inch' =>'12',
                        'colour'=>$colour,
                        'width_per_inch'=>"$price",
                        'id' =>"$product->id",
                        't_code' => "$product->tile_code",
                        'c_code' => "empty",
                        'exit' => "$exit"
                        )
                ));

             $totalqty=Cart::getTotalQuantity();
             
             echo json_encode(array("status"=>"added","totalqty"=>"$totalqty"));
           }
           else
           {
             $id = rand();
             Cart::add(array(
                    'id' => "$id",
                    'name' => "$product->description",
                    'price' => "$price",
                    'quantity' => 1,
                    'attributes' => array(
                        'product_url' => "$request->product_url",
                        'product_price' => "$price",
                        'product_type' => "$product->type",
                        'list_id' => "$product->list_id",
                        'inch' =>'12',
                        'colour'=>$colour,
                        'width_per_inch'=>"$price",
                        'id' =>"$product->id",
                        't_code' => "$product->tile_code",
                        'c_code' => "empty"
                        )
                ));
            $totalqty=Cart::getTotalQuantity();
            echo json_encode(array("status"=>"added","totalqty"=>"$totalqty"));
            //echo json_encode(array("status"=>"not","totalqty"=>"$totalqty"));
           }
          
           // $cartCollection = Cart::getContent('451');

    }

       public function cart()
    {
        Cart::clearCartConditions();

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();      

         $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();                 

        $requests = DB::table('requests')->get();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();       

         $cartCollection = Cart::getContent();  

        $cart_items = $cartCollection->sort();                            
        
        return view('front.cart',compact('header_data','other_cms','socials','requests','data','advert_footer','cart_items'));
    }

    public function remove_cart(Request $request)
    {
        Cart::remove($request->cart_id);
        $totalqty=Cart::getTotalQuantity();
        echo json_encode(array("status"=>"remove","totalqty"=>"$totalqty"));
    }

    public function cart_update(Request $request)
    {
        $info = Cart::get($request->cart_id);
        /*dd($info->price);*/  
        if($request->product_type == 'stair')
        {
            $price = ($request->inch/12*$info->attributes->product_price);
            $qty = $request->qty - $info->quantity;
             Cart::update($request->cart_id, array(
          
          'price' => $price, // new item price, price can also be a string format like so: '98.67'
          'quantity' => $qty,
           'attributes' => array(
                        'product_url' => $info->attributes->product_url,
                        'product_price' => $info->attributes->product_price,
                        'product_type' => $info->attributes->product_type,
                        'list_id' => $info->attributes->list_id,
                        'inch' => $request->inch,
                        'colour' => 'no colour',
                        'width_per_inch'=>"$price",
                        'id' =>$info->attributes->id,
                        't_code' => $info->attributes->t_code,
                        'c_code' => 'empty'
                        )
        ));
        }
    else
    {
/*       $price = $info->attributes->product_price * $request->qty;*/
       $qty = $request->qty - $info->quantity;
         Cart::update($request->cart_id, array(
          
          /*'price' => $price,*/ // new item price, price can also be a string format like so: '98.67'
          'quantity' => $qty,
     
        ));
    }
    $product_data = Cart::get($request->cart_id);
        $totalqty=Cart::getTotalQuantity();
        echo json_encode(array("status"=>"update","totalqty"=>"$totalqty","product"=>"$product_data"));
    }

    public function cart_check(Request $request)
    {
        
        $cartCollection = Cart::getContent();
        //dd(json_decode($cartCollection));
        return $cartCollection;

        
    }

    public function cart_colour(Request $request)
    {
        $info = Cart::get($request->cart_id);

        Cart::update($request->cart_id, array(
            
           'attributes' => array(
                        'product_url' => $info->attributes->product_url,
                        'product_price' => $info->attributes->product_price,
                        'product_type' => $info->attributes->product_type,
                        'list_id' => $info->attributes->list_id,
                        'inch' => $info->attributes->inch,
                        'colour' => $request->colour,
                        'id' =>$info->attributes->id,
                        't_code' => $info->attributes->t_code,
                        'c_code' => $request->c_code

                        )
        ));

        echo json_encode(array("colour"=>"changed"));
    }


    public function cart_stair_quant(Request $request)
    {

        $info = Cart::get($request->cart_id);

           $price = ($request->inch/12*$info->attributes->product_price);
            $qty = $request->qty - $info->quantity;
             Cart::update($request->cart_id, array(
          
          'price' => $price, // new item price, price can also be a string format like so: '98.67'
          'quantity' => $qty,
           'attributes' => array(
                        'product_url' => $info->attributes->product_url,
                        'product_price' => $info->attributes->product_price,
                        'product_type' => $info->attributes->product_type,
                        'list_id' => $info->attributes->list_id,
                        'inch' => $request->inch,
                        'colour' => 'no colour',
                        'width_per_inch'=>"$price",
                        'id' =>$info->attributes->id,
                        't_code' => $info->attributes->t_code,
                        'c_code' => 'empty'
                        )
        ));
            

             $product_data = Cart::get($request->cart_id);
            $totalqty=Cart::getTotalQuantity();

            $price=$product_data->getPriceSum();

             echo json_encode(array("status"=>"update","product"=>"$product_data","totalqty"=>"$totalqty","price"=>"$price"));
    }


    public function cart_width_update(Request $request)
    {
            $info = Cart::get($request->cart_id);
        
        if($request->product_type == 'stair')
        {
            $price = ($request->inch/12*$info->attributes->product_price);
            $qty = $request->qty - $info->quantity;
             Cart::update($request->cart_id, array(
          
          'price' => $price, // new item price, price can also be a string format like so: '98.67'
          'quantity' => array(
            'relative' => false,
            'value' => '1'
            ),
           'attributes' => array(
                        'product_url' => $info->attributes->product_url,
                        'product_price' => $info->attributes->product_price,
                        'product_type' => $info->attributes->product_type,
                        'list_id' => $info->attributes->list_id,
                        'inch' => $request->inch,
                        'colour' => 'no colour',
                        'width_per_inch'=>"$price",
                        'id' =>$info->attributes->id,
                        't_code' => $info->attributes->t_code,
                        'c_code' => 'empty'
                        )
        ));
               $product_data = Cart::get($request->cart_id);
        $totalqty=Cart::getTotalQuantity();
        echo json_encode(array("status"=>"update","totalqty"=>"$totalqty","product"=>"$product_data"));
        }
    }

    public function add_more_item(Request $request)
    {
        $info = Cart::get($request->id);

        $id = rand();
            Cart::add(array(
    'id' => "$id",
    'name' => "$info->name",
    'price' => "$info->price",
    'quantity' => "$info->quantity",
    'attributes' => array(
        'product_url' => $info->attributes->product_url,
        'product_price' => $info->attributes->product_price,
                        'product_type' => $info->attributes->product_type,
                        'list_id' => $info->attributes->list_id,
                        'inch' => $info->attributes->inch,
                        'colour' => 'no colour',
                        'width_per_inch'=>$info->attributes->width_per_inch,
                        'id' =>$info->attributes->id,
                         't_code' => $info->attributes->t_code,
                        'c_code' => 'empty'
        )
));
            $totalqty=Cart::getTotalQuantity();
            echo json_encode(array("status"=>"added","totalqty"=>"$totalqty"));


          
    }

    public function personal_details(Request $request)
    {
        if(Cart::isEmpty() =='true' )
        {
            return redirect()->route('cart');
        }
        else
        {

        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();   

        $codes = DB::table('codes')
                        ->get();     

         if(Session::has('user_details'))
         {               
            $user_details=$request->session()->get('user_details' );
            $user = json_decode($user_details);
          }
          else
          {
            $user='';
          }                                                                   
        
        return view('front.personal_details',compact('header_data','other_cms','socials','requests','data','advert_footer','codes','user'));
    }
    }

    public function shipping(Request $request)
    {

                 
        if(!Session::has('user_details') )
        {
            return redirect()->route('cart');
        }
        else
        {


        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();       

        if(Session::has('shipping') )
        {
            $shipping_session = $request->session()->get('shipping' );
            $shipping =$shipping_session[0]['shipping'];                                              
            
        }   
        else
        { 
            $shipping = ''; 
        }             
        
        return view('front.shipping',compact('header_data','other_cms','socials','requests','data','advert_footer','shipping'));
       } 
    }

    public function p_details(Request $request)
    {
             if($request->bill_shipp =='on')
            {
            $s_company = $request->company;
            $s_address = $request->address;
            $s_address1 = $request->address1;
            $s_city = $request->city;
            $s_province = $request->province;
            $s_zipcode = $request->zipcode;  
            //$s_add_info = $request->add_info;
            }
            else
            {
            $s_company = $request->s_company;
            $s_address = $request->s_address;
            $s_address1 = $request->s_address1;
            $s_city = $request->s_city;
            $s_province = $request->s_province;
            $s_zipcode = $request->s_zipcode;
            //$s_add_info = $request->s_add_info;
            }
           $cart_user = [];
            $cart_user[] = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            
            'company' => $request->company,
            'address' => $request->address,
            'address1' => $request->address1,
            'city' => $request->city,
            'province' => $request->province,
            'zip_code' => $request->zipcode,
            'add_info' => $request->additional_info,

            's_company' => $s_company,
            's_address' => $s_address,
            's_address1' => $s_address1,
            's_city' => $s_city,
            's_province' => $s_province,
            's_zipcode' => $s_zipcode,
            
            
            'bill_shipp' => $request->bill_shipp
            
        ];
        $user = json_encode($cart_user);
        
        $request->session()->put('user_details', $user);
        return redirect()->route('shipping');
        //dd($request->session()->get('user_details' ));
        
        /*$cart_user = new cart_user();
        
        $cart_user->fname = $request->fname;
        $cart_user->lname = $request->lname;
        $cart_user->email = $request->email;
        $cart_user->password = $request->password;
        $cart_user->dob = $request->dd.'/'.$request->mm.'/'.$request->yy;
        $cart_user->company = $request->company;
        $cart_user->address = $request->address;
        $cart_user->city = $request->city;
        $cart_user->province = $request->province;
        $cart_user->zip_code = $request->zipcode;
        $cart_user->country = 'Canada';
        $cart_user->add_info = $request->additional_info;
        $cart_user->phone_number = $request->phone_number;
        $cart_user->save();*/

    }

    public function payment(Request $request)
    {
         
    $config_vars =   array(
    'authorizationRequestUrl' => 'https://appcenter.intuit.com/connect/oauth2',
    'tokenEndPointUrl' => 'https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer',
    'client_id' => 'ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP',
    'client_secret' => 'Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u',
    'oauth_scope' => 'com.intuit.quickbooks.accounting',
    'oauth_redirect_uri' => 'http://localhost:6644/compliancesolutionscanada/callback',
);

        /*if(Cart::isEmpty() =='true' && Session::has('user_details') && Session::has('shipping'))*/
        if(!Session::has('shipping'))
        {
            return redirect()->route('cart');
        }
        else
        {
            Cart::clearCartConditions();
        $user_details=$request->session()->get('user_details' );
        $user = json_decode($user_details);

        $codes = DB::table('codes')
                        ->where('id', $user[0]->s_province)
                        ->first();  

        $tax = $codes->provincial_rate+$codes->canada_rate;
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT ',
            'type' => 'tax',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => $tax.'%',
            'attributes' => array( // attributes field is optional
                'description' => 'Value added tax',
                'more_data' => 'more data here'
            )
        ));

        Cart::condition($condition);
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();      

         $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();                 

        $requests = DB::table('requests')->get();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();       

         $cartCollection = Cart::getContent();     
        $cart_items = $cartCollection->sort();                            
        
        return view('front.payment',compact('header_data','other_cms','socials','requests','data','advert_footer','cart_items','codes','config_vars'));
        }
    }

    public function p_cart(Request $request)
    {
        return redirect()->route('personal-details');
    }

    public function p_shipping(Request $request)
    {
        
         $shipping = [];
         $shipping[] = [
            'shipping' => $request->shipping];
        $request->session()->put('shipping', $shipping);
        return redirect()->route('payment');
    }

    public function final_payment(Request $request)
    {
          $shipping_session = $request->session()->get('shipping' );
          $shipping =ucfirst($shipping_session[0]['shipping']);          

       
          $cartCollection = Cart::getContent();

        $user_details=$request->session()->get('user_details' );
        $user = json_decode($user_details);
        
        $codes = DB::table('codes')
                        ->where('id', $user[0]->s_province)
                        ->first();  

        $card_number = str_replace(" ","","$request->card_number");
        

    $publisher_name = 'compliance';
    //$publisher_pasword = 'cTS1659$opm';
    
    $card_number = $card_number;
    $card_cvv = $request->card_cvv;
    $card_exp = $request->card_expiry;
    $card_amount = Cart::getTotal();
    $card_name = $request->card_name;
    
    //$card_type= 'Visa';

    $email = $user[0]->email;

    
    $card_address1 = $user[0]->address;
    $card_address2 = $user[0]->address1;
    $card_zip = $user[0]->zip_code;
    $card_city = 'test';
    $card_state = 'test';
    $card_country = 'test';
    $shipname = 'test';
    $card_address1 = 'test';
    $card_address2 = 'test';
    $card_zip = 'test';
    $card_state = 'test';
    $card_country = 'test';



    $is_curl_compiled_into_php = "yes"; 

    $curl_path = "/usr/bin/curl";
   
    $pnp_post_url = "https://pay1.plugnpay.com/payment/pnpremote.cgi";
   
    
    $pnp_post_values='';
    if ($pnp_post_values == "") {
        $pnp_post_values .= "publisher-name=" . $publisher_name . "&";
    
        $pnp_post_values .= "card-number=" . $card_number . "&";
        $pnp_post_values .= "card-cvv=" . $card_cvv . "&";
        $pnp_post_values .= "card-exp=" . $card_exp . "&";
        $pnp_post_values .= "card-amount=" . $card_amount . "&";
        $pnp_post_values .= "card-name=" . $card_name . "&";
        $pnp_post_values .= "email=" . $email . "&";
        $pnp_post_values .= "ipaddress=" . $email . "&";
      
    }



    if ($is_curl_compiled_into_php == "no") {

      exec("$curl_path -d \"$pnp_post_values\" https://pay1.plugnpay.com/payment/pnpremote.cgi", $pnp_result_page);
   

      $pnp_result_decoded = urldecode($pnp_result_page[1]);
    }
    else {
    
      $pnp_ch = curl_init($pnp_post_url);
      curl_setopt($pnp_ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($pnp_ch, CURLOPT_POSTFIELDS, $pnp_post_values);
    
      $pnp_result_page = curl_exec($pnp_ch);

      $pnp_result_decoded = urldecode($pnp_result_page);
    }
    $name = str_replace(':', '', $pnp_result_decoded);
    
    $remark = $user[0]->add_info;
      $check_result = explode("&",$name);
    $check_result1 = explode("=",$check_result[0]);
    $FinalStatus =$check_result1[1];
    
    if($FinalStatus == 'success')
     {  
    
        $personal_detail = new personal_detail;
        
        $personal_detail->fname = $user[0]->fname;
        $personal_detail->lname = $user[0]->lname;
        $personal_detail->email = $user[0]->email;
        $personal_detail->phone_number = $user[0]->phone_number;
        $personal_detail->company = $user[0]->company;
        $personal_detail->address = $user[0]->address;
        $personal_detail->address1 = $user[0]->address1;
        $personal_detail->city = $user[0]->city;
        $personal_detail->province = $user[0]->province;
        $personal_detail->zipcode = $user[0]->zip_code;
        $personal_detail->additional_info = $user[0]->add_info;
        $personal_detail->s_company = $user[0]->s_company;
        $personal_detail->s_address = $user[0]->s_address;
        $personal_detail->s_address1 = $user[0]->s_address1;
        $personal_detail->s_city = $user[0]->s_city;
        $personal_detail->s_province = $user[0]->s_province;
        $personal_detail->s_zipcode = $user[0]->s_zipcode;
       
        $personal_detail->delivery = $shipping;
            

        $personal_detail->save();
        $detail = DB::table('personal_details')->latest('id')->first();
      
       
    
         foreach($cartCollection as $cart)
         {
            $cart_product = new cart_product;
             if($cart->attributes->c_code!='empty')
            {            
               $product_code=$cart->attributes->t_code.'-'.$cart->attributes->c_code; 
            }  
            else
            {
               $product_code=$cart->attributes->t_code; 
            }  
            $cart_product->product_id =  $cart->attributes->id;
            $cart_product->product_ske = $product_code;
            $cart_product->product_name = $cart->name; 
            $cart_product->product_price = $cart->price;
            $cart_product->product_quantity = $cart->quantity; 
            $cart_product->product_type = $cart->attributes->product_type;
            $cart_product->list_id = $cart->attributes->list_id;
            $cart_product->inch = $cart->attributes->inch;
            $cart_product->colour = $cart->attributes->colour;
            $cart_product->width_p_inch = $cart->attributes->width_per_inch;

            $cart_product->email = $detail->email;  
            $cart_product->customer_id = $detail->id;

            $cart_product->save();

         }   
          $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();    

       // $request->session()->flush();  
       $ship_date = date("d/m/Y");   

/*   Create Invoices  */

$message = '<table class="body-wrap" style="border-collapse: collapse" border="0" cellpadding="0" cellspacing="0" width="100%" >
    <tr>
        <td class="container" bgcolor="#FFFFFF" style="width:80%">
       
        <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding:20px">
             <img src="'.asset('/public/images/admin/logo.png').'">
                </td>
                <td style="padding: 20px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
                        <tr>
                            <td style="font-size:15px;font-weight:600;padding-bottom:2px:color:#333" >Compliance Solutions Canada Inc.</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-weight:500;color:#333";padding-bottom:2px>5863 Leslie St.</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-weight:500;color:#333";padding-bottom:2px>Unit 507</td>
                        </tr> 
                        <tr>
                            <td style="font-size:14px;font-weight:500;color:#333";padding-bottom:2px>Toronto ON M2H 1J8</td>
                        </tr>                     
                        <tr>
                            <td style="font-size:14px;font-weight:500";padding-bottom:2px;color:#333>905-761-5354</td>
                        </tr> 
                        <tr>
                            <td style="font-size:14px;font-weight:500;padding-bottom:2px;color:#333">
                            csc@csc-inc-ca</td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-weight:500;padding-bottom:2px;color:#333">
                                www.csc-inc.com and www.tactilesolution.ca
                            </td>
                      </tr>
                   
                </table>    
            </td>
            </tr>
        </table>
    </tr>
    <tr>
        <td class="container" bgcolor="#FFFFFF">
            <table border="0" cellpadding="0" cellspacing="0" width="100%"  bgcolor="#fff" style="border-collapse: collapse">
            <tr>
            <td style="color:#b60b01;font-size:25px;font-weight:500;text-transform:uppercase;padding:15px">Order Confirmation</td>
            </tr>
        </table>
   </tr>
   <tr>
        <td class="container" bgcolor="#FFFFFF">
            <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;table-layout: fixed">
                <tr style="vertical-align: top">
                    <td style="padding:15px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" >
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:13px">
                                    Billing Information
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'.$user[0]->fname .' '. $user[0]->lname.
                                 '</td>
                            </tr> 
                            <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$user[0]->address .' '. $user[0]->address1. 
                                '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$user[0]->city .' '. $user[0]->zip_code. 
                                '</td>
                            </tr>
                               <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$user[0]->phone_number. 
                                '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$codes->title. 
                                '</td>
                            </tr>
                          
                        </table>
                    </td>
                    <td style="padding:15px">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" >
                        <tr>
                            <td style="font-weight:600;padding-bottom:5px;font-size:13px">
                                Shipping Information
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$user[0]->fname .' '. $user[0]->lname.
                            '</td>
                        </tr> 
                        <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                               .$user[0]->s_address .' '. $user[0]->s_address1.
                            '</td>
                        </tr>
                        <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                               .$user[0]->s_city .' '. $user[0]->s_zipcode.  
                            '</td>
                        </tr>
                           <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$user[0]->phone_number. 
                                '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">'
                                .$codes->title. 
                                '</td>
                            </tr>
                       
                    </table>
                </td>
                    <td style="padding:15px">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                <span style="font-weight:600;font-size: 12px;text-transform:uppercase">Order-Id #</span>'.$detail->id.' 
                            </td>
                        </tr> 
                        <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                <span style="font-weight:600;font-size: 12px;text-transform:uppercase">Date</span> '.$ship_date.'
                            </td>
                        </tr> 
                         <tr>
                            <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                <span style="font-weight:600;font-size: 12px;text-transform:uppercase">Payment</span> Paid by Debit/Credit Card
                            </td>
                        </tr> 
                       
                    </table>
                </td>
            </tr>
        </table>
   </tr>
   <tr>
        <td class="container" bgcolor="#FFFFFF">
            <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;table-layout: fixed">
                <tr style="vertical-align: top;border-top:1px solid #b60b01">
                    <td style="padding:15px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:13px">
                                    SHIP Method :'.$shipping.'
                                </td>
                            </tr>
                            <tr>';
                            if($shipping =='shipping')
                            {

                            

                             $message .='<td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                      WE WILL CONTACT YOU WITH FREIGHT CHARGES
                                 </td>';
                            }

                            $message .='</tr>
                        </table>
                    </td>
                    
                    
            </tr>
        </table>
   </tr>
   <tr>
        <td class="container" bgcolor="#FFFFFF">
            <table border="0" cellpadding="0" cellspacing="0" width="100%"  bgcolor="#f1f1f1" style="border-collapse:collapse;border: 1px solid #000;">
                <thead>
                    <tr  style="vertical-align: top;text-align:left">
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Product Name</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Product Code</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Unit Price </th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Cost Per Stair</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Qty/No. Of Stair</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Width Of Stair In Inch</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Colour</th>
                        <th style="font-weight:600;padding:10px 5px;font-size:12px">Total</th>
                    </tr>
                </thead>';

            foreach($cartCollection as $cart)
            {
            
              $message .='<tbody  style="vertical-align:top">
                    <tr>
                        <td style="font-weight:400;padding:5px;font-size:11px">';
                        if($cart->attributes->c_code!='empty')
                        {
                            $name = $cart->name.' in ' .$cart->attributes->colour;  
                        }    
                        else
                        {

                            $name = $cart->name;
                        }

                        $message .=$name.'</td>
                        <td style="font-weight:400;padding:5px;font-size:11px">';
                        
                        if($cart->attributes->c_code!='empty')
                            {
                              
                                $prod_code=$cart->attributes->t_code.'-'.$cart->attributes->c_code; 
                            }  
                            else{
                               $prod_code=$cart->attributes->t_code; 
                            }  



                        $message .=$prod_code.'</td>
                        <td style="font-weight:400;padding:5px;font-size:11px">$'.number_format($cart->attributes->product_price, 2).'
                        </td>
                        <td style="font-weight:400;padding:5px;font-size:11px">';
                        if($cart->attributes->colour =='no colour')
                          {
                            $cost_per_inch = '$'.number_format($cart->attributes->width_per_inch, 2);
                          }  
                          else
                          {
                            $cost_per_inch = '-NA-';
                          }
                      $message .= $cost_per_inch.'</td> 
                        <td style="font-weight:400;padding:5px;font-size:11px">
                           '.$cart->quantity.'
                        </td>
                        <td style="font-weight:400;padding:5px;font-size:11px">';
                        if($cart->attributes->colour =='no colour')
                          {
                            if($cart->attributes->exit =='yes')
                            {
                                $width_per_inch = '-NA-'; 
                            }
                            else
                            {

                            $width_per_inch = number_format($cart->attributes->inch, 2);
                            }
                          }  

                          else
                          {
                            $width_per_inch = '-NA-';
                          }
                           
                       $message .=$width_per_inch.'</td>
                        <td style="font-weight:400;padding:5px;font-size:11px">';
                        if($cart->attributes->colour =='no colour')
                          {
                            
                            $colour = '-NA-';
                          }  
                          else
                          {
                            $colour = $cart->attributes->colour;
                          }

                         $message .=$colour.'
                        </td>
                        <td style="font-weight:400;padding:5px;font-size:11px">$'.number_format($cart->getPriceSum(), 2).'
                        </td>
                    </tr>
                </tbody>';
              }  
              $sub_total =Cart::getSubTotal();
       $message .='</table>
   </tr>
    <tr>
        <td class="container" bgcolor="#FFFFFF" style="padding-top:20px;
         padding-bottom:20px;padding-left:45%;">
            <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;width:100%;border: 1px solid #000;background: #f1f1f1;">
                <tr style="vertical-align: top">
                    <td style="padding:15px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:12px">
                                    Freight
                                </td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                   
                                </td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                   0
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:12px">
                                    Sub-total    
                                 </td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                     
                                 </td> 
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'.number_format($sub_total,2).
                                 '</td>
                            </tr> 
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:12px">
                                Tax   
                                </td>';
                                  if($codes->rate_type =='HST')
                                  {
                                    $tax=$codes->canada_rate+$codes->provincial_rate;
                                     $hst = (($tax / 100) * $sub_total);
                               $message .='<td style="font-weight:500;padding-bottom:5px;font-size:12px">HST ('.$tax.'%)</td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($hst, 2) .
                                '</td>';
                            }
                            elseif($codes->rate_type =='GST')
                            {
                                $tax=$codes->canada_rate;
                                $gst = (($codes->canada_rate / 100) * $sub_total);

                             $message .='<td style="font-weight:500;padding-bottom:5px;font-size:12px">GST ('.$tax.'%)</td>
                              <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($gst, 2) .
                                '</td>
                               ';
                            }
                            elseif($codes->rate_type =='GST+PST')
                            {
                                $pst = ($codes->provincial_rate / 100) * $sub_total;
                                $gst = ($codes->canada_rate / 100) * $sub_total;

                                $message .='<td style="font-weight:500;padding-bottom:5px;font-size:12px">PST ('.$codes->provincial_rate.'%)</td>
                              <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($pst, 2) .
                                '</td></tr><tr><td></td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">GST ('.$codes->canada_rate.'%)</td>
                              <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($gst, 2) .
                                '</td></tr>
                               ';
                            }   
                            elseif($codes->rate_type =='GST+QST')
                            {
                                 $gst = ($codes->canada_rate / 100) * $sub_total;
                                 $qst = ($codes->provincial_rate / 100) * $sub_total; 

                                 $message .='<td style="font-weight:500;padding-bottom:5px;font-size:12px">QST ('.$codes->provincial_rate.'%)</td>
                              <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($qst, 2) .
                                '</td></tr><tr><td></td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">GST ('.$codes->canada_rate.'%)</td>
                              <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'. number_format($gst, 2) .
                                '</td>
                               ';
                            } 

                            $message .='</tr>
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:12px">
                                Total 
                                </td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">
                                
                                </td>
                                <td style="font-weight:500;padding-bottom:5px;font-size:12px">$'.number_format(Cart::getTotal(), 2).'
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                    
            </tr>

        </table>
   </tr>

    <tr>
        <td class="container" bgcolor="#FFFFFF">
            <table bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;table-layout: fixed">
                <tr style="vertical-align: top;border-top:1px solid #b60b01">
                    <td style="padding:15px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="font-weight:600;padding-bottom:5px;font-size:13px">
                                    Order Message
                                </td>
                            </tr>
                            
                        </table>
                    </td>
                    
                    
            </tr>
        </table>
    </tr>';
    if(!empty($remark))
    {

    $message .= '<tr>
    <td class="container" bgcolor="#FFFFFF">
            <table border="0" cellpadding="0" cellspacing="0" width="100%"  bgcolor="#f1f1f1" style="border-collapse:collapse;border: 1px solid #000;">
                <thead>
                    <tr  style="vertical-align: top;text-align:left">
                        <td style="font-weight:600;padding:10px 5px;font-size:12px">'.$remark.'</td>
                       
                    </tr>
                </thead>
               </table>
               </td> 
    </tr>';           
}


$message .='</table>';


$pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($message);
     $pdf_name =  strtotime("now");
      $pdf->save(public_path('images/invoices/').$pdf_name.'.pdf');
      $pdf_path = public_path('images/invoices/').$pdf_name;
      $pdf_ext = $pdf_path.'.pdf'; 
      
      Mail::to($user[0]->email)->send(new Order_Confirmation($pdf_ext,$cartCollection,$user[0]->email));
      Mail::to('csc@csc-inc.ca')->send(new Order_Confirmation_Admin($pdf_ext,$cartCollection,$user[0]->email));

      $request->session()->flush(); 

    return redirect()->action('HomeController@message','success');                                                

        

     }  
     elseif($FinalStatus == 'badcard')
     {
        return redirect()->action('HomeController@message','badcard');
     }   
     elseif($FinalStatus == 'fraud')
     {
        return redirect()->action('HomeController@message','fraud');
     }   
     elseif($FinalStatus == 'problem')
     {
        return redirect()->action('HomeController@message','problem');
     }   
             






    }

    public function message($slug='')
    {

        $message = $slug;
        $header_data = DB::table('cms')
                        ->where('type', 'main')
                        ->get();

        $other_cms = DB::table('cms')
                        ->where('status', 'on')
                        ->where('type', 'other')
                        ->get();

        $socials = DB::table('socials')
                     ->where('id', '1')
                     ->get();          
        $requests = DB::table('requests')->get();     

        $data =  DB::table('cms')
                        ->where('page_name', 'Home')
                        ->first();    
        $advert_footer = DB::table('advertisements')
                        ->where('type', 'footer')
                        ->first();  

        //return redirect()->action('HomeController@inner','ss');                                    
        
       return view('front.message',compact('header_data','other_cms','socials','requests','data','advert_footer','message'));
    }

/*    public function quickBooks() {
     $config_vars = array (
 
    'authorizationRequestUrl' => 'https://appcenter.intuit.com/connect/oauth2',
    'tokenEndPointUrl' => 'https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer',
    'client_id' => 'ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP',
    'client_secret' => 'Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u',
    'oauth_scope' => 'com.intuit.quickbooks.accounting',
    'oauth_redirect_uri' => 'https://tactilesolution.ca/',
        ); 
        
    $dataService = DataService::Configure(array(
      'auth_mode' => 'oauth2',
      'ClientID' => "ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP",
      'ClientSecret' => "Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u",
      'RedirectURI' => "https://tactilesolution.ca/",
      'scope' => "com.intuit.quickbooks.accounting",
      'baseUrl' => "Development"
));
$OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();



// Get the Authorization URL from the SDK
$authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
dd("Location:".$authUrl);
//$parseUrl = $this->parseAuthRedirectUrl($authUrl);


    }*/

    /*protected function parseAuthRedirectUrl($url) {
            parse_str($url,$qsArray);
            
            return array(
                'code' => $qsArray['code'],
                'realmId' => $qsArray['realmId']
            );
        }*/

     public function callback(Request $request)   
     {

           $dataService = DataService::Configure(array(
        'auth_mode' => 'oauth2',
        'ClientID' => 'ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP',
        'ClientSecret' =>  'Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u',
        'RedirectURI' => 'http://localhost:6644/compliancesolutionscanada/callback',
        'scope' => 'com.intuit.quickbooks.accounting',
        'baseUrl' => "development"
    ));

    $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();
  //  $parseUrl = parseAuthRedirectUrl($_SERVER['QUERY_STRING']);

    parse_str($_SERVER['QUERY_STRING'],$qsArray);

    /*
     * Update the OAuth2Token
     */
    $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($qsArray['code'], $qsArray['realmId']);
    $dataService->updateOAuth2Token($accessToken);

    /*
     * Setting the accessToken for session variable
     */
    /*$_SESSION['sessionAccessToken'] = $accessToken;*/
    //dd($accessToken->realmID);
    //$token = json_encode($accessToken);
    // $request->session()->put('sessionAccessToken', $token);

     //\Session::put('sessionAccessToken',111);

    //dd(\Session::get('sessionAccessToken'));

    //Session::set('sessionAccessToken', $accessToken);
    



        //return view('front.callback');
     }

     public function token_check()
     {

                $dataService = DataService::Configure(array(
        'auth_mode' => 'oauth2',
        'ClientID' => 'ABCwZWjmG7kx6FGVVhY8OJHKNiR5h6s8x9Jff50pTT1JYJoTdP',
        'ClientSecret' =>  'Vsqk5caRnLfl8lfmSUCBuZlLdQSl4lcE4BYSuw6u',
        'RedirectURI' => 'http://localhost:6644/compliancesolutionscanada/callback',
        'scope' => 'com.intuit.quickbooks.accounting',
        'baseUrl' => "development"
    ));

    $OAuth2LoginHelper = $dataService->getOAuth2LoginHelper();

        $accessToken = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken('AB11568869354OSqSKDOKyW9da0HQcwoM9VsrcRN6Q6zlnQhI2','4620816365013026230');
    $dataService->updateOAuth2Token($accessToken);

    /*
     * Setting the accessToken for session variable
     */

    //dd($accessToken);
   //  $_SESSION['sessionAccessToken'] = $accessToken;
     }
}
