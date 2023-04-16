<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>RSECORE</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">

  <!-- theme meta -->
  <meta name="theme-name" content="kross" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/themify-icons/themify-icons.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

</head>
<body>



        <!-- Preloader -->


        <!-- Navbar -->
        @include('frontend.layouts.partials.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->



            @yield('content')




        {{-- footer --}}

        @include('frontend.layouts.partials.footer')

<!-- hero area -->

<!-- /contact -->

<!-- footer -->

<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('frontend/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('frontend/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('frontend/plugins/shuffle/shuffle.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('frontend/js/script.js')}}"></script>
@stack('other-scripts')

</body>
</html>
