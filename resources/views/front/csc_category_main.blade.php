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
<section class="inner-banner" style="background: url({{ asset('public/images/cms/'.$data->image) }});">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{$data->page_name}}<span></span></h1>
				<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
						<li >{{$data->page_name}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
    
  </section>
  <section id="thumnail" class="main-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="test-wrap">
                <?php echo $data->body; ?>
            </div>
      </div>
      
     
    </div>
  </div>
</section>
<section id="thumnail">
	<div class="container">
		<div class="row">
			@foreach($csc_categories as $csc_category)
			<a href="{{url('category/'.$csc_category->slug)}}">
			<div class="col-md-3">
				<div class="blog-slid-wrap">
                        <figure>
                            <img src="{{ asset('public/images/product/'.$csc_category->image) }}" alt="{{$csc_category->image_alt}}">
                        </figure>  
                        <figcaption>
                            <span class="ads-loc">
                                <p class="inner-d">{{$csc_category->title}}</p><br>
						<!--    <a href="{{url('category/'.$csc_category->slug)}}">Read More<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> -->
						   <p></p>
                        </span></figcaption>
                </div>
			</div>
		</a>
			@endforeach
			
		
		</div>
	</div>
</section>


@include('partials/front/footer')