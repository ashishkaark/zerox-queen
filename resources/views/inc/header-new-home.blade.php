<!-- top bar  -->
<div class="topbar" id="topbar">
    <h3>Watch for CBD Specials each week!</h3>
</div>

<!-- ======= Header ======= -->
<header class="show_monble_view" id="header_mob">
    <nav class="navbar navbar-expand-lg navbar-light" id="" style="background-color:rgba(0,0,0,0.5)">

        
        <div class="queen">
            <a href="{{url('/')}}">
                <img src="{{asset('images/logo/logo.png')}}" width="50px" class="logo mr-auto" alt="" style="margin-top:auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                {{-- <i class="fas fa-bars"></i> --}}
               
                <img src="{{asset('images/icon/Menu.svg')}}" alt="" >
            </button>
        </div>
        <div class="float-right d-flex align-items-center">
            {{-- <div class="share">
                <img src="{{asset('images/icon/share-variant.svg')}}" alt="">
            </div> --}}
            {{-- <div class="heart mx-3">
                <img src="{{asset('images/icon/heart.svg')}}" alt="">
                <span class="badge badge-dark">4</span>

            </div> --}}
            <div class="cart" onclick="showCartPopup();">
                <img src="{{asset('images/icon/bag.svg')}}" alt="">
                {{-- <span class="badge badge-dark">4</span> --}}
                @if(session()->has('qp-cart_qty'))
                <span class="badge badge-dark" id="cart_qty_itms_mob">{{session()->get('qp-cart_qty')}}</span>
                @else
                <span class="badge badge-dark" id="cart_qty_itms_mob"></span>
                @endif
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="color:white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="#">About Us</a>
                </li>
                @if(session()->has('qp-u'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color:white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{session()->get('qp-u_name')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/customer/detail')}}">My Account</a>
                        <a class="dropdown-item" href="{{url('/userlogout')}}">Log Out</a>
                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
                </li>
                @endif

            </ul>

        </div>

    </nav>


    </div>
</header>
<header id="header" class="show_desktop_view">
    <div class=" d-flex align-items-center my-0 py-0 px-5">
        <div class="queen">
            <a href="{{url('/')}}">
                <img src="{{asset('images/logo/logo.png')}}" width="50px" class="logo mr-auto" alt="">
            </a> Queen & Pharaoh
        </div>
        <!-- <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

        <nav class="nav-menu mx-auto d-none d-lg-block">
            {{-- <ul>



                <li><a href="product.html">Products</a></li>

                <li><a href="learn_about.html">Learn About CBD</a></li>

                <li class="mr-5"><a href="about.html">About</a></li>
            </ul> --}}

        </nav>
        <div class="d-flex justify-content-center align-content-center">


            <div class="nav-button ">
                <a href="#" class="mr-1"><img src="{{asset('images/icon/heart.svg')}}" class="img-fluid" alt=""></a>

                {{-- <span class="heart_number">3</span> --}}
            </div>
            <div class="nav-button " onclick="showCartPopup();">
                <img src="{{asset('images/icon/Cart.svg')}}" class="img-fluid" alt="" />
                <!-- <i class="fas fa-shopping-bag " style="color: grey;font-size: 28px;"></i> -->
                @if(session()->has('qp-cart_qty'))
                <span class="badge" id="cart_qty_itms">{{session()->get('qp-cart_qty')}}</span>
                @else
                <span class="badge" id="cart_qty_itms"></span>
                @endif
            </div>
            <!-- .nav-menu -->
            @if(session()->has('qp-u'))
            <div class="nav-button ">
                <a href="{{url('/customer/detail')}}" class="login_nav">My Account</a>
                <a href="{{url('/userlogout')}}" class="login_nav">Log Out</a>
            </div>
            @else
            <div class="nav-button ">
                {{-- <a href="#" onclick="act_login()" class="login_nav">Login</a> --}}
                <a href="{{url('/login')}}" class="login_nav">Login</a>
                <!-- <a href="signup.html" class="btn">Register</a>  -->
            </div>
            @endif
        </div>
    </div>
</header>