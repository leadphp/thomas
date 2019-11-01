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
				<h2>{{$data->title}}<span></span></h2>
				<div> 
					<ul class="sublist">
						<li class="sublist-active">home</li>
						<li >Solutions</li>
						<li >Category</li>
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
						@foreach($solutions as $solution)

						  <?php
						  
						  $category = DB::table('categories')
										->leftJoin('sol_cats', 'categories.id', '=', 'sol_cats.category_id')
										->select('categories.*')    
										->where('sol_cats.solution_id',$solution->id)  
										->get();


						?> 
						
						<li>
							<a href="{{url('solution/'.$solution->slug) }}"><div class="text-drop">{{$solution->title}}</div></a> 
							<a class="dropdown-btn togglebtn">
								<i class="fa fa-plus"></i>
							</a>
							<div class="dropdown-container">
							@foreach($category as $cat)
							<?php $sub_category = DB::table('sub_categories')
										->leftJoin('cat_subcats', 'sub_categories.id', '=', 'cat_subcats.sub_category_id')
										->select('sub_categories.*')    
										->where('cat_subcats.category_id',$cat->id)  
										->get();
										
										?>
								<a href="{{url('solution/category/'.$cat->slug)}}"><div class="text-drop">{{$cat->title}}</div></a> 
								<a class="dropdown-btn togglebtn">
									
								</a>
								@foreach($sub_category as $sub_cat)
								<div class="dropdown-container">
									<a href="{{url('solution/category/sub-category/'.$sub_cat->slug) }}">{{$sub_cat->title}}</a>
								</div>
								@endforeach
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
						<img src="{{ asset('public/images/admin/solution/'.$data->image) }}" class="{{$data->image_alt}}">
						<div class="cast-text">	
							<h2>{{$data->title}}<span class="right">{{$data->price}} </span></h2>
							<?php echo $data->description ?>
							<a class="access-link" href="{{url('solution/category/single/'.$data->slug) }}">More Information  Chevron-right ></a>
							<hr>
						</div>
					</div>
				</div>	
				

		 		@foreach($sub_category as $sub_cat)

				<div class="row">
					<div class="col-md-4">
						<img src="{{ asset('public/images/admin/solution/'.$sub_cat->image) }}" class="img-responsive fullheight">
					</div>
					<div class="col-md-8">
						<h5>{{$sub_cat->title}}<br>
						</h5>
						<hr class="smallpadd">
						<?php echo $sub_cat->description?>
						<a class="access-link" href="{{url('solution/category/sub-category/'.$sub_cat->slug) }}">More Information  Chevron-right ></a>
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
@include('partials/front/footer')