@extends('layouts.frontlayout')

@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/product_ver2.css')}}">
<link rel="stylesheet" href="{{asset('css/frontcss/cart2.css')}}">

<div class="container cart_container">
    <div class="your_cart">
        <h4>Your Cart</h4>
        <div class="login_acc">
            <p class="m-0">Already have an account </p>
            <a class="login_cart" href="#">Login</a>
        </div>
    </div>
    @isset($cart)
    @foreach($cart_data as $noti)
    <div class="row bg_checkout ">

        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="checkout_content" style="text-align: center">
                <img src="{{asset($noti['itm_img'])}}" class="img-fluid" style="max-width:100px;" alt="">
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 cart_cout" style="align-items: center;">
            <div class="detail_product">
                <h3>{{$noti['itm_name']}}</h3>
                <div class="rating_icon">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="    margin-top: 5%;">

            <div class="cart_cout">
                {{-- <div class="detail_product">
                    <h3>{{$noti['itm_name']}}</h3>
                    <div class="rating_icon">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div> --}}
                <div class="quantity">
                    <a href="#" class="quantity__minus" onclick="updateQty({{$noti['itm_id']}},'-')"><span>-</span></a>
                    <input name="quantity" type="text" id="qty_txt_{{$noti['itm_id']}}" class="quantity__input" value="{{$noti['itm_qty']}}">
                    <a href="#" class="quantity__plus" onclick="updateQty({{$noti['itm_id']}},'+')"><span>+</span></a>
                </div>

                <h3 class="font-weight-bold total_num">${{$noti['itm_amt']}}</h3>
                <a href="#" onclick="deletefromCart({{$noti['itm_id']}})"><i class="far fa-trash-alt" style="color: #D9341A; font-size: 2rem;"></i></a>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="row mb-3" style="flex-direction: row-reverse;">
        <div class="col-md-4 col-sm-4 col-4 col-6 my-2">
            <a href="#" class="continue_shopping">Update Cart</a>
        </div>
    </div> --}}
    @else
    <div style="min-height: 60vh;display: flex; align-items:center;justify-content: center;">
        {!!$error_data!!}
    </div>
    
    @endisset

    @isset($cart)
        
    <div class="row justify-content-between">
        <div class="col-md-3 col-sm-3 col-6">
            <p class="shipping_taxes">Shipping & taxes calculated at checkout Charges on your statement will appear as Queen & Pharaoh 12345 12345”</p>
        </div>
        <div class="col-md-3 col-sm-3 col-6">
            <h3 class="sub_total">Sub Total: $ {{$cart['cart_tot_with_del'] ?? ''}}</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-4 col-sm-4 col-12 my-2">
            <img src="{{asset('images/products/cards.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-4 col-sm-4 col-4 col-6 my-2">
            <a href="{{url('/')}}" class="continue_shopping">Continue shopping</a>
        </div>
        <div class="col-md-4  col-sm-4 col-4 col-6 my-2">
            <a href="{{url('/checkout')}}" class="check_out">Check Out</a>
        </div>
    </div>
    @endisset
    
</div>

@endsection

@section('custom_scripts')
<script>

    function deletefromCart(prod_id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: "json",
            url: "{{ route('ajaxdelfromcart.post') }}",
            data: {
                prod_id: prod_id
            },
            success: function (data) {
                //Utils.hideLoading();
                console.log(data);
                if (data.res == 'SUCCESS') {
                    // $('#btn_layer_'+idx).html(data.data);
                    location.reload();

                } else {
                    console.log(data);
                    alert(data.error);
                    // console.log(data.error);
                }
            }
        });
    }


    function updateQty(prod_id,act){
        const input = $('#qty_txt_'+prod_id);
        if(act === '+'){
            var value = input.val();
            value++;
            input.val(value);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: "json",
                url: "{{ route('ajaxupdatecart.post') }}",
                data: {
                    prod_id: prod_id,
                    prod_qty: value
                },
                success: function (data) {
                    //Utils.hideLoading();
                    console.log(data);
                    if (data.res == 'SUCCESS') {
                        // $('#btn_layer_'+idx).html(data.data);
                        location.reload();

                    } else {
                        console.log(data);
                        alert(data.error);
                        // console.log(data.error);
                    }
                }
            });
        }else if(act === '-'){
            var value = input.val();
            if (value > 1) {
                value--;
            }
            input.val(value);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: "json",
                url: "{{ route('ajaxupdatecart.post') }}",
                data: {
                    prod_id: prod_id,
                    prod_qty: value
                },
                success: function (data) {
                    //Utils.hideLoading();
                    console.log(data);
                    if (data.res == 'SUCCESS') {
                        // $('#btn_layer_'+idx).html(data.data);
                        location.reload();

                    } else {
                        console.log(data);
                        alert(data.error);
                        // console.log(data.error);
                    }
                }
            });
        }

    }
       
</script>
@endsection