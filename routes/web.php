<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  $cms = DB::table('cms')->get();


/*Route::get('/', function () {
    return view('front.index');
});*/

Auth::routes(['verify' => true, 'register' => false]);
/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('login', '\App\Http\Controllers\Auth\LoginController@logout');


 Route::get('/admin', function () {
    return view('admin.pages.admin');
})->middleware('admin')->name('admin');


Route::group(['middleware' => ['admin'],'prefix' => 'admin'], function(){

     

     Route::get('/cms', 'PagesController@cms')->name('cms');
     Route::post('/cms_save', 'PagesController@cms_save')->name('cms_save');
     Route::get('/cms_add', 'PagesController@cms_add')->name('cms_add');

     Route::get('/cms_edit/{id}','PagesController@cms_edit')->name('cms_edit');
     Route::post('/cms_update','PagesController@cms_update')->name('cms_update');
     Route::get('/cms_delete/{id}','PagesController@cms_delete')->name('cms_delete');
	 
     Route::get('/cms_view/{id}','PagesController@cms_view')->name('cms_view');

	 Route::get('/cms_status_ajax','PagesController@cms_status_ajax')->name('set_cms_status_ajax');

      /* Main Pages Routes of CMS */  
      Route::get('/main_cms','PagesController@main_cms')->name('main_cms');
      Route::get('/main_cms_view/{id}','PagesController@main_cms_view')->name('main_cms_view');
      Route::get('/main_cms_edit/{id}','PagesController@main_cms_edit')->name('main_cms_edit');
      Route::post('/main_cms_update','PagesController@main_cms_update')->name('main_cms_update');
      
      /* Main Pages Routes of CMS */
     
     /* Header Section Header Section Header Section */

     Route::get('/logo','AdminController@logo')->name('logo');
     
     Route::post('/logo-change','AdminController@logo_change')->name('logo-change');

     /* Header Section Header Section Header Section */

     /* Footer Section Footer Section Footer Section */

     Route::get('/social','AdminController@social')->name('social');
     Route::get('/social-edit','AdminController@social_edit')->name('social-edit');
     Route::post('/social-update','AdminController@social_update')->name('social-update');
     Route::get('/copy-right','AdminController@copy_right')->name('copy-right');
     
     /* Footer Section Footer Section Footer Section */



     /*Home Content Home Content Home Content*/
     Route::get('/banner-add','AdminController@banner_add')->name('banner_add');
     Route::get('/banner','AdminController@banner')->name('banner');
     Route::post('/banner-save','AdminController@banner_save')->name('banner-save');

     Route::get('/banner-view/{id}','AdminController@banner_view')->name('banner-view');  
     Route::get('/banner-edit/{id}','AdminController@banner_edit')->name('banner-edit');
     Route::post('/banner-update','AdminController@banner_update')->name('banner-update');
     Route::get('/banner-delete/{id}','AdminController@banner_delete')->name('banner-delete');
     
     /*Home Content Home Content Home Content*/

     /*Blog Category Routes Blog Category  Routes Blog Category  Routes*/

     Route::get('/blog-category','BlogController@category')->name('blog-category');
     Route::get('/blog-category-add','BlogController@category_add')->name('blog-category-add');
     Route::post('/blog-category-save','BlogController@category_save')->name('blog-category-save');
     Route::get('/blog-category-view/{id}','BlogController@category_view')->name('blog-category-view');
     
     Route::get('/blog-category-edit/{id}','BlogController@category_edit')->name('blog-category-edit');
     Route::post('/blog-category-update','BlogController@category_update')->name('blog-category-update');
     Route::get('/blog-category-delete/{id}','BlogController@category_delete')->name('blog-category-delete');
     
     /*Blog Category Routes Blog Category Routes Blog Category Routes*/

     /*Blog Routes  Blog Routes  Blog Routes */
     Route::get('/blog','BlogController@blog')->name('ablog');
     Route::get('/blog-add','BlogController@blog_add')->name('blog-add');
     Route::post('/blog-save','BlogController@blog_save')->name('blog-save');
     Route::get('/blog-view/{id}','BlogController@blog_view')->name('blog-view');
     Route::get('/blog-edit/{id}','BlogController@blog_edit')->name('blog-edit');
     Route::post('/blog-update','BlogController@blog_update')->name('blog-update');
     Route::get('/blog-delete/{id}','BlogController@blog_delete')->name('blog-delete');

     /*Blog Routes  Blog Routes  Blog Routes */

     /* How it Works Routes  How it Works Routes */
     Route::get('/how-it-works','AdminController@how_it_works')->name('how-it-works');
     Route::get('/how_it_works_add','AdminController@how_it_works_add')->name('how_it_works_add');
     Route::post('/how_it_works_save','AdminController@how_it_works_save')->name('how_it_works_save');
     Route::get('/how-it-works-edit/{id}','AdminController@how_it_works_edit')->name('how-it-works-edit');
     Route::post('/how-it-works-update','AdminController@how_it_works_update')->name('how-it-works-update');
     Route::get('/how-it-works-view/{id}','AdminController@how_it_works_view')->name('how-it-works-view');
     /* How it Works Routes  How it Works Routes */


     /* Solution Section Routes */
          
    Route::get('/solution','SolutionController@solution')->name('solution');
    Route::get('/solution-add','SolutionController@solution_add')->name('solution-add');
    Route::post('/solution-save','SolutionController@solution_save')->name('solution-save');
    Route::get('/solution-edit/{id}','SolutionController@solution_edit')->name('solution-edit');
    Route::get('/solution-view/{id}','SolutionController@solution_view')->name('solution-view');
    Route::post('/solution-update','SolutionController@solution_update')->name('solution-update');
    Route::get('/solution-delete/{id}','SolutionController@solution_delete')->name('solution-delete');




    Route::get('/category','SolutionController@category')->name('category');
    Route::get('/category-add','SolutionController@category_add')->name('category-add');
    Route::post('/category-save','SolutionController@category_save')->name('category-save');
    Route::get('/category-view/{id}','SolutionController@category_view')->name('category-view');
    Route::get('/category-edit/{id}','SolutionController@category_edit')->name('category-edit');
    Route::post('/category-update','SolutionController@category_update')->name('category-update');
    Route::get('/category-delete/{id}','SolutionController@category_delete')->name('category-delete');


    Route::get('/sub-category','SolutionController@sub_category')->name('sub-category');
    Route::get('/sub-category-add','SolutionController@sub_category_add')->name('sub-category-add');
    Route::post('/sub-category-save','SolutionController@sub_category_save')->name('sub-category-save');
    Route::get('/sub-category-view/{id}','SolutionController@sub_category_view')->name('sub-category-view');
    Route::get('/sub-category-edit/{id}','SolutionController@sub_category_edit')->name('sub-category-edit');
    Route::post('/sub-category-update','SolutionController@sub_category_update')->name('sub-category-update');
    Route::get('/sub-category-delete/{id}','SolutionController@sub_category_delete')->name('sub-category-delete');
    
    
    Route::get('/detail','SolutionController@detail')->name('detail');
    Route::get('/detail-add','SolutionController@detail_add')->name('detail-add');
    Route::post('/detail-save','SolutionController@detail_save')->name('detail-save');
    Route::get('/detail-view/{id}','SolutionController@detail_view')->name('detail-view');
    Route::get('/detail-edit/{id}','SolutionController@detail_edit')->name('detail-edit');
    Route::post('/detail-update','SolutionController@detail_update')->name('detail-update');
    Route::get('/detail-delete/{id}','SolutionController@detail_delete')->name('detail-delete');
     /* Solution Section Routes */


     /* Newsletter Routes */
     Route::get('/newsletter','NewsletterController@newsletter')->name('anewsletter');
     Route::post('/email-newsletter','NewsletterController@newsletter_email')->name('email-newsletter');
     Route::post('/send-mail','NewsletterController@send_mail')->name('send-mail');
     
     /* Newsletter Routes */  

     /* Request Routes */

     Route::get('/request','RequestController@index')->name('request');
     Route::post('/request-save','RequestController@request_save')->name('request-save');
     Route::get('/request-edit','RequestController@request_edit')->name('request-edit');
     Route::post('/request-update','RequestController@request_update')->name('request-update');

     /* Request Routes */


     /* E-commerce Product Routes */

     Route::get('/csc-category','ProductController@csc_category')->name('csc-category');
     Route::get('/csc-category-add','ProductController@csc_category_add')->name('csc-category-add');
     Route::post('/csc-category-save','ProductController@csc_category_save')->name('csc-category-save');
     Route::get('/csc-category-view/{id}','ProductController@csc_category_view')->name('csc-category-view');
     Route::get('/csc-category-edit/{id}','ProductController@csc_category_edit')->name('csc-category-edit');
     Route::post('/csc-category-update','ProductController@csc_category_update')->name('csc-category-update');
     Route::get('/csc-category-delete/{id}','ProductController@csc_category_delete')->name('csc-category-delete');



     Route::get('/csc-sub-category','ProductController@sub_category')->name('csc-sub-category');
     Route::get('/csc-sub-category-add','ProductController@sub_category_add')->name('csc-sub-category-add');
     Route::post('/csc-sub-category-save','ProductController@sub_category_save')->name('csc-sub-category-save');
     Route::get('/csc-sub-category-view/{id}','ProductController@sub_category_view')->name('csc-sub-category-view');
     Route::get('/csc-sub-category-edit/{id}','ProductController@sub_category_edit')->name('csc-sub-category-edit');
     Route::post('/csc-sub-category-update','ProductController@sub_category_update')->name('csc-sub-category-update');
     Route::get('/csc-sub-category-delete/{id}','ProductController@sub_category_delete')->name('csc-sub-category-delete');


     Route::get('/csc-detail','ProductController@detail')->name('csc-detail');
     Route::get('/csc-detail-add','ProductController@detail_add')->name('csc-detail-add');
     Route::post('/csc-detail-save','ProductController@detail_save')->name('csc-detail-save');
     Route::get('/csc-detail-view/{id}','ProductController@detail_view')->name('csc-detail-view');
     Route::get('/csc-detail-edit/{id}','ProductController@detail_edit')->name('csc-detail-edit');
     Route::post('/csc-detail-update','ProductController@detail_update')->name('csc-detail-update');
     Route::get('/csc-detail-delete/{id}','ProductController@detail_delete')->name('csc-sub-detail-delete');

     /* E-commerce Product Routes */ 


     /* Admin Reference Routes  */ 

     Route::get('/references','ReferenceController@reference')->name('admin_reference');
     Route::get('/reference-add','ReferenceController@add')->name('reference-add');
     Route::post('/reference-save','ReferenceController@save')->name('reference-save');
     Route::get('/reference-view/{id}','ReferenceController@view')->name('reference-view');
     Route::get('/reference-edit/{id}','ReferenceController@edit')->name('reference-edit');
     Route::post('/reference-update','ReferenceController@update')->name('reference-update');
     Route::get('/reference-delete/{id}','ReferenceController@delete')->name('reference-delete');

     Route::get('/sub-reference','ReferenceController@sub_reference')->name('sub-reference');
     Route::get('/sub-reference-add','ReferenceController@sub_reference_add')->name('sub-reference-add');
      Route::post('/sub-reference-save','ReferenceController@sub_reference_save')->name('sub-reference-save');
     Route::get('/sub-reference-view/{id}','ReferenceController@sub_reference_view')->name('sub-reference-view');
     Route::get('/sub-reference-edit/{id}','ReferenceController@sub_reference_edit')->name('sub-reference-edit');
     Route::post('/sub-reference-update','ReferenceController@sub_reference_update')->name('sub-reference-update');
     Route::get('/sub-reference-delete/{id}','ReferenceController@sub_reference_delete')->name('sub-reference-delete');
     /* Admin Reference Routes  */


     /* Benefits Routes  */

     Route::get('/benefits','AdminController@benefits')->name('benefits');
     Route::get('/benefit-edit/{id}','AdminController@benefits_edit')->name('benefit-edit');
     Route::post('/benefits-update','AdminController@benefits_update')->name('benefits-update');
     Route::get('/benefit-view/{id}','AdminController@benefits_view')->name('benefit-view');

     /* Benefits Routes  */ 


     /* Codes Routes */


     Route::get('/codes','AdminController@codes')->name('acodes');
     Route::get('/code-add','AdminController@code_add')->name('code-add');
     Route::post('/code-save','AdminController@code_save')->name('code-save');
     Route::get('/code-view/{id}','AdminController@code_view')->name('code-view');
     Route::get('/code-edit/{id}','AdminController@code_edit')->name('code-edit');
     Route::post('/code-update','AdminController@code_update')->name('code-update');
     Route::get('/code-delete/{id}','AdminController@code_delete')->name('code-delete');

     /* Codes Routes */

     Route::get('/quote','AdminController@quote')->name('aquote');
     Route::get('/quote-csv','AdminController@quote_csv')->name('quote-csv');

     Route::get('/stair-qoute','AdminController@stair_qoute')->name('stair-qoute');
     Route::get('/stair-quote-csv','AdminController@stair_quote_csv')->name('stair-quote-csv');

     Route::get('/exit-qoute','AdminController@exit_qoute')->name('exit-qoute');
     Route::get('/exit-quote-csv','AdminController@exit_quote_csv')->name('exit-quote-csv');
     
     Route::get('/contact-form','AdminController@contact_form')->name('acontact-form');
     Route::get('/contact-form-csv','AdminController@contact_form_csv')->name('contact-form-csv');

     Route::post('/uploader','ProductController@uploader')->name('uploader');
     Route::get('/image-get','ProductController@image_get')->name('image-get');

    /*Advertisement Routes*/
    Route::get('/advertisement','AdvertisementController@advertisement')->name('advertisement');
    Route::get('/advertisement-edit/{id}','AdvertisementController@advertisement_edit')->name('advertisement-edit');
    Route::post('/advert-update','AdvertisementController@advert_update')->name('advert-update');


    /*Advertisement Routes*/

}); 



/*Front End Slugs Front End Slugs*/


/*Front End Slugs Front End Slugs*/
Route::get("/", 'HomeController@home')->name("home");
Route::post("/newsletter", 'HomeController@newsletter')->name("newsletter");

/*Html Routes*/
Route::get("/inner/{slug}", 'HomeController@inner')->name("inner");

Route::get("/inner2", 'HomeController@inner2')->name("inner2");

Route::get("/inner3", 'HomeController@inner3')->name("inner3");
Route::get("/inner4", 'HomeController@inner4')->name("inner4");

Route::post('/quote', 'HomeController@quote')->name('quote');

/*Html Routes*/

/*Extra Routes Extra Routes*/


/*Route::get('/test', 'AdminController@test')->name('test');
Route::get('/image', 'BlogController@image')->name('image');
Route::post('/move', 'BlogController@move')->name('move');*/


/*
Route::get("yy", 'BlogController@slug')->name('slug');
Route::get("page/{slug}", 'BlogController@slug')->name("hello");*/
/*Extra Routes Extra Routes*/

/*Contact Controller*//*Contact Controller*/

/*Route::get('/contact', 'ContactController@index')->name('contact');*/
/*Route::get("/{slug}", 'HomeController@slug')->name("slug");*/

/*Contact Controller*//*Contact Controller*/

