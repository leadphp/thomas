
@include('partials/front/header')
<div class="req-btn">
			<span class="ph_icon">
				<a href="callto:1-877-761-5354"><i class="fa fa-mobile" aria-hidden="true"></i></a>
			</span>
        <span class="req-form-icon">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </span>
		<a href="javascript:void(0);" class="req-quote"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Request A Quote</a>
		</div>

<!-- <section class="inner-banner" style="background: url(http://49.249.236.30:6644/compliancesolutionscanada/public/images/front/home/inner-banner-bg.png);">
	<div class="container">
		<div class="row">
				<div class="col-md-12">success
					<h1>Cast In Place<span></span></h1>
					<div> 
					<ul class="sublist">
						<li class="sublist-active">home</li>
						
					</ul>
					</div>
				</div>
		</div>
	</div>
</section> -->

<!-- Thanku Page starts here -->
@if($message =='success')
<section class="custom-thanku">
  <div class="container">
    <div class="thanku-wrap">
        <figure>
          <img src="{{ asset('public/images/payment/tick.svg') }}" alt="">
        </figure>
        <h2>thank you</h2>
        <p><span class="alert1">Thanks</span> for purchasing from our site. </p>
    	<p>Order Confirmation will be send to your email shortly.</p>
    </div>    
  </div>
</section>
@elseif($message =='badcard')
<section class="custom-thanku">
  <div class="container">
    <div class="thanku-wrap">
        <figure>
          <img src="{{ asset('public/images/payment/ex.svg') }}" alt="">
        </figure>
        <h2>Error</h2>
        <p><span class="alert1">Oops!</span> Your transaction failed.</p>
    	
    </div>    
  </div>
</section>
@elseif($message =='fraud')
<section class="custom-thanku">
  <div class="container">
    <div class="thanku-wrap">
        <figure>
          <img src="{{ asset('public/images/payment/ex.svg') }}" alt="">
        </figure>
        <h2>Error</h2>
        <p><span class="alert1">Oops!</span> Transaction info entered was fraudulent</p>
      
    </div>    
  </div>
</section>
@elseif($message =='problem')
<section class="custom-thanku">
  <div class="container">
    <div class="thanku-wrap">
        <figure>
          <img src="{{ asset('public/images/payment/ex.svg') }}" alt="">
        </figure>
        <h2>Error</h2>
        <p><span class="alert1">Oops!</span> There was a problem running your transaction</p>
      
    </div>    
  </div>
</section>

@endif
<!-- Thanku Page ends here -->

<script type="text/javascript">
  
</script>

@include('partials/front/footer')