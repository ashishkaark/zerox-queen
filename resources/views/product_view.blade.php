@extends('layouts.home')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/product.css')}}">
<div class="container  padding_product">
    <div class="row ">
        <div class="col-md-6">

            <div class="slider">
                <div class="preview ">
                    <img src="{{asset($prod_obj['prod_img'])}}" id="imagebox " class="img-fluid " alt=" ">
                </div>


            </div>
        </div>
        <div class="col-md-6 ">
            <h3 class="brand  ">
                {{$prod_obj['prod_name']}}
            </h3>
            <div class="content ">
                <div class="astha_print">

                    <p class="eight_key pl-1" style="color:#000001">
                        <b>${{$prod_obj['prod_price']}}</b>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <!-- <h3 class="brand" style="font-size: 17px;font-weight: 700;">Size</h3> -->
                                <!-- 
                                <p class="eight_key ">
                                    4000 Seeds
                                </p> -->

                            </div>

                        
                        </div>

                    </div>

                </div>

                
                <div class="py-3">
                    <h3 class="brand" style="font-size: 18px;font-weight: 700;color:#E12B2B;">Sold by</h3>

                    <p class="eight_key ">
                        Sanskar Store
                    </p>

                </div>

                <div class="py-3">

                    <a href="#" class="Buy-Now">Add to Cart </a>


                </div>

                <div>

                    <h5 class="brand py-3" style="color:#E12B2B;">Description</h5>
                    {{$prod_obj['prod_desc']}}
                    
                    <h5 class="eight_key" style="color:#E12B2B;font-weight: 800;font-family: 'Rozha One', Sans-serif;">Ingredients</h5>
                    <p class="perfect_key">
                        <div class="ml-4 pt-0 ">
                        <li style="color: black">Sweet Almond Oil</li>  
                        <li style="color: black">Sesame Oil, Certified</li>
                         <li style="color: black">Organic Essential</li>
                         <li style="color: black">Lavender and Lavandin</li>
                          <li style="color: black">Pure Cannabis Oil </li>
                           <li style="color: black">Cannabidiol (CBD) Rich Hemp Extract</li>
                        </div>

                    </p>
                    <hr style="border-top:1px solid red;width:100%;"> 
                    <!-- <h5 class="eight_key">Season: KHARIF AND RABI</h5>  -->
                </div>
            </div>

        </div>
        <div>        
                <h6 style="color:#E12B2B;font-weight: 800;font-family: 'Rozha One', Sans-serif;font-size:23px;" >RETURN & REFUND POLICY</h6>
            <p>I’m a return and refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way to build trust and reassure your customers that they can buy with confidence.</p>
        </div>
        <hr style="border-top:1px solid red;width:100%;"> 

        <div>
                <h6 style="color:#E12B2B;font-weight: 800;font-family: 'Rozha One', Sans-serif;font-size:23px;">SHIPPING INFO</h6>
                <p>I’m a shipping policy. I’m a great place to add more information about your shipping methods, packaging and cost. Providing straightforward information about your shipping policy is a great way to build trust and reassure your customers that they can buy from you with confidence.</p>
        </div>
    </div>
</div>
@endsection