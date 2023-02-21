<div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Contact </span> <img src="{{ asset('/front/images/icon-2.png')}}"> <span>Us</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('/front/images/map-icon.png')}}"><span class="padding_left_15">Locations</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('/front/images/call-icon.png')}}"><span class="padding_left_15">+71 9876543210</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="{{ asset('/front/images/map-icon.png')}}"><span class="padding_left_15">demo@gmail.com</span></a></div>
        </div>
      </div>
      <div class="contact_section">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
         @endif
        <div class="row">
          <div class="col-md-6">
            <div class="mail_section">
              <form action="{{route('contact.store')}}" method="post">
                  @csrf
              <input type="text" class="email_text" placeholder="Name" name="name">
              @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
              <input type="email" class="email_text" placeholder="Email" name="email">
              @if ($errors->has('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
              <input type="text" class="email_text" placeholder="Phone Number" name="phone">
              @if ($errors->has('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
              <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="message"></textarea>
              @if ($errors->has('message'))
              <span class="text-danger">{{$errors->first('message')}}</span>
              @endif
            </div>
            <div class="send_bt">
                <button type="s" class="btn btn-success btn-submit">Submit</button>
              </div>
          </form>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="{{ asset('/front/images/fb-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('/front/images/twitter-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('/front/images/linkden-icon1.png')}}"></a></li>
                <li><a href="#"><img src="{{ asset('/front/images/instagram-icon1.png')}}"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
