<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- meta -->
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="rony">
    <meta name="csrf-token" content="">
    <meta property="og:image" content="{{ asset('assets/frontend/images/favicon.png') }}">
    <meta property="og:site_name" content="Blog">
    <meta property="og:title" content="top business news - Blog">
    <meta property="og:url" content="https://blog.com">
    <meta property="og:type" content="article">
    <meta name="description" content="top business news blog.">
    <meta name="keywords" content="blog, business">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>

<body>
    <!-- ======================= Header Start  ============================ -->
    @include('layouts.partials.header')
    <!-- ======================= Header End  ============================ -->

    <!-- ======================= Blog Start  ============================ -->

    @yield('content')

    <!-- ======================= Blog End  ============================ -->

    <!-- ======================= Footer Start  ========================== -->
    @include('layouts.partials.footer')
    <!-- ======================= Footer End  ============================ -->

    <!-- scroll to top -->
    <div class="scrollToTop">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Js -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/intlTelInput-jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
