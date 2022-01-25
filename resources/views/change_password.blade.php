@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/my-account.css')}}">

<div class="my_account">
    <div class="container">
        <h3>My Account</h3>


        <div class="row mt-3 mb-5">
            <div class="col-lg-3 col-md-3">
                {{-- <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">My details</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">My orders</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit profile</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Change password</a>
                </div> --}}
                @include("inc.myacc_menu",['show'=>"4"])
            </div>
            <div class="col-lg-9 col-md-9 shadow">
                <div class="tab-content" id="v-pills-tabContent">
                    {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="edit-profile">
                            <button class="back_btn"><i class="fas fa-arrow-left "></i> Back </button>
                            <h5 class="mt-3" style="color: #d9341a;font-weight: 700">Edit Profile
                            </h5>
                            <form action="">
                                <div class="img-box text-center py-3">
                                    <img src="img/icon/logo/logo.png" width="150px" alt="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputEmail4">First Name</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputPassword4">Last Name</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputEmail4">Phone Number</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputPassword4">Email Address</label>
                                        <input type="email" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="exampleFormControlTextarea1">House No.,Street</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="5"></textarea>

                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label for="inputPassword4">Pincode</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        

                                    </div>
                                    <div class="form-group col-lg-6 col-md-6">
                                        <button class="btn save">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <div class="tab-pane fade show active" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="edit-profile">
                            <a class="back_btn"><i class="fas fa-arrow-left "></i> Back </a>
                            <h5 class="mt-3" style="color: #d9341a;font-weight: 700">Change Password
                            </h5>
                            
                            <div style="display: flex;flex-direction: column;align-content: center;">
                                <form action="{{url('/customer/updatepassword')}}/{{$chg_obj['u_id']}}" method="post" class="my-5">
                                    
                                    @csrf
                                        
                                            <div class="form-group col-lg-12 col-md-12">
                                                <label for="inputEmail4">New Password</label>
                                                <input type="password" name="newpwd" class="form-control" id="inputEmail4">
                                            </div>
                                        
                                        
                                            <div class="form-group col-lg-12 col-md-12">
                                                <label for="inputEmail4">Confirm Password</label>
                                                <input type="password" name="confpwd" class="form-control" id="inputEmail4">
                                            </div>
                                       
                                        
                                
                                        <div class="form-group col-lg-12 col-md-6">
                                            <button class="btn save">Save</button>
                                        </div>
    
                                
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection