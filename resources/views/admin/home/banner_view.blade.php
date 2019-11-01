@include('partials/admin/header')
@include('partials/admin/sidebar')


 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">CMS Pages</h3>
                  
                </div>
                @include('partials/admin/msg')
                  <div class="row">
                    <div class="col-md-10">
        <form name="banner-view" >
        
        
           <div class="form-group">
            <label>Image: </label>
            <img src="{{ asset('public/images/front/home/banner/'.$home_banner_view->image) }}">
          </div>

          <div class="form-group">
            <label>Alt Image: </label>
            <input type="text" name="meta_title" value="{{$home_banner_view->image_alt}}" disabled="">
        </div>
       
     

      <div class="form-group">
            <label>Line 1: </label>
            <input type="text" name="line_1" value="{{$home_banner_view->line_1}}" disabled="">
        </div>

      <div class="form-group">
            <label>Line 2: </label>
            <input type="text" name="line_2" value="{{$home_banner_view->line_2}}" disabled="">
      </div>

      <div class="form-group">
            <label>Line 3: </label>
            <input type="text" name="line_3" value="{{$home_banner_view->line_3}}" disabled="">
        </div>

        <div class="form-group">
            <label>Button: </label>
            <input type="text" name="button" value="{{$home_banner_view->button}}" disabled="">
        </div>

        <div class="form-group">
            <label>Button Href: </label>
            <input type="text" name="button_href" value="{{$home_banner_view->button_href}}" disabled="">
        </div>  
         
      </form>
    </div>
        </div>
      </div>
</aside>
   <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
       
        CKEDITOR.replace( 'content' );
    </script>
   

@include('partials/admin/footer')  