<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="frontend/assets/img/logo.png" alt="">
      {{-- <h1 class="sitename">Selecao</h1> --}}
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li class="dropdown">
          <a href="#"><span>About DPMM</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
              <li><a href="#about">Overview</a></li>
              <li><a href="#">Direction</a></li>
              <li><a href="#">Vision & Mission</a></li>
              <li><a href="#">Leadership</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#"><span>Service</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
              <li><a href="#">Certificate of Origin</a></li>
              <li><a href="#">APEC Card</a></li>
          </ul>
      </li>
        <li><a href="#news">News & Events</a></li>
        <li><a href="#">Membership</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!--Language Toggle-->
    <div class="language-toggle">
      <label class="switch">
        <input type="checkbox" id="languageToggle">
        <span>English</span>
        <span>Malay</span>
      </label>
    </div>
    </div>

  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
const languageToggle = document.getElementById('languageToggle');

// Check if user preferred Malay and is on Malay page
const isMalayPage = window.location.href.includes('bm.index');
const savedLanguage = localStorage.getItem('preferredLanguage');

if (isMalayPage || savedLanguage === 'Malay') {
  languageToggle.checked = true;
}

// Event listener for toggle button
languageToggle.addEventListener('change', () => {
  if (languageToggle.checked) {
    // Set language to Malay and navigate to Malay page
    localStorage.setItem('preferredLanguage', 'Malay');
    window.location.href = "{{ route('bm.index') }}"; // Use Laravel route for BM page
  } else {
    // Set language to English and navigate back to English page
    localStorage.setItem('preferredLanguage', 'English');
    window.location.href = "{{ route('index') }}"; // Add a route for English page if needed
  }
});
});
</script>