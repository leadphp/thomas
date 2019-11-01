    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Request A Quote</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <form name="request-edit" method="post" action="{{ route('request-update')}}" enctype="multipart/form-data" >  
        <div class="row">
            <div class="col-md-10">

		<div class="cstm-solution">
        
	  
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <input type = "hidden" name = "id" value = "{{$requests[0]->id}}">

		<div class="form-group">
			<label>First Name: </label>
			<input type="text" name="fname" value="@if($errors->has('fname')){{old('fname')}}@else{{$requests[0]->fname}}@endif" >
			@if ($errors->has('fname')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('fname') }}
				</label>
			@endif 
		</div>

		 

		 <div class="form-group">
			<label>Last Name: </label>
		
			<input type="text" name="lname"  value="@if($errors->has('lname')){{old('lname')}}@else{{$requests[0]->lname}}@endif" >
			@if ($errors->has('lname')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('lname') }}
				</label>
			@endif 
		</div>

		
    


		<div class="form-group">
			<label>Email: </label>
			<input type="text" name="email" value="@if($errors->has('email')){{old('email')}}@else{{$requests[0]->email}}@endif" >
			@if ($errors->has('email')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('email') }}
				</label>
			@endif 
		</div>	

        <div class="form-group">
	        <label>Phone: </label>
	        <input type="text" name="phone" value="@if($errors->has('phone')){{old('phone')}}@else{{$requests[0]->phone}}@endif" >
	       	@if ($errors->has('phone')) 
	            <label class="invalid-feedback label error" role="alert">
	                {{ $errors->first('phone') }}
	            </label>
	        @endif 
	    </div>
   
   

        <div class="form-group">
        	<label>Company Name: </label>
       
        	<input type="text" name="company" value="@if($errors->has('company')){{old('company')}}@else{{$requests[0]->company}}@endif" >
        	@if ($errors->has('company')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('company') }}
            </label>
        	@endif 
    	</div>

    	 <div class="form-group">
        	<label>Question 1: </label>
       
        	<input type="text" name="question1" value="@if($errors->has('question1')){{old('question1')}}@else{{$requests[0]->question1}}@endif" >
        	@if ($errors->has('question1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question1') }}
            </label>
        	@endif 
    	</div>

    	<div class="form-group">
        	<label>Question 2: </label>
       
        	<input type="text" name="question2" value="@if($errors->has('question2')){{old('question2')}}@else{{$requests[0]->question2}}@endif" >
        	@if ($errors->has('question2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question2') }}
            </label>
        	@endif 
    	</div>

    	<div class="form-group">
        	<label>Question 2 options: </label>
       
        		<div class="table-responsive table-bordered">          
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								
								
							</tr>
						</thead>
						<tbody class="question2">
							@foreach ($qst2_value as $qst2)
							<tr>
								<td><p><input type="text" name="q2name[]" value="{{$qst2}}" ></p></td>

								
								
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
    	</div>

    	

    	<div class="form-group">
        	<label>Question 3: </label>
       
        	<input type="text" name="question3" value="@if($errors->has('question3')){{old('question3')}}@else{{$requests[0]->question3}}@endif" >
        	@if ($errors->has('question3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question3') }}
            </label>
        	@endif 
    	</div>

    	<div class="form-group">
        	<label>Wet Concrete Values: </label>
       
        	
        	
        		<div class="table-responsive table-bordered">          
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								
								<th>Add/Remove</th> 
							</tr>
						</thead>
						<tbody class="wet">
							<?php $i=1;?>
							@foreach( $wet_value as $wet)
							<tr>
								<td><p><input type="text" name="wet_value[]" value="{{$wet}}" ></p></td>
								
								<td class="inline-flex">
								<input type="button" class="add btn btn-primary" value="Add" onclick="wet();">
								@if($i!=1)
								<input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();">
								@endif
								<?php $i++;?>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
    	</div>
    	<div class="form-group">
        	<label>Surface Values: </label>
       
        	
        	
        		<div class="table-responsive table-bordered">          
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								
								 <th>Add/Remove</th> 
							</tr>
						</thead>
						<tbody class="surface">
							<?php $j=1;?>
							@foreach ($surface_value as $surface)
							<tr>
								<td><p><input type="text" name="surface_value[]" value="{{$surface}}" ></p></td>
								
 								<td class="inline-flex"> 
								 <input type="button" class="add btn btn-primary" value="Add" onclick="surface();"> 
								@if($j!=1)
								<input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();">
								@endif
								<?php $j++;?>
							</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
    	</div>

    	<div class="form-group">
        	<label>Question 4: </label>
       
        	<input type="text" name="question4" value="@if($errors->has('question4')){{old('question4')}}@else{{$requests[0]->question4}}@endif" >
        	@if ($errors->has('question4')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question4') }}
            </label>
        	@endif 
    	</div>

    	<div class="form-group">
        	<label>Question 5: </label>
       
        	<input type="text" name="question5" value="@if($errors->has('question5')){{old('question5')}}@else{{$requests[0]->question5}}@endif" >
        	@if ($errors->has('question5')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question5') }}
            </label>
        	@endif 
    	</div>

    	 	<div class="form-group">
        	<label>Question 6: </label>
       
        	<input type="text" name="question6" value="@if($errors->has('question6')){{old('question6')}}@else{{$requests[0]->question6}}@endif" >
        	@if ($errors->has('question6')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('question6') }}
            </label>
        	@endif 
    	</div>
       
    </div>
	</div>
</div>
  
	



	<div class="col-md-10">
		<div class="form-group">            
	        <input type="submit" name="Submit" class="btn btn-primary">
	    </div>
	</div>


</form>







</div>


        








    </aside>
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'meta_description' );
    
 	
</script>

<script type="text/javascript">
	function q2add()
	{
		$(".question2").append('<tr><td><p><input type="text" name="q2name[]" value=""></p></td><td><input type="button" class="add btn btn-primary" value="Add" onclick="q2add();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');	
	}

	function wet()
	{
		$(".wet").append('<tr><td><p><input type="text" name="wet_value[]" value=""></p></td><td><input type="button" class="add btn btn-primary" value="Add" onclick="wet();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');	
	}

	function surface()
	{
		$(".surface").append('<tr><td><p><input type="text" name="surface_value[]" value=""></p></td><td><input type="button" class="add btn btn-primary" value="Add" onclick="surface();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');	
	}
</script>

    @include('partials/admin/footer')  