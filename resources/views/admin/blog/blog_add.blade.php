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
        
        <form name="blog_save" method="post" action="{{ route('blog-save') }}" enctype="multipart/form-data">
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
    
         <div class="form-group">
        <label>Title: </label>
     
        <input type="text" name="title" value="{{old('title')}}">
         @if ($errors->has('title'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif

        </div>

     
      
        <div class="form-group">
        <label> Description: </label>
        
        <textarea rows="4" cols="50" name="description">{{old('description')}}</textarea>
        @if ($errors->has('description'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('description') }}
            </label>
        @endif
        </div>
    
      <div class="form-group">
        <label>Image: </label>
       <img id="blah" src="#"  />
        <br>
        <input type="file" name="image" id="imgInp" >
        @if ($errors->has('image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image') }}
            </label>
        @endif
    </div>

    <div class="form-group">
        <label>Alt Image: </label>
       
        <input type="text" name="alt_image"  value="{{old('alt_image')}}">
        @if ($errors->has('alt_image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('alt_image') }}
            </label>
        @endif
    </div>


       <div class="form-group">
        <label>Category: </label>
       
      <select name="category">
        <option value=""> --Select-- </option>
        @foreach ($blog_category as $category)
        <option value="{{ $category->id }}">{{ $category->category_title }}</option>
        
        @endforeach
      </select>        
        @if ($errors->has('category'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('category') }}
            </label>
        @endif
    </div>  

        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{old('meta_title')}}" >
        @if ($errors->has('meta_title'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_title') }}
            </label>
        @endif
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description">{{old('meta_description')}}</textarea>
        @if ($errors->has('meta_description'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_description') }}
            </label>
        @endif

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
       
        <input type="text" name="meta_keyword" value="{{old('meta_keyword')}}">
        @if ($errors->has('meta_keyword'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_keyword') }}
            </label>
        @endif
   
    </div>
   
     
   

        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary" value="Save">
    </div>
   
       
    
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
