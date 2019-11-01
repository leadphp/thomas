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
        
        <form name="social_update" method="POST" action="{{route('social-update')}}"  enctype="multipart/form-data">

        @foreach($social_edit as $social)
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "id" value = "{{ $social->id}}">
        
    
         <div class="form-group">
	        <label>Facebook: </label>
	     
	        <input type="text" name="facebook" value="@if ($errors->has('facebook')){{old('facebook')}}@else{{$social->facebook}}@endif">
	       @if ($errors->has('facebook')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('facebook') }}
	            </label>
	        @endif 
        </div>


        <div class="form-group">
	        <label>Twitter: </label>
	     
	        <input type="text" name="twitter" value="@if ($errors->has('twitter')){{old('twitter')}}@else{{$social->twitter}}@endif">
	       @if ($errors->has('twitter')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('twitter') }}
	            </label>
	        @endif 
        </div>

        <div class="form-group">
	        <label>Linkedin: </label>
	     
	        <input type="text" name="linkedin" value="@if ($errors->has('linkedin')){{old('linkedin')}}@else{{$social->linkedin}}@endif">
	       @if ($errors->has('linkedin')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('linkedin') }}
	            </label>
	        @endif 
        </div>

        <div class="form-group">
	        <label>Youtube: </label>
	     
	        <input type="text" name="youtube" value="@if ($errors->has('youtube')){{old('youtube')}}@else{{$social->youtube}}@endif">
	       @if ($errors->has('youtube')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('youtube') }}
	            </label>
	        @endif 
        </div>
        @endforeach 
           
        <div class="form-group">            
        <input type="submit" name="Submit" class="btn btn-primary">
    </div>
   
       
    
        </form>
    </div>
</div>
      </div>
    </aside>




@include('partials/admin/footer')  