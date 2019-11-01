
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
                <h1>Payment<span></span></h1>
                <div>
                    <ul class="sublist">
                        <li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
                        <li>Payment</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="steps">
    <div class="container">
         @if($cart_items->isEmpty())
        <div class="empty">
            <p>your cart is empty</p>
        </div>
         @else
        <ul class="cust-step">
            <li>
                <a href="{{route('cart')}}">
                    Cart
                </a>
                <span class="round"></span>
            </li>
           
            <li >
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
            <li class="active">
                <a href="{{route('payment')}}" >
                    Payment
                </a>
                <span class="round"></span>
            </li>

        </ul>
       
       
        
        <div class="custom-table" id="pay_table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="des">Description</th>
                            <th class="product_code_width">Product Code</th>
                            <th>Unit price</th>

                            <th>Cost per stair</th>

                            <th>Qty/No. of stair</th>
                            <th class="stair-width">Width Of Stair In Inch</th>
                            <th>Colour</th>
                            <th>Total</th>
                            <!-- <th>Remove</th> -->
                        </tr>
                    </thead>
                    <tbody>

       @foreach($cart_items as $cart)
                        <?php $link = $cart->attributes->product_url;
    	 $colours = DB::table('csc_colours')
					->where('list_id',$cart->attributes->list_id)
					->where('type',$cart->attributes->product_type)  
					->get();
                    
		$stair='no';		

		$product=  DB::table('csc_tiles_specifications')
					->where('id',$cart->attributes->id)  
					->first();


		if($cart->attributes->product_type == 'sub-category')
		{
			$category_info=  DB::table('csc_sub_categories')
						->where('id',$cart->attributes->list_id)  
						->first();
			if($category_info->category_id =='6')
			{
				$stair='stair';
			}			
					
		}	
		elseif($cart->attributes->product_type == 'detail')
		{
			
		$category_info=  DB::table('csc_details')
						->where('id',$cart->attributes->list_id)  
						->first();
	
		}	
	
					
    	?>
                        <tr>
                            <td class="image-part">
                                <figure>
                                    <a href="javascript:void(0)">
                                        @if(!empty($product->img))
                                        <img src="{{ asset('public/images/tiles/'.$product->img) }}">
                                        @else
                                        <img src="{{ asset('public/images/product/'.$category_info->image) }}" alt="{{$category_info->image_alt}}">
                                        @endif
                                    </a>
                                </figure>
                            </td>
                            <td>

                                <a href="javascript:void(0)">
                                    {{$cart->name}}@if($cart->attributes->c_code!='empty') in {{$cart->attributes->colour}}  @endif
                                </a>
                            </td>
                            <td>{{$cart->attributes->t_code}}@if($cart->attributes->c_code!='empty')-{{$cart->attributes->c_code}}@endif</td>
                            <td>${{number_format($cart->attributes->product_price,2)}}</td>
                            @if($stair =='stair')
                            <td id="inch{{$cart->id}}">${{number_format($cart->attributes->width_per_inch, 2)}}</td>
                            @else
                            <td>-NA-</td>
                            @endif
                               <td>
                                <div class="input-group spinner" id="{{$cart->id}}">
                                    <input type="text" class="form-control quantity" value="{{$cart->quantity}}" disabled="">
                                 <!--    <div class="input-group-btn-vertical">
                                        <button  class="btn btn-default" type="button" onclick="plus({{$cart->id}},this)" data-pro-type="{{$stair}}"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button" onclick="minus({{$cart->id}},this)" data-pro-type="{{$stair}}"><i class="fa fa-caret-down"></i></button>
                                    </div> -->
                                </div>

                            </td>
                                <td>
                                @if($stair =='stair')
                                <input type="text" autocomplete="off" class="widthtext form-control" value="{{round($cart->attributes->inch, 2)}}" id="width{{$cart->id}}" onkeypress="width_val(event,this);" onkeyup="width_check(this,{{$cart->id}})" data-pro-type="{{$stair}}" disabled="" >
                               <!--  <div id="popwidth{{$cart->id}}" class="popwidth">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    <label>Width Of Stair In Inch</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <a href="javascript:void(0)" class="pop-btn">Submit</a>
                                    </div>
                                </div> -->
                                @else
                                -NA-
                                @endif
                            </td>
                            <td>
                                @if($cart->attributes->colour !='no colour')
                                <div class="color-bar no-dropdown">
                                    @foreach($colours as $colour)
                                    @if($colour->name == $cart->attributes->colour)
                                    <span class="bg-color" style="background:{{$colour->background_colour}}"></span>
                                    @endif
                                    @endforeach
                                    <div class="form-group">
                                        <!-- <input type="text" name="colour" value="{{$cart->attributes->colour}}" disabled=""> -->
                                        <select class="form-control colour_error" name="colour[]" id="colour{{$cart->id}}" data-id="{{$cart->id}}" onchange="colour(this);" required="" disabled="">
                                            <option selected="true" disabled="" >Color</option>
                                            @foreach($colours as $colour)
                                            @if($colour->name == $cart->attributes->colour)
                                            <option value="{{$colour->name}}" selected="">{{$colour->name}}</option>
                                            @else
                                            <option value="{{$colour->name}}">{{$colour->name}}</option>
                                            @endif
                                            @endforeach 
                                           <!--  <option>Ochre Yellow</option><option>Brick Red</option><option>Colonial Red</option><option>Safety Red</option><option>Ocean Blue</option><option>Dark Grey</option><option>light Grey</option> -->
                                        <!-- </select> -->
                                    </div>
                                </div>
                                @else
                                -NA-
                                @endif

                            </td>
                         
                        
                            <td id="price{{$cart->id}}">${{number_format($cart->getPriceSum(), 2)}}</td>
                            <!-- <td><button type="button" class="remove-product" onclick="remove_product({{$cart->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td> -->
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
         
        

        <!-- Payment -->
        <div class="table-text payment-new" id="total_table">
            <ul>
                <li>Freight</li>
                <li></li>   
                <li>0</li>
            </ul>
            <ul>

                <li>Sub-total</li>
                <li></li>
                <li>${{number_format(Cart::getSubTotal(), 2)}}</li>
            </ul>  
                <?php $sub_total=Cart::getSubTotal();?>
                @if($codes->rate_type =='HST')
            <ul>
                    <li>Tax</li>
                    <li>HST ({{$tax=$codes->canada_rate+$codes->provincial_rate}}%)</li>
                    <li><?php $hst = (($tax / 100) * $sub_total)?>${{ number_format($hst, 2)}}</li>
            </ul>        
                  @elseif($codes->rate_type =='GST')
            <ul>      
                    <li>Tax</li>
                    <li>GST ({{$codes->canada_rate}}%)</li>
                    <li><?php $gst = (($codes->canada_rate / 100) * $sub_total)?>${{ number_format($gst, 2)}}</li>
            </ul>        
                    @elseif($codes->rate_type =='GST+PST')
            <ul>        
                    <li>Tax</li>
                    <li>PST ({{$codes->provincial_rate}}%)</li>
                    <li><?php $pst = (($codes->provincial_rate / 100) * $sub_total)?>${{ number_format($pst, 2)}}</li> 
            </ul>
            <ul>        
                    <li></li><li>GST ({{$codes->canada_rate}}%)</li>
                    <li><?php $gst = (($codes->canada_rate / 100) * $sub_total)?>${{ number_format($gst, 2)}}</li>
            </ul>        
                    @elseif($codes->rate_type =='GST+QST')
            <ul>        
                    <li>Tax</li>
                    <li>QST ({{$codes->provincial_rate}}%)</li>
                    <li><?php $qst = (($codes->provincial_rate / 100) * $sub_total)?>${{ number_format($qst, 2)}}</li>
            </ul>
            <ul>        
                    <li></li>
                    <li>GST ({{$codes->canada_rate}}%)</li>
                    <li><?php $gst = (($codes->canada_rate / 100) * $sub_total)?>${{ number_format($gst, 2)}}</li>
            </ul>        
                    @endif 
            </ul>    
            <ul>
                <li>Total</li>
                <li></li>
                <li>${{number_format(Cart::getTotal(), 2)}}</li>
            </ul>      
        </div>
        <!-- button Wrap class starts here -->
        <div class="btn-wrap">
             <a href="{{route('shipping')}}" class="custm-button">Previous</a> 
