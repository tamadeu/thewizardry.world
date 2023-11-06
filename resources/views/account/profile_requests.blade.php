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
    <!-- SECTION BANNER -->
    <div class="section-banner">
      <!-- SECTION BANNER ICON -->
      <img class="section-banner-icon" src="/img/banner/accounthub-icon.png" alt="accounthub-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Account Hub</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">Profile info, messages, settings and much more!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">
      <!-- GRID COLUMN -->
      <div class="account-hub-sidebar">
        <!-- SIDEBAR BOX -->
        @include('account/menu')
        <!-- /SIDEBAR BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="account-hub-content" id="content">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">My Profile</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Friend Requests <span class="highlighted">{{ count($requestsReceived->list) }}</span></h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->

          <!-- SECTION HEADER ACTIONS -->
          <div class="section-header-actions">
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action">Find Friends</p>
            <!-- /SECTION HEADER ACTION -->
      
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action">Settings</p>
            <!-- /SECTION HEADER ACTION -->
          </div>
          <!-- /SECTION HEADER ACTIONS -->
        </div>
        <!-- /SECTION HEADER -->

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

        <!-- NOTIFICATION BOX LIST -->
        <div class="notification-box-list">

          @foreach($requestsReceived->list as $request)
          <!-- NOTIFICATION BOX -->
          <div class="notification-box">
            <!-- USER STATUS -->
            <div class="user-status request">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="/{{ '@'.$request->inviterUsername }}">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $request->inviterAvatar) }}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
              
                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->
              
                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->
              
                  <!-- USER AVATAR BADGE -->
                  <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-22-24"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->
              
                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-dark-16-18"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->
              
                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">{{ $request->inviterLevel }}</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="/{{ '@'.$request->inviterUsername }}">{{ $request->inviterName }}</a></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small-space">6 friends in common</p>
              <!-- /USER STATUS TEXT -->

              <!-- ACTION REQUEST LIST -->
              <div class="action-request-list">
                <!-- ACTION REQUEST -->
                <form action="{{ route('acceptRequest') }}" method="POST">
                  @csrf
                  <input type="hidden" name="friendId" value="{{ $request->inviterId }}" />
                  <input type="hidden" name="requestId" value="{{ $request->id }}" />
                  <button type="submit" class="action-request accept with-text" style="margin-right: 12px;">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->

                    <!-- ACTION REQUEST TEXT -->
                    <span class="action-request-text">Accept Request</span>
                    <!-- /ACTION REQUEST TEXT -->
                  </button>
                </form>
                <!-- /ACTION REQUEST -->

                <!-- ACTION REQUEST -->
                <div class="action-request decline">
                  <!-- ACTION REQUEST ICON -->
                  <svg class="action-request-icon icon-remove-friend">
                    <use xlink:href="#svg-remove-friend"></use>
                  </svg>
                  <!-- /ACTION REQUEST ICON -->
                </div>
                <!-- /ACTION REQUEST -->
              </div>
              <!-- ACTION REQUEST LIST -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /NOTIFICATION BOX -->
          @endforeach

        </div>
        <!-- /NOTIFICATION BOX LIST -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

@include('partials/footer')