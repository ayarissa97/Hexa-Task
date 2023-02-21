<div class="header_section">
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
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
        @foreach ($settings as $setting)
      <div class="row">
        <div class="col-sm-5">
          <h1 class="banner_taital">{{$setting->getTranslation('title', 'en')}}</h1>
          <h1 class="banner_taital_1">{{$setting->getTranslation('text', 'en')}}</h1>
          <p class="banner_text">{{$setting->getTranslation('desc', 'en')}}</p>
          <div class="contact_bt"><a href="contact.html">CONTACT US<span class="contact_padding"><img src="{{ asset('/front/images/contact-icon.png')}}"></span></a></div>
        </div>
        <div class="col-sm-2">
          <div class="play_icon"><a href="#"><img src="{{ asset('/front/images/play-icon.png')}}"></a></div>
        </div>
        <div class="col-sm-5">
          <div><img src="{{ asset('/front/images/img-1.png')}}" class="image_1"></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- banner section end -->
  </div>
