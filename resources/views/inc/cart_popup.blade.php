<style>
    /* Modal */
.content .sub_total {
    font-size: 17px;
    color: #60554C;
}
.content .total {
    color: #4A4A4A;
    font-size: 34px;
    font-weight: 700;
}
.modal-dialog {
    margin: 0 !important;
    max-width: none !important;
}

#exampleModalLabel {
    text-align: center;
    width: 100%;
    color: #4C4A4A;
    font-weight: 700;
    font-size: 22px;
}

.modal-body .row .col-md-4 {
    display: flex;
    align-items: center;
    width: 100%;
}

@media only screen and (max-width: 480px) {
    #exampleModalLabel {
        font-size: 20px;
    }
    .content h5 {
        font-size: 17px !important;
    }
    /* #checkout {
        font-size: 9px;
    } */
    .modal-body .row .col-md-4 {
        align-items: flex-start !important;
        padding: 2px;
    }
}

.modal-body .row {
    margin-left: 8px !important;
    margin-right: 20px !important;
}

.modal-body .row .col-md-4 .btn {
    width: 100%;
    border-radius: 0 !important;
}

#edit {
    border: 2px solid #D9341A;
}

.order_imgBX img {
    width: 90%;
}

#shopping {
    background: #D9341A;
    border: 1px solid white;
}

.model-dialog .modal-content .modal-body {
    padding: 0px 32px;
}

.modal-content {
    width: 900px !important;
}

.modal.fade.show {
    display: flex !important;
    justify-content: center;
    align-items: center;
}

#stotalcardbody {
    justify-content: center;
    align-items: center;
    height: 100%;
    display: flex;
    padding: 40px 10px;
    background: rgb(127 135 148 / 8%);
}

@media (max-width: 1010px) {
    .modal-content {
        max-width: 343px !important;
    }
    .modal-body .row .col-md-4 {
        flex-wrap: wrap;
    }
    .modal-content {
        flex-wrap: wrap;
    }
    .imgBX img {
        width: 100px;
    }
    .content h5 {
        font-size: 13px;
    }
    .modal-body .row .col-md-4 {
        align-items: flex-start !important;
    }
    /* .col-md-4 .card-body {
        
    } */
    #stotalcardbody{
        justify-content: center;
    }
    .col-md-4 .btn {
        font-size: 12px;
    }
}
</style>
<div class="modal fade" id="cartModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Total Items in your cart - <span id="items_in_cart">2</span></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body" id="cartModalbodyorg">
                <div id="cartModalbody">

                </div>
                {{-- <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="imgBX">
                            <img src="img/order.png" alt="">
                        </div>

                    </div>
                    <div class="col-md-4 col-6">
                        <div class="content">
                            <h5>CBD Temple Gummies</h5>
                            <div class="price">
                                $19.99

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-12 " id="bg">
                        <div class="card-body" id="stotalcardbody">
                            <div class="content">
                                <h5>Total</h5>
                                <div class="total">
                                    $ 39.98
                                </div>
                                <p>Total <span>2</span> Items in your car</p>
                            </div>
                        </div>


                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-md-4" style="margin-top:1rem;">
                        <div class="btn bg-dark text-white" id="checkout">
                            <a href="{{url('/checkout')}}" style="color:white !important;">Proceed to Checkout</a>
                        </div>
                    </div>
                    <div class="col-md-4 " style="margin-top:1rem;">
                        <div class="btn border-red " id="edit">
                            <a href="{{url('/cart')}}" style="color:#D9341A !important;">View or edit your cart</a> 
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top:1rem;">
                        <div class="btn bg-red text-white border-white" id="shopping" onclick="$('#cartModal1').modal('hide');">
                            Continue Shopping
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    function showCartPopup(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: "json",
            url: "{{ route('ajaxgetCart.post') }}",
            data: {},
            success: function (data) {
                console.log(data);
                if(data.res == 'SUCCESS'){
                    $('#cartModalbody').html(data.data)
                    $('#cartModal1').modal('show');
                    $('#cart_qty_itms').text(data.qty);
                    $('#cart_qty_itms_mob').text(data.qty);
                    $('#items_in_cart').text(data.qty);

                }else{
                    alert(data.error);
                }
            }
        });
    }

    function showAddedItem(prod_id,qty){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: "json",
            url: "{{ route('ajaxgetAddedItemCart.post') }}",
            data: {
                prod_id: prod_id,
                prod_qty: qty
            },
            success: function (data) {
                console.log(data);
                if(data.res == 'SUCCESS'){
                    $('#cartModalbody').html(data.data)
                    $('#cartModal1').modal('show');
                    $('#cart_qty_itms').text(data.qty);
                    $('#cart_qty_itms_mob').text(data.qty);
                    $('#items_in_cart').text(data.qty);

                }else{
                    alert(data.error);
                }
            }
        });
    }

</script> 