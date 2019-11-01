@include('partials/front/header')
<section class="inner-banner" style="background: url({{ asset('public/images/cms/'.$data->image) }});">
	<div class="req-btn">
        <span class="ph_icon">
            <a href="callto:1-877-761-5354"><i class="fa fa-mobile" aria-hidden="true"></i></a>
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
<div class="row">
	<div class="col-md-6">
		<div class="contactwrap">
	<?php echo $data->body; ?>

</div>
</div>
		<div class="col-md-6">
		    	@if(Session::has('contact'))
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Mail</strong> Successfully send.
		 </div>
	
@endif
			<form name="contact" method="post" action="{{ route('contact-form')}}">
			<input type = "hidden" class="form-control" name = "_token" value = "<?php echo csrf_token(); ?>">	
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" value="{{old('name')}}">
				<span>
				<i class="glyphicon glyphicon-user"></i>
				</span>
				@if ($errors->has('name'))
            	<label class="invalid-feedback label error" role="alert">
                {{ $errors->first('name') }}
           		 </label>
        		@endif
			</div>
			<br>

			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" value="{{old('email')}}">
				<span>
				<i class="glyphicon glyphicon-envelope"></i>
				</span>
				@if ($errors->has('email'))
            	<label class="invalid-feedback label error" role="alert">
                {{ $errors->first('email') }}
            	</label>
        		@endif
			</div>
			<br>

			<div class="form-group">
				<input type="text" name="subject" class="form-control" placeholder="Subject" autocomplete="off" value="Checkout this information">
				<span>
					<i class="glyphicon glyphicon-file"></i>
				</span> 
				@if ($errors->has('subject'))
            	<label class="invalid-feedback label error" role="alert">
                {{ $errors->first('subject') }}
            	</label>
        		@endif 
			</div>
			<br>

			<div class="form-group">
				<textarea rows="4" cols="50" class="form-control text_html" name="message"  placeholder="Your Message..." >{{old('message')}}</textarea>
				<span class="textpadd">
				<i class="fa fa-paper-plane"></i>
			  </span>
			    @if ($errors->has('message'))
            	<label class="invalid-feedback label error" role="alert">
                {{ $errors->first('message') }}
            	</label>
        		@endif
			</div>
			<br>
			<div class="form-group">
			<input type="submit" name="Send" class="theme-btn contact_form_btn" >
			</div>
		</form>
		</div>
	<div class="col-md-5">
		
	</div>
</div>
</div>
</section>

<script type="text/javascript">
	$(document).ready(function(){
		
$(".contact_form_btn").click(function(){
	
  var value = $('textarea[name="message"]').val();

    var tag =/<(.|\n)*?>/g;
    var h = /(?:\bhttps?:\/\/|\bwww\.|\[url)\S+\s*/g; 
        if (tag.test($('.text_html').val()) == true || h.test($('.text_html').val())) 
        {
        	Swal.fire("Html and links are not allowed");
        	return false;        
        }

});
});


</script>

@include('partials/front/footer')