@extends('layouts.frontlayout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/frontcss/product_ver2.css')}}">
<link rel="stylesheet" href="{{asset('css/frontcss/customer_info.css')}}">
<!-- CSS only -->
@php
    $upper_case_environment = "SANDBOX";
@endphp
{{-- <script type="text/javascript" src="{{asset('/js/square_payment/square.js')}}"></script> --}}
{{-- <script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script> --}}
<script type="text/javascript" src="https://web.squarecdn.com/v1/square.js"></script>
  <script type="text/javascript">
    window.applicationId = "{{ App\Defines\SquareProdDefines::SQUARE_PROD_APPLICATION_ID }}";
    //   "<?php
    //     echo getenv('SQUARE_APPLICATION_ID');
    //     ?>";
    window.locationId ="{{ App\Defines\SquareProdDefines::SQUARE_PROD_LOCATION_ID }}";
    //   "<?php
    //     echo getenv('SQUARE_LOCATION_ID');
    //     ?>";
    window.currency = "{{ $currency }}";
    // //   "<?php
    // //     echo $location_info->getCurrency();
    // //     ?>";
    window.country = "{{ $country }}";
    //   "<?php
    //     echo $location_info->getCountry();
    //     ?>";
  </script>
  <link rel="stylesheet" type="text/css" href="{{asset('/css/square_payment/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/square_payment/sq-payment.css')}}">
