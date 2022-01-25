
@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/my-account.css')}}">
{{-- <link rel="stylesheet" href="css/my-account.css"> --}}
<div class="my_account">
    <div class="container">
        <h3>My Account</h3>


        <div class="row mt-3 mb-5">
            <div class="col-lg-3 col-md-3">
                
                @include("inc.myacc_menu",['show'=>"3"])
            </div>
            <div class="col-lg-9 col-md-9 shadow">
                <div class="tab-content" id="v-pills-tabContent">
                   
                    <div class="tab-pane fade  show active" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="edit-profile">
                            <a class="back_btn"><i class="fas fa-arrow-left "></i> Back </a>
                            <h5 class="mt-3" style="color: #d9341a;font-weight: 700">Edit Profile
                            </h5>
                            <form action="{{url('customer/updateprofile')}}/{{$editprofile['u_id']}}" method="post">
                                @csrf
                                <div class="img-box text-center py-3">
                                    <img src="{{asset('img/frontimage/icon/edit.png')}}" width="150px" alt="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputEmail4">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$editprofile['u_name']}}">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputEmail4">Password</label>
                                        <input type="text" name="pass" class="form-control" id="inputEmail4" >
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputEmail4">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="inputEmail4" value="{{$editprofile['u_phone']}}">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputPassword4">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="inputPassword4" value="{{$editprofile['u_email']}}">
                                    </div>
                                </div>

                                {{-- <div class="form-row">
                                    
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputPassword4">Pincode</label>
                                        <input type="text" name="pin" class="form-control" id="inputPassword4" value="{{$editprofile['u_pincode']}}">
                                    </div>
                                </div> --}}
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        

                                    </div>
                                    <div class="form-group col-lg-6 col-md-6">
                                        <button class="btn save">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection