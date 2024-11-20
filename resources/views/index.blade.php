<!DOCTYPE html>
<html lang="en">

@include('head') <!-- Include the head here -->

<body class="index-page">

@include('header')

  <main class="main">
    
    @include('hero')

    @include('about')

    @include('register')

    @include('news')

    @include('video')

    @include('leadership')

    @include('partner')



  </main>

  <!-- Include the footer here -->
  @include('footer') 

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