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
            <h2 class="section-title">Notifications</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->

          <!-- SECTION HEADER ACTIONS -->
          <div class="section-header-actions">
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action">Mark all as Read</p>
            <!-- /SECTION HEADER ACTION -->
      
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action">Settings</p>
            <!-- /SECTION HEADER ACTION -->
          </div>
          <!-- /SECTION HEADER ACTIONS -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- NOTIFICATION BOX LIST -->
        <div class="notification-box-list">
          @foreach($notifications->list as $notification)
            <!-- NOTIFICATION BOX -->
            <div class="notification-box {{ ($notification->status == "Unread") ? 'unread' : '' }}">
              <!-- USER STATUS -->
              <div class="user-status notification">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="/{{ '@'.$notification->user1Username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $notification->user1Avatar) }}"></div>
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
                      <p class="user-avatar-badge-text">{{ $notification->user1Level }}</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $notification->user1Name }}</a> {{ $notification->reactionVerb }} <img class="reaction" src="/img/reaction/{{ $notification->reactionAlt }}.png" alt="reaction-{{ $notification->reactionAlt }}"> on your <a class="highlighted" href="profile-timeline.html">{{ $notification->postType }}</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">2 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
            
                <!-- USER STATUS ICON -->
                <div class="user-status-icon">
                  <!-- ICON COMMENT -->
                  <svg class="icon-comment">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /ICON COMMENT -->
                </div>
                <!-- /USER STATUS ICON -->
              </div>
              <!-- /USER STATUS -->
          
              <!-- NOTIFICATION BOX CLOSE BUTTON -->
              <div class="notification-box-close-button">
                <!-- NOTIFICATION BOX CLOSE BUTTON ICON -->
                <svg class="notification-box-close-button-icon icon-cross">
                  <use xlink:href="#svg-cross"></use>
                </svg>
                <!-- /NOTIFICATION BOX CLOSE BUTTON ICON -->
              </div>
              <!-- /NOTIFICATION BOX CLOSE BUTTON -->
          
              <!-- MARK UNREAD BUTTON -->
              <div class="mark-{{ ($notification->status == "Unread") ? 'read' : 'unread' }}-button"></div>
              <!-- /MARK UNREAD BUTTON -->
            </div>
            <!-- /NOTIFICATION BOX -->
          @endforeach
        </div>
        <!-- /NOTIFICATION BOX LIST -->

        <!-- LOADER BARS -->
        <div class="loader-bars">
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
          <div class="loader-bar"></div>
        </div>
        <!-- /LOADER BARS -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

@include('partials/footer')