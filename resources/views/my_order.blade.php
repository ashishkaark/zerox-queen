@extends('layouts.frontlayout')
@section('content')

<link rel="stylesheet" href="{{asset('css/frontcss/my-account.css')}}">

<div class="my_account">
    <div class="container">
        <h3>My Account</h3>


        <div class="row mt-3 mb-5">
            <div class="col-lg-3 col-md-3">
                {{-- <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">My details</a>
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">My orders</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit profile</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Change password</a>
                </div> --}}
                @include("inc.myacc_menu",['show'=>"2"])
            </div>
            <div class="col-lg-9 col-md-9 shadow">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">

                        <div class="order mt-2 mb-5">
                            <a class="back_btn"><i class="fas fa-arrow-left "></i> Back </a>
                            <h5 class="mt-3" style="color: #d9341a;font-weight: 700;">My Orders</h5>


                            @foreach ( $final_data as $noti )
                                <div style="margin-bottom: 1rem;
                                padding: 1rem;
                                box-shadow: 0px 9px 10px 0px #dee2e6;">
                                    <div class="row">
                                        <div class="col-md-6" style="text-shadow: 0px 2px 1px #dee2e6;color:#d9341a"><i style="font-size: 1.5rem;color:#020f07" class="las la-box"></i> {{ $noti['pay_order_id']}}</div>
                                        <div class="col-md-6 text-center" style="text-shadow: 0px 2px 1px #dee2e6;color:#d9341a"><i style="font-size: 1.5rem;color:#020f07" class="las la-dollar-sign"></i> {{$noti['pay_total']}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style=" text-shadow: 0px 2px 1px #dee2e6;display:flex;color:#d9341a"><i style="font-size: 1.5rem;color:#020f07" class="las la-map-marked-alt"></i> <span style="padding-left:5px;">{!! $noti['pay_delivery_addr2'] !!}</span></div>
                                        <div class="col-md-6 text-center" style="text-shadow: 0px 2px 1px #dee2e6;color:#d9341a"><i style="font-size: 1.5rem;color:#020f07" class="las la-file-contract"></i> {{$noti['pay_sts']}} </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{url('/invoice/pdf/')}}/{{$noti['pay_order_id']}}" class="btn-cutom" style="width:100%;text-align:center;"><span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span><i class="las la-download"></i> Download </a>
                                        </div>
                                    </div>

                                    @foreach ($noti['items'] as $noti_item )
                                        <div style="padding: .5rem; margin-bottom:1rem;
                                        background: radial-gradient(circle at center, #f7e4ba, #ffffff);
                                        ">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="img-fluid" src="{{asset($noti_item["prod_img"])}}" alt="">
                                                </div>
                                                <div class="col-md-6" style="font-size: .8rem">
                                                    <span style="font-size: .9rem;font-weight: 800;color: black;margin-bottom: 3px;"><i style="font-size: .8rem;color:#020f07" class="las la-signature"></i> Name:</span> {{$noti_item["prod_name"]}}<br/>
                                                    <span style="font-size: .9rem;font-weight: 800;color: black;margin-bottom: 3px;"><i style="font-size: .8rem;color:#020f07" class="las la-cubes"></i> Qty:</span> {{$noti_item["pur_item_qty"]}}<br/>
                                                    <span style="font-size: .9rem;font-weight: 800;color: black;margin-bottom: 3px;"><i style="font-size: .8rem;color:#020f07" class="las la-tag"></i> Price:</span> {{$noti_item["pur_item_price"]}}<br/>
                                                </div>
                                                <div class="col-md-4" style="font-size: .8rem">
                                                    <span style="font-size: .9rem;font-weight: 800;color: black;margin-bottom: 3px;"><i style="font-size: .8rem;color:#020f07" class="las la-store"></i> Vendor:</span> {{$noti_item["vendor_name"]}}<br/>
                                                    <span style="font-size: .9rem;font-weight: 800;color: black;margin-bottom: 3px;"><i style="font-size: .8rem;color:#020f07" class="las la-clock"></i> Date:</span> {{$noti_item["pur_create_date"]}}<br/>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            @endforeach

                            {{-- <div class="dispatched">
                                <div class="personal-information">Dispatched
                                    <hr>
                                </div>

                                <div class="container">
                                    <div class="row justify-content-between shadow">
                                        <div class="col-lg-6 col-md-7">
                                            <div class="row ml-0 p-3 justify-content-between align-items-center">
                                                <div class="col-lg-4 col-md-12 col-5">
                                                    <img src="{{asset('img/frontimage/product/product_img5.png')}}"
                                                        class="" alt="...">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-6">
                                                    <div class="details">
                                                        <h5 class="card-title">Onion Seed</h5>
                                                        <p class="card-text">Sold by: Sarang Store </p>
                                                        <h5>₹ 500</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 align-self-center">
                                            <div class="order_detail">
                                                <a href="#">View Order Detail</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                            
                            
                            <div class="dispatched">
                                <div class="personal-information">Delivered
                                    <hr>
                                </div>

                                <div class="container">
                                    <div class="row justify-content-between shadow">
                                        <div class="col-lg-6 col-md-7 ">
                                            <div class="row ml-0 p-3 justify-content-between align-items-center">
                                                <div class="col-lg-4 col-md-12 col-5">
                                                    <img src="{{asset('img/frontimage/product/product_img5.png')}}"
                                                        class="" alt="...">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-6">
                                                    <div class="details">
                                                        <h5 class="card-title">Onion Seed</h5>
                                                        <p class="card-text">Sold by: Sarang Store </p>
                                                        <h5>₹ 500</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-0 p-3 justify-content-between align-items-center">
                                                <div class="col-lg-4 col-md-12 col-5">
                                                    <img src="{{asset('img/frontimage/product/product_img5.png')}}"
                                                        class="" alt="...">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-6">
                                                    <div class="details">
                                                        <h5 class="card-title">Onion Seed</h5>
                                                        <p class="card-text">Sold by: Sarang Store </p>
                                                        <h5>₹ 500</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 align-self-center">
                                            <div class="order_detail">
                                                <a href="#">View Order Detail</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection