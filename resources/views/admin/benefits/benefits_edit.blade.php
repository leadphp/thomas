@include('partials/admin/header')
@include('partials/admin/sidebar')

 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Benefits</h3>
                  
                </div>
        
                @include('partials/admin/msg')
	 <form name="benefits_edit" method="POST" action="{{ route('benefits-update') }}"  enctype="multipart/form-data">
	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	 <input type = "hidden" name = "id" value = "{{$benefit->id}}">

		
		<div class="form-group">
			<label>Title: </label>
			<input type="text" name="title" value="@if ($errors->has('title')){{old('title')}}@else{{$benefit->title}}@endif">
			@if ($errors->has('title')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('title') }}
				</label>
			@endif 
		</div>


	    <div class="form-group">
	        <label>Content: </label>
	      	<textarea rows="4" cols="50" name="description">@if ($errors->has('content')){{old('content')}}@else{{$benefit->description}} @endif</textarea>
	    @if ($errors->has('content')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('content') }}
            </label>
        @endif     
	    </div>



	    


	    <div class="form-group">            
	        <input type="submit" name="Submit" class="btn btn-primary" value="Update">
	    </div>




	 	
	 </form>
</div>
</aside>	 

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
        
    </script>







@include('partials/admin/footer')