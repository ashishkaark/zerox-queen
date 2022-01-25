@extends('layouts.home')
@section('content')

<section class="slider_section pb-0">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{asset('images/banner/slider_banner.png')}}" width="100%" alt="First slide">
                <div class="">
                    <div class="carousel-caption relative text-left">
                        <h1>IT SHOULD COME WITH A <br>
                            WARNING LABEL <br>
                            THAT READS </h1>

                        <p style="font-size: .9rem;">"WILL MAKE YOU CUM" </p>
                        <a class="shopnow" href="#about">SHOP NOW</a>
                        {{-- <img src="{{asset('images/products/Asset_2.png')}}" alt=""> --}}

                        <!-- <a class="buynow ggg" href="#">Get a quote</a> -->

                    </div>
                    <div class="help">
                        <a class="shopnow" href="#about">Help</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{asset('images/banner/slider_banner.png')}}" width="100%" alt="Second slide">
                <div class="">
                    <div class="carousel-caption relative text-left">
                        <h1>IT SHOULD COME WITH A <br>
                            WARNING LABEL <br>
                            THAT READS </h1>

                        <p style="font-size: .9rem;">"WILL MAKE YOU CUM" </p>
                        {{-- <img src="{{asset('images/products/Asset_2.png')}}" alt=""> --}}
                        <a class="shopnow" href="#about">SHOP NOW</a>
                        <!-- <a class="buynow ggg" href="#">Get a quote</a> -->

                    </div>
                    <div class="help">
                        <a class="shopnow" href="#about">Help</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset('images/banner/slider_banner.png')}}" width="100%" alt="Third slide">
                <div class="">
                    <div class="carousel-caption relative text-left">
                        <h1>IT SHOULD COME WITH A <br>
                            WARNING LABEL <br>
                            THAT READS </h1>

                        <p style="font-size: .9rem;">"WILL MAKE YOU CUM" </p>
                        <a class="shopnow" href="#about">SHOP NOW</a>
                        <!-- <a class="buynow ggg" href="#">Get a quote</a> -->
                        <img src="{{asset('images/products/produt_image.png')}}" alt="">

                    </div>
                    <div class="help">
                        <a class="shopnow" href="#about">Help</a>

                    </div>
                </div>
            </div>

        </div>
        <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a> -->
    </div>
</section>

<img src="{{asset('images/svg/slider_down.svg')}}" alt="" width="100%">

<div class="buy_product px-5" id="buy_product">
    <h3 class="text-center py-4">Buy Products</h3>

    
    <div class="products">

        @isset($prods_obj)
        @foreach($prods_obj as $noti)  
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <div class="img_box">
                <img class="card-img-top" src="{{asset($noti['prod_img'])}}" alt="Card image cap">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">{{$noti['prod_name']}}</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">${{$noti['prod_price']}}</p>
                <a href="{{url('/product')}}/{{$noti['prod_seo']}}" class="btn view_product">View Product</a>
                {{-- <a href="#" class="btn add_to_cart">Add to Cart</a> --}}

            </div>
        </div>
        @endforeach
        @endisset

        {{-- <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <div class="img_box">
                <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <a href="#" class="btn add_to_cart">Add to Cart</a>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <div class="img_box">
                <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            </div>
            <!-- <img class="card-img-top" src="images/products/Product_Image02.png" alt="Card image cap"> -->
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <a href="#" class="btn add_to_cart">Add to Cart</a>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <a href="#" class="btn add_to_cart">Add to Cart</a>

            </div>
        </div> --}}
        {{-- <div class="card" style="width: 20rem;">
            <div class="card-head d-flex justify-content-around align-items-center">
                <div class="star d-flex align-items-center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="pt-3 pl-3">(453)</p>
                </div>
                <div class="heart ">
                    <span class="fa fa-heart checked"></span>

                </div>
            </div>
            <img class="card-img-top" src="{{asset('images/products/Product_Image01.png')}}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Product Name 01</h5>
                <p class="card-text">10% off for first buyer</p>
                <p class="price">$25</p>
                <a href="#" class="btn view_product">View Product</a>
                <div class="d-lg-block justify-content-center mt-2 no-garbage">
                    <button class="add"><i class="fa fa-minus-circle"></i></button>

                    <input type="text" value="2" class="text-center">
                    <button class="remove"><i class="fa fa-plus-circle"></i></button>

                </div>

            </div>
        </div> --}}
    </div>
</div>
@endsection
