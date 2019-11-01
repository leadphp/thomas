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
<section class="inner-banner" style="background: url({{ asset('public/images/blog/category/'.$data->banner_image) }});">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{$data->category_title}}<span></span></h1>
				<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
						<li class="sublist-active"><a href="">Blog</a></li>
						<li >{{$data->category_title}}</li>
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
						@foreach($blog_categories as $blog_category)

						  <?php
						  
						  
						?> 
						<li>
							<a href="{{url('blogs/'.$blog_category->slug) }}"><div class="text-drop">{{$blog_category->category_title}}</div></a> 
							<!-- <a class="dropdown-btn togglebtn">
								<i class="fa fa-plus"></i>
							</a> -->
						
						</li>
						@endforeach
					  </ul>
				</aside>
			</div>
			<div class="col-md-9">	
				@foreach ($blog_data as $blog)
						<div class="row">
					<div class="col-md-4">
						<a href="{{url('blogs/'.$blog->cat_slug.'/'.$blog->slug) }}">
						<img src="{{ asset('public/images/blog/'.$blog->image) }}" ></a>
					</div>
					<div class="col-md-8">
						<a href="{{url('blogs/'.$blog->cat_slug.'/'.$blog->slug) }}"><h5>{{$blog->title}}<br>
						</h5></a>
						<hr class="smallpadd">
						<div class="para-div">
						<?php echo $blog->description; ?>
						</div>
						<a class="readmore access-link">Read More</a>
						<a class="readmore2 access-link now-hide">Read less</a>
						<!-- <a class="access-link" href="{{url('blogs/'.$blog->cat_slug.'/'.$blog->slug) }}">More Information  Chevron-right ></a> -->
					</div>
			</div>	
			<hr>
				@endforeach	
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