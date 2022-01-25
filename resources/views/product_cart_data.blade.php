@extends('layouts.home')
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/product-cart.css')}}">

<section id="product_detail" class="product_detail">
    <div class="container">
        <table class="table">
            <thead>
                <tr class="row">
                    <th class="col-lg-4 col-md-6">Product Detail</th>
                    <th class="col-lg-4 col-md-2">Quantity</th>
                    <th class="col-lg-2 col-md-2">Price</th>
                    <th class="col-lg-2 col-md-2">Total</th>

                </tr>
            </thead>
            <tbody>
                <tr class="row">
                    <td class="col-lg-4 col-md-6">
                        <div class="card" style="width: 22rem;border: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/products/Asset_6.png" width="100%" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body px-0">
                                        <h6 class="card-title">Tomato Seed</h6>
                                        <p class="card-text m-1" style="font-size:14px">a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">4000 Seeds</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-lg-4 col-md-2 col-6">
                        <div>
                            <div class="quantity-control px-0 " data-quantity="">
                                <button class="quantity-btn" data-quantity-minus=""><i class="fas color_icon fa-minus"></i></button>
                                <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                <button class="quantity-btn" data-quantity-plus="">
                                <i class="fas color_icon fa-plus"></i>
                                </button>
                            </div>
                            <a class="remove_item" href="">Remove Item</a>
                        </div>
                    </td>
                    <td class="col-lg-2 col-md-2 pt-4 col-3 font-weight-bold">$ 4000</td>
                    <td class="col-lg-2 col-md-2 pt-4 col-3 font-weight-bold">$4000</td>
                </tr>
                <tr class="row">
                    <td class="col-lg-4 col-md-6">
                        <div class="card" style="width: 22rem;border: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/products/Asset_5.png" width="100%" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body px-0">
                                        <h6 class="card-title"></h6>
                                        <p class="card-text m-1" style="font-size:14px">a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">4000 Seeds</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-lg-4 col-md-2 col-6">
                        <div>
                            <div class="quantity-control px-0 " data-quantity="">
                                <button class="quantity-btn" data-quantity-minus=""><i class="fas color_icon fa-minus"></i></button>
                                <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                <button class="quantity-btn" data-quantity-plus="">
                                <i class="fas color_icon fa-plus"></i>
                                </button>
                            </div>
                            <a class="remove_item" href="">Remove Item</a>
                        </div>
                    </td>
                    <td class="col-lg-2 col-md-2 pt-4 col-3 font-weight-bold">$ 4000</td>
                    <td class="col-lg-2 col-md-2 pt-4 col-3 font-weight-bold">$4000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="row">
                    <td class="col-lg-4 col-md-6 col-3 "></td>
                    <td class="col-lg-4 col-md-2 col-3 "></td>
                    <td class="col-lg-2 col-md-2 col-3 font-weight-bold">Total:</td>
                    <td class="col-lg-2 col-md-2 col-3 font-weight-bold">$5000</td>

                </tr>
            </tfoot>
        </table>
        <div class="text-center back_button">
            <button class="btn back"><i class="fas fa-arrow-left"></i>  Back to Shopping</button>
            <button class="btn checkout">Checkout</button>
        </div>
    </div>
</section>
@endsection