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
<section class="inner-banner" style="background: url({{ asset('public/images/blog/'.$data->image) }});">
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h1>{{$data->title}}<span></span></h1>
					<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</li>
						<li class="sublist-active"><a href="{{url('blog') }}">Blog</a></li>
						
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
					<div class="blog-wrap">	
		            <h1 class="blog-title"><span>{{$data->title}}</span></h1>
		      		<p ><?php echo $data->description ?></p>
		      		</div>
				</div>
				<div class="col-lg-4 col-md-4">
				<div class="bck-color"> 
				@foreach($related_blogs as $related_blog)
				@if($related_blog->title != $data->title)
					<div class="sidebar-wrap">
						<img src="{{ asset('public/images/blog/'.$related_blog->image) }}" class="img-responsive">
						<div class="side-text-wrap">
							<h5>{{$related_blog->title}}</h5>
							<?php echo substr($related_blog->description, 0, 50); ?>
							<div class="small-center"><a href="{{url('blogs/'.$category->slug.'/'.$related_blog->slug) }}"><button class="theme-btn" type="button">More Information</button></a></div>
						</div>
						
					</div>
				@endif
				@endforeach
				</div> 
			</div>
		</div>
	</div>
</section>

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