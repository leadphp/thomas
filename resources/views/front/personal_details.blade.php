
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
<section class="inner-banner" style="background: url({{ asset('public/images/payment/banner.png') }});">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <h1>Personal Details<span></span></h1>
          <div> 
          <ul class="sublist">
            <li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
                        <li>Personal Details</li>
            
          </ul>
          </div>
        </div>
    </div>
  </div>
</section>
<section class="steps">
  <div class="container">
    <ul class="cust-step">
      <li>
        <a href="{{route('cart')}}">
          Cart
        </a>
        <span class="round"></span>
      </li>
      <!-- <li>
        <a href="javascript:void(0)">
          Login
        </a>
        <span class="round"></span>
      </li> -->
      <li class="active">
        <a href="{{route('personal-details')}}">
          Personal Details
        </a>
        <span class="round"></span>
      </li>
      <li>
        <a href="{{route('shipping')}}">
          Shipping
        </a>
        <span class="round"></span>
      </li>
      <li>
        <a href="{{route('payment')}}">
          Payment
        </a>
        <span class="round"></span>
      </li>

    </ul>
  <form name="personal_details" method="POST" action="{{route('p_details')}}">
    {{ csrf_field() }}
   
  <div class="info-form">
    <h2>Your Personal Information</h2>
    
    <div class="black-box">
      
        <div class="form-group">
          <label>First Name <span class="red">*</span></label>
        <input type="text" class="form-control" name="fname" value="@if(Session::has('user_details')){{$user[0]->fname}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Last Name <span class="red">*</span></label>
        <input type="text" class="form-control" name="lname" value="@if(Session::has('user_details')){{$user[0]->lname}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Email <span class="red">*</span></label>
        <input type="text" class="form-control" name="email" value="@if(Session::has('user_details')){{$user[0]->email}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Phone Number <span class="red">*</span></label>
        <input type="text" class="form-control" name="phone_number" value="@if(Session::has('user_details')){{$user[0]->phone_number}}@endif" autocomplete="off">
        </div>
       <!--   <div class="custom-chckbox">
            <label class="container">Sign up for our newsletter
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="container">Receive special offers from our partners
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>

          </div> -->
      </div> </div>
  <div class="info-form">
    <h2>Billing Address</h2>
      <div class="black-box">


        


        
        <div class="form-group">
        <label>Company <span class="red">*</span></label>
        <input type="text" class="form-control" name="company" value="@if(Session::has('user_details')){{$user[0]->company}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Address <span class="red">*</span></label>
        <input type="text" class="form-control" name="address1" value="@if(Session::has('user_details')){{$user[0]->address}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Address1 <span class="red">*</span></label>
        <input type="text" class="form-control" name="address" value="@if(Session::has('user_details')){{$user[0]->address1}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>City <span class="red">*</span></label>
        <input type="text" class="form-control" name="city" value="@if(Session::has('user_details')){{$user[0]->city}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Province <span class="red">*</span></label>
          
          <select class="form-control" name="province">
            <option selected="true" disabled>Please select the province</option>
            @foreach($codes as $code)
            <option value="{{$code->id}}" @if(Session::has('user_details'))

              @if($code->id ==$user[0]->province){{'Selected'}}@endif

             @endif>{{$code->title}}</option> 
            @endforeach
          </select>
          
        
          </div>
        <div class="form-group">
        <label>Zip Code <span class="red">*</span></label>
        <input type="text" class="form-control" name="zipcode" id="zipcode" value="@if(Session::has('user_details')){{$user[0]->zip_code}}@endif" autocomplete="off">
        </div>
        <!-- <div class="form-group">
        <label>Country <span class="red">*</span></label>
        <input type="text" class="form-control" value="Canada" name="country" disabled="">

        </div> -->
        <div class="form-group">
        <label>Additional Information </label>
        <textarea class="form-control" name="add_info">@if(Session::has('user_details')){{$user[0]->add_info}}@endif</textarea>
        </div>
        <div class="custom-chckbox">
            <label class="container">Shipping Address Same as Billing Address
          <input type="checkbox" name="bill_shipp" id="bill_shipp" @if(Session::has('user_details'))
          @if($user[0]->bill_shipp =='on')
          checked
          @endif
          @endif>
          <span class="checkmark"></span>
        </label>
        

        </div>
        </div>
</div>
  <div class="info-form shipping_address">
    <h2>Shipping Address</h2>
      <div class="black-box">
        <div class="form-group">
        <label>Company <span class="red">*</span></label>
        <input type="text" class="form-control" name="s_company" value="@if(Session::has('user_details')){{$user[0]->s_company}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Address <span class="red">*</span></label>
        <input type="text" class="form-control" name="s_address" value="@if(Session::has('user_details')){{$user[0]->s_address}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Address1 <span class="red">*</span></label>
        <input type="text" class="form-control" name="s_address1" value="@if(Session::has('user_details')){{$user[0]->s_address1}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
        <label>City <span class="red">*</span></label>
        <input type="text" class="form-control" name="s_city" value="@if(Session::has('user_details')){{$user[0]->s_city}}@endif" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Province <span class="red">*</span></label>
          
          <select class="form-control" name="s_province">
            <option selected="true" disabled>Please select the province</option>
            @foreach($codes as $code)
            <option value="{{$code->id}}" @if(Session::has('user_details'))

              @if($code->id ==$user[0]->s_province){{'Selected'}}@endif

             @endif>{{$code->title}}</option> 
            @endforeach
          </select>
          
        
          </div>
        <div class="form-group">
        <label>Zip Code <span class="red">*</span></label>
        <input type="text" class="form-control" name="s_zipcode" value="@if(Session::has('user_details')){{$user[0]->zip_code}}@endif" autocomplete="off">
        </div>
       <!--  <div class="form-group">
        <label>Country <span class="red">*</span></label>
        <input type="text" class="form-control" value="Canada" name="country" disabled="">

        </div> -->
       <!--  <div class="form-group">
        <label>Additional Information </label>
        <textarea class="form-control" name="s_add_info">@if(Session::has('user_details')){{$user[0]->add_info}}@endif</textarea>
        </div> -->
        </div>
</div>

      <!-- button Wrap class starts here -->
      <div class="btn-wrap">
   <a href="{{route('cart')}}" class="custm-button">Previous</a>
     <button type="submit" class="custm-button">Next</button> 
    <!-- <button type="submit" class="custm-button">Continue Shopping</button> -->
</div>
      <!-- button Wrap class starts here -->
    </form>
</div>

</section>

<script type="text/javascript">
  $(document).ready(function(){
    if($('#bill_shipp').is(':checked') ==true)
    {
       $('.shipping_address').hide();
    }
    else
    {
       $('.shipping_address').show();
    }
    
});
   $( "#bill_shipp" ).click(function() {
        if(this.checked){
            $('.shipping_address').hide();
        }
        if(!this.checked){
           $('.shipping_address').show();
        }
    }); 

$('#zipcode').on('keyup', function() {
  var foo = $(this).val().split(" ").join(""); 
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,3}', 'g')).join(" ");
  }
  $(this).val(foo);
});


</script>

@include('partials/front/footer')
