@extends('layouts.home')
@section("custom_style")
<style>
    .field {
  padding: 10px 20px 11px;
  /* background-color: #7488aa; */
  /* border-radius: 20px; */
  border:2px solid #D9341A;
  width: 100%;
}
</style>

@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/frontcss/cart.css')}}">
<div class="container">
    <div class="margin_register">


        @php
        $stripe_key = 'pk_test_51IxWUUSBSTi2WDzYNaVlyJkHwwnnImZnd32ozDDXTn1xvFsmKDx97gxSICAnipCQJzyVmjnK8Mg8KS4ZLXLaN0Cv00ShNpL2Rj';
        @endphp   

        <div class="card-body">


            <button class="back_btn"><i class="fas fa-arrow-left "></i> Back </button>
<form id="paymentFrm" action="{{url('/handle-payment')}}" method="POST">
    @csrf
            <div class="row justify-content-center  py-2">
                
                <div class="col-lg-5 col-md-6 p-0">
                    <p class="account_det">Address Details</p>


                    <div class="form-group">
                        <label>CARD NUMBER</label>
                        <div id="card_number" class="field empty"></div>
                    </div>

                    <div class="row">
                        
                            <div class="form-group">
                                <label>EXPIRY DATE</label>
                                <div id="card_expiry" class="field"></div>
                            </div>
                        
                            <div class="form-group">
                                <label>CVC CODE</label>
                                <div id="card_cvc" class="field"></div>
                            </div>
                        
                    </div>



                    <div class="form-group">
                        <label for="#">Enter name</label><br>
                        <input type="text" name="fname" placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="#">Enter email</label><br>

                        <input type="text" name="fname">

                    </div>
                    <div class="form-group">
                        <label for="#">Enter phone Number</label><br>

                        <input type="text" name="fname">

                    </div>
                    <div class="form-group">
                        <label for="#">Enter address</label><br>
                        <textarea name="" rows="4" cols="20"></textarea>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6">
                    <p class="account_det">Order Summary</p>

                    <div class="card my-3">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-7 left_vendor">
                                        <p>1 x </p>
                                        <p>Amazing Seed for round fruit </p>

                                    </div>
                                    <div class="col-md-5 right_vendor">
                                        <p>8,000 </p>

                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-7 left_vendor">
                                        <p>2 x </p>
                                        <p>Amazing Seed for round fruit </p>

                                    </div>
                                    <div class="col-md-5 right_vendor">
                                        <p>5,00</p>

                                    </div>
                                </div>
                                <hr>

                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-7 left_vendor">
                                        <p>1 x </p>
                                        <p>Amazing Seed for round fruit </p>

                                    </div>
                                    <div class="col-md-5 right_vendor">
                                        <p>3,000 </p>

                                    </div>
                                </div>
                                <hr>

                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-6 left_vendor">


                                    </div>
                                    <div class="col-md-6  right_vendor">
                                        <p>Sub Total: 11,500 </p>

                                    </div>
                                </div>


                            </li>
                        </ul>
                    </div>

                    <div class="justify-content-center  text-center" style="padding-top:3.2rem;">
                        <button type="submit" class="place_order">Place Your Order</button>

                    </div>
                </div>
            </div>
        </form>



        </div>


    </div>

</div>

@endsection

@section("custom_scripts")

<script src="https://js.stripe.com/v3/"></script>
  <script>
    // Create an instance of the Stripe object
    // Set your publishable API key
    var stripe = Stripe('{{ $stripe_key }}', { locale: 'en' });
    
    // Create an instance of elements
    var elements = stripe.elements();
    
    var style = {
        // base: {
        //     fontWeight: 400,
        //     fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        //     fontSize: '16px',
        //     lineHeight: '1.4',
        //     color: '#555',
        //     backgroundColor: '#fff',
        //     '::placeholder': {
        //         color: '#888',
        //     },
        // },
        invalid: {
            color: '#eb1c26',
        }
    };
    
    var cardElement = elements.create('cardNumber', {
        'style': style
    });
    cardElement.mount('#card_number');
    
    var exp = elements.create('cardExpiry', {
        'style': style
    });
    exp.mount('#card_expiry');
    
    var cvc = elements.create('cardCvc', {
        'style': style
    });
    cvc.mount('#card_cvc');
    
    // Validate input of the card elements
    var resultContainer = document.getElementById('paymentResponse');
    cardElement.addEventListener('change', function(event) {
        if (event.error) {
            resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
        } else {
            resultContainer.innerHTML = '';
        }
    });
    
    // Get payment form element
    var form = document.getElementById('paymentFrm');
    
    // Create a token when the form is submitted.
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        createToken();
    });
    
    // Create single-use token to charge the user
    function createToken() {
        stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error
                resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    }
    
    // Callback to handle the response from stripe
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        
        // Submit the form
        form.submit();
    }
    </script>

@endsection