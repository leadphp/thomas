

        

            

	 <form name="code_add" method="POST" action="{{route('uploader')}}"  enctype="multipart/form-data">

	 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



	 

	    <div class="form-group">

	        <label>Title: </label>
	        <input type="file" name="image">
	    </div>

	    



	

	    <div class="form-group">            

	        <input type="submit" name="Submit" class="btn btn-primary" value="Save">

	    </div>









	 	

	 </form>

</div>

</aside>	 


