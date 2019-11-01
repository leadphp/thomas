@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Social</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <div class="row">
            <div class="col-md-10">
        
        <form name="social_save" method="POST" action=""  enctype="multipart/form-data">

        
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
    
         <div class="form-group">
	        <label>Facebook: </label>
	     
	        <input type="text" name="facebook" value="{{old('facebook')}}">
	       @if ($errors->has('facebook')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('facebook') }}
	            </label>
	        @endif 
        </div>


        <div class="form-group">
	        <label>Twitter: </label>
	     
	        <input type="text" name="twitter" value="{{old('twitter')}}">
	       @if ($errors->has('twitter')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('twitter') }}
	            </label>
	        @endif 
        </div>

        <div class="form-group">
	        <label>Linkedin: </label>
	     
	        <input type="text" name="linkedin" value="{{old('linkedin')}}">
	       @if ($errors->has('linkedin')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('linkedin') }}
	            </label>
	        @endif 
        </div>

        <div class="form-group">
	        <label>Youtube: </label>
	     
	        <input type="text" name="youtube" value="{{old('youtube')}}">
	       @if ($errors->has('youtube')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('youtube') }}
	            </label>
	        @endif 
        </div>

           
        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary">
    </div>
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




@include('partials/admin/footer')  