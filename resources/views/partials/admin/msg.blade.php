@if(Session::has('Success'))
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Record Saved.
  </div>
@endif

@if(Session::has('update'))
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Update!</strong> Record Successfully.
  </div>
@endif


@if(Session::has('delete'))
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Record!</strong> Deleted Successfully.
  </div>
@endif

