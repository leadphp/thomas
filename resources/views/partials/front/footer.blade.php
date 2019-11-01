
@if($advert_footer->status =='on')
<section class="advertisement">
	<div class="container">
		<div class="left-sec">
		<figure>
			<img src="{{ asset('public/images/advertisement/'.$advert_footer->image) }}">
		</figure>	
		</div>
		<div class="right-sec">
			<h2>{{$advert_footer->title}}</h2>
			<?php echo $advert_footer->description?>
			<a href="{{url($advert_footer->link) }}" class="view-btn">View More</a>
		</div>	

	</div>
</section>
@endif
<footer>    
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 ">
                       <div class="footer-list-outer">
						 <h4>important links</h4>
                        <ul class="imp-links">
                        	@foreach ($header_data as $header) 
                            <li><a href="{{url($header->slug) }}">{{$header->page_name}}</a></li>
                            @endforeach
                        </ul>
						</div>
                    </div>
                   
                    <div class="col-md-4 col-sm-6 col-xs-12 other">
                      <div class="footer-list-outer">
						  <h4>other links</h4>
                       		
                            <ul class="other-links">
                        	@foreach ($other_cms as $cms)    
                            <li><a href="{{url($cms->slug)}}">{{$cms->page_name}}</a></li>
                            
                        	@endforeach
                        </ul>
                        
                        <ul class="icons">
                            <li><a href="{{$socials[0]->facebook}}" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$socials[0]->twitter}}" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="{{$socials[0]->linkedin}}" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="{{$socials[0]->youtube}}" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
						</div>
                    </div>
                   <!--  <div class="col-md-2 offset-md-2"></div> -->
                    <div class="col-md-4 col-sm-12 col-xs-12 sign-up">
                       <div class="footer-list-outer">
						 <h4>Sign Up For Newsletter</h4>
                        
                        <form name="newsletter" method="post" action="{{route('newsletter')}}">
                        <div class="form-group ">   
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">          
                            <input type="email" class="form-control" placeholder="Email" id="text1" name="email" value="@if ($errors->has('email')){{old('email')}}@endif">
                            @if ($errors->has('email')) 
					            <label class="invalid-feedback label error" role="alert">
					                {{ $errors->first('email') }}
					            </label>
					        @endif
					        @if(Session::has('newsletter'))
 							<label class="newsletter">Successfully Submited </label>
							@endif
                       </div>
                       <div class="form-group">
                         <button type= "submit" class="btn btn-primary ">Subscribe Now!</button>
                       </div>  
                   </form>
						</div>                  
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
               <p>© 2019 Compliance Solutions Canada. All Rights Reserved</p>
        </div>
    </div>
</footer>

<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<script type="text/javascript" src="//www.FreePrivacyPolicy.com/cookie-consent/releases/3.0.0/cookie-consent.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"dark","change_preferences_selector":"#changePreferences","language":"en"});
});
</script>

<noscript>GDPR Cookie Consent by <a href="https://www.freeprivacypolicy.com/">FreePrivacyPolicy</a></noscript>
<!-- End Cookie Consent -->

	<!--        script-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('public/js/front/owl.carousel.js') }}"></script>
	<script src="{{ asset('public/js/front/bootstrap-datetimepicker.js') }}"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


    <script src="{{ asset('public/js/front/cstm-validation.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js" type="text/javascript"></script>

    <script src="{{ asset('public/js/front/payment.js') }}" type="text/javascript"></script>
   

<script type="text/javascript">
_linkedin_partner_id = "1223770";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1223770&fmt=gif" />
</noscript>
<!--
	<script>
$(document).ready(function(){
  $(".fa-mobile").click(function(){
    $(".low-mob").toggle();
  });
});
</script>
-->

<script type="text/javascript">



