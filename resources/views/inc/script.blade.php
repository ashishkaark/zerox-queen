
<script src="{{asset("js/jquery/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("js/jquery-easing/jquery.easing.min.js")}}"></script>
<script src="{{asset('/js/frontjs/isotope-layout/isotope.pkgd.min.js')}}"></script>
<!-- <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/counterup/counterup.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>
<script src="vendor/aos/aos.js"></script> -->
<script src="{{asset('/js/frontjs/main.js')}}"></script>
<script src="{{asset('/js/frontjs/cart-popup.js')}}"></script>
<script>
    function act_login(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            dataType: "json",
            url:"{{ route('ajaxlogin.post') }}",
            // data:{email:$('#txtemail').val(),password:$('#txtpwd').val()},
            data:{email:'t@qp.com',password:"123456"},
            success:function(data){
                //Utils.hideLoading();
                console.log(data);
                if(data.res == 'SUCCESS'){
                    // $('#btn_layer_'+idx).html(data.data);
                    location.reload();
    
                }else{
                    console.log(data);
                    alert(data.error);
                    // console.log(data.error);
                }
            }
        });
    }
    </script>