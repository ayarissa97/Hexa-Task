@extends('Front.layouts.home')
@section('content')




    <!-- team section start -->
    <div class="team_section layout_padding">
      <div class="container">
        <h1 class="choose_taital"><span>Our </span> <img src="{{ asset('/front/images/icon-1.png')}}"> <span style="color: #1f1f1f">Team</span></h1>
        <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <div class="team_section_2 layout_padding">
          <div class="container">
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="{{ asset('/front/images/img-4.png')}}"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="{{ asset('/front/images/fb-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/twitter-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/linkden-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/instagram-icon.png')}}"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">Consectetur</h2>
                  <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <div class="col-sm-7">
                  <h2 class="consectetur_text_1">magna aliqua</h2>
                  <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                </div>
                <div class="col-sm-5">
                  <div class="image_4"><img src="{{ asset('/front/images/img-5.png')}}"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="{{ asset('/front/images/fb-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/twitter-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/linkden-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/instagram-icon.png')}}"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="{{ asset('/front/images/img-6.png')}}"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="{{ asset('/front/images/fb-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/twitter-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/linkden-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/instagram-icon.png')}}"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">Aonsectetur</h2>
                  <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <div class="col-sm-7">
                  <h2 class="consectetur_text_1">Nonsectetur</h2>
                  <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                </div>
                <div class="col-sm-5">
                  <div class="image_4"><img src="{{ asset('/front/images/img-7.png')}}"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="{{ asset('/front/images/fb-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/twitter-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/linkden-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{ asset('/front/images/instagram-icon.png')}}"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team section start -->
    <!-- Newsletter section start -->
    <div class="newsletter_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="newsletter_text">Newsletter</h1>
            <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p>
          </div>
          <div class="col-md-6">
            <div class="mail_bt_main">
              <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
              <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Newsletter section end -->
    @endsection