function cstm_search(value)
 {
	


 	var url = $('#id_cstm_search').attr("data-url");
 	$.ajax({
    url: url ,
    method:'GET',
    data:{value:value},
    dataType:'json',
    beforeSend: function() {
       
     },
    success:function(result)
    {
    	//console.log(result.table_data);
    	$('.results').html(result.table_data);
    }
   })
 }







    $(".req-quote").click(function(){
  $('.req-form').toggle();

});



if($('#tactile').prop('checked'))
{
    $('.tactile').show();

}

if($('#stair_noising').prop('checked'))
{           
    $('.stair_noising').show();
}
if($('#exit_signs').prop('checked'))
{            
    $('.exit_signs').show();
}

$("#tactile").click(function(){
		$('.tactile').show();
		$('.stair_noising').hide();
		$('.exit_signs').hide();
});

$("#exit_signs").click(function(){
		$('.exit_signs').show();
		$('.tactile').hide();
		$('.stair_noising').hide();
});

$("#stair_noising").click(function(){
		$('.stair_noising').show();
		$('.exit_signs').hide();
		$('.tactile').hide();
});

$("#exit_door").click(function(){
		$('.at_exit_door').show();
		$('.pathmarking_to_exit_door').hide();
		
});

if($('#exit_door').prop('checked'))
{	
		$('.at_exit_door').show();
		$('.pathmarking_to_exit_door').hide();  
}


$("#exit_door_pathmark").click(function(){
		$('.at_exit_door').hide();
		$('.pathmarking_to_exit_door').show();
		
});

if($('#exit_door_pathmark').prop('checked'))
{	
		$('.at_exit_door').hide();
		$('.pathmarking_to_exit_door').show();
}



$("#wet").click(function(){
		$('.radio-wet').show();
		$('.attention_domes').show();
		$('.radio-surface').hide();  
		$('.radio-domes').hide();
});

$("#surface").click(function(){
		$('.radio-surface').show();
		$('.attention_domes').show();  
		$('.radio-wet').hide();
		$('.radio-domes').hide();
		
});

$("#material_domes").click(function(){
		$('.radio-domes').show();
		$('.attention_domes').show();
		$('.radio-surface').hide();  
		$('.radio-wet').hide();
});

if($('#material_domes').prop('checked'))
{	
			$('.radio-domes').show();
			$('.attention_domes').show();
		$('.radio-surface').hide();  
		$('.radio-wet').hide(); 
}
/*$(".attention_domes").click(function(){
		$('.att_domes').show();
});

if($('.attention_domes').prop('checked'))
{	
		$('.att_domes').show();
}*/

if($('#wet').prop('checked'))
{	
		$('.radio-wet').show();
		$('.attention_domes').show();
		$('.radio-surface').hide(); 
		$('.radio-domes').hide(); 
}

if($('#surface').prop('checked'))
{
		$('.radio-surface').show();
		$('.attention_domes').show();  
		$('.radio-wet').hide();
		$('.radio-domes').hide();
}

	$( ".readmore" ).each(function(index) {
	    $(this).on("click", function(){
	       	$(this).prev("div").addClass('full-height');
	       	$(this).next("a").removeClass('now-hide');
	       	$(this).next("a").addClass('now-show');
			$(this).addClass('now-hide');
	    });
	});


	$( ".readmore2" ).each(function(index) {
	    $(this).on("click", function(){

	       	$(this).prev().prev("div").removeClass('full-height');
	       //	$(this).next("a").addClass('now-show');
			//$(this).addClass('now-hide');
			$(this).removeClass('now-show');
			$(this).addClass('now-hide');
			$(this).prev("a").removeClass('now-hide');
	    });
	});

	
</script>

<script>
		$('.blog-slider').owlCarousel({
			loop: true,
			autoplay: false,
			margin:30,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
	</script>
	
	<script>
		$('.tiles-slider').owlCarousel({
			loop: true,
			autoplay: false,
			margin: 0,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
	</script>
	<script>
		$('.banner-slider').owlCarousel({
			loop: true,
			autoplay:true,
			margin: 0,
			nav: true,
			dotsData: true,

			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});


	</script>

</body>

</html>