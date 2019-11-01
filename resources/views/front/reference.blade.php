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


<!--reference section starts-->
<section class="reference cstm_ref_width">
    <div class="container">
        <div class="sec-heading">
            <h2><span>References</span></h2>
        </div>
        <div class="reference-outer">
            <div class="row">
                <?php $j=1; ?>
                @foreach ($references as $reference)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    @if($reference->type =='Single')
                       <?php
                          
                          $main_pdf = DB::table('reference_pdfs')                                        
                                        ->where('list_id',$reference->id)
                                        ->where('type','main')  
                                        ->first();


                        ?>                                                       

                    <a href="{{ asset('public/images/reference/'.$main_pdf->original_pdf)}}" target="_blank">
                    <div class="ref-content-wrap data"  >        
                    @else

                        <?php
                    
                          $sub_references = DB::table('sub_references')                                        
                                        ->where('reference_id',$reference->id) 
                                        ->get();

                        ?>   

                    <div class="ref-content-wrap data"  data-toggle="modal" data-target="#Refmodal{{$j}}" data-url="{{Route('home')}}" >
                    @endif
                            <img src="{{ asset('public/images/front/home/ref-1.png') }}">
                            <h2>{{ $reference->name}}</h2>
                    </div>
                </a>
                </div>
                <!-------Modal-------->
                    <div id="Refmodal{{$j}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">{{ $reference->name}}</h1>
                          </div>
                          <div class="modal-body">
                            @foreach($sub_references as $sub_reference)
                            <?php
                                 $sub_pdfs = DB::table('reference_pdfs')                                        
                                        ->where('list_id',$sub_reference->id)
                                        ->where('type','sub')  
                                        ->get();
                            ?>
							
							<div class="accordion-container">
								  <div class="set">
									<a href="#">
									<i class="fa fa-plus"></i>
									  {{$sub_reference->name}} 

									  
									</a>
									<div class="content">
									  <ul class="modal-list">
										@foreach($sub_pdfs as $sub_pdf)
										<a href="{{ asset('public/images/reference/'.$sub_pdf->original_pdf)}}" target="_blank"> <li>{{$sub_pdf->original_pdf}}</li></a>
										@endforeach
									</ul>
									</div>
								  </div>
								</div>
							@endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php $j++;?>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--	reference section ends-->
	
	
<script>
	
	$('.modal-head').click(function(){
	 $('.modal-head').removeClass('arrow-in');
	 $(this).addClass('arrow-in');
	 $('.panel-collapse').removeClass('in');
	 $(this).next('.panel-collapse').toggleClass('in');
	});
	
</script>

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
$(document).ready(function() {
  $(".set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
});

</script>

@include('partials/front/footer')