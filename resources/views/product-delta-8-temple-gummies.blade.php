@extends('layouts.frontlayout')
@section('content')

<link rel="stylesheet" href="{{asset('css/frontcss/product_ver2.css')}}">
<div class="product_buy">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- End Header -->
                <section class="slider_section pb-0">
                    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
                        <ul class="carousel-indicators carausal_padd">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="first-slide img-fluid" src="{{asset($prod_obj['prod_img']['prod_img1'])}}"
                                    style="height: auto !important;" alt="First slide">

                            </div>
                            <div class="carousel-item ">
                                <img class="first-slide img-fluid" src="{{asset($prod_obj['prod_img']['prod_img2'])}}"
                                    style="height: auto !important;" alt="First slide">

                            </div>
                            <div class="carousel-item">
                                <img class="first-slide img-fluid" src="{{asset($prod_obj['prod_img']['prod_img3'])}}"
                                    style="height: auto !important;" alt="First slide">

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
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 back_queen_Pharaoh">
                <div class="buy_product px-2" id="buy_product">
                    <h4 class="pt-4 mb-0">Queen & Pharaoh {{$prod_obj['prod_name']}}
                    </h4>
                    <!-- <h5 class="only_ca">(*Only Available in CA)</h5> -->
                    <div class="star d-flex align-items-center">
                        <img src="{{asset('images/icon/Stars.svg')}}" alt="">
                        <!-- <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> -->
                        <p class="pt-3 pl-3" style="color: black;">50 Reviews</p>
                    </div>
                    <h3 class="price py-3">$ {{$prod_obj['prod_price']}}</h3>
                    {{-- <div class="flavours d-flex justify-content-between align-items-center text-center">
                        <div class="">
                            <img src="{{asset('images/svg/blueberry-01.svg')}}" alt="">
                    <p>Blueberry</p>
                </div>
                <div>
                    <img src="{{asset('images/svg/Straberry-01.svg')}}" alt="">

                    <p>Strawberry</p>
                </div>
                <div>
                    <img src="{{asset('images/svg/lemmon-01.svg')}}" alt="">

                    <p>Lemon
                    </p>
                </div>
            </div> --}}
            <div class="fields d-flex flex-column">
                {{-- <select id="product-select" name="product-select">
                        <option value="volvo">25 mg of Delta -8, 10 Gummies</option>
                        <option value="saab">20 mg of Delta -8, 10 Gummies</option>
                        <option value="fiat">15 mg of Delta -8, 10 Gummies</option>
                        <option value="audi">10 mg of Delta -8, 10 Gummies</option>
                    </select> --}}
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number minus_btn" onclick="updateQty('-')" 
                            data-type="minus" data-field="quant[1]">
                            <img src="{{asset('images/icon/minus.svg')}}"  alt="">
                        </button>
                    </span>
                    <input type="text" name="quant[1]" id="txtqty" class="form-control input-number minus_btn text-center" value="1"
                        min="1" max="10">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" onclick="updateQty('+')">
                            <img src="{{asset('images/icon/plus.svg')}}" alt="">

                        </button>
                    </span>
                </div>
            </div>
            <!-- <div class="text-center py-3 justify-content-center d-flex">
                        <a href="#" class="btn add_to_cart text-center shadow">ADD TO CART</a>
                    </div> -->

            <div class="product_detail py-4">

                <p> <span class="mb-4  description"><b>DESCRIPTION:</b></span> {!! nl2br($prod_obj['prod_desc']) !!}
                    
                </p>
                <p><span class="description"><b>INGREDIENTS:</b></span>{!! nl2br($prod_obj['prod_ingredients']) !!}</p>
            </div>
            <div class="text-center my-3 d-flex justify-content-center">
                <a href="#" onclick="addTocart({{$prod_obj['prod_id']}})" class="btn add_to_carts text-center">ADD TO CART</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<!-- <img src="images/svg/slider_down.svg" alt="" width="100%"> -->




