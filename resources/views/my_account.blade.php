@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/my-account.css')}}">
<div class="my_account">
    <div class="container">
        <h3>My Account</h3>


        <div class="row mt-3 mb-5">
            <div class="col-lg-3 col-md-3 ">
                @include("inc.myacc_menu",['show'=>"1"])
            </div>
            <div class="col-lg-9 col-md-9 shadow">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="my-detail mt-2 mb-5">
                            <a class="back_btn"><i class="fas fa-arrow-left "></i> Back </a>
                            <h5 class="mt-3" style="color: #d9341a;font-weight: 700;">My Account</h5>


                            <div class="personal-information">Personal information
                                <hr>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="inputEmail4">First Name</label>
                                    <span type="text" name="name" class="form-control" id="inputEmail4"
                                        value="">{{$accountlist['u_name']}}</span>
                                </div>
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="inputPassword4">Email Address</label>
                                    <span type="email" name="email" class="form-control" id="inputPassword4"
                                        value="">{{$accountlist['u_email']}}</span>
                                </div>



                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="inputEmail4">Phone Number</label>
                                    <span type="text" name="phone" class="form-control" id="inputEmail4"
                                        value="">{{$accountlist['u_phone']}}</span>
                                </div>
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="inputPassword4">Created On</label>
                                    <span type="text" name="pincode" class="form-control" id="inputPassword4"
                                        value="">{{$accountlist['u_created_on']}}</span>
                                </div>

                            </div>


                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
@endsection
