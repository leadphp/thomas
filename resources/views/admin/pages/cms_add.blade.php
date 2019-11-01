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
        
        <form name="cms_save" method="post" action="{{ route('cms_save')}}" enctype="multipart/form-data">
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "type" value = "other">
        <input type = "hidden" name = "function" value = "cms">
    
         <div class="form-group">
        <label>Page Name: </label>
     
        <input type="text" name="page_name" value="{{old('page_name')}}">
         @if ($errors->has('page_name'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('page_name') }}
            </label>
        @endif
        </div>

     
      
        <div class="form-group">
        <label> Body: </label>
        
        <textarea rows="4" cols="50" name="body">{{old('body')}}</textarea>
        @if ($errors->has('body'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('body') }}
            </label>
        @endif
        </div>

        <div class="form-group">
              <label>Image: </label>
            
                <img id="blah" src="#"  />
                <br>
                <input type="file" name="image" id="imgInp" value="">
                 
            
        </div>


         <div class="form-group">
        <label >Alt Image: </label>
       
        <input type="text" name="alt_image" value="{{old('alt_image')}}">
        @if ($errors->has('alt_image'))
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('alt_image') }}
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
            <label>Status: </label>
            <label class="switch">
            <input type="checkbox" name="status">
            <span class="slider round"></span>
            </label>    
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
    CKEDITOR.replace( 'body' );

        CKEDITOR.instances.body.on('change', function() {  
    if(CKEDITOR.instances.body.getData().length >  0) {
     $('label[for="body"]').hide();

    }
    else
    {
     $('label[for="body"]').show(); 
    }
});
    
</script>

<script type="text/javascript">
        $(document).ready(function(){


         $("#blah").hide();
            
    });

        function readURL(input) 
        {
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

    @include('partials/admin/footer')  