<!--              <a href="javascript:void(0)" onclick="oauth.loginPopup()" class="custm-button">Payment</a>  -->

             <button type="submit" class="custm-button" data-toggle="modal" data-target="#modal_payment">Payment</button>

        </div>
    


        <!-- button Wrap class starts here -->
    
        @endif




    </div>


</section>


<!-- Modal -->
<div id="modal_payment" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content modal-pay">
            <div class="modal-header">
                <h1 class="modal-title">Credit Card payment</h1>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
    
      <div class="modal-body">
        <div class="loader">
    <img src="{{ asset('public/images/loader/loader.gif') }}">
    </div>
        <!-- <p>The total amount of your order is <span>CAD $416.92</span> (tax incl.)</p> -->
    <!-- <form>
        <div class="form-group">
            <label>Card Holder Name</label>
            <input type="text" class="form-control">
        </div>
         <div class="form-group">
            <label>Card Type</label>
            <select class="form-control">
                <option>American Express</option>
                <option>visa</option>
                <option>MasterCard</option>
            </select>
        </div>
        <div class="form-group">
            <label>Card Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Card expiry</label>
             <input type="number" class="form-control" maxlength="2">
              <input type="number" class="form-control" maxlength="2">
              <p>format: mm yy</p>
        </div>
        <div class="form-group">
            <label>CVV2</label>
            <input type="text" class="form-control">
        </div>
        <p>Please confirm your order by clicking 'I confirm my order'.</p>
        <input type="submit" class="sb-btn" value="I confirm my order">
    </form> -->
    <!-- new -->
    <form name="final_payment" id="final_payment" method="POST" action="{{route('final-payment')}}">
         {{ csrf_field() }}
    <div class="wrap-box">
    <div class="container preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9      " />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="form-container">
        <div class="field-container">
            <label for="name">Name</label>
            <input id="name" maxlength="20" type="text" name="card_name">
        </div>
        <div class="field-container">
            <label for="cardnumber">Card Number</label>
            <input id="cardnumber" type="text" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" inputmode="numeric" name="card_number">
            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">

            </svg>
        </div>
        <div class="field-container">
            <label for="expirationdate">Expiration (mm/yy)</label>
            <input id="expirationdate" type="text" pattern="[0-9]{2}/[0-9]{2}" inputmode="numeric" name="card_expiry">
        </div>
        <div class="field-container">
            <label for="securitycode">Security Code</label>
            <input id="securitycode" type="text"  inputmode="numeric" name="card_cvv">
        </div>
        <div class="field-container">
        <input type="submit" class="sb-btn" value="I confirm my order">
    </div>
    </div>
