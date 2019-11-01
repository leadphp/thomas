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
            <li>{{$data->page_name}}</li>
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
        <div class="test-wrap codes-head">
          <h2 class="black-back">Canadian mandatory federal & provincial codes</h2>
          <!-- <?php echo $data->body?> -->
            <div class="specific">
              <h2>Provincial Accessibility Requirements</h2>
              <p>For specific codes in your area please contact your provincial and / or municipal building codes department</p>
</div>

         </div>
        

      </div>
    </div>
  </div>
</section>


<!--reference section starts-->
<section class="reference cust-reference">
    <div class="container">
        
        <div class="reference-outer">
            <div class="row">
               
                <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-wrap">
                  <h3>Western Canada</h3>    
                  <?php $j=1;?>                
               @foreach($codes as $code)
                  @if($code->type=='wc')   
                  <div class="wrap-text">
                  
                    <div class="model" data-toggle="modal" data-target="#Refmodal{{$j}}">
                  
                    <figcaption>
                      <p class="inner-d"  >{{$code->title}}</p>
                    </figcaption>
                  </div>

                  </div>
                    <!-------Modal-------->
                    <div id="Refmodal{{$j}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">{{$code->title}}</h1>
                          </div>
                          <div class="modal-body">
                               <div class="accordion-container">
                                <div class="set">
                                    <ul class="dots">
                                      <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                      <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                      <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>

                                 @if(!empty($code->name_1)) 
                                <li><a target="_blank" href="{{$code->href_1}}">
                                  {{$code->name_1}}  
                                </a></li>
                                @else
                                <li><a href="JavaScript:Void(0)">
                                  Provincial standards not available.
                                </a></li>
                                @endif
                                @if(!empty($code->name_2))
                                <li><a target="_blank" href="{{$code->href_2}}">
                                  {{$code->name_2}}
                                </a></li>
                                @endif
                                @if(!empty($code->name_3))
                                <li><a target="_blank" href="{{$code->href_3}}">
                                  {{$code->name_3}}
                                </a></li>
                                @endif
                              </ul>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    <?php $j++;?>
                @endforeach
              </div>
              </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-wrap">
                  <h3>Central Canada</h3>    
                  <?php $k=1;?>                
               @foreach($codes as $code)
                  @if($code->type=='cc')   
                  <div class="wrap-text">
                      
                    <div class="model" data-toggle="modal" data-target="#Refmodal{{$k}}">
                  
                    <figcaption>
                      <p class="inner-d"  >{{$code->title}}</p>
                    </figcaption>
                  </div>
                
                  </div>
                    <!-------Modal-------->
                    <div id="Refmodal{{$k}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">{{$code->title}}</h1>
                          </div>
                          <div class="modal-body">
                            <div class="accordion-container">
                                <div class="set">
                                  <ul class="dots">
                                      <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                      <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                      <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                  
                                 @if(!empty($code->name_1)) 
                                <li><a target="_blank" href="{{$code->href_1}}">
                                  {{$code->name_1}}  
                                </a></li>
                                @else
                                <li><a target="_blank" href="JavaScript:Void(0)">
                                  Provincial standards not available.
                                </a></li>
                                @endif
                                @if(!empty($code->name_2))
                                <li><a target="_blank" href="{{$code->href_2}}">
                                  {{$code->name_2}}
                                </a></li>
                                @endif
                                @if(!empty($code->name_3))
                                <li><a target="_blank" href="{{$code->href_3}}">
                                  {{$code->name_3}}
                                </a></li>
                                @endif
                               </ul> 
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    <?php $k++;?>
                @endforeach
              </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-wrap">
                  <h3>The Maritimes</h3>    
                  <?php $l=1;?>                
               @foreach($codes as $code)
                  @if($code->type=='tm')   
                  <div class="wrap-text">
                        
                    <div class="model" data-toggle="modal" data-target="#Refmodal{{$l}}">
                  
                    <figcaption>
                      <p class="inner-d"  >{{$code->title}}</p>
                    </figcaption>
                  </div>
                </a>
                  </div>
                    <!-------Modal-------->
                    <div id="Refmodal{{$l}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">{{$code->title}}</h1>
                          </div>
                          <div class="modal-body">
                            <div class="accordion-container">
                                <div class="set">
                                  <ul class="dots">
                                      <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                      <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                      <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                 @if(!empty($code->name_1)) 
                               <li> <a target="_blank" href="{{$code->href_1}}">
                                  {{$code->name_1}}  
                                </a></li>
                                @else
                                <li><a target="_blank" href="JavaScript:Void(0)">
                                  Provincial standards not available.
                                </a></li>
                                @endif
                                @if(!empty($code->name_2))
                                <li><a target="_blank" href="{{$code->href_2}}">
                                  {{$code->name_2}}
                                </a></li>
                                @endif
                                @if(!empty($code->name_3))
                                <li><a target="_blank" href="{{$code->href_3}}">
                                  {{$code->name_3}}
                                </a></li>
                                @endif
                              </ul>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    <?php $l++;?>
                @endforeach
              </div>
              </div>
                          <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-wrap">
                  <h3>Northern Canada</h3>    
                  <?php $m=1;?>                
               @foreach($codes as $code)
                  @if($code->type=='nc')   
                  <div class="wrap-text">
                        
                    <div class="model" data-toggle="modal" data-target="#Refmodal{{$m}}">
                  
                    <figcaption>
                      <p class="inner-d"  >{{$code->title}}</p>
                    </figcaption>
                  </div>
                </a>
                  </div>
                    <!-------Modal-------->
                    <div id="Refmodal{{$m}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h1 class="modal-title">{{$code->title}}</h1>
                          </div>
                          <div class="modal-body">
                            <div class="accordion-container">
                                <div class="set">
                                  <ul class="dots">
                                      <li><a href="{{ asset('public/images/code/CLEARING_Our_PATH english final oct 2017.pdf')}}" target="_blank">CNIB Clearing Our Path Guide</a></li>
                                        <li><a href="{{ asset('public/images/code/2009 IFC-IBC 1024 Luminous Egress Path Markings compliance Guide.pdf')}}" target="_blank">International Fire Code Compliance Guide</a></li>
                                      <li><a href="https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg" target="_blank">CSA B651-12 – Accessible Design for the Built Environment</a></li>
                                      <li><a href="https://www.iso.org/standard/55867.html" target="_blank">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons – Tactile Walking Surface Indicators</a></li>
                                 @if(!empty($code->name_1)) 
                                <li><a target="_blank" href="{{$code->href_1}}">
                                  {{$code->name_1}}  
                                </a></li>
                                @else
                               <li> <a target="_blank" href="JavaScript:Void(0)">
                                  Provincial standards not available.
                                </a></li>
                                @endif
                                @if(!empty($code->name_2))
                                <li><a target="_blank" href="{{$code->href_2}}">
                                  {{$code->name_2}}
                                </a></li>
                                @endif
                                @if(!empty($code->name_3))
                                <li><a target="_blank" href="{{$code->href_3}}">
                                  {{$code->name_3}}
                                </a></li>
                                @endif
                              </ul>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    <?php $m++;?>
                @endforeach
              </div>
              </div>

            </div>
        </div>
    </div>
</section>
<!--  reference section ends-->

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