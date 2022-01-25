
@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/my-account.css')}}">
<div class="my_account">
    <div class="container">
        <h3>My Account</h3>


        <div class="row mt-3 mb-5">
            <div class="col-lg-3 col-md-3 ">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">My details</a>
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">My orders</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit profile</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Change password</a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 shadow">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">

                        <div class="order-detail mt-2 mb-5">
                            <button class="back_btn"><i class="fas fa-arrow-left "></i> Back </button>
                            <!-- <h5 class="mt-3" style="color: #199C4C;font-weight: 700;">Order detail</h5> -->

                            <div class="">
                                <div class="detail">Order detail
                                    <hr>
                                </div>



                            </div>

                            <div class="order_detailed">

                                <div class="row justify-content-between">
                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="d-flex">
                                            <div class="oder_id">
                                                <p class="status_shipp">Order ID:</p>
                                                <p>Placed on: </p>
                                                <p>Shiped by: </p>
                                                <p>Deliver by:</p>
                                            </div>
                                            <div class="order_number">
                                                <p>#5164</p>
                                                <p>23/06/2021,06:23pm</p>
                                                <p>23/06/2021,06:23pm - 09:00</p>
                                                <p>23/06/2021,06:23pm - 09:00</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="d-flex">
                                            <div class="oder_id">
                                                <p class="status_shipp">Status:</p>
                                                <p>Shipped to: </p>

                                            </div>
                                            <div class="order_number">
                                                <p>undeivered</p>
                                                <p>23/06/2021,09:00 AM - 09:00pm</p>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="detail">Products
                                <hr>
                            </div>
                            
                            <div class="left_row">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-6">
                                                <img src="{{asset('img/frontimage/product/product_img5.png')}}"
                                                    class="rounded" alt="...">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-6">
                                                <div class="detail">
                                                    <h5 class="card-title">Onion Seed</h5>
                                                    <p class="card-text">Sold by: Sarang Store </p>
                                                    <h5>₹ 500</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                        <div class="d-flex quantity">
                                            <div class="oder_id">
                                                <p>Quantity:</p>

                                            </div>
                                            <div class="order_number">
                                                <p>2</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection