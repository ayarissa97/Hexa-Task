<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Capiclean</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/front/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@yield('style')
</head>

<body>
    <!--header section start -->
    @if (Route::is('index'))
    @include('Front.layouts.partials.header')
    @else
    @include('Front.layouts.partials.nav')


    @endif
        <!-- banner section start -->

        @yield('content')
    <!-- footer section start -->
    @if (Route::is('index'))
    @include('Front.layouts.partials.footer')
    @endif


  <div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright {{ date('Y') }} All Right Reserved By <a href="{{route('index')}}">Free html
                Templates</a></p>
    </div>
</div>
@include('sweetalert::alert')


    <!-- footer section end -->
    <!-- copyright section start -->

    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('/front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/front/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/front/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('/front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/front/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('/front/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
        @yield('script')

</body>

</html>
