@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/signin.css')}}">

<div class="login">
    <div class="card">
        <div style="text-align: center">
            <img src="{{asset('images/logo/logo.png')}}" style="max-width:100px;" />
        </div>
        
        <h3 style="text-align: center;letter-spacing: 2px;text-transform: uppercase;text-shadow: 0px 3px 7px #ef9898;">Registeration</h3>
        <form action="{{url('/register-submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First name">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="Last name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <input type="submit" class=" btn submit" style="width:100%;" value="Sign Up">

        </form>
    </div>
</div>
@endsection