<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AARK Technology Hub">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Queen and Pharoh Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("css/sb-admin-2.css")}}" rel="stylesheet">
    <link href="{{ asset('css/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-custom.css') }}" rel="stylesheet">
    
    @yield('custom_css')

</head>


<body id="page-top">

    <div id="wrapper">
        @include('inc.adm_sidebar')
        
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('inc.adm_topbar')

                @yield('content')
            </div>
            @include('inc.adm_footer')
        </div>
       
    </div>
    @include('inc.adm_script')

    @yield('custom_script') 



</body>

</html>
