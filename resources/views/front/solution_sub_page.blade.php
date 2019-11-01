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
<section class="inner-banner" style="background: url({{ asset('public/images/admin/solution/banner/'.$data->banner_image) }});">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{$data->title}}<span></span></h1>
				<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/')}}">Home</a></li>
						<li class="sublist-active"><a href="{{url('solutions') }}">Solutions</a></li>
						<li class="sublist-active"><a href="{{url('solution/'.$main_solution->slug) }}">{{$main_solution->title}}</a></li>
						<li >{{$data->title}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="categories" class="innerpage">
	<div class="container">
		<div class="row cust-row">
				<div class="col-md-3">
				<aside>
					<ul>
						@foreach($solutions as $solution)

						  <?php
						  
						  $category = DB::table('categories')
										->leftJoin('sol_cats', 'categories.id', '=', 'sol_cats.category_id')
										->leftJoin('csc_categories', 'categories.csc_category_id', '=', 'csc_categories.id')
										->select('categories.*','csc_categories.slug as category_slug')    
										->where('sol_cats.solution_id',$solution->id)  
										->orderBy('categories.id', 'ASC') 
										->get();

										
						?> 
						<li>
							<a href="{{url('solution/'.$solution->slug) }}"><div class="text-drop @if($solution->title == $main_solution->title){{'active'}}@endif">{{$solution->title}}</div></a> 
							<a class="dropdown-btn togglebtn @if($solution->title == $main_solution->title){{'active-dropbtn'}}@endif">
								<i class="fa fa-plus"></i>
							</a>
							<div class="dropdown-container @if($solution->title == $main_solution->title){{'active-container'}}@endif">
							@foreach($category as $cat)
							<?php 
							
							$sub_category = DB::table('sub_categories')
										->leftJoin('categories', 'categories.id', '=', 'sub_categories.category_id')
										->leftJoin('csc_categories', 'sub_categories.csc_category_id', '=', 'csc_categories.id')
										->select('sub_categories.*','csc_categories.slug as csc_slug')
										
										 ->where('categories.id',$cat->id)   
										 ->orderBy('sub_categories.id', 'ASC')     
										->get();
										
										?>
								@if($sub_category->isEmpty())
								<a href="{{url('category/'.$cat->csc_category_id)}}"><div class="text-drop ">{{$cat->title}}</div></a> 
								@else
								<a href="{{url('solution/'.$solution->slug.'/'.$cat->slug)}}"><div class="text-drop  @if($cat->title == $data->title){{'active'}}@endif">{{$cat->title}}</div></a> 
								<a class="dropdown-btn togglebtn @if($cat->title == $data->title){{'active-dropbtn'}}@endif">
									<i class="fa fa-plus"></i>
								</a>
								@endif		
								<div class="dropdown-container @if($cat->title == $data->title){{'active-container'}}@endif">
								@foreach($sub_category as $sub_cat)
									<a href="{{url('category/'.$sub_cat->csc_category_id) }}">{{$sub_cat->title}}</a>
								@endforeach
								</div>
							@endforeach
							</div>
						</li>
						@endforeach
					  </ul>
				</aside>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<img src="{{ asset('public/images/admin/solution/'.$data->image) }}" class="img-responsive cust-image-size">
						<div class="cast-text">	
							<h2>{{$data->title}}<span class="right">{{$data->price}} </span></h2>

							@if(!empty($data->description))
							<div class="para-div">
							<?php echo $data->description ?></div>
							<a class="readmore access-link">Read More</a>
							<a class="readmore2 access-link now-hide">Read less</a>
							@endif
							<!-- <a class="access-link" href="{{url('solution/single/'.$data->slug) }}">More Information  Chevron-right ></a> -->
							<hr>
						</div>
					</div>
				</div>	
				@foreach($category_data as $cats)
						
							<?php 
							
							$sub = DB::table('sub_categories')
										->leftJoin('categories', 'categories.id', '=', 'sub_categories.category_id')
										->leftJoin('csc_categories', 'sub_categories.csc_category_id', '=', 'csc_categories.id')
										->select('sub_categories.*','csc_categories.slug as csc_slug')
										
										 ->where('categories.id',$cats->id) 
										 ->orderBy('sub_categories.id', 'ASC')       
										->get();
										
										?>
			@if($sub->isEmpty())
				<div class="row">
					<div class="col-md-4">
					<a href="{{url('category/'.$cats->csc_category_id) }}">	
						<img src="{{ asset('public/images/admin/solution/'.$cats->image) }}" class="img-responsive fullheight">
					</a>	
					</div>
					<div class="col-md-8">
					<a href="{{url('category/'.$cats->csc_category_id) }}">
						<h5>{{$cats->title}}<br>
						</h5>
					</a>	
						<hr class="smallpadd">
						<div class="para-div">
						<?php echo $cats->description?></div>
						<a class="readmore access-link">Read More</a>
							<a class="readmore2 access-link now-hide">Read less</a>
						<!-- <a class="access-link" href="{{url('solution/category/'.$cats->slug) }}">More Information  Chevron-right ></a> -->
					</div>
				</div>
				@else
						<div class="row">
					<div class="col-md-4">
					<a href="{{url('solution/'.$data->slug.'/'.$cats->slug) }}">	
						<img src="{{ asset('public/images/admin/solution/'.$cats->image) }}" class="img-responsive fullheight">
					</a>	
					</div>
					<div class="col-md-8">
					<a href="{{url('solution/'.$data->slug.'/'.$cats->slug) }}">
						<h5>{{$cats->title}}<br>
						</h5>
					</a>	
						<hr class="smallpadd">
						<div class="para-div">
						<?php echo $cats->description?></div>
						<a class="readmore access-link">Read More</a>
							<a class="readmore2 access-link now-hide">Read less</a>
						<!-- <a class="access-link" href="{{url('solution/category/'.$cats->slug) }}">More Information  Chevron-right ></a> -->
					</div>
				</div>
				@endif
				<hr>
				@endforeach
			</div>
		</div>
	</div>
</section>	
<script>
	$(".active-container").show();
</script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script>
$(".togglebtn").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
</script>
<script>
$(".active-dropbtn").find("i").toggleClass("fa-minus");
</script>

<script>
$(".active-dropbtn").click(function(){
	$('.dropdown-btn').removeClass('active-dropbtn');
});
</script>


@include('partials/front/footer')