foreach ($cms as $cm)
{
    Route::get("$cm->slug", "HomeController@$cm->function")->name("$cm->slug");
}
Route::post('/contact-form', 'ContactController@Contact')->name('contact-form');

Route::get('/solution/', 'HomeController@solution_page')->name('solution_page');
Route::get('/solution/{slug}', 'HomeController@solution_page')->name('solution_page');
Route::get('/solution/{slug}/{slug1}', 'HomeController@solution_category')->name('solution_category');

/*Route::get('/solution/single/{slug}', 'HomeController@solution_singlepage')->name('solution_singlepage');*/

/*Route::get('/solution/category/{slug}', 'HomeController@category_page')->name('solution_singlepage');*/
/*Route::get('/solution/category/single/{slug}', 'HomeController@category_singlepage')->name('solution_singlepage');

Route::get('/solution/category/sub-category/{slug}', 'HomeController@sub_category_page')->name('sub_category_page');*/



Route::get('/category/', 'HomeController@csc_category_page')->name('csc_category_page');
Route::get('/category/{slug}', 'HomeController@csc_category_page')->name('csc_category_page');
/*Route::get('category/single/{slug}', 'HomeController@csc_category_single_page')->name('csc_category_single_page');*/

Route::get('/category/{slug}/{slug1}', 'HomeController@csc_sub_category_page')->name('csc_sub_category_page');


