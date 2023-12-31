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
      <img class="section-banner-icon" src="img/banner/newsfeed-icon.png" alt="newsfeed-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Newsfeed</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">Check what your friends have been up to!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-6-3 mobile-prefer-content">
      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- PROGRESS ARC SUMMARY -->
          <div class="progress-arc-summary">
            <!-- PROGRESS ARC WRAP -->
            <div class="progress-arc-wrap">
              <!-- PROGRESS ARC -->
              <div class="progress-arc">
                <canvas id="profile-completion-chart"></canvas>
              </div>
              <!-- PROGRESS ARC -->
        
              <!-- PROGRESS ARC INFO -->
              <div class="progress-arc-info">
                <!-- PROGRESS ARC TITLE -->
                <p class="progress-arc-title">59%</p>
                <!-- /PROGRESS ARC TITLE -->
              </div>
              <!-- /PROGRESS ARC INFO -->
            </div>
            <!-- /PROGRESS ARC WRAP -->
        
            <!-- PROGRESS ARC SUMMARY INFO -->
            <div class="progress-arc-summary-info">
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-title">Profile Completion</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
        
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-subtitle">{{ $user->name }}</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
        
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-text">Complete your profile by filling profile info fields, completing quests &amp; unlocking badges</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
            </div>
            <!-- /PROGRESS ARC SUMMARY INFO -->
          </div>
          <!-- /PROGRESS ARC SUMMARY -->
      
          <!-- ACHIEVEMENT STATUS LIST -->
          <div class="achievement-status-list">
            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress">11/30</p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->
      
              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Quests</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->
                
                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">Completed</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->
      
              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="img/badge/completedq-s.png" alt="bdage-completedq-s">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->
      
            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress">22/46</p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->
      
              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Badges</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->
                
                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">Unlocked</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->
      
              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="img/badge/unlocked-badge.png" alt="bdage-unlocked-badge">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->
          </div>
          <!-- /ACHIEVEMENT STATUS LIST -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX CONTROLS -->
          <div class="widget-box-controls">
            <!-- SLIDER CONTROLS -->
            <div id="badge-stat-slider-controls" class="slider-controls">
              <!-- SLIDER CONTROL -->
              <div class="slider-control left">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->

              <!-- SLIDER CONTROL -->
              <div class="slider-control right">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
          </div>
          <!-- /WIDGET BOX CONTROLS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Featured Badges</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- WIDGET BOX CONTENT SLIDER -->
            <div id="badge-stat-slider-items" class="widget-box-content-slider">
              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- BADGE ITEM STAT -->
                <div class="badge-item-stat void">
                  <!-- TEXT STICKER -->
                  <p class="text-sticker">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    20 Exp
                  </p>
                  <!-- /TEXT STICKER -->

                  <!-- BADGE ITEM STAT IMAGE -->
                  <img class="badge-item-stat-image" src="img/badge/uexp-b.png" alt="badge-uexp-b">
                  <!-- /BADGE ITEM STAT IMAGE -->

                  <!-- BADGE ITEM STAT TITLE -->
                  <p class="badge-item-stat-title">Universe Explorer</p>
                  <!-- /BADGE ITEM STAT TITLE -->

                  <!-- BADGE ITEM STAT TEXT -->
                  <p class="badge-item-stat-text">Joined and posted on 20 different groups</p>
                  <!-- /BADGE ITEM STAT TEXT -->

                  <!-- PROGRESS STAT -->
                  <div class="progress-stat medium">
                    <!-- PROGRESS STAT BAR -->
                    <div id="badge-uexp" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->

                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /BADGE ITEM STAT -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->

              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- BADGE ITEM STAT -->
                <div class="badge-item-stat void">
                  <!-- TEXT STICKER -->
                  <p class="text-sticker">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    40 Exp
                  </p>
                  <!-- /TEXT STICKER -->

                  <!-- BADGE ITEM STAT IMAGE -->
                  <img class="badge-item-stat-image" src="img/badge/verifieds-b.png" alt="badge-verifieds-b">
                  <!-- /BADGE ITEM STAT IMAGE -->

                  <!-- BADGE ITEM STAT TITLE -->
                  <p class="badge-item-stat-title">Verified Streamer</p>
                  <!-- /BADGE ITEM STAT TITLE -->

                  <!-- BADGE ITEM STAT TEXT -->
                  <p class="badge-item-stat-text">Has linked a stream that was verified by the staff</p>
                  <!-- /BADGE ITEM STAT TEXT -->

                  <!-- PROGRESS STAT -->
                  <div class="progress-stat medium">
                    <!-- PROGRESS STAT BAR -->
                    <div id="badge-verifieds" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->

                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /BADGE ITEM STAT -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->

              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- BADGE ITEM STAT -->
                <div class="badge-item-stat void">
                  <!-- TEXT STICKER -->
                  <p class="text-sticker">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    40 Exp
                  </p>
                  <!-- /TEXT STICKER -->

                  <!-- BADGE ITEM STAT IMAGE -->
                  <img class="badge-item-stat-image" src="img/badge/qconq-b.png" alt="badge-qconq-b">
                  <!-- /BADGE ITEM STAT IMAGE -->

                  <!-- BADGE ITEM STAT TITLE -->
                  <p class="badge-item-stat-title">Quest Conqueror</p>
                  <!-- /BADGE ITEM STAT TITLE -->

                  <!-- BADGE ITEM STAT TEXT -->
                  <p class="badge-item-stat-text">Succesfully completed at least 10 quests at 100%</p>
                  <!-- /BADGE ITEM STAT TEXT -->

                  <!-- PROGRESS STAT -->
                  <div class="progress-stat medium">
                    <!-- PROGRESS STAT BAR -->
                    <div id="badge-qconq" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->

                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /BADGE ITEM STAT -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->
            </div>
            <!-- /WIDGET BOX CONTENT SLIDER -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->

              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Members</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FILTERS -->
            <div class="filters">
              <!-- FILTER -->
              <p class="filter">Newest</p>
              <!-- /FILTER -->

              <!-- FILTER -->
              <p class="filter active">Popular</p>
              <!-- /FILTER -->

              <!-- FILTER -->
              <p class="filter">Active</p>
              <!-- /FILTER -->
            </div>
            <!-- /FILTERS -->

            <!-- USER STATUS LIST -->
            <div class="user-status-list">
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                      <p class="user-avatar-badge-text">26</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">24.5K profile views</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->

              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                      <p class="user-avatar-badge-text">16</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">20.1K profile views</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->

              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
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
                      <p class="user-avatar-badge-text">19</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Rosie Sakura</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">19.7K profile views</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->

              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
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
                      <p class="user-avatar-badge-text">22</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Peter Stark</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">16.5K profile views</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->

              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
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
                      <p class="user-avatar-badge-text">6</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Bearded Wonder</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">9.8K profile views</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-add-friend">
                      <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /USER STATUS LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- BANNER PROMO -->
        <a class="banner-promo" href="https://themeforest.net/user/odin_design" target="_blank">
          <img src="img/banner/banner-promo.jpg" alt="banner-promo">
        </a>
        <!-- /BANNER PROMO -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Open Quests</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- QUEST PREVIEW LIST -->
            <div class="quest-preview-list">
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <!-- QUEST PREVIEW INFO -->
                <div class="quest-preview-info">
                  <!-- QUEST PREVIEW IMAGE -->
                  <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s">
                  <!-- /QUEST PREVIEW IMAGE -->
            
                  <!-- QUEST PREVIEW TITLE -->
                  <p class="quest-preview-title">Nothing to hide</p>
                  <!-- /QUEST PREVIEW TITLE -->
            
                  <!-- QUEST PREVIEW TEXT -->
                  <p class="quest-preview-text">You have completed all your profile information fields</p>
                  <!-- /QUEST PREVIEW TEXT -->
                </div>
                <!-- /QUEST PREVIEW INFO -->
            
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-nth" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->
      
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <!-- QUEST PREVIEW INFO -->
                <div class="quest-preview-info">
                  <!-- QUEST PREVIEW IMAGE -->
                  <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s">
                  <!-- /QUEST PREVIEW IMAGE -->
            
                  <!-- QUEST PREVIEW TITLE -->
                  <p class="quest-preview-title">Social King</p>
                  <!-- /QUEST PREVIEW TITLE -->
            
                  <!-- QUEST PREVIEW TEXT -->
                  <p class="quest-preview-text">You have linked at least 8 social networks to your profile</p>
                  <!-- /QUEST PREVIEW TEXT -->
                </div>
                <!-- /QUEST PREVIEW INFO -->
            
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-sk" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->
      
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <!-- QUEST PREVIEW INFO -->
                <div class="quest-preview-info">
                  <!-- QUEST PREVIEW IMAGE -->
                  <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s">
                  <!-- /QUEST PREVIEW IMAGE -->
            
                  <!-- QUEST PREVIEW TITLE -->
                  <p class="quest-preview-title">Buffed Profile</p>
                  <!-- /QUEST PREVIEW TITLE -->
            
                  <!-- QUEST PREVIEW TEXT -->
                  <p class="quest-preview-text">You have posted every day for at least 30 days in a row</p>
                  <!-- /QUEST PREVIEW TEXT -->
                </div>
                <!-- /QUEST PREVIEW INFO -->
            
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-bp" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->
      
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <!-- QUEST PREVIEW INFO -->
                <div class="quest-preview-info">
                  <!-- QUEST PREVIEW IMAGE -->
                  <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s">
                  <!-- /QUEST PREVIEW IMAGE -->
            
                  <!-- QUEST PREVIEW TITLE -->
                  <p class="quest-preview-title">Hear the People</p>
                  <!-- /QUEST PREVIEW TITLE -->
            
                  <!-- QUEST PREVIEW TEXT -->
                  <p class="quest-preview-text">You have created and posted your first poll</p>
                  <!-- /QUEST PREVIEW TEXT -->
                </div>
                <!-- /QUEST PREVIEW INFO -->
            
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-htp" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->
      
              <!-- QUEST PREVIEW -->
              <div class="quest-preview">
                <!-- QUEST PREVIEW INFO -->
                <div class="quest-preview-info">
                  <!-- QUEST PREVIEW IMAGE -->
                  <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s">
                  <!-- /QUEST PREVIEW IMAGE -->
            
                  <!-- QUEST PREVIEW TITLE -->
                  <p class="quest-preview-title">Store Manager</p>
                  <!-- /QUEST PREVIEW TITLE -->
            
                  <!-- QUEST PREVIEW TEXT -->
                  <p class="quest-preview-text">You have uploaded at least 10 items in your shop</p>
                  <!-- /QUEST PREVIEW TEXT -->
                </div>
                <!-- /QUEST PREVIEW INFO -->
            
                <!-- PROGRESS STAT -->
                <div class="progress-stat">
                  <!-- PROGRESS STAT BAR -->
                  <div id="quest-preview-sm" class="progress-stat-bar"></div>
                  <!-- /PROGRESS STAT BAR -->
                </div>
                <!-- /PROGRESS STAT -->
              </div>
              <!-- /QUEST PREVIEW -->
            </div>
            <!-- /QUEST PREVIEW LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
      
          <!-- WIDGET BOX BUTTON -->
          <a class="widget-box-button button small white" href="quests.html">See all Quests!</a>
          <!-- /WIDGET BOX BUTTON -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <form action="{{ route('post') }}" id="postForm" method="POST">
          @csrf
          <!-- QUICK POST -->
          <div class="quick-post">
            <!-- QUICK POST HEADER -->
            <div class="quick-post-header">
              <!-- OPTION ITEMS -->
              <div class="option-items">
                <!-- OPTION ITEM -->
                <div class="option-item active">
                  <!-- OPTION ITEM ICON -->
                  <svg class="option-item-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                  </svg>
                  <!-- /OPTION ITEM ICON -->
        
                  <!-- OPTION ITEM TITLE -->
                  <p class="option-item-title">Status</p>
                  <!-- /OPTION ITEM TITLE -->
                </div>
                <!-- /OPTION ITEM -->
        
                <!-- OPTION ITEM -->
                <div class="option-item">
                  <!-- OPTION ITEM ICON -->
                  <svg class="option-item-icon icon-blog-posts">
                    <use xlink:href="#svg-blog-posts"></use>
                  </svg>
                  <!-- /OPTION ITEM ICON -->
        
                  <!-- OPTION ITEM TITLE -->
                  <p class="option-item-title">Blog Post</p>
                  <!-- /OPTION ITEM TITLE -->
                </div>
                <!-- /OPTION ITEM -->
        
                <!-- OPTION ITEM -->
                <div class="option-item">
                  <!-- OPTION ITEM ICON -->
                  <svg class="option-item-icon icon-poll">
                    <use xlink:href="#svg-poll"></use>
                  </svg>
                  <!-- /OPTION ITEM ICON -->
        
                  <!-- OPTION ITEM TITLE -->
                  <p class="option-item-title">Poll</p>
                  <!-- /OPTION ITEM TITLE -->
                </div>
                <!-- /OPTION ITEM -->
              </div>
              <!-- /OPTION ITEMS -->
            </div>
            <!-- /QUICK POST HEADER -->

            <!-- QUICK POST BODY -->
            <div class="quick-post-body">
              <!-- FORM -->
              <form class="form">
                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM TEXTAREA -->
                    <div class="form-textarea">
                      <textarea id="quick-post-text" name="content" placeholder="Hi {{ $user->firstName }}! Share your post here..." required></textarea>
                      <div id="suggestions"></div>
                      <!-- FORM TEXTAREA LIMIT TEXT -->
                      <p class="form-textarea-limit-text">998/1000</p>
                      <!-- /FORM TEXTAREA LIMIT TEXT -->
                    </div>
                    <!-- /FORM TEXTAREA -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
              </form>
              <!-- /FORM -->
            </div>
            <!-- /QUICK POST BODY -->
        
            <!-- QUICK POST FOOTER -->
            <div class="quick-post-footer">
              <!-- QUICK POST FOOTER ACTIONS -->
              <div class="quick-post-footer-actions">
                <!-- QUICK POST FOOTER ACTION -->
                <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Photo">
                  <!-- QUICK POST FOOTER ACTION ICON -->
                  <svg class="quick-post-footer-action-icon icon-camera">
                    <use xlink:href="#svg-camera"></use>
                  </svg>
                  <!-- /QUICK POST FOOTER ACTION ICON -->
                </div>
                <!-- /QUICK POST FOOTER ACTION -->
        
                <!-- QUICK POST FOOTER ACTION -->
                <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert GIF">
                  <!-- QUICK POST FOOTER ACTION ICON -->
                  <svg class="quick-post-footer-action-icon icon-gif">
                    <use xlink:href="#svg-gif"></use>
                  </svg>
                  <!-- /QUICK POST FOOTER ACTION ICON -->
                </div>
                <!-- /QUICK POST FOOTER ACTION -->
        
                <!-- QUICK POST FOOTER ACTION -->
                <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Tag">
                  <!-- QUICK POST FOOTER ACTION ICON -->
                  <svg class="quick-post-footer-action-icon icon-tags">
                    <use xlink:href="#svg-tags"></use>
                  </svg>
                  <!-- /QUICK POST FOOTER ACTION ICON -->
                </div>
                <!-- /QUICK POST FOOTER ACTION -->
              </div>
              <!-- /QUICK POST FOOTER ACTIONS -->
        
                <!-- QUICK POST FOOTER ACTIONS -->
                <div class="quick-post-footer-actions">
                  <!-- BUTTON -->
                  <p class="button small void">Discard</p>
                  <!-- /BUTTON -->
        
                  <!-- BUTTON -->
                  <button type="submit" class="button small secondary">Post</button>
                  <!-- /BUTTON -->
                </div>
                <!-- /QUICK POST FOOTER ACTIONS -->
            </div>
            <!-- /QUICK POST FOOTER -->
          </div>
          <!-- /QUICK POST -->
        </form>

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
        <!-- SIMPLE TAB ITEMS -->
        <div class="simple-tab-items">
          <!-- FORM -->
          <form class="form">
            <!-- FORM SELECT -->
            <div class="form-select">
              <select id="newsfeed-filter-category" name="newsfeed_filter_category">
                <option value="0">All Updates</option>
                <option value="1">Mentions</option>
                <option value="2">Friends</option>
                <option value="3">Groups</option>
                <option value="4">Blog Posts</option>
              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
            </div>
            <!-- /FORM SELECT -->
          </form>
          <!-- /FORM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item active">All Updates</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Mentions</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Friends</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Groups</p>
          <!-- /SIMPLE TAB ITEM -->

          <!-- SIMPLE TAB ITEM -->
          <p class="simple-tab-item">Blog Posts</p>
          <!-- /SIMPLE TAB ITEM -->
        </div>
        <!-- /SIMPLE TAB ITEMS -->

        <!-- WIDGET BOX - VIDEO -->

        @for($i = 0; $i < count($posts->list); $i++)
          @php
            $post = $posts->list[$i];
          @endphp
          @if($post->type == "Status Update")
            @include('components/post_types/text')
          @elseif($post->type == "Picture")
            @include('components/post_types/pictures')
          @endif

        @endfor
        <!-- /WIDGET BOX -->

        @if(count($posts->list) > 10)
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
        @endif
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- STATS BOX SLIDER -->
        <div class="stats-box-slider">
          <!-- STATS BOX SLIDER CONTROLS -->
          <div class="stats-box-slider-controls">
            <!-- STATS BOX SLIDER CONTROLS TITLE -->
            <p class="stats-box-slider-controls-title">Stats Box</p>
            <!-- /STATS BOX SLIDER CONTROLS TITLE -->
      
            <!-- SLIDER CONTROLS -->
            <div id="stats-box-slider-controls" class="slider-controls">
              <!-- SLIDER CONTROL -->
              <div class="slider-control negative left">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
      
              <!-- SLIDER CONTROL -->
              <div class="slider-control negative right">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
          </div>
          <!-- /STATS BOX SLIDER CONTROLS -->
          
          <!-- STATS BOX SLIDER ITEMS -->
          <div id="stats-box-slider-items" class="stats-box-slider-items">
            <!-- STATS BOX -->
            <div class="stats-box stat-profile-views">
              <!-- STATS BOX VALUE WRAP -->
              <div class="stats-box-value-wrap">
                <!-- STATS BOX VALUE -->
                <p class="stats-box-value">87.365</p>
                <!-- /STATS BOX VALUE -->
          
                <!-- STATS BOX DIFF -->
                <div class="stats-box-diff">
                  <!-- STATS BOX DIFF ICON -->
                  <div class="stats-box-diff-icon positive">
                    <!-- ICON PLUS SMALL -->
                    <svg class="icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- /ICON PLUS SMALL -->
                  </div>
                  <!-- /STATS BOX DIFF ICON -->
          
                  <!-- STATS BOX DIFF VALUE -->
                  <p class="stats-box-diff-value">3.2%</p>
                  <!-- /STATS BOX DIFF VALUE -->
                </div>
                <!-- /STATS BOX DIFF -->
              </div>
              <!-- /STATS BOX VALUE WRAP -->
          
              <!-- STATS BOX TITLE -->
              <p class="stats-box-title">Profile Views</p>
              <!-- /STATS BOX TITLE -->
          
              <!-- STATS BOX TEXT -->
              <p class="stats-box-text">In the last month</p>
              <!-- /STATS BOX TEXT -->
            </div>
            <!-- /STATS BOX -->
      
            <!-- STATS BOX -->
            <div class="stats-box stat-posts-created">
              <!-- STATS BOX VALUE WRAP -->
              <div class="stats-box-value-wrap">
                <!-- STATS BOX VALUE -->
                <p class="stats-box-value">294</p>
                <!-- /STATS BOX VALUE -->
          
                <!-- STATS BOX DIFF -->
                <div class="stats-box-diff">
                  <!-- STATS BOX DIFF ICON -->
                  <div class="stats-box-diff-icon positive">
                    <!-- ICON PLUS SMALL -->
                    <svg class="icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- /ICON PLUS SMALL -->
                  </div>
                  <!-- /STATS BOX DIFF ICON -->
          
                  <!-- STATS BOX DIFF VALUE -->
                  <p class="stats-box-diff-value">0.4%</p>
                  <!-- /STATS BOX DIFF VALUE -->
                </div>
                <!-- /STATS BOX DIFF -->
              </div>
              <!-- /STATS BOX VALUE WRAP -->
          
              <!-- STATS BOX TITLE -->
              <p class="stats-box-title">Posts Created</p>
              <!-- /STATS BOX TITLE -->
          
              <!-- STATS BOX TEXT -->
              <p class="stats-box-text">In the last month</p>
              <!-- /STATS BOX TEXT -->
            </div>
            <!-- /STATS BOX -->
      
            <!-- STATS BOX -->
            <div class="stats-box stat-reactions-received">
              <!-- STATS BOX VALUE WRAP -->
              <div class="stats-box-value-wrap">
                <!-- STATS BOX VALUE -->
                <p class="stats-box-value">2560</p>
                <!-- /STATS BOX VALUE -->
          
                <!-- STATS BOX DIFF -->
                <div class="stats-box-diff">
                  <!-- STATS BOX DIFF ICON -->
                  <div class="stats-box-diff-icon negative">
                    <!-- ICON MINUS SMALL -->
                    <svg class="icon-minus-small">
                      <use xlink:href="#svg-minus-small"></use>
                    </svg>
                    <!-- /ICON MINUS SMALL -->
                  </div>
                  <!-- /STATS BOX DIFF ICON -->
          
                  <!-- STATS BOX DIFF VALUE -->
                  <p class="stats-box-diff-value">1.8%</p>
                  <!-- /STATS BOX DIFF VALUE -->
                </div>
                <!-- /STATS BOX DIFF -->
              </div>
              <!-- /STATS BOX VALUE WRAP -->
          
              <!-- STATS BOX TITLE -->
              <p class="stats-box-title">Reactions Received</p>
              <!-- /STATS BOX TITLE -->
          
              <!-- STATS BOX TEXT -->
              <p class="stats-box-text">In the last month</p>
              <!-- /STATS BOX TEXT -->
            </div>
            <!-- /STATS BOX -->
      
            <!-- STATS BOX -->
            <div class="stats-box stat-comments-received">
              <!-- STATS BOX VALUE WRAP -->
              <div class="stats-box-value-wrap">
                <!-- STATS BOX VALUE -->
                <p class="stats-box-value">947</p>
                <!-- /STATS BOX VALUE -->
          
                <!-- STATS BOX DIFF -->
                <div class="stats-box-diff">
                  <!-- STATS BOX DIFF ICON -->
                  <div class="stats-box-diff-icon positive">
                    <!-- ICON PLUS SMALL -->
                    <svg class="icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- /ICON PLUS SMALL -->
                  </div>
                  <!-- /STATS BOX DIFF ICON -->
          
                  <!-- STATS BOX DIFF VALUE -->
                  <p class="stats-box-diff-value">4.5%</p>
                  <!-- /STATS BOX DIFF VALUE -->
                </div>
                <!-- /STATS BOX DIFF -->
              </div>
              <!-- /STATS BOX VALUE WRAP -->
          
              <!-- STATS BOX TITLE -->
              <p class="stats-box-title">Comments Received</p>
              <!-- /STATS BOX TITLE -->
          
              <!-- STATS BOX TEXT -->
              <p class="stats-box-text">In the last month</p>
              <!-- /STATS BOX TEXT -->
            </div>
            <!-- /STATS BOX -->
          </div>
          <!-- /STATS BOX SLIDER ITEMS -->
        </div>
        <!-- /STATS BOX SLIDER -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX CONTROLS -->
          <div class="widget-box-controls">
            <!-- SLIDER CONTROLS -->
            <div id="reaction-stat-slider-controls" class="slider-controls">
              <!-- SLIDER CONTROL -->
              <div class="slider-control left">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
      
              <!-- SLIDER CONTROL -->
              <div class="slider-control right">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
          </div>
          <!-- /WIDGET BOX CONTROLS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Reactions Received</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- WIDGET BOX CONTENT SLIDER -->
            <div id="reaction-stat-slider-items" class="widget-box-content-slider">
              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/like.png" alt="reaction-like">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">12.642</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Likes</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
          
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/love.png" alt="reaction-love">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">8.913</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Loves</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
          
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">945</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Dislikes</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
          
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/happy.png" alt="reaction-happy">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">7.034</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Happy</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->
      
              <!-- WIDGET BOX CONTENT SLIDER ITEM -->
              <div class="widget-box-content-slider-item">
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/funny.png" alt="reaction-funny">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">2.356</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Funny</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
          
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/wow.png" alt="reaction-wow">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">5.944</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Wow!</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
          
                <!-- REACTION STATS -->
                <div class="reaction-stats">
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/angry.png" alt="reaction-angry">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">1.706</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Angry</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
          
                  <!-- REACTION STAT -->
                  <div class="reaction-stat">
                    <!-- REACTION STAT IMAGE -->
                    <img class="reaction-stat-image" src="img/reaction/sad.png" alt="reaction-sad">
                    <!-- /REACTION STAT IMAGE -->
          
                    <!-- REACTION STAT TITLE -->
                    <p class="reaction-stat-title">801</p>
                    <!-- /REACTION STAT TITLE -->
          
                    <!-- REACTION STAT TEXT -->
                    <p class="reaction-stat-text">Sad</p>
                    <!-- /REACTION STAT TEXT -->
                  </div>
                  <!-- /REACTION STAT -->
                </div>
                <!-- REACTION STATS -->
              </div>
              <!-- /WIDGET BOX CONTENT SLIDER ITEM -->
            </div>
            <!-- /WIDGET BOX CONTENT SLIDER -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
          <!-- WIDGET BOX CONTROLS -->
          <div class="widget-box-controls">
            <!-- SLIDER CONTROLS -->
            <div class="slider-controls">
              <!-- SLIDER CONTROL -->
              <div class="slider-control left">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
      
              <!-- SLIDER CONTROL -->
              <div class="slider-control right">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
              </div>
              <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
          </div>
          <!-- /WIDGET BOX CONTROLS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">August 2019</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- CALENDAR -->
            <div class="calendar small">
              <!-- CALENDAR WEEK -->
              <div class="calendar-week">
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Sun</span><span class="week-day-long">Sunday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Mon</span><span class="week-day-long">Monday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Tue</span><span class="week-day-long">Tuesday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Wed</span><span class="week-day-long">Wednesday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Thu</span><span class="week-day-long">Thursday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Fri</span><span class="week-day-long">Friday</span></p>
                <!-- /CALENDAR WEEK DAY -->
          
                <!-- CALENDAR WEEK DAY -->
                <p class="calendar-week-day"><span class="week-day-short">Sat</span><span class="week-day-long">Saturday</span></p>
                <!-- /CALENDAR WEEK DAY -->
              </div>
              <!-- /CALENDAR WEEK -->
          
              <!-- CALENDAR DAYS -->
              <div class="calendar-days">
                <!-- CALENDAR DAY ROW -->
                <div class="calendar-day-row">
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day inactive">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">29</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day inactive">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">30</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day inactive">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">31</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">1</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">2</p>
                    <!-- /CALENDAR DAY NUMBER -->
          
                    <!-- CALENDARY DAY EVENTS -->
                    <div class="calendar-day-events">
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event primary"><span class="calendar-day-event-text">Dex's Birthday</span></p>
                      <!-- /CALENDAR DAY EVENT -->
          
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Sara's Big Stream</span></p>
                      <!-- /CALENDAR DAY EVENT -->
          
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Striker GO Release</span></p>
                      <!-- /CALENDAR DAY EVENT -->
                    </div>
                    <!-- /CALENDARY DAY EVENTS -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">3</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">4</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
                </div>
                <!-- /CALENDAR DAY ROW -->
          
                <!-- CALENDAR DAY ROW -->
                <div class="calendar-day-row">
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">5</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">6</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day current">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">7</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">8</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">9</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">10</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">11</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
                </div>
                <!-- /CALENDAR DAY ROW -->
          
                <!-- CALENDAR DAY ROW -->
                <div class="calendar-day-row">
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">12</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day active">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">13</p>
                    <!-- /CALENDAR DAY NUMBER -->
          
                    <!-- CALENDARY DAY EVENTS -->
                    <div class="calendar-day-events">
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Breakfast with Neko</span></p>
                      <!-- /CALENDAR DAY EVENT -->
          
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event primary"><span class="calendar-day-event-text">Streaming Party</span></p>
                      <!-- /CALENDAR DAY EVENT -->
                    </div>
                    <!-- /CALENDAR DAY EVENTS -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">14</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">15</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">16</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">17</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">18</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
                </div>
                <!-- /CALENDAR DAY ROW -->
          
                <!-- CALENDAR DAY ROW -->
                <div class="calendar-day-row">
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">19</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">20</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">21</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">22</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">23</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">24</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">25</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
                </div>
                <!-- /CALENDAR DAY ROW -->
          
                <!-- CALENDAR DAY ROW -->
                <div class="calendar-day-row">
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">26</p>
                    <!-- /CALENDAR DAY NUMBER -->
          
                    <!-- CALENDARY DAY EVENTS -->
                    <div class="calendar-day-events">
                      <!-- CALENDAR DAY EVENT -->
                      <p class="calendar-day-event primary"><span class="calendar-day-event-text">CosWorld 2019 After...</span></p>
                      <!-- /CALENDAR DAY EVENT -->
                    </div>
                    <!-- /CALENDARY DAY EVENTS -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">27</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">28</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">29</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">30</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day inactive">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">1</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
          
                  <!-- CALENDAR DAY -->
                  <div class="calendar-day inactive">
                    <!-- CALENDAR DAY NUMBER -->
                    <p class="calendar-day-number">2</p>
                    <!-- /CALENDAR DAY NUMBER -->
                  </div>
                  <!-- /CALENDAR DAY -->
                </div>
                <!-- /CALENDAR DAY ROW -->
              </div>
              <!-- /CALENDAR DAYS -->
            </div>
            <!-- /CALENDAR -->
      
            <!-- CALENDAR EVENTS PREVIEW -->
            <div class="calendar-events-preview small">
              <!-- CALENDAR EVENTS PREVIEW TITLE -->
              <p class="calendar-events-preview-title">Monday 13th</p>
              <!-- /CALENDAR EVENTS PREVIEW TITLE -->
          
              <!-- CALENDAR EVENT PREVIEW LIST -->
              <div class="calendar-event-preview-list">
                <!-- CALENDAR EVENT PREVIEW -->
                <div class="calendar-event-preview small secondary">
                  <!-- CALENDAR EVENT PREVIEW START TIME -->
                  <div class="calendar-event-preview-start-time">
                    <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
                    <p class="calendar-event-preview-start-time-title">8:30</p>
                    <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->
          
                    <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
                    <p class="calendar-event-preview-start-time-text">AM</p>
                    <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
                  </div>
                  <!-- /CALENDAR EVENT PREVIEW START TIME -->
          
                  <!-- CALENDAR EVENT PREVIEW INFO -->
                  <div class="calendar-event-preview-info">
                    <!-- CALENDAR EVENT PREVIEW TITLE -->
                    <p class="calendar-event-preview-title">Breakfast with Neko</p>
                    <!-- /CALENDAR EVENT PREVIEW TITLE -->
          
                    <!-- CALENDAR EVENT PREVIEW TEXT -->
                    <p class="calendar-event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
                    <!-- /CALENDAR EVENT PREVIEW TEXT -->
                  </div>
                  <!-- /CALENDAR EVENT PREVIEW INFO -->
                </div>
                <!-- /CALENDAR EVENT PREVIEW -->
          
                <!-- CALENDAR EVENT PREVIEW -->
                <div class="calendar-event-preview small primary">
                  <!-- CALENDAR EVENT PREVIEW START TIME -->
                  <div class="calendar-event-preview-start-time">
                    <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
                    <p class="calendar-event-preview-start-time-title">10:00</p>
                    <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->
          
                    <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
                    <p class="calendar-event-preview-start-time-text">PM</p>
                    <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
                  </div>
                  <!-- /CALENDAR EVENT PREVIEW START TIME -->
          
                  <!-- CALENDAR EVENT PREVIEW INFO -->
                  <div class="calendar-event-preview-info">
                    <!-- CALENDAR EVENT PREVIEW TITLE -->
                    <p class="calendar-event-preview-title">Streaming Party</p>
                    <!-- /CALENDAR EVENT PREVIEW TITLE -->
          
                    <!-- CALENDAR EVENT PREVIEW TEXT -->
                    <p class="calendar-event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
                    <!-- /CALENDAR EVENT PREVIEW TEXT -->
                  </div>
                  <!-- /CALENDAR EVENT PREVIEW INFO -->
                </div>
                <!-- /CALENDAR EVENT PREVIEW -->
              </div>
              <!-- /CALENDAR EVENT PREVIEW LIST -->
            </div>
            <!-- /CALENDAR EVENTS PREVIEW -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Friends Activity</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- USER STATUS LIST -->
            <div class="user-status-list">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                      <p class="user-avatar-badge-text">12</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> commented on Destroy Dex's <a class="highlighted" href="profile-timeline.html">photo</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp">3 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                      <p class="user-avatar-badge-text">16</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> liked {{ $user->name }}'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp">12 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                      <p class="user-avatar-badge-text">5</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> liked Nick Grissom's <a class="highlighted" href="profile-timeline.html">video</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp">17 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                      <p class="user-avatar-badge-text">16</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> changed his <a class="highlighted" href="profile-timeline.html">profile picture</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp">33 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="profile-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
                      <p class="user-avatar-badge-text">19</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> commented on Rosie Sakura's <a class="highlighted" href="profile-timeline.html">profile</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp">41 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /USER STATUS LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Groups</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FILTERS -->
            <div class="filters">
              <!-- FILTER -->
              <p class="filter">Newest</p>
              <!-- /FILTER -->
      
              <!-- FILTER -->
              <p class="filter active">Popular</p>
              <!-- /FILTER -->
      
              <!-- FILTER -->
              <p class="filter">Active</p>
              <!-- /FILTER -->
            </div>
            <!-- /FILTERS -->
      
            <!-- USER STATUS LIST -->
            <div class="user-status-list">
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="group-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-40-44" data-src="img/avatar/29.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Twitch Streamers</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">265 members</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-join-group">
                      <use xlink:href="#svg-join-group"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="group-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-40-44" data-src="img/avatar/24.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Cosplayers of the World</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">139 members</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-join-group">
                      <use xlink:href="#svg-join-group"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="group-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-40-44" data-src="img/avatar/25.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Stream Designers</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">466 members</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-join-group">
                      <use xlink:href="#svg-join-group"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="group-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-40-44" data-src="img/avatar/28.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Street Artists</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">951 members</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request decline">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-leave-group">
                      <use xlink:href="#svg-leave-group"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="group-timeline.html">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-40-44" data-src="img/avatar/27.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </a>
                <!-- /USER STATUS AVATAR -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="group-timeline.html">Gaming Watchtower</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">2.365 members</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
                  <!-- ACTION REQUEST -->
                  <div class="action-request accept">
                    <!-- ACTION REQUEST ICON -->
                    <svg class="action-request-icon icon-join-group">
                      <use xlink:href="#svg-join-group"></use>
                    </svg>
                    <!-- /ACTION REQUEST ICON -->
                  </div>
                  <!-- /ACTION REQUEST -->
                </div>
                <!-- ACTION REQUEST LIST -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /USER STATUS LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

  <!-- POPUP PICTURE -->
  <div class="popup-picture">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-picture-trigger">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- WIDGET BOX -->
    <div class="widget-box no-padding">
      <!-- WIDGET BOX SCROLLABLE -->
      <div class="widget-box-scrollable" data-simplebar>
        <!-- WIDGET BOX SETTINGS -->
        <div class="widget-box-settings">
          <!-- POST SETTINGS WRAP -->
          <div class="post-settings-wrap">
            <!-- POST SETTINGS -->
            <div class="post-settings widget-box-post-settings-dropdown-trigger">
              <!-- POST SETTINGS ICON -->
              <svg class="post-settings-icon icon-more-dots">
                <use xlink:href="#svg-more-dots"></use>
              </svg>
              <!-- /POST SETTINGS ICON -->
            </div>
            <!-- /POST SETTINGS -->
    
            <!-- SIMPLE DROPDOWN -->
            <div class="simple-dropdown widget-box-post-settings-dropdown">
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Edit Post</p>
              <!-- /SIMPLE DROPDOWN LINK -->
    
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Delete Post</p>
              <!-- /SIMPLE DROPDOWN LINK -->
    
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Make it Featured</p>
              <!-- /SIMPLE DROPDOWN LINK -->
    
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Report Post</p>
              <!-- /SIMPLE DROPDOWN LINK -->
    
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Report Author</p>
              <!-- /SIMPLE DROPDOWN LINK -->
            </div>
            <!-- /SIMPLE DROPDOWN -->
          </div>
          <!-- /POST SETTINGS WRAP -->
        </div>
        <!-- /WIDGET BOX SETTINGS -->
        
        <!-- WIDGET BOX STATUS -->
        <div class="widget-box-status">
          <!-- WIDGET BOX STATUS CONTENT -->
          <div class="widget-box-status-content">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
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
                    <p class="user-avatar-badge-text">{{ $user->currentLevel }}</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">29 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
            
            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
            <!-- /WIDGET BOX STATUS TEXT -->

            <!-- TAG LIST -->
            <div class="tag-list">
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="/feed">Cover</a>
              <!-- /TAG ITEM -->
    
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="/feed">Preview</a>
              <!-- /TAG ITEM -->
    
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="/feed">Art</a>
              <!-- /TAG ITEM -->
    
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="/feed">Machine</a>
              <!-- /TAG ITEM -->
    
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="/feed">Wasteland</a>
              <!-- /TAG ITEM -->
            </div>
            <!-- /TAG LIST -->
    
            <!-- CONTENT ACTIONS -->
            <div class="content-actions">
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LIST -->
                  <div class="meta-line-list reaction-item-list">
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png" alt="reaction-love">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Destroy Dex</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">The Green Goo</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Bearded Wonder</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Sandra Strange</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Matt Parker</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">James Murdock</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
    
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
    
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/wow.png" alt="reaction-wow">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Jett Spiegel</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
    
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Neko Bebop</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
          
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Nick Grissom</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
          
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Sarah Diamond</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
                  </div>
                  <!-- /META LINE LIST -->
          
                  <!-- META LINE TEXT -->
                  <p class="meta-line-text">24</p>
                  <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
          
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link">13 Comments</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->
          
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE TEXT -->
                  <p class="meta-line-text">0 Shares</p>
                  <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
            </div>
            <!-- /CONTENT ACTIONS -->
          </div>
          <!-- /WIDGET BOX STATUS CONTENT -->
        </div>
        <!-- /WIDGET BOX STATUS -->
    
        <!-- POST OPTIONS -->
        <div class="post-options">
          <!-- POST OPTION WRAP -->
          <div class="post-option-wrap">
            <!-- POST OPTION -->
            <div class="post-option no-text reaction-options-dropdown-trigger">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-thumbs-up">
                <use xlink:href="#svg-thumbs-up"></use>
              </svg>
              <!-- /POST OPTION ICON -->
            </div>
            <!-- /POST OPTION -->
    
            <!-- REACTION OPTIONS -->
            <div class="reaction-options small reaction-options-dropdown">
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Like">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Love">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Happy">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Funny">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Wow">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Angry">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
    
              <!-- REACTION OPTION -->
              <div class="reaction-option text-tooltip-tft" data-title="Sad">
                <!-- REACTION OPTION IMAGE -->
                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                <!-- /REACTION OPTION IMAGE -->
              </div>
              <!-- /REACTION OPTION -->
            </div>
            <!-- /REACTION OPTIONS -->
          </div>
          <!-- /POST OPTION WRAP -->
    
          <!-- POST OPTION -->
          <div class="post-option no-text active">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->
          </div>
          <!-- /POST OPTION -->
    
          <!-- POST OPTION -->
          <div class="post-option no-text">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
              <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->
          </div>
          <!-- /POST OPTION -->
        </div>
        <!-- /POST OPTIONS -->
    
        <!-- POST COMMENT LIST -->
        <div class="post-comment-list">
          <!-- POST COMMENT -->
          <div class="post-comment">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                <p class="user-avatar-badge-text">12</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->
      
            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
            <!-- /POST COMMENT TEXT -->
      
            <!-- CONTENT ACTIONS -->
            <div class="content-actions">
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LIST -->
                  <div class="meta-line-list reaction-item-list small">
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Marcus Jhonson</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
          
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Neko Bebop</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
          
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Nick Grissom</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
          
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Sarah Diamond</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
                  </div>
                  <!-- /META LINE LIST -->
          
                  <!-- META LINE TEXT -->
                  <p class="meta-line-text">4</p>
                  <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                  <!-- /META LINE LINK -->
      
                  <!-- REACTION OPTIONS -->
                  <div class="reaction-options small reaction-options-small-dropdown">
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
                  </div>
                  <!-- /REACTION OPTIONS -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light">Reply</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE TIMESTAMP -->
                  <p class="meta-line-timestamp">15 min ago</p>
                  <!-- /META LINE TIMESTAMP -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line settings">
                  <!-- POST SETTINGS WRAP -->
                  <div class="post-settings-wrap">
                    <!-- POST SETTINGS -->
                    <div class="post-settings post-settings-dropdown-trigger">
                      <!-- POST SETTINGS ICON -->
                      <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                      </svg>
                      <!-- /POST SETTINGS ICON -->
                    </div>
                    <!-- /POST SETTINGS -->
      
                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown post-settings-dropdown">
                      <!-- SIMPLE DROPDOWN LINK -->
                      <p class="simple-dropdown-link">Report Post</p>
                      <!-- /SIMPLE DROPDOWN LINK -->
                    </div>
                    <!-- /SIMPLE DROPDOWN -->
                  </div>
                  <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
            </div>
            <!-- /CONTENT ACTIONS -->
          </div>
          <!-- /POST COMMENT -->
      
          <!-- POST COMMENT -->
          <div class="post-comment unread reply-2">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
                <p class="user-avatar-badge-text">16</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->
      
            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
            <!-- /POST COMMENT TEXT -->
      
            <!-- CONTENT ACTIONS -->
            <div class="content-actions">
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LIST -->
                  <div class="meta-line-list reaction-item-list small">
                    <!-- REACTION ITEM -->
                    <div class="reaction-item">
                      <!-- REACTION IMAGE -->
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION IMAGE -->
          
                      <!-- SIMPLE DROPDOWN -->
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      
                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Neko Bebop</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
                  </div>
                  <!-- /META LINE LIST -->
          
                  <!-- META LINE TEXT -->
                  <p class="meta-line-text">1</p>
                  <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                  <!-- /META LINE LINK -->
      
                  <!-- REACTION OPTIONS -->
                  <div class="reaction-options small reaction-options-small-dropdown">
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
                  </div>
                  <!-- /REACTION OPTIONS -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light">Reply</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE TIMESTAMP -->
                  <p class="meta-line-timestamp">2 min ago</p>
                  <!-- /META LINE TIMESTAMP -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line settings">
                  <!-- POST SETTINGS WRAP -->
                  <div class="post-settings-wrap">
                    <!-- POST SETTINGS -->
                    <div class="post-settings post-settings-dropdown-trigger">
                      <!-- POST SETTINGS ICON -->
                      <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                      </svg>
                      <!-- /POST SETTINGS ICON -->
                    </div>
                    <!-- /POST SETTINGS -->
      
                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown post-settings-dropdown">
                      <!-- SIMPLE DROPDOWN LINK -->
                      <p class="simple-dropdown-link">Report Post</p>
                      <!-- /SIMPLE DROPDOWN LINK -->
                    </div>
                    <!-- /SIMPLE DROPDOWN -->
                  </div>
                  <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
            </div>
            <!-- /CONTENT ACTIONS -->
          </div>
          <!-- /POST COMMENT -->
    
          <!-- POST COMMENT -->
          <div class="post-comment">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
                <p class="user-avatar-badge-text">19</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->
      
            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a href="profile-timeline.html">@{{ $user->firstName }}Valentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
            <!-- /POST COMMENT TEXT -->
      
            <!-- CONTENT ACTIONS -->
            <div class="content-actions">
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                  <!-- /META LINE LINK -->
      
                  <!-- REACTION OPTIONS -->
                  <div class="reaction-options small reaction-options-small-dropdown">
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
                  </div>
                  <!-- /REACTION OPTIONS -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light">Reply</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE TIMESTAMP -->
                  <p class="meta-line-timestamp">27 min ago</p>
                  <!-- /META LINE TIMESTAMP -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line settings">
                  <!-- POST SETTINGS WRAP -->
                  <div class="post-settings-wrap">
                    <!-- POST SETTINGS -->
                    <div class="post-settings post-settings-dropdown-trigger">
                      <!-- POST SETTINGS ICON -->
                      <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                      </svg>
                      <!-- /POST SETTINGS ICON -->
                    </div>
                    <!-- /POST SETTINGS -->
      
                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown post-settings-dropdown">
                      <!-- SIMPLE DROPDOWN LINK -->
                      <p class="simple-dropdown-link">Report Post</p>
                      <!-- /SIMPLE DROPDOWN LINK -->
                    </div>
                    <!-- /SIMPLE DROPDOWN -->
                  </div>
                  <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
            </div>
            <!-- /CONTENT ACTIONS -->
          </div>
          <!-- /POST COMMENT -->
    
          <!-- POST COMMENT -->
          <div class="post-comment">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                <p class="user-avatar-badge-text">26</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->
      
            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome {{ $user->firstName }}! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
            <!-- /POST COMMENT TEXT -->
      
            <!-- CONTENT ACTIONS -->
            <div class="content-actions">
              <!-- CONTENT ACTION -->
              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                  <!-- /META LINE LINK -->
      
                  <!-- REACTION OPTIONS -->
                  <div class="reaction-options small reaction-options-small-dropdown">
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
          
                    <!-- REACTION OPTION -->
                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                      <!-- REACTION OPTION IMAGE -->
                      <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                      <!-- /REACTION OPTION IMAGE -->
                    </div>
                    <!-- /REACTION OPTION -->
                  </div>
                  <!-- /REACTION OPTIONS -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link light">Reply</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE TIMESTAMP -->
                  <p class="meta-line-timestamp">39 min ago</p>
                  <!-- /META LINE TIMESTAMP -->
                </div>
                <!-- /META LINE -->
      
                <!-- META LINE -->
                <div class="meta-line settings">
                  <!-- POST SETTINGS WRAP -->
                  <div class="post-settings-wrap">
                    <!-- POST SETTINGS -->
                    <div class="post-settings post-settings-dropdown-trigger">
                      <!-- POST SETTINGS ICON -->
                      <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                      </svg>
                      <!-- /POST SETTINGS ICON -->
                    </div>
                    <!-- /POST SETTINGS -->
      
                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown post-settings-dropdown">
                      <!-- SIMPLE DROPDOWN LINK -->
                      <p class="simple-dropdown-link">Report Post</p>
                      <!-- /SIMPLE DROPDOWN LINK -->
                    </div>
                    <!-- /SIMPLE DROPDOWN -->
                  </div>
                  <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->
            </div>
            <!-- /CONTENT ACTIONS -->
          </div>
          <!-- /POST COMMENT -->
      
          <!-- POST COMMENT HEADING -->
          <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
          <!-- /POST COMMENT HEADING -->
        </div>
        <!-- /POST COMMENT LIST -->
      </div>
      <!-- /WIDGET BOX SCROLLABLE -->

      <!-- POST COMMENT FORM -->
      <div class="post-comment-form bordered-top">
        <!-- USER AVATAR -->
        <div class="user-avatar small no-outline">
          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
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
            <p class="user-avatar-badge-text">{{ $user->currentLevel }}</p>
            <!-- /USER AVATAR BADGE TEXT -->
          </div>
          <!-- /USER AVATAR BADGE -->
        </div>
        <!-- /USER AVATAR -->
  
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small">
                <label for="popup-post-reply">Your Reply</label>
                <input type="text" id="popup-post-reply" name="popup_post_reply">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- /POST COMMENT FORM -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- POPUP PICTURE IMAGE WRAP -->
    <div class="popup-picture-image-wrap">
      <!-- POPUP PICTURE IMAGE -->
      <figure class="popup-picture-image">
        <img src="img/cover/04.jpg" alt="cover-04">
      </figure>
      <!-- /POPUP PICTURE IMAGE -->
    </div>
    <!-- /POPUP PICTURE IMAGE WRAP -->
  </div>
  <!-- /POPUP PICTURE -->
  <script>
