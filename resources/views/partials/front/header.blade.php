<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="icon" href="{{ asset('public/images/front/home/favicon.png') }}" type="image/x-icon">
	<title>{{$data->meta_title}}</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  	<meta name="title" content="{{$data->meta_title}}">
  	<meta name="keywords" content="{{$data->meta_keyword}}">
	<meta name="description" content="<?php echo strip_tags($data->meta_description) ?>">
	<!-- Meta Tags -->
	<link href="{{ asset('public/css/front/bootstrap.min.css') }}" rel="stylesheet" media='screen,print'>

	<link href="{{ asset('public/css/front/owl.carousel.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<link rel="stylesheet" href="{{ asset('public/css/front/style.css') }}" >
  <link rel="stylesheet" href="{{ asset('public/css/front/style_print.css') }}" media="print">
  <link rel="stylesheet" href="{{ asset('public/css/front/bootstrap-datetimepicker.css') }}" >
	<link rel="stylesheet" href="{{ asset('public/css/front/responsive.css') }}" >
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700&display=swap" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
 
  
	<script>
		$(document).ready(function(){
		$('#form-control-open').click( function(e) {
        e.preventDefault(); 
        e.stopPropagation();
        $('.result-list').toggle('2000');
		});
    
		$('.result-list').click( function(e) {
			e.stopPropagation();        
		});
		
		$('body').click( function() {
			$('.result-list').hide();
		});
	});
	</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '362870341058902');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=362870341058902&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145147798-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-145147798-1');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Store",
  "name": "Tactile Solutions",
  "image": "https://www.tactilesolution.ca/public/images/admin/logo.png",
  "@id": "",
  "url": "https://www.tactilesolution.ca/",
  "telephone": "1-877-761-5354",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "5863 Leslie Street Suite 507",
    "addressLocality": "Toronto",
    "addressRegion": "ON",
    "postalCode": "M2H 1J8",
    "addressCountry": "CA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.7984058,
    "longitude": -79.36877040000002
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "07:30",
    "closes": "17:00"
  },
  "sameAs": [
    "https://www.facebook.com/compliancesolutionscanada/",
    "https://twitter.com/cscanada_",
    "https://www.linkedin.com/company/compliance-solutions-canada-inc"
  ]
}
</script>

<meta property="og:title" content="Your Source for Code Compliant Tactile Solutions - Accessibility Code Compliant Tactile">
<meta property="og:site_name" content="Tactile Solutions">
<meta property="og:url" content="https://www.tactilesolution.ca/">
<meta property="og:description" content="Tactile Solutions brings the Accessibility code compliant tactile for vehicular routes or curb ramps. We’ve got the CSA, AODA & ISO tactile warning indicators.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.tactilesolution.ca/public/images/admin/logo.png">

</head>
<body>
	<header>
		<div class="top-header">
			<div class="container">
				<div class="top-header-list">
