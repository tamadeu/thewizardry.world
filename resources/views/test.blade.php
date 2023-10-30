@include('partials/head')



  <!-- NAVIGATION WIDGET -->
  @include('partials/sidebar_mini')
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
  @include('partials/sidebar')
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
  @include('partials/mobile_nav')
  <!-- /NAVIGATION WIDGET -->

  <!-- CHAT WIDGET -->
  @include('partials/chat_sidebar')
  <!-- /CHAT WIDGET -->

  <!-- CHAT WIDGET -->
  @include('partials/chat_message')
  <!-- /CHAT WIDGET -->

  <!-- HEADER -->
  @include('partials/header')
  <!-- /HEADER -->

  <!-- FLOATY BAR -->
  @include('partials/floaty_bar')
  <!-- /FLOATY BAR -->

  <div class="content-grid">
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="img/banner/overview-icon.png" alt="overview-icon">
        <!-- /SECTION BANNER ICON -->
    
        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Tests</p>
        <!-- /SECTION BANNER TITLE -->
    
        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text"></p>
        <!-- /SECTION BANNER TEXT -->
      </div>
      <!-- /SECTION BANNER -->
  </div>
  <div class="content-grid">
    {{ json_encode($test) }}
  </div>
  @include('partials/footer')