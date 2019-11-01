    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Sub Reference</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <form name="sub_reference_add" method="post" action="{{route('sub-reference-save')}}" enctype="multipart/form-data" >  
        <div class="row">
            <div class="col-md-10">
				
			<div class="cstm-solution">
        
	  
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "type" value = "sub">
        
        
        


       

		<div class="form-group">
			<label>Name: </label>
			<input type="text" name="name" value="{{old('name')}}">
			@if ($errors->has('name')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('name') }}
				</label>
			@endif 
		</div>

		<div class="form-group pdf">
			<label>Reference: </label>

		   <select  name="reference_id" >
          <option  value="">--Select--</option>
           @foreach($references as $reference)

          
           <option value="{{$reference->id}}" >{{$reference->name}}</option>
          
           @endforeach
        
        </select>
		</div>


		<div class="form-group pdf">
			<label>Pdf: </label>

		  <input type="file" name="pdf[]" value="" multiple>
			@if ($errors->has('name')) 
				<label class="invalid-feedback label error" role="alert">
					{{ $errors->first('name') }}
				</label>
			@endif 
		</div>

	

	
    
    





   


    
       
    </div>
	</div>
</div>
	


	<div class="row paddtop">
	<div class="col-md-10">
		<div class="form-group">            
	        <input type="submit" name="Submit" value="Save" class="btn btn-primary">
	    </div>
	</div>
	</div>

</form>







</div>


        
    </aside>
 



    @include('partials/admin/footer')  