<!--           <h2 class="wel">Welcome <a href="javascript:void(0);">LOGIN</a></h2> -->
  
 

          <ul class="cart">
            <li>
              <a href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span class="badge badge-warning" id="count"><?php echo Cart::getTotalQuantity();?> </span>
            </a>
            </li>
          </ul>
          

					<h2>Share on: </h2>
					<ul>
						 <li><a href="//www.facebook.com/sharer/sharer.php?u={{ url('/') }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
						<li><a href="https://twitter.com/share?url={{ url('/')}}" target="_blank"><span><i class="fa fa-twitter"></i></span></a></li>
					<!-- 	<li><a href="https://www.instagram.com/?url={{ url('/')}}" target="_blank"><span><i class="fa fa-instagram"></i></span></a></li> -->
						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ url('/') }}" target="_blank"><span><i class="fa fa-linkedin"></i></span></a></li>
						<!-- <li><a href="https://plus.google.com/share?url={{ url('/') }}"><span><i class="fa fa-google-plus"></i></span></a></li> -->
						<li><a href="mailto:?subject=What I have found&body={{Request::url()}}"><span><i class="fa fa-envelope"></i></span></a></li>
						<!-- <li><a href="javascript:void(0);"><span><i class="fa fa-comment"></i></span></a></li> -->
             <?php 
           $print = Request::path();

           if($print == '/')
           {
            $print='index';
           }
           else
           {
              $print = str_replace('/', '_', strtolower(Request::path())); 
           }

           ?>
           <li><a href="{{ asset('public/images/screenshot/'.$print.'.pdf')}}" class="btnprn btn" target="_blank"><i class="fa fa-print" aria-hidden="true"></i></a></li>
					</ul>

				</div>
			</div>
		</div>
		<div class="lower-header">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('public/images/admin/logo.png') }}"></a>
					</div>
					<ul class="header_side_btn"><li><a href="callto:1-877-761-5354" class="low-head-btn"><span>Call us Now For ordering</span><br>1-877-761-5354</a></li></ul>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							 

							
              <li @if(Request::path() == '/') class="active" @endif><a href="{{url($header_data[0]->slug) }} ">{{ $header_data[0]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[1]->slug) class="active" @endif><a href="{{url($header_data[1]->slug) }} ">{{ $header_data[1]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[2]->slug) class="active" @endif><a href="{{url($header_data[2]->slug) }} ">{{ $header_data[2]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[3]->slug) class="active" @endif><a href="{{url($header_data[3]->slug) }} ">{{ $header_data[3]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[4]->slug) class="active" @endif><a href="{{url($header_data[4]->slug) }} ">{{ $header_data[4]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[5]->slug) class="active" @endif><a href="{{url($header_data[5]->slug) }} ">{{ $header_data[5]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == 'blogs') class="active" @endif><a href="{{url($header_data[6]->slug) }} ">{{ $header_data[6]->page_name }}<span class="sr-only">(current)</span></a></li>
              <li @if(Request::path() == $header_data[7]->slug) class="active" @endif><a href="{{url($header_data[7]->slug) }} ">{{ $header_data[7]->page_name }}<span class="sr-only">(current)</span></a></li>
							<li class="red">
								<a href="#" id="form-control-open"><span><i id="toggle-search" class="fa fa-search"></i></span></a>
								  <section class="result-list">
									 <form class="search"  method="POST" action="{{route('search')}}">
                                        @csrf
										 <input type="text" name="search"  autofocus="" autocomplete="off"placeholder="Search..." data-url="{{route('cstm-search')}}" data-search="{{route('search')}}" id="id_cstm_search" onkeyup="cstm_search(this.value);"/>
										 <ul class="results" >
										
										 </ul>
									 </form>
									</section>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
		</div>		
	</header>
   <?php  $qst2_value = explode(",",$requests[0]->qst2_value);
          $surface_value = explode(",",$requests[0]->surface_value);
          $wet_value = explode(",",$requests[0]->wet_value); 
          ?>
    <?php
    $req_quote = 'abc'; 
    $material = 'abc';
    $put = 'abc';
    $photo = 'abc';
    $req_cat_id = 'abc';
    $attention = 'abc';
    if(isset($main_category))
    {
    	$req_quote = $main_category->product_type;
     $req_cat_id = $main_category->id;
    	$put = $data->put_type;
        $photo = $data->photo;
         $attention = $data->attention;
         	if(!empty($data->product_material))
         	{
         		$material = $data->product_material;
         	}
         else{
    	$material = $main_category->product_material;

         }
    }
   /* elseif (isset($category))
    {
    	$req_quote = $category->product_type;	
    }*/
    elseif (isset($quote_variable))
    {
    	$req_quote = $quote_variable;	
      $req_cat_id = $quote_id;
    /*  $put = $data->put_type;
	$attention = $data->attention;
	$material = $data->product_material;*/
	 if(isset($end_leaf))
    {
		     $put = $data->put_type;
	$attention = $data->attention;
	$material = $data->product_material;    	
    }

    }
   
    if($req_cat_id == '1')
    {
      $attention_class= "not_attention_domes";
    }
    else
    {
     $attention_class= "attention_domes"; 
    }

    if($req_cat_id == '4' || $req_cat_id == '5')
    {
      $put = 'Glue it on top of existent surface';
    }
    if($req_cat_id == '4')
    {
      $material = 'Rubber';
    }
    if($req_cat_id == '5')
    {
      $material = 'Porcelain';
    }

    ?>
	<!--Form Starts here-->
<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel2">Request a quote</h2>
				</div>

				<div class="modal-body">
					<form name="quote" method="POST" action="{{ route('quote') }}">
						 @csrf
        <div class="wrap1">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{$requests[0]->fname}}" name="name">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{$requests[0]->lname}}" name="lname">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="{{$requests[0]->email}}" name="email">
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="{{$requests[0]->phone}}" name="phone">
            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{$requests[0]->company}}" name="company_name">
            <span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        </div>
        
        </div>
         <div class="product">
            <div class="form-group">
                <input type="radio"  id="tactile" name="product" value="Tactile" <?php if($req_quote=='tactile'){echo 'checked';}?>>
                <label for="tactile">Tactile</label>

                 <input type="radio"  id="stair_noising" name="product" value="Stair Nosing" <?php if($req_quote=='stair'){echo 'checked';}?>>
                <label for="stair_noising">Stair Nosing</label>

                 <input type="radio" id="exit_signs" name="product" value="Exit Signs" <?php if($req_quote=='exit signs'){echo 'checked';}?>>
                <label for="exit_signs">Exit Signs</label>
            </div>
                
        </div>
	<div class="tactile">
		<label>{{$requests[0]->question1}}</label>
        <div class="form-group">
            <input type="text" class="form-control" name="put">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        </div>
        
        <div class="radio-cstm">
           <p>{{$requests[0]->question2}}</p>
                <input type="radio" id="wet" name="material" value="{{$qst2_value[0]}}" <?php if($put == $qst2_value[0]){echo "checked";}?>>
                <label for="wet">{{$qst2_value[0]}} </label>
            
                <input type="radio" id="surface" name="material" value="{{$qst2_value[1]}}" <?php if($put == $qst2_value[1]){echo "checked";}?>>
                <label for="surface">{{$qst2_value[1]}}</label>
                <input type="radio" id="material_domes" name="material" value="{{$qst2_value[2]}}" <?php if($put == $qst2_value[2]){echo "checked";}?>>
                <label for="material_domes">{{$qst2_value[2]}}</label>
        </div>
         <div class="radio-wet">
           <p>{{$qst2_value[0]}}</p>
           @foreach ($wet_value as $wet)
                <input type="radio" id="{{$wet}}" name="wet_type"  value="{{$wet}}" <?php if($material == $wet){echo "checked";}?>>
                <label for="{{$wet}}">{{$wet}} </label>
            @endforeach
            @if($req_cat_id!='1')
            
            <input type="radio" id="wet_stainless" name="wet_type"  value="Stainless Steel" <?php if($material == 'Stainless Steel'){echo "checked";}?>>
                <label for="wet_stainless">Stainless Steel </label>
            
            @endif    
        </div>
         <div class="radio-surface">
           <p>{{$qst2_value[1]}}  </p>
           <?php $q=1;?>
            @foreach ($surface_value as $surface)
                <input type="radio" id="{{$surface.$q}}" name="surface_type"  value="{{ $surface}}" <?php if($material == $surface){echo "checked";}?>>
                <label for="{{$surface.$q}}">{{$surface}}</label>
            <?php $q++;?>
                @endforeach
					</div>
           <div class="radio-domes">
           <p>Drill Single Domes or Bars</p>
           
            


                <input type="radio" id="dome_stainless" name="dome_type"  value="Stainless Steel" <?php if($material == 'Stainless Steel'){echo "checked";}?>>
                <label for="dome_stainless">Stainless Steel</label>
            
          </div>

            <div class="att_domes1 {{$attention_class}}">
           <p>Attention Domes or Wayfinding Bars</p>
           
            
                <input type="radio" id="att_domes_attention" name="att_domes"  value="Attention Domes" <?php if($attention == 'Attention'){echo "checked";}?>>
                <label for="att_domes_attention">Attention Domes</label>

                <input type="radio" id="att_domes_wayfinding" name="att_domes"  value="Wayfinding Bars" <?php if($attention == 'Wayfinding'){echo "checked";}?>>
                <label for="att_domes_wayfinding">Wayfinding Bars</label>

               
            
          </div>
					<label>{{$requests[0]->question4}}</label>
					 <div class="form-group">
                        <input type="text" class="form-control" name="area">
					 	<span><i class="fa fa-edit" aria-hidden="true"></i></span>
					</div>

	</div>	
	<div class="stair_noising">

        
        <div class="">
           <p>Will you put it into</p>
                <input type="radio"  id="stair_wet" name="stair_put" value="Wet Concrete" <?php if($put =='wet'){echo 'checked';}?>>
                <label for="stair_wet">Wet Concrete</label>
            
                <input type="radio"  id="stair_surface" name="stair_put" value="Surface Applied" <?php if($put =='surface'){echo 'checked';}?>>
                <label for="stair_surface">Surface Applied</label>
        </div>

        <div class="">
           <p>Do you need Photoluminescent</p>
                <input type="radio"  id="photo_yes" name="photoluminescent" value="Yes"  <?php if($photo =='Yes'){echo 'checked';}?>>
                <label for="photo_yes">Yes</label>
            
                <input type="radio"  id="photo_no" name="photoluminescent" value="NO" <?php if($photo =='No'){echo 'checked';}?>>
                <label for="photo_no">No</label>
        </div>
        <label>On how many stairs and their width do you need to put stair nosing?</label>
        <div class="form-group">
            <input type="text" class="form-control" name="stair_width">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        </div>

	</div>	

	<div class="exit_signs">
		<div class="">
           <p>Where do you need to put Exit Signs?</p>
                <input type="radio"  id="exit_door" name="exit_put" value="At Exit Door"  <?php if($put =='exit door'){echo 'checked';}?>>
                <label for="exit_door">At Exit Door?</label>
            
                <input type="radio"  id="exit_door_pathmark" name="exit_put" value="Pathmarking to Exit Door" <?php if($put =='pathmarking'){echo 'checked';}?>>
                <label for="exit_door_pathmark">Pathmarking to Exit Door?</label>
        </div>

        <div class="at_exit_door">
        	<div class="">
           <p>With mounting kit?</p>
                <input type="radio"  id="exit_door_yes" name="mountain_kit" value="Yes">
                <label for="exit_door_yes">Yes</label>
            
                <input type="radio"  id="exit_door_no" name="mountain_kit" value="No">
                <label for="exit_door_no">No</label>
            </div>    
        	 <label>Running Man showing which Direction(s)?</label>
        	<div class="form-group">
            <input type="text" class="form-control" name="exit_direction">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        	</div>
         	 <label>How many do you need?</label>
        	<div class="form-group">
            <input type="text" class="form-control" name="exit_need">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        	</div>
        </div>
          <div class="pathmarking_to_exit_door">
           
        	 <label>Running Man showing which Direction(s)?</label>
        	<div class="form-group">
            <input type="text" class="form-control" name="path_direction">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        	</div>
         	 <label>How many do you need?</label>
        	<div class="form-group">
            <input type="text" class="form-control" name="path_need">
			<span><i class="fa fa-edit" aria-hidden="true"></i></span>
        	</div>
        </div>
	</div>			
					<label>{{$requests[0]->question5}}</label>
					<div class="form-group">
                        <input type="text" class="form-control" name="shipped">
						<span><i class="fa fa-edit" aria-hidden="true"></i></span>
					</div>
						<label>{{$requests[0]->question6}}</label>
					<div class="form-group">
                        <input type="text" class="form-control" name="additional">
						<span><i class="fa fa-edit" aria-hidden="true"></i></span>
					</div>
					<div class="cstm-btn feature-btn paddtop">
                        <!--      <a href="javascript:void(0);">Send<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> -->
                            <input type="submit" name="Send" value="Send">
                            
							</div>
				</form>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->	
	

