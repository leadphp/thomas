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
                <h1>Cart<span></span></h1>
                <div>
                    <ul class="sublist">
                        <li class="sublist-active"><a href="{{url('/') }}">Home</a></li>
                        <li>Cart</li>

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
         <div class="">
        <ul class="cust-step">
            <li  class="active">
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
       </div>
       
        <form name="cart" action="{{route('p-cart')}}" method="POST">
             {{ csrf_field() }}
        <div class="custom-table" id="cart_table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th class="des">Description</th>
                            <th class="product_code_width">Product Code</th>
                            <th>Unit price</th>

                            <th>Cost per stair</th>

                            <th class="stair-width">Width Of Stair In Inch</th>
                            <th>Qty/No. of stair</th>
                            <th>Colour</th>
                            <th>Total</th>
                            <th>Remove</th>
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
                            <td>
                             @if($stair =='stair')
                                <a href="javascript:void(0);" class="add-btnnew"  data-toggle="tooltip" title="For Stair Noising products, if you want to have same product with different specification. Then please add again proudct from here." onclick="add_more({{$cart->id}});">
                                    add
                                </a>
                                
                            @endif
                            </td>
                            <td class="image-part">
                                <figure>
                                    <a href="{{$link}}">
                                        @if(!empty($product->img))
                                        <img src="{{ asset('public/images/tiles/'.$product->img) }}">
                                        @else
                                        <img src="{{ asset('public/images/product/'.$category_info->image) }}" alt="{{$category_info->image_alt}}">
                                        @endif
                                    </a>
                                </figure>
                            </td>
                            <td>

                                <a href="{{$link}}">
                                    {{$cart->name}}@if($cart->attributes->c_code!='empty') in {{$cart->attributes->colour}} @endif
                                </a>
                            </td>
                            <td>{{$cart->attributes->t_code}}@if($cart->attributes->c_code!='empty')-{{$cart->attributes->c_code}}@endif</td>
                            <td>${{$cart->attributes->product_price}}</td>
                            @if($stair =='stair')
                            <td id="inch{{$cart->id}}">${{number_format($cart->attributes->width_per_inch,2)}}</td>
                            @else
                            <td>-NA-</td>
                            @endif
                
                                @if($stair =='stair')
                                <td>
                                <input type="text" autocomplete="off" class="widthtext form-control" value="{{$cart->attributes->inch}}" id="width{{$cart->id}}" onkeypress="width_val(event,this);" onkeyup="width_check(this,{{$cart->id}})" data-pro-type="{{$stair}}" >
                               <!--  <div id="popwidth{{$cart->id}}" class="popwidth">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    <label>Width Of Stair In Inch</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <a href="javascript:void(0)" class="pop-btn">Submit</a>
                                    </div>
                                </div> -->


                            </td>
                            @else
                            <td>-NA-</td>
                                @endif
                                           <td>
                                <div class="input-group spinner" id="{{$cart->id}}">
                                    @if($stair =='stair')
                                    <input type="text" class="form-control quantity" value="{{$cart->quantity}}"   onkeypress="quantity_press(event,this);" onkeyup="quantity_up({{$cart->id}},this)" id="quant{{$cart->id}}">
                                    @else
                                    <input type="text" class="form-control quantity" value="{{$cart->quantity}}"   disabled="">
                                    @endif

                                    <div class="input-group-btn-vertical">
                                        <button  class="btn btn-default" type="button" onclick="plus({{$cart->id}},this)" data-pro-type="{{$stair}}"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button" onclick="minus({{$cart->id}},this)" data-pro-type="{{$stair}}"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                </div>

                            </td>    
                                @if($cart->attributes->colour !='no colour')
                            <td>
                                <div class="color-bar">
                                    @foreach($colours as $colour)
                                    @if($colour->name == $cart->attributes->colour)
                                    <span class="bg-color" style="background:{{$colour->background_colour}}"></span>
                                    @endif
                                    @endforeach
                                    <div class="form-group">
                                        <select class="form-control colour_error" name="colour[{{$cart->id}}]" id="colour{{$cart->id}}" data-id="{{$cart->id}}" onchange="colour(this);" required="">
                                            <option selected="true" disabled="" >Color</option>
                                            @foreach($colours as $colour)
                                            @if($colour->name == $cart->attributes->colour)
                                            <option value="{{$colour->name}}" selected="" data-colour-code="{{$colour->colour_code}}">{{$colour->name}}</option>
                                            @else
                                            <option value="{{$colour->name}}" data-colour-code="{{$colour->colour_code}}">{{$colour->name}}</option>
                                            @endif
                                            @endforeach
                                           <!--  <option>Ochre Yellow</option><option>Brick Red</option><option>Colonial Red</option><option>Safety Red</option><option>Ocean Blue</option><option>Dark Grey</option><option>light Grey</option> -->
                                        </select>
                                    </div>
                                </div>
                            </td>
                            @else
                            <td>-NA-</td>
                                @endif
                         
                        
                            <td id="price{{$cart->id}}">${{number_format($cart->getPriceSum(),2)}}</td>
                            <td><button type="button" class="remove-product" onclick="remove_product({{$cart->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <small class="info-cart">
                    <span>Note:</span> For Stair Noising products, if you want to have same product with different specification. Then please add again proudct from Add button.  
                </small>
            </div>
         
            <div class="table-text" id="total_table">
                <ul>
                    <li>
                        <p>Sub-total</p> <span>${{number_format(Cart::getSubTotal(),2)}}</span>
                    </li>
                    <li>
                        <p>total</p> <span>${{number_format(Cart::getTotal(),2)}}</span>
                    </li>

                </ul>
                <small>
                    <span>Note:</span> Tax will be included once you select your province
                </small>
            </div>
        </div>
        <!-- button Wrap class starts here -->
        <div class="btn-wrap">
            <!-- <a href="javascript:void(0)" class="custm-button">Continue Shopping</a> -->
            <!-- <a href="{{route('personal-details')}}" class="custm-button next">next</a> -->
             <input type="submit" name="next" class="custm-button next" value="next"> 
        </div>
    </form>


        <!-- button Wrap class starts here -->
    
        @endif




    </div>


