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
<section class="inner-banner" style="background: url({{ asset('public/images/product/banner/'.$data->banner_image) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$data->title}}<span></span></h1>
                <div>
                    <ul class="sublist">
                        <li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
                        <li class="sublist-active"><a href="{{url('categories') }}">Category</a></li>

                        @if(isset($category))
                        <?php $condition='1';
                        $refer_category=$category->title; ?>
                        <li class="sublist-active"><a href="{{url('category/'.$category->slug) }}">{{$category->title}}</a></li>
                        <li class="sublist-active"><a href="{{url('category/'.$category->slug.'/'.$sub_category->slug) }}">{{$sub_category->title}}</a></li>
                        @endif

                        @if(isset($main_category))
                        <?php $condition='0';
                        $refer_category=$main_category->title; ?>
                        <li class="sublist-active"><a href="{{url('category/'.$main_category->slug) }}">{{$main_category->title}}</a></li>
                        @endif

                        <li>{{$data->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="categories" class="sub-categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <img src="{{ asset('public/images/product/'.$data->image) }}" class="img-responsive cust-image-size margin_issue" alt="{{$data->image_alt}}">
                <div class="cast-text cast-flex">
                    <div class="text-left">
                    @if(isset($category))
                    <h2>{{$category->title}} {{$sub_category->title}}</h2>
                    @elseif(isset($main_category))
                    <h2>{{$main_category->title}}</h2>
                    @endif
                    <h2>{{$data->title}}</h2>
                    <h2>{{$data->price}}</h2>
                    </div>
                    <a href="#buy-now" class="theme-btn buy-btn">Buy</a>
                </div>
                <div class="questions">
                    <button class="accordion active">Detail</button>
                    <div class="panel">
                        <div class="panel-padd">
                            <?php echo $data->description ?>
                        </div>
                    </div>

                    <button class="accordion">Product Features</button>
						<div class="panel">
							<div class   ="panel-padd">
							<?php echo $data->product_features ?>
							</div>
						</div>
                        @if($condition == 0  && ($main_category->id ==24 || $main_category->id ==6))
                        
                       <button class="accordion" id="buy-now" >Available Options and Sizes with Prices</button>

                        @else
                    <button class="accordion" id="buy-now">Available Options and Sizes with Prices</button>
                        @endif
                    <div class="panel">
                        @if(!empty($tiles_specification[0]->size))
                        <div class="table-responsive table-bordered">
                            <table class="table pro-buy-table">
                                <thead>
                                    <tr>
                                        <th class="prod_title_width">Tile Size</th>
                                        <th>Sqft/Tile</th>
                                        <th>Cost Per Tile</th>
                                        <th>#Tiles Per Box</th>
                                        <th>Cost Per Box</th>
                                        <th>Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tiles_specification as $tile)

                                    <tr>
                                        <td>{{$tile->size}}</td>
                                        <td>{{$tile->sqft}}</td>
                                        <td>{{$tile->cost_per_title}}</td>
                                        <td>{{$tile->titles_per_box}}</td>
                                        <td>{{$tile->cost_per_box}}</td>
                                        <td><a href="javascript:void(0);" class="view-btn" id="carting" data-url="{{Request::path()}}"   onclick="cart({{$tile->id}});" >Add to cart</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                         <div class="table-responsive table-bordered">
                            <table class="table pro-buy-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Description</th>
                                        @if(!empty($tiles_specification[0]->price_per_domes))
                                        <th>Price per piece</th>
                                        <th>Pieces per Box</th>
                                        <th>Box Price</th>
                                        @else
                                        <th>Price</th>
                                        @endif
                                        <th>Add To Cart</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($tiles_specification[0]->price_per_domes))
                                      @foreach($tiles_specification as $tile)

                                    <tr>
                                        <td><img src="{{ asset('public/images/tiles/'.$tile->img) }}" ></td>
                                        <td>{{$tile->description}}</td>
                                        <td>{{$tile->price_per_domes}}</td>
                                        <td>{{$tile->domes_per_box}}</td>
                                        <td>{{$tile->price}}</td>
                                        <td><a href="javascript:void(0);" class="view-btn" id="carting" data-url="{{Request::path()}}" onclick="cart({{$tile->id}});">Add to cart</a></td>
                                        
                                    </tr>
                                    @endforeach
                                    @else

                                     @foreach($tiles_specification as $tile)

                                    <tr>
                                        <td><img src="{{ asset('public/images/tiles/'.$tile->img) }}" ></td>
                                        <td>{{$tile->description}}</td>
                                        <td>{{$tile->price}}</td>
                                        <td><a href="javascript:void(0);" class="view-btn" id="carting" data-url="{{Request::path()}}" onclick="cart({{$tile->id}});">Add to cart</a></td>
                                        
                                    </tr>
                                    @endforeach
                                    @endif
                                   
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>

                    <button class="accordion">Specifications (in mm)</button>
                    <div class="panel">
                        <div class="panel-padd">
                            <?php echo $data->size_price ?>
                        </div>
                    </div>

                    @if($condition == 0 && $main_category->id ==24)
                    
                    @else

                    @if(!empty($tiles_specification[0]->size))
                    <button class="accordion">Standard Colours</button>
                    <div class="panel">
                        <div class="panel-padd colordiv">
                            <div class="row">
                                @foreach($colours as $colour)
                                <div class="col-md-2 col-sm-2 col-xs-4  text-center">
                                    <div class="colorbox" style="background:{{$colour->	background_colour}}">
                                    </div>
                                    <h4>{{$colour->name}}</h4>
                                    <h4>{{$colour->number}}</h4>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    @endif

                    @endif
                    <button class="accordion">Applications</button>
                    <div class="panel">
                        <div class="panel-padd">
                            <?php echo $data->application ?>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($related_data))
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-wrap">
                    <div class="cstm-scroll">
                    @foreach($related_data as $related)
                    @if($related->title != $data->title)
                   
                    <div class="side-text-wrap">
                        <img src="{{ asset('public/images/product/'.$related->image) }}" class="img-responsive">
                        <h5>{{$related->title}}<br>
                        </h5>

                        @if(isset($category))
                        <a href="{{url('category/'.$category->slug.'/'.$sub_category->slug.'/'.$related->slug) }}">
                            <div class="small-center"><button class="theme-btn" type="button">More Information</button></div>
                        </a>
                        @endif
                        @if(isset($main_category))
                        <a href="{{url('category/'.$main_category->slug.'/'.$related->slug) }}">
                            <div class="small-center"><button class="theme-btn" type="button">More Information</button></div>
                        </a>

                        @endif
                    </div>

                    @endif
                    @endforeach
                </div>
        @if($advert_footer->status =='on')        
         <div class="small-sec">
            <div class="left-part">
                <figure>
            <img src="{{ asset('public/images/advertisement/'.$advert_sidebar->image) }}">
        </figure>   
            </div>
            <div class="right-part">
                <h2>{{$advert_sidebar->title}}</h2>
            <?php echo  $advert_sidebar->description; ?>
            <a href="{{url($advert_sidebar->link) }}" class="view-btn">View More</a>
            </div>
         </div>       
        @endif     
        <div class="common-wrap">        
            <div class="accordian-wrap">
                    <h2>Canadian Federal & Provincial Accessibility Codes</h2>
                <ul>
                    <li>
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)">
                                <div class="text-drop">
                                  Western Canada
                                </div>
                                </a> 
                               <i class="fa fa-plus"></i>
                             
                            </div>
                            <div class="dropdown-container ">
                            @foreach ($codes as $code)
                            @if($code->type=='wc')
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)"><div class="text-drop">{{$code->title}}</div></a> 
                                <i class="fa fa-plus"></i>
                                  
                            </div>                                        
                                <div class="dropdown-container">
                                     <a href="javascript:void(0)">
                                        <div class="test-wrap codes-head">
                                        <ul>
                                        <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                        <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                        <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                        @if(!empty($code->name_1))
                                        <li><a href="{{$code->href_1}}" target="_blank">{{$code->name_1}}</a></li>
                                        @else
                                        <li><a href="javascript:void(0)" >Provincial standards not available.</a></li>
                                        @endif
                                        @if(!empty($code->name_2))
                                        <li><a href="{{$code->href_2}}" target="_blank">{{$code->name_2}}</a></li>
                                        @endif
                                        @if(!empty($code->name_3))
                                        <li><a href="{{$code->href_3}}" target="_blank">{{$code->name_3}}</a></li>
                                        @endif
                                        </ul> 
                                    </div>
                                     </a>
                                </div>
                            
                            @endif
                            @endforeach
                            </div>
                    </li>

                    <li>
                           <div class="dropdown-btn">
                                <a href="javascript:void(0)">
                                <div class="text-drop">
                                  Central Canada
                                </div>
                                </a> 
                                    <i class="fa fa-plus"></i>
                               
                            </div>
                       <div class="dropdown-container ">
                            @foreach ($codes as $code)
                            @if($code->type=='cc')
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)"><div class="text-drop">{{$code->title}}</div></a> 
                                <i class="fa fa-plus"></i>
                              
                            </div>                                          
                                <div class="dropdown-container">
                                     <a href="javascript:void(0)">
                                        <div class="test-wrap codes-head">
                                        <ul>
                                        <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                        <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                        <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                        @if(!empty($code->name_1))
                                        <li><a href="{{$code->href_1}}" target="_blank">{{$code->name_1}}</a></li>
                                        @else
                                        <li><a href="javascript:void(0)" >Provincial standards not available.</a></li>
                                        @endif
                                        @if(!empty($code->name_2))
                                        <li><a href="{{$code->href_2}}" target="_blank">{{$code->name_2}}</a></li>
                                        @endif
                                        @if(!empty($code->name_3))
                                        <li><a href="{{$code->href_3}}" target="_blank">{{$code->name_3}}</a></li>
                                        @endif
                                        </ul> 
                                    </div>
                                     </a>
                                </div>
                            
                            @endif
                            @endforeach
                            </div>
                    </li>

                    <li>
                                    <div class="dropdown-btn">
                                <a href="javascript:void(0)">
                                <div class="text-drop">
                                  The Maritimes
                                </div>
                                </a> 
                                <i class="fa fa-plus"></i>
                        
                            </div>
                         <div class="dropdown-container ">
                            @foreach ($codes as $code)
                            @if($code->type=='tm')
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)"><div class="text-drop">{{$code->title}}</div></a> 
                                 <i class="fa fa-plus"></i>
                         
                            </div>                                         
                                <div class="dropdown-container">
                                     <a href="javascript:void(0)">
                                        <div class="test-wrap codes-head">
                                        <ul>
                                        <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                        <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                        <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                        @if(!empty($code->name_1))
                                        <li><a href="{{$code->href_1}}" target="_blank">{{$code->name_1}}</a></li>
                                        @else
                                        <li><a href="javascript:void(0)" >Provincial standards not available.</a></li>
                                        @endif
                                        @if(!empty($code->name_2))
                                        <li><a href="{{$code->href_2}}" target="_blank">{{$code->name_2}}</a></li>
                                        @endif
                                        @if(!empty($code->name_3))
                                        <li><a href="{{$code->href_3}}" target="_blank">{{$code->name_3}}</a></li>
                                        @endif
                                        </ul> 
                                    </div>
                                     </a>
                                </div>
                            
                            @endif
                            @endforeach
                            </div>
                    </li>

                    <li>
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)">
                                <div class="text-drop">
                                 Northern Canada
                                </div>
                                </a> 
                               
                                    <i class="fa fa-plus"></i>
                            
                            </div>
                           <div class="dropdown-container ">
                            @foreach ($codes as $code)
                            @if($code->type=='nc')
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)"><div class="text-drop">{{$code->title}}</div></a> 
                            
                                    <i class="fa fa-plus"></i>
                                
                            </div>                                         
                                <div class="dropdown-container">
                                     <a href="javascript:void(0)">
                                        <div class="test-wrap codes-head">
                                        <ul>
                                       <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                        <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                        <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                        @if(!empty($code->name_1))
                                        <li><a href="{{$code->href_1}}" target="_blank">{{$code->name_1}}</a></li>
                                        @else
                                        <li><a href="javascript:void(0)" >Provincial standards not available.</a></li>
                                        @endif
                                        @if(!empty($code->name_2))
                                        <li><a href="{{$code->href_2}}" target="_blank">{{$code->name_2}}</a></li>
                                        @endif
                                        @if(!empty($code->name_3))
                                        <li><a href="{{$code->href_3}}" target="_blank">{{$code->name_3}}</a></li>
                                        @endif
                                        </ul> 
                                    </div>
                                     </a>
                                </div>
                            
                            @endif
                            @endforeach
                            </div>
                    </li>

                </ul>
            </div>
        </div>


         <div class="common-wrap">        
            <div class="accordian-wrap">
                <h2>Additional References</h2>
                <ul>
                        @foreach ($references as $reference)
                    <li>
                          @if($reference->type =='Single')
                       <?php
                          
                          $main_pdf = DB::table('reference_pdfs')                                        
                                        ->where('list_id',$reference->id)
                                        ->where('type','main')  
                                        ->first();


                        ?>  
                        <a href="{{ asset('public/images/reference/'.$main_pdf->original_pdf)}}" target="_blank">
                            <div class="text-drop ">
                               {{$reference->name}}
                            </div>
                            </a> 
                        @else         
                        	@if($reference->detail_condition =='yes')  
                          @if($reference->id == '4')
                        <?php
						  $sub_refer = DB::table('sub_references')
										
										->leftJoin('csc_categories', 'sub_references.category_id', '=', 'csc_categories.id')
										->select('sub_references.*')   
										->where('csc_categories.title',$refer_category)  
										->where('sub_references.reference_id',$reference->id) 
                                         ->orWhere('sub_references.category_id', '=', 'check')
										->get();

										
						?> 
                        @else
                        <?php
                          $sub_refer = DB::table('sub_references')
                                        
                                        ->leftJoin('csc_categories', 'sub_references.category_id', '=', 'csc_categories.id')
                                        ->select('sub_references.*')   
                                        ->where('csc_categories.title',$refer_category)  
                                        ->where('sub_references.reference_id',$reference->id) 

                                        ->get();

                                        
                        ?> 
                        @endif                                          
                        	@else
                        	<?php
                    
                          $sub_refer = DB::table('sub_references')                                        
                                        ->where('reference_id',$reference->id) 
                                        ->get();

                        ?>   
                        	@endif
                            <div class="dropdown-btn">
                            <a href="javascript:void(0)">
                            <div class="text-drop ">
                               {{$reference->name}}
                            </div>
                            </a> 
                            <a class="dropdown-btn togglebtn ">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>

                            <div class="dropdown-container ">
                            @foreach($sub_refer as $sub)
                            <?php
                                 $sub_pdfs = DB::table('reference_pdfs')                                        
                                        ->where('list_id',$sub->id)
                                        ->where('type','sub')  
                                        ->get();
                            ?>
                            <div class="dropdown-btn">
                                <a href="javascript:void(0)"><div class="text-drop">{{$sub->name}}</div></a> 
                                <a class="dropdown-btn togglebtn">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>    
                                        
                                <div class="dropdown-container">
                                     <a href="javascript:void(0)">
                                        <div class="test-wrap codes-head">
                                        <ul>
                                          @foreach($sub_pdfs as $sub_pdf)  
                                        <li><a href="{{ asset('public/images/reference/'.$sub_pdf->original_pdf)}}" target="_blank">{{$sub_pdf->original_pdf}}</a></li>
                                        @endforeach
                                        </ul> 
                                    </div>
                                     </a>
                                </div>
                            
                            @endforeach
                            </div>
                        @endif    
                    </li>
                    @endforeach



                </ul>
            </div>
        </div>
                <!-- accordian end-->
            </div>
        </div>
            @endif
    </div>