<div class="container top-container">
    <div class="row">
        <div class="col-md-8 py-5 navtabs_payment">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cust_info" role="tab"
                        aria-controls="home" onclick="event.stopPropagation();" aria-selected="true">01 CUSTOMER INFO</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ship_info" role="tab"
                        aria-controls="profile" onclick="event.stopPropagation();" aria-selected="false">02 SHIPPING INFO</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#pay_info" role="tab"
                        aria-controls="contact" onclick="event.stopPropagation();" aria-selected="false">03 PAYMENT SELECTION</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cust_info" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form py-1">
                        <h4>Customer Information</h4>
                        <form action="">
                           @if($IsLoggedIn == '1')
                                <input type="hidden" id="is_guest" name="is_guest" value="0"/>
                            @else
                                <input type="hidden" id="is_guest" name="is_guest" value="1"/>
                            @endisset
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <label for="inputState">First Name</label>

                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First name" value="{{$cust_detail['name']?? ''}}">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="inputState">Last Name</label>

                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" value="{{$cust_detail['name']?? ''}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <label for="inputState">Email Address</label>

                                        <input type="text" name="uemail" id="uemail" class="form-control" placeholder="Email Address" value="{{$cust_detail['email']?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Address</label>

                                <input type="text" name="addr_line1" id="addr_line1" class="form-control" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="inputState">State</label>
                                        <input type="text" name="addr_state" id="addr_state" class="form-control" placeholder="Enter State">
                                        {{-- <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select> --}}
                                    </div>
                                    <div class="col">
                                        <label for="inputState">CITY</label>

                                        <input type="text" name="addr_city" id="addr_city" class="form-control" placeholder="Enter City">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="inputState">ZIP CODE</label>
                                        <input type="text" name="addr_zip" id="addr_zip" class="form-control" placeholder="Enter Zip Code">
                                    </div>
                                    <div class="col">
                                        <label for="inputState">PHONE</label>

                                        <input type="text" name="addr_phone" id="addr_phone" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="ship_info" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="form">
                        <div class="d-flex  align-items-center">
                            <h4>Shipping Information</h4>
                            {{-- <a href="#">Add Address
                            </a> --}}
                        </div>
                        <div class="card ">
                            {{-- <div class="card-body shping_address">
                                <div class="d-flex checkbox_content checkbox">
                                    <input type="checkbox" id="vehicle1" checked="checked" name="vehicle1" value="Bike">


                                    <div class="park_place">
                                        <label for="vehicle1">Jhon Doe</label>
                                        <h6>2150 Park Place, Suite 100 El Segundo, CA 90245</h6>
                                        <h6>Tel: 844.410.9689</h6>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                            </div> --}}
                            {{-- <div class="text-center hr_principle">
                                <hr>
                            </div>

                            <div class="card-body shping_address">
                                <div class="d-flex checkbox_content">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">

                                    <div class="park_place">
                                        <label for="vehicle1">Jhon Doe</label>
                                        <h6>2150 Park Place, Suite 100 El Segundo, CA 90245</h6>
                                        <h6>Tel: 844.410.9689</h6>
                                    </div>
                                </div>
                               
                            </div> --}}
                        </div>

                        <div class="row my-2">
                            <input type="hidden" name="del_choice" id="del_choice" value="0"/>
                            <div class="col-sm-6 col-sm-6 col-6 stand_delvery">
                                <div class="card">
                                    <div class="card-body shping_address px-2">
                                        <div class="d-flex checkbox_content">
                                            <input type="checkbox" checked class="del_chk" id="std_del_chk" onclick="onchkclick();" name="std_del_chk" value="0">

                                            <div class="park_place">
                                                <label for="vehicle1">Standart Delivery</label>
                                                <h6>Estimated 14-20 Day Shipping (Duties and taxes may be due upon
                                                    delivery)
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="free_content">
                                            Free
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-sm-6 col-6 john_delevery">
                                <div class="card">
                                    <div class="card-body shping_address px-2">
                                        <div class="d-flex checkbox_content">
                                            <input type="checkbox" class="del_chk" id="fast_del_chk" onclick="onchkclick();" name="fast_del_chk" value="1">

                                            <div class="park_place">
                                                <label for="vehicle1">Fast Delivery</label>
                                                <h6>Estimated 2-5 Days Shipping (Duties and taxes may be due upon
                                                    delivery)
                                                </h6>

                                            </div>
                                        </div>
                                        <div class="free_content">
                                            $8.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pay_info" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="form">
                        <div class="d-flex  align-items-center">
                            <h4>Payment Selection
                            </h4>

                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button payment_selection" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Payment Selection
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{-- <form>
                                            <label for="fname">CARD NUMBER</label><br>
                                            <input type="text" placeholder="0000 0000 0000 0000" name="fname"><br>
                                            <label for="lname">NAME ON CARD</label><br>
                                            <input type="text" id="lname" placeholder="0000 0000 0000 0000"
                                                name="lname">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD
                                                    </label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD</label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1"
                                                        class="checkbox_width" value="Bike">
                                                    <label for="vehicle1">Save this card for faster payments</label>
                                                </div>
                                                <img src="images/" alt="">
                                            </div>


                                        </form> --}}
                                        <form class="payment-form" id="fast-checkout">
                                            <input type="hidden" name="amtmoney" id="amtmoney" value="{{$cart_detail['cart_tot_with_del']}}"/>
                                            <input type="hidden" name="order_id" id="order_id" value="{{$data['shopping_order_id']}}"/>
                                            
                                            <div class="wrapper">
                                              {{-- <div id="apple-pay-button" alt="apple-pay" type="button"></div>
                                              <div id="google-pay-button" alt="google-pay" type="button"></div>
                                              <div class="border">
                                                <span>OR</span>
                                              </div> --}}
                                              {{-- <div id="ach-wrapper">
                                                <label for="ach-account-holder-name">Full Name</label>
                                                <input id="ach-account-holder-name" type="text" placeholder="Jane Doe" name="ach-account-holder-name" autocomplete="name" /><span id="ach-message"></span><button id="ach-button" type="button">Pay with Bank Account</button>
                                        
                                                <div class="border">
                                                  <span>OR</span>
                                                </div>
                                              </div> --}}
                                              <div id="card-container"></div><button id="card-button" type="button">Pay with Card</button>
                                              <span id="payment-flow-message"></span>
                                            </div>
                                          </form>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed payment_selection" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        NET BANKING

                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <label for="fname">CARD NUMBER</label><br>
                                            <input type="text" placeholder="0000 0000 0000 0000" name="fname"><br>
                                            <label for="lname">NAME ON CARD</label><br>
                                            <input type="text" id="lname" placeholder="0000 0000 0000 0000"
                                                name="lname">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD
                                                    </label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD</label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1"
                                                        class="checkbox_width" value="Bike">
                                                    <label for="vehicle1">Save this card for faster payments</label>
                                                </div>
                                                <img src="images/" alt="">
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed payment_selection" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        G-PAY
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <label for="fname">CARD NUMBER</label><br>
                                            <input type="text" placeholder="0000 0000 0000 0000" name="fname"><br>
                                            <label for="lname">NAME ON CARD</label><br>
                                            <input type="text" id="lname" placeholder="0000 0000 0000 0000"
                                                name="lname">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD
                                                    </label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD</label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1"
                                                        class="checkbox_width" value="Bike">
                                                    <label for="vehicle1">Save this card for faster payments</label>
                                                </div>
                                                <img src="images/" alt="">
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed payment_selection" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        E-WALLETS
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <label for="fname">CARD NUMBER</label><br>
                                            <input type="text" placeholder="0000 0000 0000 0000" name="fname"><br>
                                            <label for="lname">NAME ON CARD</label><br>
                                            <input type="text" id="lname" placeholder="0000 0000 0000 0000"
                                                name="lname">
                                            <div class="row mt-3">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD
                                                    </label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <label for="cars">NAME ON CARD</label>
                                                    <input type="text" id="lname" placeholder="MM / YY" name="lname">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1"
                                                        class="checkbox_width" value="Bike">
                                                    <label for="vehicle1">Save this card for faster payments</label>
                                                </div>
                                                <img src="images/" alt="">
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-row desk_view mt-5">
                <div class="col">
                    <a href="#" id="back_btn_desk" style="display:none;" onclick="backSwitchTab()" class="return_shopping"><i class="fas fa-arrow-left"> </i> Return to Shop</a>
                </div>
                <div class="col">
                    <button id="conti_btn" onclick="switchTab()" class="btn continue_shopp w-100">CONTINUE TO SHIPPING</button>
                </div>
            </div>



        </div>


        <div class="col-md-4 px-0 shoppingcart_div">
            <div class="shopping_bg">
                <div class="">
                    <div class="shopping_cart">
                        <h3 class="title_shopping">Shopping Cart</h3>
                        <p>{{$cart_item_qty}}</p>

                    </div>
                    <hr>
                    @foreach($cart_items as $noti)
                    <div class="row pt-3 padding_cart">
                        <div class="col-md-6 col-4 p-1 text-center">
                            <img src="{{asset($noti['itm_img'])}}" class="img-box" alt="">
                        </div>
                        <div class="col-md-6 col-7">
                            <div class="aroisal_oil">

                                <h4>
                                    {{$noti['itm_name']}}
                                </h4>
                                <h3>$ {{$noti['itm_amt']}}</h3>
                                <div class="input-group mx-1">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number minus_btn"
                                            disabled="disabled" data-type="minus" data-field="quant[1]">
                                            {{-- <img src="images/icon/minus.svg" alt=""> --}}
                                        </button>
                                    </span>
                                    {{-- <input type="text" name="quant[1]"
                                        class="form-control input-number minus_btn text-center border-0" value="{{$noti['itm_qty']}}"
                                        min="1" max="10"> --}}
                                        <span class="form-control input-number minus_btn text-center border-0">
                                            {{$noti['itm_qty']}}
                                        </span>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            {{-- <img src="images/icon/plus.svg" alt=""> --}}

                                        </button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="row py-3 padding_cart">
                        <div class="col-md-6 col-4 p-1 text-center">
                            <img src="images/products/Product_Image02.png" class="img-box" alt="">
                        </div>
                        <div class="col-md-6 col-7">
                            <div class="aroisal_oil">

                                <h4>
                                    Deita 8 Temple
                                </h4>
                                <h4>
                                    Vape (Pink Cookies)
                                </h4>
                                <h3>$ 69.90</h3>
                                <div class="input-group mx-1">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number minus_btn"
                                            disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <img src="images/icon/minus.svg" alt="">
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]"
                                        class="form-control input-number minus_btn text-center border-0" value="1"
                                        min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            <img src="images/icon/plus.svg" alt="">

                                        </button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="Apply_Promo_Code">
                        <h3>Apply Promo Code</h3>
                        <div class="input-group my-3">
                            <input type="text" class="form-control" placeholder="Apply Promo Code"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn apply_btn" type="button" id="button-addon2">Apply</button>
                            </div>
                        </div>

                    </div> --}}
                    <div class="subtotal">
                        <h4 class="title_shopping">Subtotal</h4>
                        <h5>$ {{$cart_detail['cart_tot_with_del']}}</h5>

                    </div>
                    <div class="subtotal">
                        <h4 class="title_shopping">Shipping</h4>
                        <h5>Free</h5>

                    </div>
                    <hr>
                    <div class="subtotal">
                        <h4 class="title_shopping">Total</h4>
                        <h5>$ {{$cart_detail['cart_tot_with_del']}}</h5>

                    </div>

                </div>
                <div class="return_to_shop">
                    <a href="#"  id="back_btn_mob" onclick="backSwitchTab()"><h3 class="return_shopping"><i class="fas fa-arrow-left"></i> Return to Shop </h3></a>
                    <button type="button" id="conti_btn_mob" class="btn continue_shopp" onclick="switchTab()">CONTINUE TO SHIPPING</button>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('custom_scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <script>
                Url = {
                    ajaxpp : "{{ route('ajaxprocess.post') }}",
                    conf: "{{ url('/confirmation') }}"
                };
                CurrTab = "#cust_info";
        </script>

        <script>
            function onchkclick()
            {
                $('#del_choice').val('');
                chk_std = $('#std_del_chk');
                chk_fast = $('#fast_del_chk');
                if($(chk_fast).prop('checked') == true){
                    $('#del_choice').val('1');
                    $(chk_std).prop('checked',false);
                }else if($(chk_std).prop('checked') == true){
                    $('#del_choice').val('0');
                    $(chk_fast).prop('checked',false);
                }
                // chk_coas = $('.del_chk');
                // chk_coas.each((index, value) => {
                // if ($(value).prop('checked') == true) {
                //     if ($('#del_choice').val() === '') {
                //         $('#del_choice').val($(value).val());
                //     } else {
                //         $('#coa_vals').val($('#coa_vals').val() + ',' + $(value).val());
                //     }

                // }
            
        
            }

            function switchTab(){
                if(CurrTab == "#cust_info"){
                    var fname = document.getElementById('fname').value;
                    var lname = document.getElementById('lname').value;
                    var uemail = document.getElementById('uemail').value;
                    var addr_line1 = document.getElementById('addr_line1').value;
                    var addr_state = document.getElementById('addr_state').value;
                    var addr_city = document.getElementById('addr_city').value;
                    var addr_zip = document.getElementById('addr_zip').value;
                    var addr_phone = document.getElementById('addr_phone').value;
                    if (!fname.trim() || !lname.trim() || !uemail.trim() ) {
                        alert('Error! Please make sure firstname, lastname, Email are not empty');
                        return;
                    }

                    if (!addr_line1.trim() || !addr_state.trim() || !addr_city.trim() || !addr_phone.trim()) {
                        alert('Error! Please make sure Address is filled correctly');
                        return;
                    }
                    $('#conti_btn').html('CONTINUE TO PAYMENT');
                    $('#conti_btn').show();
                    $('#back_btn_desk').show();
                    $('#back_btn_desk').html('<h3 class="return_shopping"><i class="fas fa-arrow-left"></i> Return to Customer Info </h3>');
                    $('.nav-tabs a[href="#ship_info"]').tab('show');
                }

                if(CurrTab == "#ship_info"){
                    $('#conti_btn').hide();
                    $('#back_btn_desk').show();
                    $('#back_btn_desk').html('<h3 class="return_shopping"><i class="fas fa-arrow-left"></i> Return to Shipping Info </h3>');
                    $('.nav-tabs a[href="#pay_info"]').tab('show');
                }
            }

            function backSwitchTab(){
                if(CurrTab == "#ship_info"){
                    $('#conti_btn').html('CONTINUE TO SHIPPING');
                    $('#back_btn_desk').hide();
                    $('#conti_btn').show();
                    $('.nav-tabs a[href="#cust_info"]').tab('show');
                }

                if(CurrTab == "#pay_info"){
                    $('#conti_btn').html('CONTINUE TO PAYMENT');
                    $('#conti_btn').show();
                    $('#back_btn_desk').html('<h3 class="return_shopping"><i class="fas fa-arrow-left"></i> Return to Customer Info </h3>');
                    $('.nav-tabs a[href="#ship_info"]').tab('show');
                }
            }

        </script>
        <script type="text/javascript">
            $(function () {
                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    var target = $(e.target).attr("href")
                    // alert(target);
                    CurrTab = target;
                });
            })
        </script>
        <script type="text/javascript" src="{{asset('/js/square_payment/sq-ach.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/square_payment/sq-apple-pay.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/square_payment/sq-card-pay.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/square_payment/sq-google-pay.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/square_payment/sq-payment-flow.js')}}"></script>
@endsection