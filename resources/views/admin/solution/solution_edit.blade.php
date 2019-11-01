    @include('partials/admin/header')
    @include('partials/admin/sidebar')

    <aside class="right-side">
     <div class="content cstm-cms-data">
        <!-- Content Header (Page header) -->
				<div class="box-header" style="cursor: move;">
                  <h3 class="box-title">Solutions</h3>
                  
                </div>
        
        @include('partials/admin/msg')
        <form name="solution_edit" method="post" action="{{ route('solution-update')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-10">
            	<div class="toogle-wrap">
					<div class="togglebtn toggle-click">
                <input type="button" class="solution_details cstm-accor" value="Solution Section">
                <i class="fa fa-plus solution_details"></i>
            </div>
        </div>
					<div class="cstm-solution">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
						<input type = "hidden" name = "id" value = "{{ $solution_edit->id}}">
						<input type = "hidden" name = "type" value = "solution">
						<div class="form-group">
							<label>Title: </label>
							<input type="text" name="title" value="@if ($errors->has('title')){{old('title')}}@else{{$solution_edit->title}}@endif">
						   @if ($errors->has('title')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('title') }}
								</label>
							@endif 
						</div>

							<div class="form-group">
							<label>Price: </label>
							<input type="text" name="price" value="@if ($errors->has('price')){{old('price')}}@else{{$solution_edit->price}}@endif">
						   @if ($errors->has('price')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('price') }}
								</label>
							@endif 
						</div>

						<div class="form-group">
							<label>Banner Image: </label>
							<div class="row">
							<div class="col-md-6">
							 <img src="{{ asset('public/images/admin/solution/banner/'.$solution_edit->banner_image) }}" class="tt">
							 <input type = "hidden" name ="old_banner_img" value ="{{$solution_edit->banner_image}}">
							</div>
							<div class="col-md-6">
							<img id="blah1" src="#"  />
							<br>
							<input type="file" name="banner_image" id="banner" value="">
							</div>
							</div>
						</div>
						<div class="form-group">
							<label>Alt Banner Image: </label>
							<input type="text" name="alt_banner_image" value="@if ($errors->has('alt_banner_image')){{old('alt_banner_image')}}@else{{$solution_edit->alt_banner_image}}@endif">
						   @if ($errors->has('alt_banner_image')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('alt_banner_image') }}
								</label>
							@endif 
						</div>
						<div class="form-group">
							<label> Detail: </label>
							
							<textarea rows="4" cols="50" name="description"> @if ($errors->has('description')){{old('description')}}@else{{$solution_edit->description}}@endif </textarea>
							 @if ($errors->has('description')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('description') }}
								</label>
							@endif 
						</div>
						<div class="form-group">
							<label>Image: </label>
							<div class="row">
							<div class="col-md-6">
							<img src="{{ asset('public/images/admin/solution/'.$solution_edit->image) }}" class="tt">
							<input type = "hidden" name = "old_img" value ="{{$solution_edit->image}}">
							</div>
							<div class="col-md-6">
							<img id="blah" src="#"  />
								<br>
							<input type="file" name="image" id="imgInp" >
							</div>
							</div>
						</div>
						  <div class="form-group">
						<label>Alt Image: </label>
					 
						<input type="text" name="image_alt" value="@if ($errors->has('image_alt')){{old('image_alt')}}@else{{$solution_edit->image_alt}}@endif">
					   @if ($errors->has('image_alt')) 
							<label class="invalid-feedback label error" role="alert">
								{{ $errors->first('image_alt') }}
							</label>
						@endif 
						</div>

			<!-- 			<div class="form-group">
							<label> Product Features: </label>
							
							<textarea rows="4" cols="50" name="product_features"> @if ($errors->has('product_features')){{old('product_features')}}@else{{$solution_edit->product_features}}@endif </textarea>
							 @if ($errors->has('product_features')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('product_features') }}
								</label>
							@endif 
						</div>

						<div class="form-group">
							<label> Available Cast-In-Place Tile Sizes And Prices: </label>
							
							<textarea rows="4" cols="50" name="size_price"> @if ($errors->has('size_price')){{old('size_price')}}@else{{$solution_edit->size_price}}@endif </textarea>
							 @if ($errors->has('size_price')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('size_price') }}
								</label>
							@endif 
						</div>

						<div class="form-group">
							<label> Application: </label>
							
							<textarea rows="4" cols="50" name="application"> @if ($errors->has('application')){{old('application')}}@else{{$solution_edit->application}}@endif </textarea>
							 @if ($errors->has('application')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('application') }}
								</label>
							@endif 
						</div> -->





						<div class="form-group">
							<label>Meta Title: </label>
							<input type="text" name="meta_title" value="@if ($errors->has('meta_title')){{old('meta_title')}}@else{{$solution_edit->meta_title}}@endif" >
						   @if ($errors->has('meta_title')) 
								<label class="invalid-feedback label error" role="alert">
									{{ $errors->first('meta_title') }}
								</label>
							@endif 
					   </div>
						<div class="form-group">
						<label>Meta Description: </label>
						<textarea rows="4" cols="50" name="meta_description"> @if ($errors->has('meta_description')){{old('meta_description')}}@else{{$solution_edit->meta_description}}@endif </textarea>
						@if ($errors->has('meta_description')) 
							<label class="invalid-feedback label error" role="alert">
								{{ $errors->first('meta_description') }}
							</label>
						@endif 
						</div>
						<div class="form-group">
						<label>Meta Keyword: </label>
					   
						<input type="text" name="meta_keyword" value="@if ($errors->has('meta_keyword')){{old('meta_keyword')}}@else{{$solution_edit->meta_keyword}}@endif">
						@if ($errors->has('meta_keyword')) 
							<label class="invalid-feedback label error" role="alert">
								{{ $errors->first('meta_keyword') }}
							</label>
						@endif 
						</div>
					</div>
			</div>
        </div>
		<!-- <div class="row paddtop">
			<div class="col-md-10">
				<div class="toogle-wrap">
					<div class="togglebtn toggle-click">
				<input type="button" class="tile-spec cstm-accor" value="Tile Specifications">
				<i class="fa fa-plus tile-spec"></i>
				</div>
			</div>
				<div class="cstm-tile">
					<div class="table-responsive table-bordered">          
						<table class="table">
							<thead>
								<tr>
									<th>Tile Size</th>
									<th>Sqft/Tile</th>
									<th>Cost Per Tile</th>
									<th>#Tiles Per Box</th>
									<th>Cost Per Box</th>
									<th>Add/Remove</th>
								</tr>
							</thead>
							<tbody class="tile_body">
								<?php  $i=1 ?>
								@foreach($tiles_specification as $tile)
								<tr>
									<td><p><input type="text" name="size[]" value="{{$tile->size}}"><p></td>
									<td><p><input type="text" name="sqft[]" value="{{$tile->sqft}}"><p></td>
								
									<td><p><input type="text" name="cost_per_title[]" value="{{$tile->cost_per_title}}"><p></td>
									<td><p><input type="text" name="titles_per_box[]" value="{{$tile->titles_per_box}}"><p></td>
									<td><p><input type="text" name="cost_per_box[]" value="{{$tile->cost_per_box}}"><p></td>
									<td class="inline-flex">
									<input type="button" class="add btn btn-primary" value="Add" onclick="addrow();">
									@if($i != 1)
									<input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();">
									@endif
									<?php  $i++ ?>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row paddtop">
			<div class="col-md-10">
				<div class="toogle-wrap">
					<div class="togglebtn toggle-click">
				<input type="button" class="colours cstm-accor" value="Colours">
				<i class="fa fa-plus colours"></i>
					</div>
				</div>
				<div class="cstm-colour">
					
					<div class="table-responsive table-bordered">          
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Number</th>
									<th>Background Colour</th>
									<th>Add/Remove</th>
									
								</tr>
							</thead>
							<tbody class="colour_body">
								<?php $j=1;?>
								@foreach($colours as $colour)
								<tr>
									<td><p><input type="text" name="name[]" value="{{$colour->name}}"></p></td>
									<td><p><input type="text" name="number[]" value="{{$colour->number}}"></p></td>
									<td><p><input type="text" name="background_colour[]" value="{{$colour->background_colour}}"></p></td>
									
									<td class="inline-flex">
									<input type="button" class="add btn btn-primary" value="Add" onclick="colouraddrow();">
										@if($j != 1)
									<input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();">
									@endif
									<?php  $j++ ?>
									</td>

								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row paddtop">
			<div class="col-md-10">
				<div class="form-group">            
					<input type="submit" name="Submit" value="Update" class="btn btn-primary">
				</div>
			</div>
		</div>
    </div>
