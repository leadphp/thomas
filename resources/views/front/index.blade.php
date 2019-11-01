@include('partials/front/header')


<!--banner section starts-->

<section class="banner-sec">
    <div class="req-btn">
        <span class="ph_icon">
            <a href="callto:1-877-761-5354"><i class="fa fa-mobile" aria-hidden="true"></i></a>
        </span>
         <span class="req-form-icon">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </span>
        <a href="javascript:void(0);" class="req-quote" data-toggle="modal" data-target="#myModal2"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Request A Quote</a>
    </div>
    
                                                                                              
   
    <div class="banner-slider-outer">
        <div class="owl-carousel owl-theme banner-slider">
            <div class="item" data-dot="<button>01</button>">
                <div class="banner-slider-img">
                    <img src="{{ asset('public/images/front/home/banner/banner.png') }}" alt="banner.png">

                    <div class="inner-banner-content">
                        <div class="container">
                            <div class="banner-slider-content">
                                <h1 class="big">Your Source for Code Compliant</h1>
                                <h1 class="small">Tact<span> </span>le Solutions</h1>
                                <p>Creating Accessible Environments For People With Vision Loss</p>
                                <div class="cstm-btn">
                                    <a href="{{ url('solutions')}}">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i=02; ?>
            @foreach ($home_banners as $home_banner)


            <div class="item" data-dot="<button><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></button>">
                <div class="banner-slider-img">
                    <img src="{{ asset('public/images/front/home/banner/'.$home_banner->image) }}" alt="{{ $home_banner->image_alt }}">

                    <div class="inner-banner-content">
                        <div class="container">
                            <div class="banner-slider-content">
                                <h1 class="big">{{ $home_banner->line_1 }}</h1>
                                <h1 class="small">{{ $home_banner->line_2 }}</h1>
                                <p>{{ $home_banner->line_3 }}</p>
                                <div class="cstm-btn">
                                    <a href="{{ url($home_banner->button_href)}}">{{ $home_banner->button}}</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endforeach

        </div>
    </div>

</section>



<!--banner section ends-->

<!--section feature-tabs starts-->
<section class="feature-tabs">
    <div class="container">
        <div class="tabs-outer">


            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Featured" aria-controls="Featured" role="tab" data-toggle="tab">Featured Solutions</a></li>
                <li role="presentation"><a href="#About" aria-controls="About" role="tab" data-toggle="tab">About Us</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Featured">
                    <div class="feature-outer">
                        <div class="row">
                            @foreach( $solutions as $solution)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="feature-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <figure>
                                                <a href="{{ url('solution/'.$solution->slug)}}">
                                                <img src="{{ asset('public/images/admin/solution/'.$solution->image) }}">
                                            </a>
                                            </figure>
                                        </div>
                                        <div class="col-md-6">
                                            <figcaption>
                                              <a href="{{ url('solution/'.$solution->slug)}}">
                                                <h2>{{$solution->title}}</h2>
                                            </a>
                                                <p><?php echo substr($solution->description, 0, 100); ?></p>
                                                <a href="{{ url('solution/'.$solution->slug)}}">Read More<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                   
                        </div>

                     

                        <div class="cstm-btn feature-btn">
                            <a href="{{url('solutions') }}">View All<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="About">
                    <div class="feature-outer">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="feature-wrap about-wrapp">
                                    <div class="row">
                                        <div class="col-md-12">
                                          <!--   <figure>
                                                <img src="{{ asset('public/images/front/home/feature-tab-1.png') }}">
                                            </figure> -->
                                        </div>
                                        <div class="col-md-12">
                                            <figcaption>
                                                <!-- <h2>{{$about->page_name}}</h2> -->
                                                <p><?php echo $about->body ?></p>
                                                <!-- <a href="javascript:void(0);">Read More<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> -->
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        


                        <div class="cstm-btn feature-btn">
                            <a href="{{url('solutions') }}">View All<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--	section feature-tabs ends-->

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

                        if(!empty($main_pdf))   
                        {             
                        ?>                                                       

                    <a href="{{ asset('public/images/reference/'.$main_pdf->original_pdf)}}" target="_blank">
                        <?php }?>
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
                             <h3>{{ $reference->name}}</h3>
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
                            <h2 class="modal-title">{{ $reference->name}}</h2>
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

