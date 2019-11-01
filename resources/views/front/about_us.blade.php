@include('partials/front/header')
<section class="inner-banner" style="background: url({{ asset('public/images/cms/'.$data->image) }});">
	<div class="req-btn">
        <span class="ph_icon">
            <a href="callto:1-877-761-5354"><i class="fa fa-mobile" aria-hidden="true"></i></a>
        </span>
          <span class="req-form-icon">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </span>
        <a href="javascript:void(0);" class="req-quote" data-toggle="modal" data-target="#myModal2"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Request A Quote</a>
    </div>
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h1>{{$data->page_name}}<span></span></h1>
					<div>
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
						<li>{{$data->page_name}}</li>
					</ul>
					</div>
				</div>
		</div>
	</div>
</section>
<section id="contact-us">
<div class="container">
	<?php echo $data->body; ?>
</div>
</section>

@include('partials/front/footer')