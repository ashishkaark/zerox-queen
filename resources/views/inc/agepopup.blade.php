<div class="age-popup">
    <div class="box">
        <div class="modal-content" id="content_model">

            <div class="modal-body content_body text-center ">
                <div class="popup_queen ">
                    <img src="images/logo/logo.png" width="90px" class="logo" alt="">
                </div>

                <h5>Queen & Pharaoh</h5>
                <h6>Welcome to Queen & Pharoah</h6>
                <h3>Are you at least 21 years ?</h3>
                {{-- <p>Darn! You're not old enough to use Queen & Pharoah</p> --}}
                <div>
                    <button type="button" class="yes_popup close">Yes</button>

                    <!-- <a href="" class="yes_popup close">Yes</a> -->
                    <a href="#" class="yes_popup closeno">No</a>
                </div>
                <input type="checkbox" checked="checked" />
                <label for="filled-in-box" class="font-weight-bold fs-4">Remeber me for 30 days</label>
                <h4>I confirm that this is not a shared device</h4>
                <h2>By accessing this site, you accept the Terms of Use and Privacy Policy.</h2>
            </div>

        </div>
    </div>
</div>

<style>
    .modal.show .modal-dialog {
    margin-top: 14rem;
}

#content_model {
    background: rgb(255 255 255 / 95%) !important;
    /* opacity: 0.9; */
}

#content_model .content_body h5 {
    color: #B0882D;
}

#content_model .content_body h6 {
    font-size: 16px;
    font-weight: 400;
}

#content_model .content_body p {
    font-family: Roboto;
  font-size: 18px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.56;
  letter-spacing: normal;
  text-align: center;
  color: #d9341a;
}

#content_model .content_body h4 {
    font-size: 15px;
    font-weight: 700;
}

#content_model .content_body h3 {
    font-size: 21px;
    font-weight: bold;
    padding: 8px 0px;
}

#content_model .content_body h2 {
    opacity: 0.7;
    font-family: Roboto;
    font-size: 11px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.6;
    letter-spacing: 0.23px;
    text-align: center;
    color: #000;
}

#content_model .content_body div {
    margin: 20px 0px;
    display: flex;
    justify-content: center;
}

.no_popup {
    color: #d9341a;
    border: 2px solid grey;
    padding: 8px 48px !important;
    background-color: #d9341a;
    margin-left: 17px;
    font-size: 16px;
    color: white;
}

.no_popup:hover {
    color: white;
    border: 2px solid grey;
    padding: 8px 48px !important;
    border: 2px solid #d9341a !important;
    background-color: #d9341a;
    font-weight: 400;
}

.yes_popup {
    color: black;
    border: 2px solid grey !important;
    padding: 8px 48px !important;
    /* font-weight: 600; */
    z-index: 900;
    font-size: 16px;
    margin: 0px 10px;
    opacity: 0.7;
}

.yes_popup:hover {
    color: white;
    border: 2px solid #d9341a !important;
    background-color: #d9341a;
    opacity: 1 !important;
    font-weight: 400;
}

@media only screen and (max-width: 600px) {
    #content_model .content_body div .submit_popup {
        padding: 10px 40px;
    }
    #content_model .content_body p {
        color: #d9341a;
        padding: 0px 40px;
    }
}

.age-popup {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1099;
    background-color: rgba(0, 0, 0, 0.6);
    visibility: hidden;
    opacity: 0;
    transition: all 1s ease;
}

.age-popup.show {
    visibility: visible;
    opacity: 1;
}

.age-popup .box {
    /* background-color: #ffffff; */
    width: 750px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-wrap: wrap;
    opacity: 0;
    margin-left: 50px;
    transition: all 1s ease;
}

.age-popup.show .box {
    opacity: 1;
    margin-left: 0;
    width: 40%;
}

@keyframes zoomInOut {
    0%,
    100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

@media(max-width: 767px) {
    .age-popup .box {
        width: 85% !important;
    }
}
</style>

<script>
    const agePopup = document.querySelector(".age-popup");
    const close = document.querySelector(".close");
    const closeno = document.querySelector(".closeno");
    window.addEventListener("load", function () {
        @if(!session()->has('qp-21-older'))
        showPopup();
        @endif
        // setTimeout(function(){
        //   agePopup.classList.add("show");
        // },5000)

    })

    function showPopup() {
        const timeLimit = 1 // seconds;
        let i = 0;
        const timer = setInterval(function () {
            i++;
            if (i == timeLimit) {
                clearInterval(timer);
                agePopup.classList.add("show");
            }
            console.log(i)
        }, 1000);
    }

    close.addEventListener("click", function () {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: "json",
            url: "{{ route('ajaxsetAge.post') }}",
            data: {},
            success: function (data) {
                agePopup.classList.remove("show");
                location.reload();
            }
        });

    });

    closeno.addEventListener("click", function () {
        agePopup.classList.remove("show");
        window.location.href = "https://google.com";
    })
</script>