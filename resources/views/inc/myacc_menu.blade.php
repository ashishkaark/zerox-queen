<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link @if($show == '1') active @endif" id="v-pills-home-tab"  href="{{url('/customer/detail')}}"
        role="tab" aria-controls="v-pills-home" aria-selected="true">My Details</a>
    
   
    <a class="nav-link @if($show == '2') active @endif" id="v-pills-profile-tab"  href="{{url('/customer/myorder')}}"
        role="tab" aria-controls="v-pills-profile" aria-selected="false">My Orders</a>
    
    <a class="nav-link @if($show == '3') active @endif" id="v-pills-messages-tab"  href="{{url('/customer/editprofile')}}"
        role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit Profile</a>
    
    <a class="nav-link @if($show == '4') active @endif" id="v-pills-settings-tab"  href="{{url('/customer/change_password')}}"
        role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</a>
    
</div>