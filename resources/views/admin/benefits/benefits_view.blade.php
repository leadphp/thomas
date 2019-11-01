@include('partials/admin/header')
@include('partials/admin/sidebar')

 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Benefits</h3>
                  
                </div>
        
                @include('partials/admin/msg')
	 <form name="benefit" method="POST"   enctype="multipart/form-data">
	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		<div class="form-group">
			<label>Title: </label>
			<input type="text" name="title" value="{{$benefit->title}}" disabled="">
			
		</div>


	    <div class="form-group">
	        <label>Content: </label>
	      	<textarea rows="4" cols="50" name="description" disabled>
			{{$benefit->description}}
			</textarea>
	    @if ($errors->has('image_alt')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('image_alt') }}
            </label>
        @endif     
	    </div>



	    


	 




	 	
	 </form>
</div>
</aside>	 

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
        
    </script>







@include('partials/admin/footer')