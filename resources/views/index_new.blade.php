@extends('layouts.frontlayout-home')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/home_resp.css')}}">
@include("inc.agepopup")
<section class="slider_section pb-0 show_desktop_view">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel" data-interval="false">
        <ul class="carousel-indicators">
          
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ul>
        <div class="carousel-inner">

        
            <div class="carousel-item active">
                <img class="Two-slide" src="{{asset($home_obj['desk_images']['banner_img1'])}}" width="100%" alt="Two slide">
                <div class="">
                    <div class="carousel-caption relative text-left" style="margin-top:8%;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Ancient Wisdom Modern Science</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                 </div>
                        </div>
                        
                        <a class="shopnow" href="#about">SHOP NOW</a>
            </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset($home_obj['desk_images']['banner_img2'])}}" width="100%" alt="Third slide">
                <div class="">
                    <div class="carousel-caption relative text-left" style="margin-top:8%;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1> Reach New Heights of Intimacy</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        
                        <a class="shopnow" href="#about">SHOP NOW</a>


                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="four-slide" src="{{asset($home_obj['desk_images']['banner_img3'])}}" width="100%" alt="four slide">
                <div class="">
                    <div class="carousel-caption relative text-left" style="margin-top:8%;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1> Calm the Body</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                               
                                <a class="shopnow" href="#about">SHOP NOW</a>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="four-slide" src="{{asset($home_obj['desk_images']['banner_img4'])}}" width="100%" alt="four slide">
                <div class="">
                    <div class="carousel-caption relative text-left" style="margin-top:8%;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Relax Your Mind</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">

                                <a class="shopnow" href="#about">SHOP NOW</a>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<section class="slider_section pb-0 show_monble_view">
    <div id="mymCarousel" class="carousel slide banner-main" data-ride="carousel" data-interval="false">
        <ul class="carousel-indicators">
            <li data-target="#mymCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mymCarousel" data-slide-to="1" class=""></li>
            <li data-target="#mymCarousel" data-slide-to="2" class=""></li>
            <li data-target="#mymCarousel" data-slide-to="3" class=""></li>
        </ul>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="one-slide" src="{{asset($home_obj['mobile_images']['banner_img1'])}}" width="100%" alt="one slide">
                <div class="">
                    {{-- <div class="carousel-caption relative text-left">
                        <h1>IT SHOULD COME WITH A <br> WARNING LABEL <br> THAT READS </h1>

                        <p style="font-size: .9rem;">"WILL MAKE YOU CUM" </p>
                        <a class="shopnow" href="#about">SHOP NOW</a>

                        <img src="images/products/produt_image.png" alt="">

                    </div> --}}
                    <div class="carousel-caption relative" style="top:200px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Ancient Wisdom Modern Science</h1>
                                {{-- <br> --}}
                                {{-- <p style=" font-size: 12px !important;
                                font-weight: 300;
                                line-height: 1.79;
                                letter-spacing: 0.56px;
                                text-align: left !important;
                                color: #fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <img class="mt-4 mb-4" src="images/products/ignite-pleasure.png" alt="" style="width:50%;"> --}}
                            </div>
                        </div>
                        <a class="shopnow" href="#about">SHOP NOW</a>

                        {{-- <img src="images/products/produt_image.png" alt=""> --}}

                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="Two-slide" src="{{asset($home_obj['mobile_images']['banner_img2'])}}" width="100%" alt="Two slide">
                <div class="">
                    <div class="carousel-caption relative">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Reach New Heights of Intimacy</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <img class="mt-4 mb-4" src="images/products/electrify.png" alt="" style="width:auto;"> --}}
                            </div>
                        </div>
                        <a class="shopnow" href="#about">SHOP NOW</a>

                        {{-- <img src="images/products/produt_image.png" alt=""> --}}

                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset($home_obj['mobile_images']['banner_img3'])}}" width="100%" alt="Third slide">
                <div class="">
                    <div class="carousel-caption relative">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Calm the Body</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <img class="mt-4 mb-4" src="images/products/elevate-senses.png" alt="" style="width:100%;"> --}}
                            </div>
                        </div>
                        <a class="shopnow" href="#about">SHOP NOW</a>

                        {{-- <img src="images/products/produt_image.png" alt=""> --}}

                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="four-slide" src="{{asset($home_obj['mobile_images']['banner_img4'])}}" width="100%" alt="four slide">
                <div class="">
                    <div class="carousel-caption relative" style="top:100px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1> Relax Your Mind</h1>
                                {{-- <br> --}}
                                {{-- <p style=" font-size: 12px !important;
                                font-weight: 300;
                                line-height: 1.79;
                                letter-spacing: 0.56px;
                                text-align: left !important;
                                color: #fff;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <img class="mt-4 mb-4" src="images/products/intimacy.png" alt="" style="width:50%;"> --}}
                            </div>
                        </div>
                        <a class="shopnow" href="#about">SHOP NOW</a>

                        {{-- <img src="images/products/produt_image.png" alt=""> --}}

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<div class="buy_product  " id="buy_product">
    <h3 class="text-center py-4">Buy Products</h3>
    <div class="container">
        <div class="products row">
            @isset($prods_obj)
            @foreach($prods_obj as $noti)  
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="product_card">
                    <div class="card">

                        <div class="img_box {{($noti['prod_type'] == '1')? 'extra_height':'' }}">
                            <a href="{{url('/product')}}/{{$noti['prod_seo']}}">
                                <img class="card-img-top img-fluid" src="{{asset($noti['prod_img']['prod_img1'])}}" alt="Card image cap">
                            </a>
                            <div class="card-body">

                                {{-- <a href="{{url('/testProduct')}}/{{$noti['prod_seo']}}" class="btn view_product">Select Option</a> --}}
                                <div class="card-head d-flex justify-content-start ">
                                    <div class="star d-flex">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
            
                                        <i class="far fa-star checked"></i>
                                    </div>
            
                                </div>
                                <h3>{{$noti['prod_name']}}
                                </h3>
                                <h6 style="font-size: 11px;">(25mg/each)</h6>
                                <h6>${{$noti['prod_price']}}</h6>

                                @if ($noti['prod_type'] == '1')
                                <div class="gummies">
                                    @foreach ($noti['prod_bottle_options'] as $bottle)
                                        @if ($loop->index == 0)
                                        <a href="#" id="gummy_{{$bottle['id']}}_{{$noti['prod_id']}}" class="gummy_{{$noti['prod_id']}} gummy gummy_active" onclick="home_js.select_bottle(event,{{$bottle['id']}},{{$noti['prod_id']}})">{{$bottle['txt']}}</a>        
                                        @else
                                        <a href="#" id="gummy_{{$bottle['id']}}_{{$noti['prod_id']}}" class="gummy_{{$noti['prod_id']}} gummy ml-2" onclick="home_js.select_bottle(event,{{$bottle['id']}},{{$noti['prod_id']}})">{{$bottle['txt']}}</a>        
                                        @endif
                                    @endforeach
                                    <input id="bottle_{{$noti['prod_id']}}" type="hidden"/>
                                    {{-- <a href="#" class=" gummy gummy_active">10 Gummies</a>
                                    <a href="#" class=" gummy ml-2">20 Gummies</a> --}}
                                </div>

                                <div class="cate_image">

                                    @foreach ($noti['prod_flavor'] as $flavor)
                                    <div class="product_berry_img">
                                        <button type="button" id="flavor_{{$flavor['id']}}_{{$noti['prod_id']}}" class="flavor_{{$noti['prod_id']}} btn btn_click p-0" onclick="home_js.addFocus(event,{{$flavor['id']}},{{$noti['prod_id']}})">
                                        <img src="{{asset($flavor['img'])}}" class="img-fluid click_img " alt=" "></button>
                                        <h3>{{$flavor['name']}}</h3>
                                    </div>
                                    @endforeach

                                    {{-- <div class="product_berry_img">
                                        <button type="button" class="btn btn_click p-0" onclick="addFocus({{$noti['prod_id']}})">
                                        <img src="{{asset('images/products/blueberry-01.png')}}" class="img-fluid click_img " alt=" "></button>
                                        <h3>Blueberry</h3>
                                    </div>
                                    <div class="product_berry_img">
                                        <button type="button" class="btn btn_click p-0" onclick="addFocus({{$noti['prod_id']}})">
                                        <img src="{{asset('images/products/Straberry-01.png')}}" class="img-fluid click_img focus-only" alt=" "></button>
                                        <h3>Strawberry</h3>
                                    </div>
                                    <div class="product_berry_img">

                                        <button type="button" class="btn btn_click p-0" onclick="addFocus({{$noti['prod_id']}})">
                                        <img src="{{asset('images/products/lemmon-01.png')}}" class="img-fluid click_img focus-only" alt=" "></button>
                                        <h3>Lemon</h3>
                                    </div> --}}
                                    <input id="flavor_{{$noti['prod_id']}}" type="hidden"/>
                                </div>
                                @endif

                                <div class="btn_add_card py-2">
                                    <div class="p-0 ">
                                        <!-- <a href="#" class="btn ">ADD TO CART</a> -->
                                        <button type="button" class="btn view_product" onclick="addTocart({{$noti['prod_id']}})">ADD TO CART</button>
                                    </div>
                                    <div class="button-container input-group">
                                        <button class="cart-qty-minus  btn-number minus_btn " type="button" value="-">  <img src="images/icon/minus.svg" class="btn-calc" alt=""></button>
                                        <input type="text" name="qty" id="qty_{{$noti['prod_id']}}" class="qty form-control input-number minus_btn text-center border-0" maxlength="12" value="1" />
                                        <button class="cart-qty-plus  btn-number minus_btn" type="button" value="+">  <img src="images/icon/plus.svg" class="btn-calc" alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-body text-center">

                            <a href="{{url('/testProduct')}}/{{$noti['prod_seo']}}" class="btn view_product">ADD TO CART</a>

                        </div> --}}
                    </div>
                    {{-- <div class="card-head d-flex justify-content-start ">
                        <div class="star d-flex">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>

                            <i class="far fa-star checked"></i>
                        </div>

                    </div>
                    <h3>{{$noti['prod_name']}}
                    </h3>
                    <h6 style="font-size: 11px;">(25mg/each)</h6>
                    <h6>${{$noti['prod_price']}}</h6> --}}
                </div>
            </div>
            @endforeach
            @endisset
            

        </div>
        
    </div>

