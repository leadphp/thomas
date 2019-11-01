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
<section class="inner-banner" style="background: url(http://49.249.236.30:6644/compliancesolutionscanada/public/images/front/home/inner-banner-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tactile Solutions<span></span></h2>
				<div> 
					<ul class="sublist">
						<li class="sublist-active">home</li>
						<li>Tactile Solutions</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="thumnail" class="main-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="test-wrap">
					<h2>Canadian mandatorily required Federal and International Building Codes and Standards</h2>
					<ul class="bullet-list">
						<li><span class="list-color">CNIB Clearing Our Path Guide</span></li>
						<li><span class="list-color">International Fire Code Compliance Guide</span></li>
						<li><span class="list-color">CSA B651-12 – Accessible Design for the Built Environment</span></li>
						<li><span class="list-color">CSA B651-12 – Accessible Design for the Built Environment</span></li>
						<li><span class="list-color">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="country-tabs-sec">
  <div class="container">
      <div class="tab-wrapper">
     <ul class="tabs">
  <li class="" rel="tab1">British Columbia</li>
  <li rel="tab2">Alberta</li>
  <li rel="tab3">Saskatchewan</li>
  <li rel="tab4">Manitoba</li>
</ul>          
<div class="tab_container">
  <h3 class="tab_drawer_heading" rel="tab1">Tab 1</h3>
  <div id="tab1" class="tab_content">
  <h2>Tab 1 content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac metus augue.</p>
  </div>
  <!-- #tab1 -->
  <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
  <div id="tab2" class="tab_content">
  <h2>Tab 2 content</h2>
    <p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
  </div>
  <!-- #tab2 -->
  <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
  <div id="tab3" class="tab_content">
  <h2>Tab 3 content</h2>
    <p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
  </div>
  <!-- #tab3 -->
  <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
  <div id="tab4" class="tab_content">
  <h2>Tab 4 content</h2>
    <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
  </div>
  <!-- #tab4 --> 
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
 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
//    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	
</script>

@include('partials/front/footer')