Route::get('/category/{slug}/{slug1}/{slug2}', 'HomeController@csc_product')->name('csc_product');


/*Route::get('/category/{slug}/single/{slug1}', 'HomeController@csc_sub_category_single_page')->name('csc_sub_single_category_page');*/





/* Blog Routes Blog Routes */

Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/blogs/{slug}', 'HomeController@blogs')->name('blogs');
Route::get('/blogs/{slug}/{slug1}', 'HomeController@blogs_single')->name('blogs_single');
/* Blog Routes Blog Routes */



Route::get('/cstm-search', 'HomeController@cstm_search')->name('cstm-search');

Route::post('/search', 'HomeController@cstm_search_page')->name('search');


/* Add to Cart  Functionality Routes */


Route::post('/add-to-cart', 'HomeController@add_to_cart')->name('add-to-cart');
Route::post('/remove-cart', 'HomeController@remove_cart')->name('remove-cart');
Route::post('/cart-update', 'HomeController@cart_update')->name('cart-update');
Route::post('/cart-colour', 'HomeController@cart_colour')->name('cart-colour');
Route::post('/cart-width-update', 'HomeController@cart_width_update')->name('cart-width-update');
Route::post('/cart-stair-quant', 'HomeController@cart_stair_quant')->name('cart-stair-quant');
Route::post('/add-more-item', 'HomeController@add_more_item')->name('add-more-item');


Route::get('/cart', 'HomeController@cart')->name('cart');
Route::post('/p-cart', 'HomeController@p_cart')->name('p-cart');
Route::get('/personal-details', 'HomeController@personal_details')->name('personal-details');
Route::post('/p_details', 'HomeController@p_details')->name('p_details');
Route::get('/shipping', 'HomeController@shipping')->name('shipping');
Route::post('/p-shipping', 'HomeController@p_shipping')->name('p-shipping');
Route::get('/payment', 'HomeController@payment')->name('payment');




/* Add to Cart  Functionality Routes */ 


/*   Extra Routes  */
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/quick', 'HomeController@quickBooks')->name('quick');
Route::get('/callback', 'HomeController@callback')->name('callback');
Route::get('/token_check', 'HomeController@token_check')->name('token_check');

Route::get('/cart_check', 'HomeController@cart_check')->name('cart_check');

Route::post('/final-payment', 'HomeController@final_payment')->name('final-payment');

Route::get('/message/{slug}', 'HomeController@message')->name('message');

/*   Extra Routes  */