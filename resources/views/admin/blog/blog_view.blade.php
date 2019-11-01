
@include('partials/admin/header')
@include('partials/admin/sidebar')


    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Blog</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="blog_view"  enctype="multipart/form-data">
        
        
        
        
         @foreach ($blog as $blog_data)
         
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{ $blog_data->title}}" disabled="">
       
        </div>

     
      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description" disabled=""> {{ $blog_data->description }} </textarea>
     
        </div>
    
      <div class="form-group">
        <label>Image: </label>
       
        <img src="{{ asset('public/images/blog/'.$blog_data->image) }}">
     
    </div>

    <div class="form-group">
        <label>Alt Image: </label>
       
        <input type="text" name="alt_image" value="{{ $blog_data->alt_image}}" disabled="">
     
    </div>


       <div class="form-group">
        <label>Category: </label>
       <input type="text" name="category" value="{{ $blog_data->category_title}}" disabled="">
        
      
    </div>  

        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{ $blog_data->meta_title}}" disabled="">
      
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description" disabled=""> {{ $blog_data->meta_description}} </textarea>
       

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{ $blog_data->meta_keyword}}" disabled="">
  
   
    </div>
   @endforeach
      
       
    
        </form>
    </div>
</div>
      </div>
    </aside>
    
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>


    @include('partials/admin/footer')  
@include('partials/admin/footer')  