<!--section tiles starts-->
<section class="tiles">
    <div class="container">
        <div class="owl-carousel owl-theme tiles-slider">
            <?php $jj=01;?>
            @foreach($csc_categories as $csc_category)
            <div class="item">
                <div class="sec-heading">
                  <a href="{{ url('category/'.$csc_category->slug)}}">
                    <h2><span class="numb"><?php echo str_pad($jj, 2, '0', STR_PAD_LEFT); ?></span><span>{{$csc_category->title}}</span> </h2></a>
                </div>
                <div class="tiles-slider-wrap">
                    <figcaption>

                        <?php echo substr($csc_category->description, 0, 450);    ?>
                        <div class="read-more">
                        <a href="{{ url('category/'.$csc_category->slug)}}">Read More</a>
                        </div>
                        <div class="cstm-btn feature-btn tile-btn">
                            <a href="javascript:void(0);"  class="req-quote" data-toggle="modal" data-target="#myModal2">Request A Quote <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        </div>
                    </figcaption>
                    <figure>
                        <a href="{{ url('category/'.$csc_category->slug)}}">
                        <img src="{{ asset('public/images/product/'.$csc_category->image) }}" alt="{{$csc_category->image_alt}}">
                    </a>
                    </figure>
                </div>
            </div>
            <?php $jj++; ?>
            @endforeach
        </div>
    </div>
</section>
<!--	section tiles ends-->

<!--work section starts-->
<section class="work">
    <div class="container">
        <div class="sec-heading">
            <h2><span>How It Works</span></h2>
        </div>
        <div class="work-wrap">
            <div class="row">
                <?php $j=1; ?>
                @foreach ($how_it_works as $how_it_work)
                <div class="col-md-4 col-sm-4 col-xs-12 workouter">
                    <div class="work-content">
                        <div class="work-left-box">
                            <h2>
                                <?php echo "$j";?>.</h2>
                        </div>
                        <div class="work-right-box">
                            <!-- <h2>Sed quia consequuntur magni dolores eos dolor sit</h2> -->
                            <?php echo $how_it_work->content?>
                        </div>
                    </div>
                </div>
                <?php $j++;?>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--	work section ends-->

<!-- section benifits starts-->
<section class="benifits">
    <div class="container">
        <div class="sec-heading">
            <h2><span>Benefits</span></h2>
        </div>
        <div class="benifits-outer">
            <div class="row">
                <?php $b=1;?>
                @foreach($benefits as $benefit)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    
						<div class="col-md-4">
                        <figure>
                            <img src="{{ asset('public/images/front/home/benifits'."$b".'.png') }}">
                        </figure>
						</div>
						<div class="col-md-8">
                        <figcaption>
                            <h3>{{$benefit->title}}</h3>
                            <p><?php echo $benefit->description ?></p>
                        </figcaption>
						</div>
                   
                </div>
                <?php $b++;?>
                @endforeach

            </div>
        </div>
    </div>
</section>

<!-- section benifits ends-->

<!--blog section starts-->
<section class="blog">
    <div class="container">
        <div class="sec-heading">
            <h2><span>From Our Blog</span></h2>
        </div>
        <div class="blog-outer">
            <div class="owl-carousel owl-theme blog-slider">

                @foreach ($blog_data as $blog)
                <div class="item">
                    <div class="slider-content-ads slider-cont-req blog-slid-wrap">
                        <figure>
                            <a href="{{url('blogs/'.$blog->category_slug.'/'.$blog->slug) }}">
                            <img src="{{ asset('public/images/blog/'.$blog->image) }}" alt="{{$blog->alt_image}}">
                        </a>
                        </figure>
                        <figcaption>

                            <span class="ads-loc"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                                <p class="inner-d">{{ $blog->date }}</p>
                            </span>
                            <a href="{{url('blogs/'.$blog->category_slug.'/'.$blog->slug) }}">
                            <h1>{{ $blog->title }}</h1>
                        </a>
                            <div class="padd-10-b">
                            <p>
                                <?php echo substr($blog->description, 0, 100);    ?>
                                    
                                </p>
                            </div>
                         
                             <a href="{{url('blogs/'.$blog->category_slug.'/'.$blog->slug) }}">Read More</a>   
                        </figcaption>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
	
	
	
<script>
    $('.owl-dot').on('click', function() {
        owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        $('.owl-dot').removeClass('active');
        $(this).addClass('active');
    })
    
	
	$('.modal-head').click(function(){
	 $('.modal-head').removeClass('arrow-in');
	 $(this).addClass('arrow-in');
	 $('.panel-collapse').removeClass('in');
	 $(this).next('.panel-collapse').toggleClass('in');
	});
	
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
