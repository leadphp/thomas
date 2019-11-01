@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Blog Category Add</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="category_add" method="post" action="{{ route('blog-category-save') }}" enctype="multipart/form-data"  >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
    
         <div class="form-group">
        <label>Category Title: </label>
     
        <input type="text" name="category_title" value="{{old('category_title')}}">
          @if ($errors->has('category_title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('category_title') }}
            </label>
        @endif 
        </div>


        <div class="form-group">
        <label>Slug: </label>
     
        <input type="text" name="slug" value="{{old('slug')}}">
          @if ($errors->has('slug')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('slug') }}
            </label>
        @endif 
        </div>

              <div class="form-group">
            <label>Banner Image: </label>
            <img id="blah1" src="#"  />
            <br>
            <input type="file" name="banner_image" id="banner" value="">
            @if ($errors->has('banner_image')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('banner_image') }}
                </label>
            @endif 
        </div>

         <div class="form-group">
            <label>Alt Banner Image: </label>
        
            <input type="text" name="alt_banner_image"  value="{{old('alt_banner_image')}}">
            @if ($errors->has('alt_banner_image')) 
                <label class="invalid-feedback label error" role="alert">
                    {{ $errors->first('alt_banner_image') }}
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
        <textarea rows="4" cols="50" class="form-control" name="meta_description">{{old('meta_description')}}</textarea>
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
<script type="text/javascript">
    
    $("#blah1").hide();


     function readURL(input) 
     {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }       
    }



   

    $("#banner").change(function() {
        readURL(this);
        $("#blah1").show();
    });


</script>

@include('partials/admin/footer')  