</div>
 <div class="container-fluid">
    <div class="row column_reverse_our_story">
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex p-0">
            <div class="queenpara_101">
                <h4>Queen & Pharaoh 101</h4>
                <p>
                    {!! nl2br($home_obj['qp101']) !!}
                   
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
            <img src="images/products/homePharaoh.png" class="img-fluid w-100 show_desktop_view" alt="">
            <img src="images/products/q&p_our_mobile.png" class="img-fluid w-100 show_monble_view" alt="">
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6 d-flex p-0">
            <div class="Our_Story">
                <h4>Our Story
                </h4>
                <p>
                    {!! nl2br($home_obj['ourstory']) !!}
                </p>
               
            </div>
        </div>
        <div class="col-md-6 p-0  ourstory_img">
            <div>
                <img src="images/products/ourhome_story.svg" class="img-fluid " alt="">

            </div>
        </div>
    </div>
</div> 
 <div class="Learn-About-CBD">
    <div class="container">
        <h3>Learn About CBD </h3>
        <p>
            {!! nl2br($home_obj['learnCBD']) !!}
        </p>
       
    </div>
</div>

@endsection

@section("custom_scripts")
<script src="{{asset('/js/frontjs/age-popup.js')}}"></script>

<script>
    var home_js = {
        load:()=>{
            var incrementPlus;
        var incrementMinus;

        var buttonPlus = $(".cart-qty-plus");
        var buttonMinus = $(".cart-qty-minus");

        var incrementPlus = buttonPlus.click(function() {
            var $n = $(this)
                .parent(".button-container")

            .find(".qty");
            $n.val(Number($n.val()) + 1);
        });

        var incrementMinus = buttonMinus.click(function() {
            var $n = $(this)
                .parent(".button-container")

            .find(".qty");
            var amount = Number($n.val());
            if (amount > 1) {
                $n.val(amount - 1);
            }
        });
        },
        select_bottle:(evt,bottle_id,prod_id)=>{
            evt.preventDefault();
            $('.gummy_'+prod_id).removeClass('gummy_active');
            $('#gummy_'+bottle_id+'_'+prod_id).addClass('gummy_active');
            $('#bottle_'+prod_id).val(bottle_id);
        },
        addFocus:(evt,flav_id,prod_id)=>{
            evt.preventDefault();
            $('.flavor_'+prod_id).removeClass('flavor_active');
            $('#flavor_'+flav_id+'_'+prod_id).addClass('flavor_active');
            $('#flavor_'+prod_id).val(flav_id);
        }
    }

    home_js.load();

    function addTocart(ser_id) {
        //Utils.showLoading("Adding to Cart ...");
        var qty = $('#qty_'+ser_id).val();
        if (qty == 0) {
            swal("Select Correct Quantity", "", "error");
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: "json",
            url: "{{ route('ajaxaddcart.post') }}",
            data: {
                prod_id: ser_id,
                prod_qty: qty
            },
            success: function (data) {
                //Utils.hideLoading();
                console.log(data);
                if (data.res == 'SUCCESS') {
                    // $('#btn_layer_'+idx).html(data.data);
         //           swal("Item added to the cart");
                    // alert("Item added to the cart");
                    console.log("Item added to the cart");
                    // showCartPopup();
                    showAddedItem(ser_id,qty)
                    // window.location.href = "{{url('/cart')}}"
                } else {
                    console.log(data);
                    // swal(data.error, "", "error");
                    alert(data.error);
                }
            }
        });
    }
</script>
@endsection
