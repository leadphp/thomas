@include('partials/admin/header')
@include('partials/admin/sidebar')

 <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
        <div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Codes</h3>
                  
                </div>
        
                @include('partials/admin/msg')
	 <form name="code_add" method="POST" action="{{ route('code-save') }}"  enctype="multipart/form-data">
	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	 
	    <div class="form-group">
	        <label>Title: </label>
	      	<input type="text" name="title" value="{{old('title')}}">
	    @if ($errors->has('title')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('title') }}
            </label>
        @endif     
	    </div>

	     <div class="form-group">
            <label>Leaf: </label>
            <input type="radio" name="leaf" value="single" > Single<br>
         
        </div>
        
          <div class="form-group">
            <label>Region: </label>
            <input type="radio" name="region" value="wc"  >Western Canada<br>
            <input type="radio" name="region" value="cc" >Central Canada<br>
            <input type="radio" name="region" value="tm" >The Maritimes<br>
            <input type="radio" name="region" value="nc" >Northern Canada<br>
         
        </div>

	    <div class="form-group">
	        <label>Name 1: </label>
	      	<input type="text" name="name_1" value="{{old('name_1')}}"> 
	    @if ($errors->has('name_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_1') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Href 1: </label>
	      	<input type="text" name="href_1" value="{{old('href_1')}}"> 
	    @if ($errors->has('href_1')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_1') }}
            </label>
        @endif  	
	    </div>

	     <div class="form-group">
	        <label>Name 2: </label>
	      	<input type="text" name="name_2" value="{{old('name_2')}}"> 
	    @if ($errors->has('name_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_2') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Href 2: </label>
	      	<input type="text" name="href_2" value="{{old('href_2')}}"> 
	    @if ($errors->has('href_2')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_2') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Name 3: </label>
	      	<input type="text" name="name_3" value="{{old('name_3')}}"> 
	    @if ($errors->has('name_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name_3') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Href 3: </label>
	      	<input type="text" name="href_3" value="{{old('href_3')}}"> 
	    @if ($errors->has('href_3')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('href_3') }}
            </label>
        @endif  	
	    </div>

	    <div class="form-group">
	        <label>Rate Type: </label>
	      	<input type="text" name="rate_type" value="{{old('rate_type')}}"> 
	    @if ($errors->has('rate_type')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('rate_type') }}
            </label>
        @endif  	
	    </div>
	    <div class="form-group">
	        <label>Provincial Rate: </label>
	      	<input type="text" name="provincial_rate" value="{{old('provincial_rate')}}"> 
	    @if ($errors->has('provincial_rate')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('provincial_rate') }}
            </label>
        @endif  	
	    </div>
	    <div class="form-group">
	        <label>Canada Rate: </label>
	      	<input type="text" name="canada_rate" value="{{old('canada_rate')}}"> 
	    @if ($errors->has('canada_rate')) 
            <label class="invalid-feedback label error" role="alert">
                {{ $errors->first('canada_rate') }}
            </label>
        @endif  	
	    </div>

	
	    <div class="form-group">            
	        <input type="submit" name="Submit" class="btn btn-primary" value="Save">
	    </div>




	 	
	 </form>
</div>
</aside>	 









@include('partials/admin/footer')