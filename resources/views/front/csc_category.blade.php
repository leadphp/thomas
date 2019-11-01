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
				<h1>{{$data->title}}<span></span></h1>
				<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
						<li class="sublist-active"><a href="{{url('categories') }}">Category</a></li>
						<li >{{$data->title}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="categories" class="innerpage">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
		<aside>
					<ul>
						@foreach($csc_category as $category)

						  <?php
						  /*DB::enableQueryLog();*/
						  $sub_category = DB::table('csc_sub_categories') 
										->leftJoin('csc_cat_subs', 'csc_sub_categories.id', '=', 'csc_cat_subs.sub_category_id')
										->select('csc_sub_categories.*')    
										->where('csc_cat_subs.category_id',$category->id)  
										->orderBy('csc_sub_categories.id', 'ASC') 
										->get();

										/*$query = DB::getQueryLog();*/

						?> 
						<li>


							@if($category->csc_type != 'only')
							<a href="{{url('category/'.$category->slug) }}"><div class="text-drop @if($category->title == $data->title){{'active'}}@endif ">{{$category->title}}</div></a> 
							<a class="dropdown-btn togglebtn @if($category->title == $data->title){{'active-dropbtn'}}@endif">
								<i class="fa fa-plus"></i>
							</a>
							@else
							<a href="{{url('category/'.$category->slug) }}"><div class="text-drop">{{$category->title}}</div></a>
							@endif





							<div class="dropdown-container @if($category->title == $data->title){{'active-container'}}@endif ">
							@foreach($sub_category as $sub_cat)
							<?php

								$detail = DB::table('csc_details') 
										->leftJoin('csc_sub_dets', 'csc_details.id', '=', 'csc_sub_dets.detail_id')
										->select('csc_details.*')    
										->where('csc_sub_dets.sub_category_id',$sub_cat->id)  
										->orderBy('csc_details.id', 'ASC') 
										->get();
										

								?>		

							@if($category->csc_type == 'single')

									<a href="{{url('category/'.$category->slug.'/'.$sub_cat->slug) }}"><div class="text-drop">{{$sub_cat->title}}</div></a>
								
									</a>
							@else
								@if($detail->isEmpty())  
								<a href="{{url('category/'.$category->slug.'/'.$sub_cat->slug) }}"><div class="text-drop">{{$sub_cat->title}}</div></a>
								
								@else
								<a href="{{url('category/'.$category->slug.'/'.$sub_cat->slug)  }}"><div class="text-drop">{{$sub_cat->title}}</div></a>
								<a class="dropdown-btn togglebtn">
								<i class="fa fa-plus"></i>
								</a>
								<div class="dropdown-container">
								@foreach($detail as $det)
									<a href="{{url('category/'.$category->slug.'/'.$sub_cat->slug.'/' .$det->slug)  }}">{{$det->title}}</a>
							
								@endforeach
								</div>
								@endif
							@endif
							
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
						<img src="{{ asset('public/images/product/'.$data->image) }}" class="img-responsive cust-image-size">
						<div class="cast-text">	
							<h2>{{$data->title}}<span class="right">{{$data->price}} </span></h2>
							<div class="para-div">
							<?php echo $data->description ?>
							</div>
							<a class="readmore access-link">Read More</a>
							<a class="readmore2 access-link now-hide">Read less</a>
							<!-- <a class="access-link" href="{{url('category/single/'.$data->slug) }}">More Information  Chevron-right ></a> -->
						<hr>
						</div>
					</div>
				</div>	
					@foreach($sub_categories as $cats)
				<div class="row">
					<div class="col-md-4">
						<a href="{{url('category/'.$data->slug.'/'.$cats->slug) }}">
							<img src="{{ asset('public/images/product/'.$cats->image) }}" class="img-responsive ">
						</a>
					</div>
					<div class="col-md-8">
						<h5><a href="{{url('category/'.$data->slug.'/'.$cats->slug) }}">{{$cats->title}}</a><br>
						</h5>
						<hr class="smallpadd">
						<div class="para-div">
							<?php echo $cats->description?>
						</div>
						<a class="readmore access-link">Read More</a>
						<a class="readmore2 access-link now-hide">Read less</a>
						<!-- <a class="access-link" href="{{url('category/'.$data->slug.'/'.$cats->slug) }}">More Information  Chevron-right ></a> -->
					</div>
				</div>
				<hr>
				@endforeach
			</div>
		</div>
	</div>
</section>	


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
<script>
	$(".active-container").show();
</script>
@include('partials/front/footer')