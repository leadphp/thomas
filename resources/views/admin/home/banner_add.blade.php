@include('partials/admin/header')
@include('partials/admin/sidebar')

 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Home Banner</h3>
                  
                </div>
        
                @include('partials/admin/msg')
	 <form name="banner_image" method="POST" action="{{ route('banner-save') }}"  enctype="multipart/form-data">
	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	 	<div class="form-group">
	        <label>Image: </label>
	      	<input type="file" name="image">
	    @if ($errors->has('image')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image') }}
            </label>
        @endif     
	    </div>

	    <div class="form-group">
	        <label>Image Alt: </label>
	      	<input type="text" name="image_alt" value="{{old('image_alt')}}">
	    @if ($errors->has('image_alt')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image_alt') }}
            </label>
        @endif     
	    </div>

	    <div class="form-group">
	        <label>Line 1: </label>
	      	<input type="text" name="line_1" value="{{old('line_1')}}"> 
	    @if ($errors->has('line_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_1') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Line 2: </label>
	      	<input type="text" name="line_2" value="{{old('line_2')}}">
	    @if ($errors->has('line_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_2') }}
            </label>
        @endif 
	    </div>

	    <div class="form-group">
	        <label>Line 3: </label>
	      	<input type="text" name="line_3" value="{{old('line_3')}}"> 
	    @if ($errors->has('line_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('line_3') }}
            </label>
        @endif
	    </div>

	    <div class="form-group">
	        <label>Button: </label>
	      	<input type="text" name="button" value="{{old('button')}}"> 
	    @if ($errors->has('button')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('button') }}
            </label>
        @endif
	    </div>

	    <div class="form-group">
	        <label>Button Href: </label>
	      	<input type="text" name="button_href" value="{{old('button_href')}}"> 
	    @if ($errors->has('button_href')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('button_href') }}
            </label>
        @endif
	    </div>
	    <div class="form-group">            
	        <input type="submit" name="Submit" class="btn btn-primary">
	    </div>




	 	
	 </form>
</div>
</aside>	 

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'content' );
        
    </script>







@include('partials/admin/footer')