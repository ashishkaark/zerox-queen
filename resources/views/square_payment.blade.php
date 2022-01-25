<html>
@php
    $upper_case_environment = "SANDBOX";
@endphp
<head>
  <title>My Payment Flow</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- link to the Square web payment SDK library -->
  {{-- <script type="text/javascript" src="{{asset('/js/square_payment/square.js')}}"></script> --}}
  <script type="text/javascript" src="https://web.squarecdn.com/v1/square.js"></script>
  <script type="text/javascript">
    window.applicationId = "{{ App\Defines\SquareProdDefines::SQUARE_PROD_APPLICATION_ID }}";
    //   "<?php
    //     echo getenv('SQUARE_APPLICATION_ID');
    //     ?>";
    window.locationId ="{{ App\Defines\SquareProdDefines::SQUARE_PROD_LOCATION_ID }}";
    //   "<?php
    //     echo getenv('SQUARE_LOCATION_ID');
    //     ?>";
    window.currency = "{{ $currency }}";
    // //   "<?php
    // //     echo $location_info->getCurrency();
    // //     ?>";
    window.country = "{{ $country }}";
    //   "<?php
    //     echo $location_info->getCountry();
    //     ?>";
  </script>
  <link rel="stylesheet" type="text/css" href="{{asset('/css/square_payment/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/square_payment/sq-payment.css')}}">
</head>

<body>
  <form class="payment-form" id="fast-checkout">
    <div class="wrapper">
      <div id="apple-pay-button" alt="apple-pay" type="button"></div>
      <div id="google-pay-button" alt="google-pay" type="button"></div>
      <div class="border">
        <span>OR</span>
      </div>
      <div id="ach-wrapper">
        <label for="ach-account-holder-name">Full Name</label>
        <input id="ach-account-holder-name" type="text" placeholder="Jane Doe" name="ach-account-holder-name" autocomplete="name" /><span id="ach-message"></span><button id="ach-button" type="button">Pay with Bank Account</button>

        <div class="border">
          <span>OR</span>
        </div>
      </div>
      <div id="card-container"></div><button id="card-button" type="button">Pay with Card</button>
      <span id="payment-flow-message"></span>
    </div>
  </form>

  <script>
      Url = {
          ajaxpp : "{{ route('ajaxtestprocess.post') }}"
      };
</script>
  <script type="text/javascript" src="{{asset('/js/square_payment/sq-ach.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/square_payment/sq-apple-pay.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/square_payment/sq-card-pay.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/square_payment/sq-google-pay.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/square_payment/sq-payment-flow-org.js')}}"></script>
</body>

</html>