</section>


@include('partials/front/footer')

<script type="text/javascript">
    function width_val(event, param) {
        
        $("#" + param.id).val($("#" + param.id).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $("#" + param.id).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();

        }
    }

    function quantity_press(event, param)
    {

       $("#" + param.id).val($("#" + param.id).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $("#" + param.id).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();

        }  
    }

    function quantity_up(id,param)
    {

           if (param.value < 1) {



            $("#" + param.id).next('.err_dv').remove();
            $("#" + param.id).after('<div class="err_dv err_stair" style="color: red; font-size:12px; margin-top: 5px;">Qty should not be less than 1 </div>');
            $(".next").attr("disabled", true);

        } else {

            $("#" + param.id).next('.err_dv').remove();
            $(".next").attr("disabled", false);
            var qty = $("#" + param.id).val();
            var inch = $('#width' + id).val();
            

            $.ajax({
                url: "{{route('cart-stair-quant')}}",
                method: 'POST',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                cart_id: id,
                qty: qty,

                inch: inch,
                

                },

                beforeSend: function() {

                },
                success: function(result) {
                    if(result.status =='update')
                    {
                        console.log(result.price);
                        $("#count").text(result.totalqty);
                        /*$("#inch"+data.id).text(d_width);*/
                        var data = JSON.parse(result.product);
                        $(".table-text").load(" #total_table");
                        d_price = parseFloat(result.price).toFixed(2);
                        $("#price"+data.id).text('$'+d_price);
                        $("#quant"+data.id).text(data.qty);
                      /*  var data = JSON.parse(result.product);
                        console.log(data);
                        d_price = parseFloat(data.price).toFixed(2);*/

                    }

                }
            })
        }

        }

    function add_more(id)
    {
      
        $.ajax({  
            url: "{{route('add-more-item')}}",
            method: 'POST',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                
            },

            beforeSend: function() {

            },
            success: function(result) {
                  
                if(result.status =='added')
                {
                    $("#count").text(result.totalqty);
                    $(".custom-table").load(" #cart_table");
                }

            }
        })

    }    







    function colour(param)
    {
        
        var id = $(param).attr('data-id');
        var c_code = $('option:selected', param).attr('data-colour-code');
        


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
                colour : colour,
                c_code : c_code
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
                        $("#price"+data.id).text('$'+d_price);

                        $("#"+data.id+ " input").val(data.quantity);

                        d_width = parseFloat(data.attributes.width_per_inch).toFixed(2);
                        $("#inch"+data.id).text('$'+d_width);
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
