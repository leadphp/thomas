@include('partials/front/header')
<div class="req-btn">
	<span class="ph_icon">
		<a href="callto:1-877-761-5354"><i class="fa fa-mobile" aria-hidden="true"></i></a>
	</span>
	  <span class="req-form-icon">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </span>
	<a href="javascript:void(0);" class="req-quote" data-toggle="modal" data-target="#myModal2"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Request A Quote</a>
</div>
<section class="inner-banner" style="background: url({{ asset('public/images/product/banner/'.$data->banner_image) }});">
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h2>{{$data->title}}<span></span></h2>
					<div> 
					<ul class="sublist">
						<li class="sublist-active">Home</li>
						<li class="sublist-active">Category</li>
						
						<li>{{$data->title}}</li>
					</ul>
					</div>
				</div>
		</div>
	</div>
</section>
<section id="categories" class="sub-categories">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<img src="{{ asset('public/images/product/'.$data->image) }}" class="img-responsive" alt="{{$data->image_alt}}">
						<div class="cast-text">					
						<h2>{{$data->title}}</h2>
						<h2>{{$data->price}}</h3>
						</div>
					<div class="questions">
						<button class="accordion">Detail</button>
						<div class="panel">
							<div class="panel-padd">
							<?php echo $data->description ?>
							</div>
						</div>

						<button class="accordion">Product Features</button>
						<div class="panel">
							<div class="panel-padd">
							<?php echo $data->product_features ?>
							</div>
						</div>
						<button class="accordion">Available Cast-In-Place Tile Sizes And Prices</button>
						<div class="panel">
						<div class="panel-padd">
						<?php echo $data->size_price ?>
						</div>
						</div>
						<button class="accordion">Tile Specifications</button>
						<div class="panel">
							 <div class="table-responsive table-bordered">          
								  <table class="table">
									<thead>
									  <tr>
										<th>Tile Size</th>
										<th>Sqft/Tile</th>
										<th>Cost Per Tile</th>
										<th>#Tiles Per Box</th>
										<th>Cost Per Box</th>
									  </tr>
									</thead>
									<tbody>
									@foreach($tiles_specification as $tile)	

									  <tr>
										<td>{{$tile->size}}</td>
										<td>{{$tile->sqft}}</td>
										<td>{{$tile->cost_per_title}}</td>
										<td>{{$tile->titles_per_box}}</td>
										<td>{{$tile->cost_per_box}}</td>
									  </tr>
									@endforeach  
									</tbody>
								  </table>
								  </div>
						</div>
						<button class="accordion">Standard Colours</button>
						<div class="panel">
							<div class="panel-padd colordiv">
								<div class="row">
									@foreach($colours as $colour)
									<div class="col-md-2 col-sm-2 col-xs-4  text-center">
										<div class="colorbox" style="background:{{$colour->	background_colour}}">
										</div>
										<h4>{{$colour->name}}</h4>
										<h4>{{$colour->number}}</h4>
									</div>
									@endforeach
									
								
								</div>
                            </div>		
						</div>
						<button class="accordion">Applications</button>
						<div class="panel">
							<div class="panel-padd">
							<?php echo $data->application ?>
							</div>
						</div>
					</div>
				</div>
		<!-- 		<div class="col-lg-4 col-md-4">
					<div class="sidebar-wrap">
						<img src="http://49.249.236.30:6644/compliancesolutionscanada/public/images/front/home/side-1.png" class="img-responsive">
						<div class="side-text-wrap">
							<h5>Cast-In-Place Attention Domes<br>
							From: <span>$18.09</span>Per sqft</h5>
							<p>Introducing the Ultimate SolutionTM in Tactile Walking (TWSI). Access® Tile Attention Domes tiles Surface...</p>
							<div class="small-center"><button class="theme-btn" type="button">More Information</button></div>
						</div>
						
					</div>
				</div> -->
		</div>
	</div>
</section>
<!--<section id="quote">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Request A Quote</h2>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-user-o" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Name:" id="text1">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Email:" id="text1">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-mobile" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Phone:" id="text1">
				</div>
			</div>
			<div class="col-lg-12 padd-30">
				<div class="form-group ">   
				   <i class="far fa-comment" aria-hidden="true"></i>           
					<textarea rows="4" cols="50" class="form-control" placeholder="Message:"></textarea>					
					</div>
			</div>
			<div class="col-lg-12 padd-20">
				<button type="submit" class="btn btn-primary ">Send</button>
			</div>
		</div>
	</div>
</section>-->
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
	
@include('partials/front/footer')