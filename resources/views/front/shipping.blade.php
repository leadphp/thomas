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
<section class="inner-banner" style="background: url({{ asset('public/images/payment/banner.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Shipping<span></span></h1>
                <div>
                    <ul class="sublist">
                        <li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
                        <li>Shipping</li>

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

            <li>
                <a href="{{route('personal-details')}}">
                    Personal Details
                </a>
                <span class="round"></span>
            </li>
            <li class="active">
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
        <form name="shipping" method="POST" action="{{route('p-shipping')}}">
            {{ csrf_field() }}

            <div class="info-form">
                <h2>Shipping provision</h2>
                <div class="black-box">
                    <div class="radio-btn shiping-option">
                        <p class="pickup">
                            <input type="radio" id="pickup" value="pickup" name="shipping" @if($shipping == 'pickup') checked @endif>
                            <label for="pickup">Pickup</label>
                        </p>
                        <p class="shiping">
                            <input type="radio" id="ship" value="shipping" name="shipping" @if($shipping == 'shipping') checked @endif>
                            <label for="ship">shipping</label>
                        </p>


                    </div>
                    <div id="shipping_error"></div>


                    <div class="custom-table shipping-table shipping_page" id="cart_table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>Carrier</th>
                                        <th>information</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <!-- <td>
                    		<div class="radio-btn label-height">
							 <p>
   				 				<input type="radio" id="test12" name="radio-group" checked="">
    							<label for="test12"></label>
  							</p>

							</div>
                    	</td> -->
                                        <td>
                                            Ship Via: WE WILL CONTACT YOU WITH FREIGHT CHARGES
                                        </td>
                                        <td>
                                            Custom
                                        </td>
                                        <td>
                                            Quote
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>


            <!-- button Wrap class starts here -->
            <div class="btn-wrap">
                <a href="{{route('personal-details')}}" class="custm-button">Previous</a>
                <!-- <button type="submit" class="custm-button">Continue Shopping</button> -->
                <button type="submit" class="custm-button">Next</button>
            </div>

        </form>
        <!-- button Wrap class starts here -->
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        if ($('#ship').prop('checked')) {
            $('.shipping_page').show();
        } else {
            $('.shipping_page').hide();
        }
        $("#ship").click(function() {

            $('.shipping_page').show();

        });
        $("#pickup").click(function() {

            $('.shipping_page').hide();
        });
    });

</script>

@include('partials/front/footer')
