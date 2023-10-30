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

  <!-- CONTENT GRID -->
  <div class="content-grid">

    <!-- GRID -->
    <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="img/banner/overview-icon.png" alt="overview-icon">
            <!-- /SECTION BANNER ICON -->
        
            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">Profile not found!</p>
            <!-- /SECTION BANNER TITLE -->
        
            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text">Mabe it was deleted?</p>
            <!-- /SECTION BANNER TEXT -->
        </div>
        <!-- /SECTION BANNER -->
        <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->


@include('partials/footer')