// Get references to HTML elements
const postInput = document.getElementById('quick-post-text');
const suggestions = document.getElementById('suggestions');
const postForm = document.getElementById('postForm');

// Event listener for input changes
postInput.addEventListener('input', () => {
  const inputValue = postInput.value;
  const caretPosition = postInput.selectionStart;
  
  // Check if the user has typed "@" and there is text before it
  if (inputValue.includes('@')) {
    const lastAtSignIndex = inputValue.lastIndexOf('@');
    const query = inputValue.substring(lastAtSignIndex + 1, caretPosition);
    
    // Fetch user suggestions based on the query
    // You can use AJAX or any data source to fetch user data
    const userSuggestions = getUsersFromServer(query); // Replace with your actual user fetching logic
    
    // Display the suggestions
    displaySuggestions(userSuggestions);
  } else {
    // If "@" is not present, clear the suggestions container
    suggestions.innerHTML = '';
  }
});

// Function to fetch user suggestions from the server
function getUsersFromServer(query) {
  // Replace with your logic to fetch user data
  // You can use AJAX to make a request to a server or database
  // Return an array of user objects matching the query
  // For example:
  return @json($users).filter(user => user.username.toLowerCase().includes(query.toLowerCase()));
}

// Function to display user suggestions
function displaySuggestions(userSuggestions) {
  suggestions.innerHTML = '';
  userSuggestions.forEach((user) => {
    const suggestionItem = document.createElement('div');
    suggestionItem.textContent = `@${user.username}`;
    
    // Add a click event to insert the selected user into the input field
    suggestionItem.addEventListener('click', () => {
      const inputValue = postInput.value;
      const lastAtSignIndex = inputValue.lastIndexOf('@');
      const preText = inputValue.substring(0, lastAtSignIndex);
      
      // Replace the text in the input field with the selected user
      postInput.value = `${preText}@${user.username} `;
      
      // Clear the suggestions container
      suggestions.innerHTML = '';
    });
    
    suggestions.appendChild(suggestionItem);
  });
}

// Event listener for form submission
postForm.addEventListener('submit', (e) => {

  // Get the user's input from the input field
  const inputValue = postInput.value;

  // Replace mentions with links in the user's input
  const transformedInput = inputValue.replace(/@(\w+)/g, '<a href="http://localhost:8000/@$1">@$1</a>');

  // Update the input field with the transformed input
  postInput.value = transformedInput;
});

  </script>
@include('partials/footer')