<div class="bg-white pt-5">
    <div class="container">
        <div class="experience my-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="experience_text">
                        <div class="px-2">
                            {{-- @if ($prod_obj['prod_seo'] == "cbd-massage-oil")
                            <h3 class="title">Sensual Touch
                                for Rejuvenation </h3>

                            @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")

                            <h3 class="title">Smooth and Easy
                            </h3>

                            @else
                            <h3 class="title">{{$prod_obj['section1']['title'] ?? ''}} </h3>
                            @endif --}}
                            <h3 class="title">{!! $prod_obj['section1']['title'] ?? '' !!} </h3>
                            {{-- <h1 style="color: rgb(32, 30, 30);">The Higher Senses</h1> --}}

                            {{-- @if ($prod_obj['prod_seo'] == 'cbd-massage-oil')
                            <h5 class="py-3 subtitle">
                                “Touch and feel your bodies”
                            </h5>
                            @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")
                            <h5 class="py-3 subtitle">
                                “Anointed with oils”
                                <br /><br />
                                Silkly. Soft. Smooth

                            </h5>

                            @else
                            <h5 class="py-3 subtitle">{{$prod_obj['section1']['subtitle'] ?? ''}}
                            </h5>
                            @endif --}}
                            <h5 class="py-3 subtitle">{!! $prod_obj['section1']['subtitle'] ?? '' !!}
                            </h5>
                        </div>

                        <div class="body_masajh">
                            {{-- <img src="{{asset('images/products/Experience_TheHigherSenses_01.png')}}"
                            class="img-fluid higher_senses" alt=""> --}}
                            @if ($prod_obj['prod_seo'] == "cbd-massage-oil")
                            <img src="{{asset('images/products/Sensual-Touch.png')}}" class="img-fluid higher_senses"
                                alt="">

                            @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")

                            <img src="{{asset('images/products/smooth-easy.png')}}" class="img-fluid higher_senses"
                                alt="">

                            @elseif ($prod_obj['prod_seo'] == "cbd-gummies" || $prod_obj['prod_seo'] == "cbd-cbg-temple-vape")

                            <img src="{{asset($prod_obj['section1']['img'])}}" class="img-fluid higher_senses"
                                    alt="">
                            @else
                            <img src="{{asset('images/products/flame.png')}}" class="img-fluid higher_senses" alt="">
                            @endif
                            {{-- <img src="{{asset('images/products/flame.png')}}"
                            class="img-fluid higher_senses" alt=""> --}}

                        </div>
                        <!-- <h3 class="py-3 px-2 fs-3 shall_feel " style="font-weight: 900;color: black;">Subtle.Warming.Elevating
                        </h3> -->
                        <!-- <p class="journey_paragraph px-2">The gods know that most arousal oils are too hot or irritating to most users, and they gave us a formulation that again is simple and subtle.</p> -->

                        {{-- @if ($prod_obj['prod_seo'] == 'cbd-massage-oil')
                        <p class="journey_paragraph px-2 pt-2">
                            We simply ask you to spray some oils on your hands and slowly
                            spread it all over yours or your lovers body and rub it gently and
                            deeply into your skin. We think you will fell the benefits our oils as it penetrates and
                            helps to relax and rejuvenate. We know the gods have steered us right. Enjoy solo or with
                            friends and
                            lovers-there is nothing better that giving or being the recipient of a sensual massage using
                            only the best massage oil that the gods have given us.
                            <br /><br />
                            To feel and touch-it is a gift from the gods to you”- Isis
                            <br /><br />
                            Our Book of spells will guide our fellow travelers as they explore their senses.
                            <br /><br />
                            Enjoy our delicious delta-8 gummies and vapes with our
                            intimacy oils for a heightened full body experience!


                        </p>
                        @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")
                        <p class="journey_paragraph px-2 pt-2">
                            Our personal lubricant is another easy to use product that is simple and easy to use, and
                            users have been raving about it’s simple formulation and how pleasant and effective it is.
                            Use it as a personal lubricant, or with friends and lovers-it is good for all shapes and
                            sizes, colors and genders. Our universe is big, so the gods gave us an intimacy pill that is
                            high quality that can be used by everyone everywhere.
                            <br /><br />
                            “To know love, you must love yourself first: Then giving love is made easier with an
                            energized spirit.” -Osiris and Isis
                            <br /><br />
                            Our Book of spells will guide our fellow travelers as they explore their senses.


                        </p>


                        @else
                        <p class="journey_paragraph px-2 pt-2">
                            {!! nl2br($prod_obj['section1']['desc']) !!}
                        </p>
                        @endif --}}

                        <p class="journey_paragraph px-2 pt-2">
                            {!! nl2br($prod_obj['section1']['desc']) !!}

                            {{-- The gods know that most arousal oils are too hot or irritating to most users, and they gave
                            us a formulation that again is simple and subtle.
                            Our oil is infused with a high concentration of CBD and with the hints of peppermint we look
                            to subtly warm and arouse without irritation or botanicals that harm or irritate. The result
                            is an oil that is unisex, and warming without being intrusive…enough to warm and arouse to
                            bring you waves of enjoyment and pleasure. --}}

                        </p>

                        <!-- <p class="font-weight-bold px-2">To feel and touch-it is a gift from the gods to you”- Isis</p>
                        <p class="font-weight-bold px-2">Our Book of spells will guide our fellow travelers as they explore their senses.</p> -->

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 " style="align-self:center;">
                    {{-- <img src="{{asset('images/products/Experience_TheHigherSenses_01.png')}}" class="img-fluid
                    higher_senses"
                    id="desktop_show" alt=""> --}}

                    @if ($prod_obj['prod_seo'] == "cbd-massage-oil")
                    <img src="{{asset('images/products/Sensual-Touch.png')}}" class="img-fluid higher_senses"
                        id="desktop_show" alt="">

                    @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")

                    <img src="{{asset('images/products/smooth-easy.png')}}" class="img-fluid higher_senses"
                        id="desktop_show" alt="">
                    @elseif ($prod_obj['prod_seo'] == "cbd-gummies" || $prod_obj['prod_seo'] == "cbd-cbg-temple-vape")

                    <img src="{{asset($prod_obj['section1']['img'])}}" class="img-fluid higher_senses"
                    id="desktop_show"      alt="">
                    @else
                    <img src="{{asset('images/products/flame.png')}}" class="img-fluid higher_senses" id="desktop_show"
                        alt="">
                    @endif
                    {{-- <img src="{{asset('images/products/flame.png')}}" class="img-fluid higher_senses"
                    id="desktop_show" alt=""> --}}
                </div>
            </div>



        </div>
        {{-- @if($prod_obj['prod_seo'] == 'cbd-aroual-oil') --}}
        <div class="row ">
            <div class="col-md-6 ">
                <div class="img-box-1" style="width: 485px;">
                    @if ($prod_obj['prod_seo'] == "cbd-gummies"  || $prod_obj['prod_seo'] == "cbd-cbg-temple-vape")
                    <img src="{{asset($prod_obj['section2_uplifting']['img'])}}" class="img-fluid" id="desktop_view_value"
                    alt="">
                    @else
                    <img src="{{asset('images/products/Image04.png')}}" class="img-fluid" id="desktop_view_value"
                        alt="">
                    @endif
                </div>

            </div>
            <div class="col-md-6 p-0">

                <div class="experience my-5">
                    <div class="experience_detail px-2">
                        <h1 class="title">{{$prod_obj['section2_uplifting']['title'] }}
                            {{-- A Relaxing Yet Uplifting Experience" --}}
                        </h1>
                        @if ($prod_obj['prod_seo'] == "cbd-gummies" || $prod_obj['prod_seo'] == "cbd-cbg-temple-vape")
                        <img src="{{asset($prod_obj['section2_uplifting']['img'])}}" class="img-fluid" alt=""
                            id="mobile_veiw_product_value">
                        @else
                        <img src="{{asset('images/products/Image04.png')}}" class="img-fluid" alt=""
                            id="mobile_veiw_product_value">
                        @endif
                        <p class="py-3 desc">
                            {!! nl2br($prod_obj['section2_uplifting']['desc']) !!}

                            {{-- The mild euphoria is gradual and users report the feeling that the are
                            relaxed, yet energetic and clear headed. The body high has been described as a deep
                            relaxation and a mild "warming electric wave of energy that flows throughout." --}}
                        </p>
                        {{-- <h6 class="desc-bold">Enjoy our delicious delta-8 gummies and vapes with our intimacy oils for a
                            heightened
                            full body experience!</h6>
                        <h6 class="py-3 desc-bold">Our Book of spells will guide our fellow travelers as they explore
                            their
                            senses.</h6> --}}

                    </div>


                    <div class="product_values d-flex justify-content-around my-5 px-2">
                        <div class="card bg-white">
                            <div class=" text-center">
                                <img src="{{asset('images/svg/Non_gmo.svg')}}" class="img-fluid" alt="">
                            </div>


                        </div>
                        <div class="card text-center">
                            <div class=" text-center">

                                <img src="{{asset('images/svg/pure-100.svg')}}" class="img-fluid" alt="">
                            </div>



                        </div>
                        <div class="card  text-center">
                            <div class=" text-center">

                                <img src="{{asset('images/svg/Natural-100.svg')}}" class="img-fluid" alt="">
                            </div>



                        </div>
                        <div class="card  text-center">
                            <div class=" text-center">

                                <img src="{{asset('images/svg/tested-100.svg')}}" class="img-fluid" alt="">
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>
        {{-- @endif --}}


    </div>

</div>
<div style="background-color: #F9F9F9;">
    <div class="container">

        <div class="The_Gods_Ingredients experience py-5">
            <div class="experience-bg row">
                <div class="col-lg-7 col-md-7 p-0">
                    <div class="experience_text py-5">
                        <h1 class="px-2 GodIngredient"
                            style="font-size: 48px;font-weight: bold;letter-spacing: 1.12px;">{{$prod_obj['section3_god_ingredients']['title'] }}</h1>

                        {{-- @if ($prod_obj['prod_seo'] == "cbd-massage-oil")
                        <h3 class="px-2 pb-4">“Why we have given you this!"
                        </h3>

                        @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")

                        <h3 class="px-2 pb-4">
                            “These ingredients you will use!”
                        </h3>

                        @else
                        <h3 class="px-2 pb-4">{{$prod_obj['section3_god_ingredients']['title'] }}
                            
                        </h3>
                        @endif --}}
                        <h3 class="px-2 pb-4">{{$prod_obj['section3_god_ingredients']['subtitle'] }}
                            {{-- “Why we have given you this!" --}}
                        </h3>



                        {{-- <p class="px-2 pb-4">"What you shall use!" -Quality and Ingredients</p> --}}
                        <div class="body_masajh">
                            <img src="{{asset('images/products/Bitmap5.png')}}" class="img-fluid higher_senses" alt="">

                        </div>
                        
                        <p class="desc px-2">
                            {!! nl2br($prod_obj['section3_god_ingredients']['desc']) !!}
                            {{-- It is Important to rejuvenate and relax. As the gods so taught us about
                            rebirth and rejuvenation, we too must learn to use our infused oils for all they have to
                            give. Our Queen & Pharaoh Massage Oil has a higher concentration of CBD and is mixed with
                            organic natural botanicals to help it’s absorption into the skin without interfering with
                            its effectiveness. Again the gods gave us a formation that is simple, highly concentrated
                            with CBD, and complimentary botanicals to give you what we consider one of the best CBD
                            massage oils on the market.:

                            CBD has become much more is well known to many but as a reminder- CBD has been shown to have
                            benefits that may have: --}}
                        </p>
                        <!-- <p class="font-weight-bold px-2">CBD has become much more is well known to many but as a reminder- CBD has been shown to have benefits that may have:
                        </p> -->

                    </div>
                </div>
                <div class="col-lg-5 col-md-5 align-self-center" style="">

                    @if ($prod_obj['prod_seo'] == "cbd-massage-oil")
                    <img src="{{asset('images/products/Drops_image.png')}}" class="img-fluid" alt="">

                    @elseif ($prod_obj['prod_seo'] == "cbd-lubricant-oil")

                    <img src="{{asset('images/products/god-Ingrdient-lubricant.png')}}" class="img-fluid" alt="">

                    @else
                    <img src="{{asset('images/products/Drops_image.png')}}" class="img-fluid" alt="">
                    @endif


                    {{-- <img src="{{asset('images/products/Drops_image.png')}}" class="img-fluid" alt=""> --}}
                </div>
            </div>


            <div class="row Potential">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="card  text-center border-0">
                        <card-header>
                            <img src="{{asset('images/svg/backpain.svg')}}" alt="">
                        </card-header>
                        <div class="card-body Potential_detail">
                            Potential to <br> reduce pain

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="card text-center border-0">
                        <card-header>
                            <img src="{{asset('images/svg/Potential_to_Reduce_nausea.svg')}}" alt="">
                        </card-header>
                        <div class="card-body Potential_detail">
                            Potential Reduce <br> anxiety


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="card text-center border-0">
                        <card-header>
                            <img src="{{asset('images/svg/Potential_Reduce_anxiety.svg')}}" alt="">
                        </card-header>
                        <div class="card-body Potential_detail">
                            Potential to <br> Reduce nausea


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="card text-center border-0">
                        <card-header>
                            <img src="{{asset('images/svg/Potential-for-improving-cognitive-function.svg')}}" alt="">
                        </card-header>
                        <div class="card-body Potential_detail">
                            Potential for improving <br> cognitive function

                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
</div>
<div style="background-color: #F9F9F9;">
    <div class="container">
        <div class="experience ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 remove-padding-mob">
                    <div class="Endocannabinoid_System">
                        <div class="Endocannabinoid_System_detail py-5 px-3">
                            <h1 class="py-3 End_title" style="">{!! $prod_obj['section4_endocannabinoid_left']['lefttitle'] !!}
                                {{-- Endocannabinoid <br> System --}}
                            </h1>
                            <p>
                                {{ $prod_obj['section4_endocannabinoid_left']['leftsubtitle']}}
                                {{-- The Endocannabinoid system contains of two receptors, called CB1 and CB2. these
                                receptors are found on cell surfaces and impact various biological processes. --}}
                            </p>
                            <div class="CB d-flex justify-content-around align-items-center">
                                <h1 class="End_lbl">
                                    {{ $prod_obj['section4_endocannabinoid_left']['leftlist_title']}}
                                    {{-- CB1 --}}
                                </h1>
                                <p class="pl-3">
                                    {{ $prod_obj['section4_endocannabinoid_left']['leftlist_subtitle']}}
                                    {{-- Located in the brain, central nervous system, and many other parts
                                    of the body. --}}
                                </p>
                            </div>
                            <div class="CB d-flex justify-content-around align-items-center">
                                <h1 class="End_lbl">
                                    
                                    {{ $prod_obj['section4_endocannabinoid_left']['list2title']}}
                                    {{-- CB2 --}}
                                </h1>
                                <p class="pl-3">
                                    {{ $prod_obj['section4_endocannabinoid_left']['list2subtitle']}}
                                    {{-- Found throughout the body on cells associated with our immune
                                    system. --}}
                                </p>
                            </div>
                            <p class="font-weight-bold pt-4">
                                {{ $prod_obj['section4_endocannabinoid_left']['leftdesc']}}
                                {{-- CBD interacts with CB1 and CB2 receptors for many
                                effects still being studied. --}}
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="my-5">
                        <div class="d-flex">
                            <img src="{{asset('images/svg/Human01.svg')}}" class="px-1 cb_one" alt="">
                            <div class="d-flex flex-column cbi_padding">
                                <div class="Receptors_CB">
                                    <h1 class="End_lbl2">{{ $prod_obj['section4_endocannabinoid_left']['right_title']}}</h1>
                                    <p>{{ $prod_obj['section4_endocannabinoid_left']['right_subtitle']}}</p>
                                    <p class="font-weight-bold End_desc">{{ $prod_obj['section4_endocannabinoid_left']['right_desc']}}</p>
                                </div>
                                <div class="Receptors_CB">
                                    <h1 class="End_lbl2">{{ $prod_obj['section4_endocannabinoid_left']['rightlist2title']}}</h1>
                                    <p>{{ $prod_obj['section4_endocannabinoid_left']['rightlist2subtitle']}}</p>
                                    <p class="font-weight-bold End_desc">{{ $prod_obj['section4_endocannabinoid_left']['rightlistdesc']}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>





    </div>
</div>
<div style="background-color: white;padding: 40px 0px;">
    <div class="container standards">

        <div class="text-center align-content-center pb-4">
            <img src="{{asset('images/svg/quality.svg')}}" class="img-fluid w-20" alt="">
        </div>
        <div>
            <h3 class="title">
                {!!$prod_obj['section5_standards']['title'] ?? ""!!}
                {{-- The <span class="font-weight-bold">Queen &
                    Pharaoh</span> Standard --}}
            </h3>
            <h1 class="subtitle">
                {!!$prod_obj['section5_standards']['subtitle'] ?? ""!!}
                {{-- “What you shall use!”-Quality and
                Ingredients” --}}
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <img src="{{asset($prod_obj['prod_img']['prod_img1'])}}" class="higher_senses" style="padding: 5rem;"
                    id="desktop_show" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="experience_text bg-white">

                    <div class=" pt-5 text-center" id="show_mobile">
                        <img src="{{asset($prod_obj['prod_img']['prod_img1'])}}" class="img-fluid higher_senses" alt="">

                    </div>

                    <p class="journey_paragraph py-4">
                        {!!$prod_obj['section5_standards']['top_desc'] ?? ""!!}
                        {{-- Our arousal oil is an all plant based natural oil with a
                        subtle warming that will help increase pleasure, and help you and your friends, lovers and
                        partners reach sexual satisfaction in your journey towards enlightenment. Pump,
                        share, use liberally and enjoy. --}}
                    </p>
                    <div class="list">
                        <ul>
                            <li>{!!$prod_obj['section5_standards']['list_item_1'] ?? ""!!}
                                {{-- Strong Concentration: CBD derived from US grown hemp-with 500mg per 60ml bottle --}}
                            </li>
                            <li>
                                {!!$prod_obj['section5_standards']['list_item_2'] ?? ""!!}
                                {{-- Simple formulation-Not full of fillers or unnecessary ingredients…just a simple
                                formula designed with complimentary 2 complimentary botanicals. --}}

                            </li>
                            <li>{!!$prod_obj['section5_standards']['list_item_3'] ?? ""!!}
                                {{-- Always third party tested to ensure quality of the highest order</li> --}}
                        </ul>
                    </div>
                    <p class="journey_paragraph font-weight-bold">
                        {!! nl2br($prod_obj['section5_standards']['bottom_desc']) !!}
                        {{-- Our Book of spells will help guide our fellow
                        travelers as they
                        explore their senses. Our universal lubricant is always a great addition.
                    </p>
                    <p class="journey_paragraph font-weight-bold">This is an oil based arousal oil and lubricant. It is
                        not
                        recommended for use with latex condoms. --}}
                    </p>

                </div>
            </div>

        </div>


        <div id="accordion" class="my-5 px-3">
            <h1 class="" style="color: black;">FAQ</h1>
            <div class="card my-2">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne">
                            {{$prod_obj['prod_ques1']}} <i class="fas fa-plus float-right "></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p> {!! nl2br($prod_obj['prod_ans1']) !!} </p>
                    </div>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            {{$prod_obj['prod_ques2']}} <i class="fas fa-plus float-right "></i>

                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        {!! nl2br($prod_obj['prod_ans2']) !!}
                    </div>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            {{$prod_obj['prod_ques3']}} <i class="fas fa-plus float-right "></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        {!! nl2br($prod_obj['prod_ans3']) !!}
                    </div>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseThree">
                            {{$prod_obj['prod_ques4']}} <i class="fas fa-plus float-right "></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        {!! nl2br($prod_obj['prod_ans4']) !!}
                    </div>
                </div>
            </div>
            {{-- <div class="card my-2">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            {{$prod_obj['prod_ques5']}}
                            <i class="fas fa-plus float-right "></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        {{$prod_obj['prod_ans5']}}
                    </div>
                </div>
            </div> --}}


        </div>

    </div>
</div>

{{-- <div class="reviews" style="background-color: #ECE9E9;">
    <div class="container">
        <div class="Delta-8-Gummies-Reviews px-2">
            <div class="Delta-8-Gummies-Reviews-detail pt-5">
                <h4>{{$prod_obj['prod_name']}} Reviews</h4>
                <div class="star_iconss">
                    <div class="star_reviews">
                        <img src="{{asset('images/icon/Stars.svg')}}" class="img-fluid" alt="">

                        <p class="" style="color: black;">50 Reviews</p>
                    </div>
                    <button class="btn">Write a Reviews</button>
                </div>

                <div class="Filter-Reviews">
                    <h4>Filter Reviews</h4>
                    <div class="fields_ratings">
                        <select id="rating-select" name="product-select">
                            <option value="volvo">Ratings</option>
                            <option value="saab">Gummies</option>
                            <option value="fiat">Ratings</option>
                            <option value="audi">Gummies</option>
                        </select>
                        <select id="rating-select" name="product-select">
                            <option value="volvo">Images & Videos</option>
                            <option value="saab">Gummies</option>
                            <option value="fiat">Images & Videos</option>
                            <option value="audi">Gummies</option>
                        </select>
                    </div>
                    <div class="card my-3 ">
                        <div class="card-body d-flex">
                            <div>
                                <img src="{{asset('images/svg/Avatar_Reviews.svg')}}" alt="">
                            </div>
                            <div class="px-2">
                                <div class="d-flex justify-content-between">
                                    <h6>Name</h6>
                                    <p>20/07/2021</p>
                                </div>
                                <div class="text-left">
                                    <img src="{{asset('images/icon/Stars.svg')}}" alt="">

                                </div>
                                <div class="text-left pt-2">
                                    <h6>Lorem Ipsum</h6>
                                    <p class="small">Lorem Ipsum is simply dummy text of the prinLng and typeseRng
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                        the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card my-3">
                        <div class="card-body d-flex">
                            <div>
                                <img src="{{asset('images/svg/Avatar_Reviews.svg')}}" alt="">
                            </div>
                            <div class="px-2">
                                <div class="d-flex justify-content-between">
                                    <h6>Name</h6>
                                    <p>20/07/2021</p>
                                </div>
                                <div class="text-left">
                                    <img src="{{asset('images/icon/Stars.svg')}}" alt="">

                                </div>
                                <div class="text-left pt-2">
                                    <h6>Lorem Ipsum</h6>
                                    <p class="small">Lorem Ipsum is simply dummy text of the prinLng and typeseRng
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                        the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card my-3">
                        <div class="card-body d-flex">
                            <div>
                                <img src="{{asset('images/svg/Avatar_Reviews.svg')}}" alt="">
                            </div>
                            <div class="px-2">
                                <div class="d-flex justify-content-between">
                                    <h6>Name</h6>
                                    <p>20/07/2021</p>
                                </div>
                                <div class="text-left">
                                    <img src="{{asset('images/icon/Stars.svg')}}" alt="">

                                </div>
                                <div class="text-left pt-2">
                                    <h6>Lorem Ipsum</h6>
                                    <p class="small">Lorem Ipsum is simply dummy text of the prinLng and typeseRng
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                        the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="more-option text-center py-3">

        <img src="{{asset('images/svg/Dropdown.svg')}}" alt="">

    </div> --}}
</div>

@endsection

@section("custom_scripts")
<script>
    function updateQty(act){
        const input = $('#txtqty');
        if(act === '+'){
            var value = input.val();
            value++;
            input.val(value);
        }else if(act === '-'){
            var value = input.val();
            if (value > 1) {
                value--;
            }
            input.val(value);
        }
    }

    function addTocart(ser_id) {
        //Utils.showLoading("Adding to Cart ...");
        var qty = $('#txtqty').val();
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
                    showCartPopup();
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
