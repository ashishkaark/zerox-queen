@extends('layouts.frontlayout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/frontcss/confirmation2.css')}}">

    <div class="container cart_container">
        <div class="row">
            <div class="col-12" id="banner">
                <img src="{{asset('images/banner/conf_bg.png')}}" style="width: 100%;" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="em">

            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="order">
                    Order No <span>: {{$pay_detail['pay_order_id'] ?? ''}}</span>
                </div>
            </div>
            <div class="col-6">
                <div class="mobile">
                    Updates sent to <br> Mobile: 12345 12345
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="place">
                    Placed On <span>
                        : <b>{{date('d-m-Y', strtotime($pay_detail['pay_create_date']))}}
                        </b>
                    </span>
                </div>
                <div class="price">
                    Price Detail
                </div>
                <div class="total">
                    Total <span>
                        : {{number_format($pay_detail['pay_total'],2)}}
                    </span>
                </div>
            </div>
            <div class="col-6">
                <div class="email">
                    email: 
                    <span>
                        {{$cust_detail['cust_email']}}
                    </span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <div class="shipping">
                    Shipping Adress:
                </div>
                <div class="adress">
                    {{$pay_detail['pay_delivery_addr_txt']}}
                </div>
            </div>
            <div class="col-6">
                <div class="payment">
                    Payment Mode:
                </div>
                <div class="mode">
                    Credit Card
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12" id="em">

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h5>Items in this order</h5>
            </div>

            @foreach ($cart_data as $noti )
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-2">
                            <img src="{{asset($noti['itm_img'])}}" alt="">
                        </div>

                        <div class="col-1">

                        </div>
                        <div class="col-9">
                            <div class="productname">
                                <span>{{$noti['itm_name']}}</span>
                            </div>
                            <div class="price">
                                $ {{$noti['itm_amt']}}
                            </div>
                            <div class="quantity">
                                Qty: <span>
                                    {{$noti['itm_qty']}}
                                </span>
                            </div>
                            <div class="status">
                                Status: <span>Confirmed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            {{-- <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-2">
                            <img src="img/product1.jpeg" alt="">
                        </div>

                        <div class="col-1">

                        </div>
                        <div class="col-9">
                            <div class="productname">
                                <span>  THC + CBD Arousal Oil</span>
                            </div>
                            <div class="price">
                                $ 99.90
                            </div>
                            <div class="quantity">
                                Qty: <span>
                                    01
                                </span>
                            </div>
                            <div class="status">
                                Status: <span>Confirmed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

{{-- <link rel="stylesheet" href="{{asset('css/frontcss/confirmation.css')}}">
    
    <div class="container" style="margin-top:6rem; ">
        <div class="margin_register">
            <div class=" text-center">
                <div class="header">
                    <i class="far fa-check-circle"></i>
                </div>
                <h1>Thank you for your order </h1>

                <div class="card-body mt-3">
                    <p class="">We will Send you reciept for you register email address shortly</p>

                    <div class="container">
                        <div class="row  justify-content-center">
                            <div class="col-md-6 col-6 right_order">
                                <p>Order number:</p>

                            </div>
                            <div class="col-md-6 col-6 left_order">
                                <p class="color_para">4827383</p>

                            </div>




                            <div class="col-md-6 col-6 right_order">
                                <p>Order Date:</p>

                            </div>
                            <div class="col-md-6 col-6 left_order">
                                <p class="color_para">26/06/2021</p>

                            </div>



                            <div class="col-md-6 col-6 right_order">
                                <p>Delivery Details :</p>

                            </div>
                            <div class="col-md-6 col-6 left_order">
                                <p class="color_para"> Cash on Delivery,</p>
                                <p class="color_para">EST 25/06/2021</p>
                            </div>
                        </div>


                    </div>
                </div>



            </div>
            <div class="text-center justify-content-center">
                <button class="btn go_back "><i class="fas fa-arrow-left back_left"></i> Back to shopping</button>
            </div>
        </div>
    </div> --}}


   @endsection