@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Category Edit</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="category_edit" method="post" action="{{ route('blog-category-update')}}" enctype="multipart/form-data"   >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$blog_category->id}}">
    
         <div class="form-group">
        <label>Category Title: </label>
     
        <input type="text" name="category_title" value="@if ($errors->has('category_title')){{old('category_title')}}@else{{$blog_category->category_title}}@endif">
       @if ($errors->has('category_title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('category_title') }}
            </label>
        @endif 
        </div>

              <div class="form-group">
        <label>Slug: </label>
     
        <input type="text" name="slug" value="@if ($errors->has('slug')){{old('slug')}}@else{{$blog_category->slug}}@endif">
       @if ($errors->has('slug')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('slug') }}
            </label>
        @endif 
        </div>

          <div class="row"> 
        <div class="col-md-12">
            <label>Banner Image: </label>
        </div>
       <div class="col-md-6">  
      <div class="form-group">
        
        <img src="{{ asset('public/images/blog/category/'.$blog_category->banner_image) }}">
        <input type="hidden" name="old_banner_img" value="{{$blog_category->banner_image}}">
         </div>
    </div>
    <div class="col-md-6"> 
        <img id="blah" src="#"  />
        <br>
        <input type="file" name="banner_image" id="imgInp" >
        @if ($errors->has('banner_image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('banner_image') }}
            </label>
        @endif
   </div>
</div>

    <div class="form-group">
        <label>Alt Banner Image: </label>
       
        <input type="text" name="alt_banner_image"  value="@if ($errors->has('alt_banner_image')){{old('alt_banner_image')}}@else{{$blog_category->alt_banner_image}}@endif">
        @if ($errors->has('alt_banner_image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('alt_banner_image') }}
            </label>
        @endif
    </div>


        <div class="form-group">
        <label>Meta Title: </label>
       
        <input type="text" name="meta_title" value="@if ($errors->has('meta_title')){{old('meta_title')}}@else{{$blog_category->meta_title}}@endif" >
        @if ($errors->has('meta_title'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_title') }}
            </label>
        @endif
    </div>
   
        <div class="form-group">
        <label>Meta Description: </label>
        <textarea rows="4" cols="50" name="meta_description">@if ($errors->has('meta_description')){{old('meta_description')}}@else{{$blog_category->meta_description}}@endif </textarea>
        @if ($errors->has('meta_description'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_description') }}
            </label>
        @endif

    </div>
        <div class="form-group">
        <label>Meta Keyword: </label>
     
        <input type="text" name="meta_keyword" value="@if ($errors->has('meta_keyword')){{old('meta_keyword')}}@else{{$blog_category->meta_keyword}}@endif">
        @if ($errors->has('meta_keyword'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('meta_keyword') }}
            </label>
        @endif
   
    </div>

           
        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary" value="Update">
    </div>
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




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