 <!--header section start -->
 <div class="header_section background_bg">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="{{route('index')}}"><img src="{{ asset('/front/images/logo.png')}}"></a></div>
          </div>
          <div class="col-md-9">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                  <div class="menu_main">
                    <div class="padding_left0"><a href="#">Register</a>
                    <span class="padding_left0"><a href="#">Login</a></span></div>
                  </div>
                  <div class="shoping_bag"><img src="{{ asset('/front/images/search-icon.png')}}"></div>
                </div>
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="{{route('index')}}">Home</a>
                  <a href="{{route('services')}}">Services</a>
                  <a href="{{route('about')}}">About</a>
                  <a href="{{route('choose')}}">Choose</a>
                  <a href="{{route('team')}}">Team</a>
                  <a href="{{route('contact')}}">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="{{ asset('/front/images/toggle-icon.png')}}" class="toggle_menu"></span>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- header section end -->
