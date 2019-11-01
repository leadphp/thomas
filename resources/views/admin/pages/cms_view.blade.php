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
        <form name="cms_update" >
        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{$cmsview ->id}}">
      

         <div class="form-group">
        <label>Page Name: </label>
        
        <input type="text" name="page_name" value="{{$cmsview->page_name}}" disabled>
    
        </div>
        <div class="form-group">
        <label>Body: </label>
      
        <textarea rows="4" cols="50" name="body"> {{$cmsview->body}}</textarea>
        @if ($errors->has('body'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
        @endif
  
        </div>
       
        <div class="form-group">
        <label class="col-md-4">Meta Title: </label>
       
        <input type="text" name="meta_title" value="{{$cmsview->meta_title}}">
        @if ($errors->has('meta_title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_title') }}</strong>
            </span>
        @endif
    </div>

        <div class="form-group">
        <label>Meta Description: </label>
        
        <textarea rows="4" cols="50" name="meta_description"> {{$cmsview->meta_description}}</textarea>
        @if ($errors->has('meta_description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_description') }}</strong>
            </span>
        @endif
    </div>
   
        <div class="form-group">
        <label>Meta Keyword: </label>
        
        <input type="text" name="meta_keyword" value="{{$cmsview->meta_keyword}}">
        @if ($errors->has('meta_keyword'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('meta_keyword') }}</strong>
            </span>
        @endif

    </div>
   
        <div class="form-group">
            <label>Status: </label>
            
            <label class="switch">

            <input type="checkbox" name="status" @if($cmsview->status =='on')
             {
               checked
             }
             @else{
               
             }
             @endif >
            <span class="slider round"></span>
            </label>
          
    </div>
 
        <!-- <div class="form-group">
            
        <input type="submit" name="Submit" class="btn btn-primary">
    </div> -->
 
       
       
        </form>
    </div>
        </div>
      </div>
    </aside>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        
        CKEDITOR.replace( 'body' );
    </script>
    @include('partials/admin/footer')  