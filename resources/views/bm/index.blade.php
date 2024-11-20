<!DOCTYPE html>
<html lang="en">

@include('bm/head') <!-- Include the head here -->

<body class="index-page">

@include('bm/header')

  <main class="main">
    
    @include('bm/hero')

    @include('bm/about')

    @include('bm/register')

    @include('bm/news')

    @include('bm/video')

    @include('bm/leadership')

    @include('bm/partner')



  </main>

  <!-- Include the footer here -->
  @include('bm/footer') 

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
<script src="{{url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{url('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{url('frontend/assets/js/main.js')}}"></script>


</body>

</html>