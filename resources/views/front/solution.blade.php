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

 <section id="thumnail2" class="main-page solution-page3">
  	<div class="container">
	    <div class="row">
	    	<div class="col-md-3">
				<aside>
					<ul>
						@foreach($solutions as $solution)

						  <?php
						  
						  $category = DB::table('categories')
										->leftJoin('sol_cats', 'categories.id', '=', 'sol_cats.category_id')
										->leftJoin('csc_categories', 'categories.csc_category_id', '=', 'csc_categories.id')
										->select('categories.*','csc_categories.slug as category_slug')    
										->where('sol_cats.solution_id',$solution->id)  
										->get();


						?> 
						<li>
							<a href="{{url('solution/'.$solution->slug) }}"><div class="text-drop">{{$solution->title}}</div></a> 
							<a class="dropdown-btn togglebtn">
								<i class="fa fa-plus"></i>
							</a>
							<div class="dropdown-container">
							@foreach($category as $cat)
							<?php 
							$sub_category = DB::table('sub_categories')
										->leftJoin('categories', 'categories.id', '=', 'sub_categories.category_id')
										->leftJoin('csc_categories', 'sub_categories.csc_category_id', '=', 'csc_categories.id')
										->select('sub_categories.*','csc_categories.slug as csc_slug')
										
										 ->where('categories.id',$cat->id)       
										->get();
										
										?>
								@if($sub_category->isEmpty())
								<a href="{{url('category/'.$cat->csc_category_id)}}"><div class="text-drop">{{$cat->title}}</div></a> 
								@else
								<a href="{{url('solution/'.$solution->slug.'/'.$cat->slug)}}"><div class="text-drop">{{$cat->title}}</div></a> 
								<a class="dropdown-btn togglebtn">
									<i class="fa fa-plus"></i>
								</a>
								@endif		
								@foreach($sub_category as $sub_cat)
								<div class="dropdown-container">
									<a href="{{url('category/'.$sub_cat->csc_category_id) }}">{{$sub_cat->title}}</a>
								</div>
								@endforeach
							@endforeach
							</div>
						</li>
						@endforeach
					  </ul>
				</aside>
			</div>
		    <div class="col-md-9">
		      	<div class="row">
			      	<div class="col-md-12">
			         	<div class="test-wrap">
			                <?php echo $data->body; ?>
			            </div>
					</div>
				</div>	
				<div class="row list-padd-top">
						@foreach($solutions as $solution)
						<a href="{{url('solution/'.$solution->slug)}}">
					<div class="col-md-6">
						<div class="blog-slid-wrap" id="main-solution-page"> 
		                        <figcaption>
		                           
		                         <p class="inner-d">{{$solution->title}}</p>								<!--    <a href="{{url('solution/'.$solution->slug)}}">Read More<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> -->
							
		                      
		                    </figcaption>
		                </div>
					</div>
				</a>
		                @endforeach
				</div>
			</div>
		
			
      
  </div>
</div>
      
     
    </div>
  </div>
</section>
<section id="thumnail">
	<div class="container">
		<div class="row">
	
			
		
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

@include('partials/front/footer')