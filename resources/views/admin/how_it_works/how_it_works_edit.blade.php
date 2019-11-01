@include('partials/admin/header')
@include('partials/admin/sidebar')

 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">How It Works</h3>
                  
                </div>
        
                @include('partials/admin/msg')
	 <form name="how_it_works_edit" method="POST" action="{{ route('how-it-works-update') }}"  enctype="multipart/form-data">
	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	 <input type = "hidden" name = "id" value = "{{$how_it_work_edit->id}}">

	

	    <div class="form-group">
	        <label>Content: </label>
	      	<textarea rows="4" cols="50" name="content">
			@if ($errors->has('content')){{old('content')}}@else{{$how_it_work_edit->content}} @endif

			</textarea>
	    @if ($errors->has('content')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('content') }}
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