</div>
</section>


<!-- Modal -->
<div id="add_to_cart" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content addcart-modal">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
    
      <div class="modal-body">
        <p>Successfully Added to the cart</p>
        <p>Quantity and Colour will be selected in Cart page</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="view-btn" data-dismiss="modal">Continue shopping</button>
        <!-- <a href="#" class="view-btn">Continue shopping</a> -->
        <a href="{{route('cart')}}" class="view-btn btn-right">View Cart</a>
      </div>
    </div>

  </div>
</div>

<!--<section id="quote">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Request A Quote</h2>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-user-o" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Name:" id="text1">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Email:" id="text1">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">   
				   <span><i class="fa fa-mobile" aria-hidden="true"></i></span>           
					<input type="text" class="form-control" placeholder="Phone:" id="text1">
				</div>
			</div>
			<div class="col-lg-12 padd-30">
				<div class="form-group ">   
				   <i class="far fa-comment" aria-hidden="true"></i>           
					<textarea rows="4" cols="50" class="form-control" placeholder="Message:"></textarea>					
					</div>
			</div>
			<div class="col-lg-12 padd-20">
				<button type="submit" class="btn btn-primary ">Send</button>
			</div>
		</div>
	</div>
</section>-->
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

</script>
<script>
    $(".active-container").show();
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
$(".togglebtn").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
$(".dropdown-btn").click(function(){
    $(this).find("i").toggleClass("fa-minus");
});
</script>
<script>
$(".active-dropbtn").find("i").toggleClass("fa-minus");
</script>