</aside>
 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>   
 <script>
    CKEDITOR.replace( 'description' );
    /*CKEDITOR.replace( 'meta_description' );
    CKEDITOR.replace( 'product_features' );
    CKEDITOR.replace( 'size_price' );
    CKEDITOR.replace( 'application' );*/
    


 </script> 


 <script type="text/javascript">
              
    $(document).ready(function(){


         $("#blah").hide();
         $("#blah1").hide();
      /*   $(".cstm-solution").hide();
         $(".cstm-tile").hide();
         $(".cstm-colour").hide();

      $(".solution_details").click(function(){
        $(".cstm-solution").toggle();
      });   

      $(".tile-spec").click(function(){
        $(".cstm-tile").toggle();
      });

      $(".colours").click(function(){
        $(".cstm-colour").toggle();
      });*/
    });

 /*   function addrow(){
        
        
        $(".tile_body").append('<tr><td><p><input type="text" name="size[]" value=""></p></td><td><p><input type="text" name="sqft[]" value=""></p></td><td><p><input type="text" name="cost_per_title[]" value=""></p></td><td><p><input type="text" name="titles_per_box[]" value=""></p></td><td><p><input type="text" name="cost_per_box[]" value=""></p></td><td class="inline-flex"><input type="button" class="add btn btn-primary" value="Add" onclick="addrow();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>');

    }


    function colouraddrow()
    {
        $(".colour_body").append('<tr><td><p><input type="text" name="name[]" value=""></p></td><td><p><input type="text" name="number[]" value=""></p></td><td><p><input type="text" name="background_colour[]" value=""></p></td><td class="inline-flex"><input type="button" class="add btn btn-primary" value="Add" onclick="colouraddrow();"><input type="button" class="remove btn btn-primary" value="Remove" onclick="$(this).parent().parent().remove();"></td></tr>'); 
    }*/

      function readURL(input) 
     {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }

           if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }
    }

    $("#imgInp").change(function() {
        readURL(this);
        $("#blah").show();
    });

    $("#banner").change(function() {
        readURL(this);
        $("#blah1").show();
    });

  

 </script>

<!-- <script>
$(".toogle-wrap").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
</script> -->


    @include('partials/admin/footer')  