</div>
</form>


    <!-- New -->
      </div>
    </div>

  </div>
</div>




@include('partials/front/footer')

<script type="text/javascript">
    function width_val(event, param) {

        $("#" + param.id).val($("#" + param.id).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $("#" + param.id).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }

    }

    function colour(param)
    {
        
        var id = $(param).attr('data-id');
        var colour = param.value;
        var product_type = $("#width"+id).attr('data-pro-type');
        var inch = $("#width"+id).value;
        var qty = $("#" + id + " input").val();
        
          $.ajax({  
            url: "{{route('cart-colour')}}",
            method: 'POST',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                cart_id: id,
                qty: qty,
                product_type: product_type,
                inch: inch,
                colour : colour
            },

            beforeSend: function() {

            },
            success: function(result) {
                  
                if (result.colour == 'changed') {
                    
                    $(".custom-table").load(" #cart_table");
                }

            }
        })

    }


/*    function stair_pop(param)
    {
        
        $("#pop"+param.id).show();
       
        
    }*/

    function width_check(param, cart_id) {

        if (param.value < 12) {



            $("#" + param.id).next('.err_dv').remove();
            $("#" + param.id).after('<div class="err_dv" style="color: red; font-size:12px; margin-top: 5px;">Stair Inch should not less than 12. </div>');
            $(".next").attr("disabled", true);

        } else {

            $("#" + param.id).next('.err_dv').remove();
            $(".next").attr("disabled", false);
            var qty = $("#" + cart_id + " input").val();
            var product_type = $(param).attr('data-pro-type');
            var inch = param.value;

            $.ajax({
                url: "{{route('cart-width-update')}}",
                method: 'POST',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    cart_id: cart_id,
                    qty: qty,
                    product_type: product_type,
                    inch: inch
                },

                beforeSend: function() {

                },
                success: function(result) {
                    //console.log(result);	
                    if (result.status == 'update') {
                        $("#count").text(result.totalqty);
                        var data = JSON.parse(result.product);
                        d_price = parseFloat(data.price).toFixed(2);
                        $("#price"+data.id).text(d_price);

                        $("#"+data.id+ " input").val(data.quantity);

                        d_width = parseFloat(data.attributes.width_per_inch).toFixed(2);
                        $("#inch"+data.id).text(d_width);
                        $(".table-text").load(" #total_table");
                        //$(".table-text").load();
                        
                        /*$(".custom-table").load(" #cart_table");
                        setTimeout(function(){ 
                            $("#width"+cart_id).focus();
                            $("#width"+cart_id).setCursorPosition($("#width"+cart_id).val().length); 
                        }, 80);*/
                        
                    }

                }
            })

        }




    }

    function plus(id, param) {
        var colour =$("#colour"+id).val();
        
        var product_type = $(param).attr('data-pro-type');
        $('#' + id + ' input').val(parseInt($('#' + id + ' input').val(), 10) + 1);
        var value = $('#' + id + ' input').val();
        var inch = $('#width' + id).val();

        $.ajax({
            url: "{{route('cart-update')}}",
            method: 'POST',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                cart_id: id,
                qty: value,
                product_type: product_type,
                inch: inch,
                colour : colour
            },

            beforeSend: function() {

            },
            success: function(result) {
                //console.log(result);	
                if (result.status == 'update') {
                    $("#count").text(result.totalqty);
                    $(".custom-table").load(" #cart_table");
                }

            }
        })

    }

    function minus(id, param) {
        var colour =$("#colour"+id).val();
        if ($('#' + id + ' input').val() > 1) {
            var product_type = $(param).attr('data-pro-type');
            $('#' + id + ' input').val(parseInt($('#' + id + ' input').val(), 10) - 1);
            var value = $('#' + id + ' input').val();
            var inch = $('#width' + id).val();
            $.ajax({
                url: "{{route('cart-update')}}",
                method: 'POST',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    cart_id: id,
                    qty: value,
                    product_type: product_type,
                    inch: inch,
                    colour :colour,
                },

                beforeSend: function() {

                },
                success: function(result) {

                    if (result.status == 'update') {
                        $("#count").text(result.totalqty);
                        $(".custom-table").load(" #cart_table");
                    }

                }
            })
        }
    }


    /*  $('.spinner .btn:first-of-type').on('click', function() {

        $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
      });
      $('.spinner .btn:last-of-type').on('click', function() {
      	if($('.spinner input').val() >1)
      	{
      		
        $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
      	}
      });*/

    function remove_product(id) {

        $.ajax({
            url: "{{route('remove-cart')}}",
            method: 'POST',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                cart_id: id
            },

            beforeSend: function() {

            },
            success: function(result) {

                if (result.status == 'remove') {
                    $("#count").text(result.totalqty);
                    $(".custom-table").load(" #cart_table");

                }
            }
        })
    }



</script>
