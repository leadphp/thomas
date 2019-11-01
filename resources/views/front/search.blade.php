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
<section class="inner-banner" style="background: url('http://tactilesolution.ca/public/images/cms/1565338185.png');">  

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Search<span></span></h1>
				<div> 
					<ul class="sublist">
						<li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
						<li>Search</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@if($exist=='no')
<section  class="steps">
	<div clas="container"
<div class="empty">
            <p>Please enter the keywords in search first</p>
        </div>
    </div>
</section>        
@else		
<section id="search" class="innerpage">
	<div class="container">
		<h2 class="res">Search Results</h2>
			<div class="wrap">
			<div class="sec-heading">
            <h2>
            	<span>Solution</span>
            </h2>
        	</div>

		<div class="row">
			@foreach($solutions as $solution)
			<?php $url='solution/'.$solution->slug;   ?>
			<div class="col-sm-6 col-sm-6 col-xs-12">
				<div class="search-content">
					<a href="{{$url}}"><h2>{{$solution->title}}</h2></a>
					<?php echo substr($solution->description, 0, 200).'...'?>
					 
				</div>	
			</div>
		@endforeach

		
		</div>
	</div>

		<div class="wrap">
			<div class="sec-heading">
            <h2>
            	<span>Brands</span>
            </h2>
        	</div>
		<div class="row">
			@foreach($category as $cat)
			<?php $url='category/'.$cat->slug; ?>
			<div class="col-sm-6 col-sm-6 col-xs-12">
				<div class="search-content">
					<a href="{{$url}}"><h2>{{$cat->title}}</h2></a>
					<?php echo substr($cat->description, 0, 200).'...'?>
					 
				</div>	
			</div>
		@endforeach

		
		</div>

			<div class="wrap">
			<div class="sec-heading">
            <h2>
            	<span>Applications</span>
            </h2>
        	</div>
		<div class="row">
			@foreach($sub_category as $sub)
			<?php 
			$main_category = DB::table('csc_categories')
                         ->where('id',$sub->category_id)->first();
                $url='category/'.$main_category->slug.'/'.$sub->slug; ?>
			<div class="col-sm-6 col-sm-6 col-xs-12">
				<div class="search-content">
					<a href="{{$url}}"><h2>{{$sub->title}}</h2></a>
					<?php echo substr($sub->description, 0, 200).'...'?>
					  
				</div>	
			</div>
		@endforeach

		
		</div>
	</div>

		<div class="wrap">
			<div class="sec-heading">
            <h2>
            	<span>Products</span>
            </h2>
        	</div>
		<div class="row">
			@foreach($details as $detail)
			 <?php $related_category = DB::table('csc_categories')
                    ->leftJoin('csc_sub_categories', 'csc_categories.id', '=', 'csc_sub_categories.category_id')
                    ->select('csc_categories.slug as category','csc_sub_categories.slug as sub_category')    
                    ->where('csc_sub_categories.id',$detail->sub_category_id)  
                    ->first(); 
                
                $url='category/'.$related_category->category.'/'.$related_category->sub_category.'/'.$detail->slug; ?>
			<div class="col-sm-6 col-sm-6 col-xs-12">
				<div class="search-content">
					<a href="{{$url}}"><h2>{{$detail->title}}</h2></a>
					<?php echo substr($detail->description, 0, 200).'...'?>
					 
				</div>	
			</div>
		@endforeach

		
		</div>
	</div>

	
	</div>
	</div>
</section>
@endif
	
@include('partials/front/footer')