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
        
        <form name="blog_update" method="post" action="{{ route('blog-update') }}" enctype="multipart/form-data">
        


        @foreach ($blog_edit as $blog)
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{ $blog->id }}">
        
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{ $blog->title }}">
         @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
        </div>

     
      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description">{{ $blog->description}}</textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
        </div>
       <div class="row"> 
        <div class="col-md-12">
            <label>Image: </label>
        </div>
       <div class="col-md-6">  
      <div class="form-group">
        
        <img src="{{ asset('public/images/blog/'.$blog->image) }}">
        <input type="hidden" name="old_image" value="{{$blog->image}}">
         </div>
    </div>
    <div class="col-md-6"> 
        <img id="blah" src="#"  />
        <br>
        <input type="file" name="image" id="imgInp" >
        @if ($errors->has('image'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
   </div>
</div>

    <div class="form-group">
        <label>Alt Image: </label>
       
        <input type="text" name="alt_image"  value="{{ $blog->alt_image }}">
        @if ($errors->has('alt_image'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('alt_image') }}</strong>
            </span>
        @endif
    </div>


       <div class="form-group">
        <label>Category: </label>
       
      <select name="category">
        <option value=""> --Select-- </option>
        
         @foreach ($blog_category as $category)
         @if ($category->id == $blog->category)
         <option value="{{ $category->id }}" selected>{{ $category->category_title }}</option>
         @else
        <option value="{{ $category->id }}">{{ $category->category_title }}</option>
         @endif
        
        @endforeach
        
        
      </select>        
        @if ($errors->has('category'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
    </div>  

        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{ $blog->meta_title}}" >
        @if ($errors->has('meta_title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_title') }}</strong>
            </span>
        @endif
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description">{{ $blog->meta_description }}</textarea>
        @if ($errors->has('meta_description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_description') }}</strong>
            </span>
        @endif

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{ $blog->meta_keyword }}">
        @if ($errors->has('meta_keyword'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_keyword') }}</strong>
            </span>
        @endif
   
    </div>
   
     
   

        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary" value="Update">
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
    CKEDITOR.instances.description.on('change', function() {  
    if(CKEDITOR.instances.description.getData().length >  0) {
     $('label[for="description"]').hide();

    }
    else
    {
     $('label[for="description"]').show(); 
    }
});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $("#blah").show();
});






</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#blah").hide();

});
</script>

    @include('partials/admin/footer')  
