@include('partials/admin/header')
@include('partials/admin/sidebar')

<aside class="right-side">
  

    <section class="content cstm-cms-data">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Logo</h3>
              <div class="box-tools">
               
              </div>
            </div><!-- /.box-header -->
            @include('partials/admin/msg')
            <div class="row">
                <div class="col-md-6">
                    <h2>Change Logo</h2>
					<div class="logowrap">
                  <form name="logo" method="POST" action="{{ route('logo-change')}}"  enctype="multipart/form-data">
				   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<img id="blah" src="#"  />
					<br>
				  <input type="file" name="logo" id="imgInp">
					  @if ($errors->has('logo')) 
						<label class="invalid-feedback label error" role="alert">
						  {{ $errors->first('logo') }}
						</label>
					  @endif 
				  <br>
				  <input type="submit" name="submit" value="Submit" class="btn btn-primary">

				</form>  
				</div>			
                </div>
                <div class="col-md-6">
                  <h2>Selected Logo</h2>
				  <div class="logowrap">
                    <img src="{{ asset('public/images/admin/logo.png') }}">
					</div>
                </div>
            </div>
                     
           
          </div><!-- /.box -->
        </div>
      </div>
      
    </div></section>
</aside>

<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
  $("#blah").show();
});






</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#blah").hide();

});
</script>
@include('partials/admin/footer')  