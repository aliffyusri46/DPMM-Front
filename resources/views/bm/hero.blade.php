<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <div id="hero-carousel" data-bs-interval="5000" class="carousel carousel-fade" data-bs-ride="carousel" style="width: 100vw;">

    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url('frontend/assets/img/slider/slide1.png'); background-size: cover; background-position: center;">
      <div class="carousel-overlay"></div> <!-- Overlay div added here -->
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Kempipinan Tertinggi DPMM 2023-2026</h2>
        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid...</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tekan Sini</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item" style="background-image: url('frontend/assets/img/slider/slide7.jpg'); background-size: cover; background-position: center;">
      <div class="carousel-overlay"></div> <!-- Overlay div added here -->
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Berita Semasa</h2>
        <p class="animate__animated animate__fadeInUp">Rangkuman kenyataan media yang mengupas isu semasa dan survival perniagaan Melayu</p>
        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Lagi</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item" style="background-image: url('frontend/assets/img/slider/slide3.jpg'); background-size: cover; background-position: center;">
      <div class="carousel-overlay"></div> <!-- Overlay div added here -->
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Sertai Kelab DPMM</h2>
        <p class="animate__animated animate__fadeInUp">Sertai kelab DPMM sekarang untuk mendapatkan pelbagai faedah menarik disamping perkongsian pengalaman dan perniagaan</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sertai Sekarang!</a>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-item" style="background-image: url('frontend/assets/img/slider/english.jpg'); background-size: cover; background-position: center;">
      <div class="carousel-overlay"></div> <!-- Overlay div added here -->
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">English Version</h2>
        <p class="animate__animated animate__fadeInUp">Have access to our website in English</p>
        <a href="#" id="slide4LanguageButton" class="btn-get-started animate__animated animate__fadeInUp scrollto">Click Here</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>

  </div>
  
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3"></use>
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0"></use>
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9"></use>
    </g>
  </svg>

</section><!-- /Hero Section -->

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const languageToggle = document.getElementById('languageToggle');
    const slide4LanguageButton = document.getElementById('slide4LanguageButton');
  
    // Check if user preferred Malay and is on Malay page
    const isMalayPage = window.location.href.includes('bm.index');
    const savedLanguage = localStorage.getItem('preferredLanguage');
  
    if (isMalayPage || savedLanguage === 'Malay') {
      languageToggle.checked = true;
    }
  
    // Function to switch language
    function switchLanguage(toMalay) {
      if (toMalay) {
        localStorage.setItem('preferredLanguage', 'Malay');
        window.location.href = "{{ route('bm.index') }}"; // Use Laravel route for BM page
      } else {
        localStorage.setItem('preferredLanguage', 'English');
        window.location.href = "{{ route('index') }}"; // Use Laravel route for English page
      }
    }
  
    // Event listener for toggle button
    languageToggle.addEventListener('change', () => {
      switchLanguage(languageToggle.checked);
    });
  
    // Event listener for Slide 4 button
    slide4LanguageButton.addEventListener('click', (event) => {
      event.preventDefault();
      const toMalay = !languageToggle.checked; // Toggle language
      languageToggle.checked = toMalay; // Update the toggle button
      switchLanguage(toMalay);
    });
  });
  </script>