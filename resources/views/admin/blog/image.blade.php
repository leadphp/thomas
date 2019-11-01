<form action="{{ route('move')}}" method="post" enctype="multipart/form-data">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<input type="file" name="image" >
<input type="submit" name="submit">
</form>