@extends('layouts.frontlayout')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/login.css')}}">

<div class="login">
    <div class="card">
        <div style="text-align: center">
            <img src="{{asset('images/logo/logo.png')}}" style="max-width:100px;" />
        </div>
        
        <h3 style="text-align: center;letter-spacing: 2px;text-transform: uppercase;text-shadow: 0px 3px 7px #ef9898;">Login</h3>
        <form action="{{url('/userlogin')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="email" placeholder="Username" required />

            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password" required />

            </div>
            <input type="submit" class=" btn submit" value="Submit" style="width:100%;">

        </form>
        <div>
            <br>
            <p>
                Not Registered <a href="{{url('register')}}"> Create Account</a>
            </p>
        </div>
    </div>
</div>
@endsection