<script>
$(".active-dropbtn").click(function(){
    $('.dropdown-btn').removeClass('active-dropbtn');
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
        $("#" + activeTab).fadeIn();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).fadeIn();

        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
    });


    /* Extra class "tab_last" 
       to add border to right side
       of last tab */
    $('ul.tabs li').last().addClass("tab_last");


    function cart(cart_id)
 {
    

var product_url = $('#carting').data("url");

    $.ajax({
    url: "{{route('add-to-cart')}}" ,
    method:'POST',
    dataType: "json",
    data:{ "_token": "{{ csrf_token() }}",cart_id:cart_id,product_url:product_url},

    beforeSend: function() {
       
     },
    success:function(result)
    {
       
        if(result.status == 'not')
        {
            //Swal.fire('Already Included in the cart');
             $('#add_to_cart').modal('show');
             $("#count").text(result.totalqty);
        }
        if(result.status == 'added')
        {
         //Swal.fire('Successfully Added to the cart');
          $('#add_to_cart').modal('show');
         $("#count").text(result.totalqty);   
        }
    }
   })
 }
 
  $(".buy-btn").click(function() {  //use a class, since your ID gets mangled
    $("#buy-now").addClass("active");      //add the class to the clicked element
  });

</script>
@include('partials/front/footer')
