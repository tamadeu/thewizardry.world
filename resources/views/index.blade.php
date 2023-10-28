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
      <img class="section-banner-icon" src="img/banner/overview-icon.png" alt="overview-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Overview</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">Review your account, see stats and more!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Overview</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">My Profile</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid">

      <!-- GRID -->
      <div class="grid grid-layout-1">
        <!-- GRID COLUMN -->
        <div class="grid-sidebar">
          <!-- PROFILE STATS -->
          <div class="profile-stats fixed-height">
            <!-- PROFILE STATS COVER -->
            <div class="profile-stats-cover">
              <!-- PROFILE STATS COVER TITLE -->
              <p class="profile-stats-cover-title">Welcome Back!</p>
              <!-- /PROFILE STATS COVER TITLE -->
        
              <!-- PROFILE STATS COVER TEXT -->
              <p class="profile-stats-cover-text">{{ $user->firstName }}</p>
              <!-- /PROFILE STATS COVER TEXT -->
            </div>
            <!-- /PROFILE STATS COVER -->
        
            <!-- PROFILE STATS INFO -->
            <div class="profile-stats-info">
              <!-- USER AVATAR -->
              <div class="user-avatar medium">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-120-132"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-82-90" data-src="{{ asset('storage/img/profile/' . $user->pictureUrl) }}"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-32-36"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-26-28"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">{{ $user->level }}</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </div>
              <!-- /USER AVATAR -->
        
              <!-- FEATURED STAT LIST -->
              <div class="featured-stat-list">
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- FEATURED STAT ICON -->
                  <svg class="featured-stat-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                  </svg>
                  <!-- /FEATURED STAT ICON -->
        
                  <!-- FEATURED STAT TITLE -->
                  <p class="featured-stat-title">28.4</p>
                  <!-- /FEATURED STAT TITLE -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Avg Month</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- FEATURED STAT ICON -->
                  <svg class="featured-stat-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                  </svg>
                  <!-- /FEATURED STAT ICON -->
        
                  <!-- FEATURED STAT TITLE -->
                  <p class="featured-stat-title">69.7</p>
                  <!-- /FEATURED STAT TITLE -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Comments</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Avg Month</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
              </div>
              <!-- /FEATURED STAT LIST -->
        
              <!-- FEATURED STAT LIST -->
              <div class="featured-stat-list">
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="progress-arc-wrap small">
                    <!-- PROGRESS ARC -->
                    <div class="progress-arc">
                      <canvas id="posts-engagement-chart"></canvas>
                    </div>
                    <!-- PROGRESS ARC -->
              
                    <!-- PROGRESS ARC INFO -->
                    <div class="progress-arc-info">
                      <!-- PROGRESS ARC TITLE -->
                      <p class="progress-arc-title">87%</p>
                      <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Engagement</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="progress-arc-wrap small">
                    <!-- PROGRESS ARC -->
                    <div class="progress-arc">
                      <canvas id="posts-shared-chart"></canvas>
                    </div>
                    <!-- PROGRESS ARC -->
        
                    <!-- PROGRESS ARC INFO -->
                    <div class="progress-arc-info">
                      <!-- PROGRESS ARC TITLE -->
                      <p class="progress-arc-title">42%</p>
                      <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Shared</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
              </div>
              <!-- /FEATURED STAT LIST -->
            </div>
            <!-- /PROFILE STATS INFO -->
          </div>
          <!-- /PROFILE STATS -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-header">
          <!-- SLIDER LINE -->
          <div class="slider-line small">
            <!-- SLIDER CONTROLS -->
            <div id="user-stats-slider-controls" class="slider-controls">
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
        
            <!-- SLIDER SLIDES -->
            <div id="user-stats-slider" class="slider-slides with-separator">
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">930</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">posts</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">82</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">friends</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">5.7k</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">visits</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">13</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">badges</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">74</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">photos</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
              <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">10.6k</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">reactions (r)</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">8.4k</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">comments (r)</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
        
              <!-- SLIDER SLIDE -->
              <div class="slider-slide">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">2.3k</p>
                  <!-- /USER STAT TITLE -->
        
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">shares (r)</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /SLIDER SLIDE -->
            </div>
            <!-- /SLIDER SLIDES -->
          </div>
          <!-- /SLIDER LINE -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-content">
          <!-- WIDGET BOX -->
          <div class="widget-box no-padding">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Profile Activity</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content padded-for-scroll" data-simplebar>
              <!-- USER STATUS LIST -->
              <div class="user-status-list scroll-content">
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">2 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
              
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
        
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a> left a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">17 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
              
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
        
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                        <p class="user-avatar-badge-text">13</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> posted a comment on your <a class="highlighted" href="profile-photos.html">photo</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">31 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
        
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> shared your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">39 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
              
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON SHARE -->
                    <svg class="icon-share">
                      <use xlink:href="#svg-share"></use>
                    </svg>
                    <!-- /ICON SHARE -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
        
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> left a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
        
                <!-- USER STATUS -->
                <div class="user-status notification">
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
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp small-space">3 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
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

        <!-- GRID COLUMN -->
        <div class="grid-column grid-content-sidebar">
          <!-- STATS DECORATION -->
          <div class="stats-decoration v2 big secondary">
            <!-- STATS DECORATION TITLE -->
            <p class="stats-decoration-title">33</p>
            <!-- /STATS DECORATION TITLE -->
        
            <!-- STATS DECORATION SUBTITLE -->
            <p class="stats-decoration-subtitle">Post Engagements</p>
            <!-- /STATS DECORATION SUBTITLE -->
        
            <!-- STATS DECORATION TEXT -->
            <p class="stats-decoration-text">Today</p>
            <!-- /STATS DECORATION TEXT -->
        
            <!-- PERCENTAGE DIFF -->
            <div class="percentage-diff">
              <!-- PERCENTAGE DIFF ICON WRAP -->
              <div class="percentage-diff-icon-wrap positive">
                <!-- PERCENTAGE DIFF ICON -->
                <svg class="percentage-diff-icon icon-plus-small">
                  <use xlink:href="#svg-plus-small"></use>
                </svg>
                <!-- /PERCENTAGE DIFF ICON -->
              </div>
              <!-- /PERCENTAGE DIFF ICON WRAP -->
        
              <!-- PERCENTAGE DIFF TEXT -->
              <p class="percentage-diff-text">5.3%</p>
              <!-- /PERCENTAGE DIFF TEXT -->
            </div>
            <!-- /PERCENTAGE DIFF -->
          </div>
          <!-- /STATS DECORATION -->
        
          <!-- STATS DECORATION -->
          <div class="stats-decoration v2 big primary">
            <!-- STATS DECORATION TITLE -->
            <p class="stats-decoration-title">126</p>
            <!-- /STATS DECORATION TITLE -->
        
            <!-- STATS DECORATION SUBTITLE -->
            <p class="stats-decoration-subtitle">Profile Views</p>
            <!-- /STATS DECORATION SUBTITLE -->
        
            <!-- STATS DECORATION TEXT -->
            <p class="stats-decoration-text">Today</p>
            <!-- /STATS DECORATION TEXT -->
        
            <!-- PERCENTAGE DIFF -->
            <div class="percentage-diff">
              <!-- PERCENTAGE DIFF ICON WRAP -->
              <div class="percentage-diff-icon-wrap negative">
                <!-- PERCENTAGE DIFF ICON -->
                <svg class="percentage-diff-icon icon-minus-small">
                  <use xlink:href="#svg-minus-small"></use>
                </svg>
                <!-- /PERCENTAGE DIFF ICON -->
              </div>
              <!-- /PERCENTAGE DIFF ICON WRAP -->
        
              <!-- PERCENTAGE DIFF TEXT -->
              <p class="percentage-diff-text">4.7%</p>
              <!-- /PERCENTAGE DIFF TEXT -->
            </div>
            <!-- /PERCENTAGE DIFF -->
          </div>
          <!-- /STATS DECORATION -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
      <!-- /GRID -->
      
      <!-- GRID -->
      <div class="grid grid-3-3-3-3 centered">
        <!-- STATS BOX -->
        <div class="stats-box small stat-profile-views">
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
        <div class="stats-box small stat-posts-created">
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
        <div class="stats-box small stat-reactions-received">
          <!-- STATS BOX VALUE WRAP -->
          <div class="stats-box-value-wrap">
            <!-- STATS BOX VALUE -->
            <p class="stats-box-value">2.560</p>
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
        <div class="stats-box small stat-comments-received">
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
      <!-- /GRID -->

      <!-- SLIDER LINE -->
      <div class="slider-line medium">
        <!-- SLIDER CONTROLS -->
        <div id="reaction-stats-slider-controls" class="slider-controls">
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
    
        <!-- SLIDER SLIDES -->
        <div id="reaction-stats-slider" class="slider-slides with-separator">
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- REACTION STAT -->
            <div class="reaction-stat">
              <!-- REACTION STAT IMAGE -->
              <img class="reaction-stat-image" src="img/reaction/wow.png" alt="reaction-wow">
              <!-- /REACTION STAT IMAGE -->
    
              <!-- REACTION STAT TITLE -->
              <p class="reaction-stat-title">5.944</p>
              <!-- /REACTION STAT TITLE -->
    
              <!-- REACTION STAT TEXT -->
              <p class="reaction-stat-text">Wow</p>
              <!-- /REACTION STAT TEXT -->
            </div>
            <!-- /REACTION STAT -->
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
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
          <!-- /SLIDER SLIDE -->
        </div>
        <!-- SLIDER SLIDES -->
      </div>
      <!-- /SLIDER LINE -->

      <!-- GRID -->
      <div class="grid grid-3-3-3-3 centered">
        <!-- FEATURED STAT BOX -->
        <div class="featured-stat-box reactioner">
          <!-- FEATURED STAT BOX COVER -->
          <div class="featured-stat-box-cover">
            <!-- FEATURED STAT BOX COVER TITLE -->
            <p class="featured-stat-box-cover-title">Top Reactor</p>
            <!-- /FEATURED STAT BOX COVER TITLE -->
      
            <!-- FEATURED STAT BOX COVER TEXT -->
            <p class="featured-stat-box-cover-text">of last month</p>
            <!-- /FEATURED STAT BOX COVER TEXT -->
          </div>
          <!-- /FEATURED STAT BOX COVER -->
      
          <!-- FEATURED STAT BOX INFO -->
          <div class="featured-stat-box-info">
            <!-- USER AVATAR -->
            <div class="user-avatar small">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-50-56"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->
          
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
                <p class="user-avatar-badge-text">13</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
      
            <!-- FEATURED STAT BOX TITLE -->
            <p class="featured-stat-box-title">94</p>
            <!-- /FEATURED STAT BOX TITLE -->
      
            <!-- FEATURED STAT BOX SUBTITLE -->
            <p class="featured-stat-box-subtitle">Reactions</p>
            <!-- /FEATURED STAT BOX SUBTITLE -->
      
            <!-- FEATURED STAT BOX TEXT -->
            <p class="featured-stat-box-text">Destroy Dex</p>
            <!-- /FEATURED STAT BOX TEXT -->
          </div>
          <!-- /FEATURED STAT BOX INFO -->
        </div>
        <!-- /FEATURED STAT BOX -->

        <!-- FEATURED STAT BOX -->
        <div class="featured-stat-box reactioner">
          <!-- FEATURED STAT BOX COVER -->
          <div class="featured-stat-box-cover">
            <!-- FEATURED STAT BOX COVER TITLE -->
            <p class="featured-stat-box-cover-title">Top Reactor</p>
            <!-- /FEATURED STAT BOX COVER TITLE -->
      
            <!-- FEATURED STAT BOX COVER TEXT -->
            <p class="featured-stat-box-cover-text">of all time</p>
            <!-- /FEATURED STAT BOX COVER TEXT -->
          </div>
          <!-- /FEATURED STAT BOX COVER -->
      
          <!-- FEATURED STAT BOX INFO -->
          <div class="featured-stat-box-info">
            <!-- USER AVATAR -->
            <div class="user-avatar small">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-50-56"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->
          
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
      
            <!-- FEATURED STAT BOX TITLE -->
            <p class="featured-stat-box-title">1.569</p>
            <!-- /FEATURED STAT BOX TITLE -->
      
            <!-- FEATURED STAT BOX SUBTITLE -->
            <p class="featured-stat-box-subtitle">Reactions</p>
            <!-- /FEATURED STAT BOX SUBTITLE -->
      
            <!-- FEATURED STAT BOX TEXT -->
            <p class="featured-stat-box-text">Nick Grissom</p>
            <!-- /FEATURED STAT BOX TEXT -->
          </div>
          <!-- /FEATURED STAT BOX INFO -->
        </div>
        <!-- /FEATURED STAT BOX -->
      
        <!-- FEATURED STAT BOX -->
        <div class="featured-stat-box commenter">
          <!-- FEATURED STAT BOX COVER -->
          <div class="featured-stat-box-cover">
            <!-- FEATURED STAT BOX COVER TITLE -->
            <p class="featured-stat-box-cover-title">Top Commenter</p>
            <!-- /FEATURED STAT BOX COVER TITLE -->
      
            <!-- FEATURED STAT BOX COVER TEXT -->
            <p class="featured-stat-box-cover-text">of last month</p>
            <!-- /FEATURED STAT BOX COVER TEXT -->
          </div>
          <!-- /FEATURED STAT BOX COVER -->
      
          <!-- FEATURED STAT BOX INFO -->
          <div class="featured-stat-box-info">
            <!-- USER AVATAR -->
            <div class="user-avatar small">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-50-56"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->
          
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
      
            <!-- FEATURED STAT BOX TITLE -->
            <p class="featured-stat-box-title">47</p>
            <!-- /FEATURED STAT BOX TITLE -->
      
            <!-- FEATURED STAT BOX SUBTITLE -->
            <p class="featured-stat-box-subtitle">Comments</p>
            <!-- /FEATURED STAT BOX SUBTITLE -->
      
            <!-- FEATURED STAT BOX TEXT -->
            <p class="featured-stat-box-text">Neko Bebop</p>
            <!-- /FEATURED STAT BOX TEXT -->
          </div>
          <!-- /FEATURED STAT BOX INFO -->
        </div>
        <!-- /FEATURED STAT BOX -->

        <!-- FEATURED STAT BOX -->
        <div class="featured-stat-box commenter">
          <!-- FEATURED STAT BOX COVER -->
          <div class="featured-stat-box-cover">
            <!-- FEATURED STAT BOX COVER TITLE -->
            <p class="featured-stat-box-cover-title">Top Commenter</p>
            <!-- /FEATURED STAT BOX COVER TITLE -->
      
            <!-- FEATURED STAT BOX COVER TEXT -->
            <p class="featured-stat-box-cover-text">of all time</p>
            <!-- /FEATURED STAT BOX COVER TEXT -->
          </div>
          <!-- /FEATURED STAT BOX COVER -->
      
          <!-- FEATURED STAT BOX INFO -->
          <div class="featured-stat-box-info">
            <!-- USER AVATAR -->
            <div class="user-avatar small">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-50-56"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->
          
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
                <p class="user-avatar-badge-text">13</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
      
            <!-- FEATURED STAT BOX TITLE -->
            <p class="featured-stat-box-title">803</p>
            <!-- /FEATURED STAT BOX TITLE -->
      
            <!-- FEATURED STAT BOX SUBTITLE -->
            <p class="featured-stat-box-subtitle">Comments</p>
            <!-- /FEATURED STAT BOX SUBTITLE -->
      
            <!-- FEATURED STAT BOX TEXT -->
            <p class="featured-stat-box-text">Destroy Dex</p>
            <!-- /FEATURED STAT BOX TEXT -->
          </div>
          <!-- /FEATURED STAT BOX INFO -->
        </div>
        <!-- /FEATURED STAT BOX -->
      </div>
      <!-- /GRID -->

      <!-- GRID -->
      <div class="grid grid-half change-on-desktop">
        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
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
            <!-- TEXT STICKER -->
            <p class="text-sticker medium round">
              <!-- TEXT STICKER ICON -->
              <svg class="text-sticker-icon icon-trophy">
                <use xlink:href="#svg-trophy"></use>
              </svg>
              <!-- TEXT STICKER ICON -->

              <!-- TEXT STICKER CONTENT -->
              <span class="text-sticker-content">Most Popular Post</span>
              <!-- /TEXT STICKER CONTENT -->
            </p>
            <!-- /TEXT STICKER -->

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
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $user->pictureUrl) }}"></div>
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
                      <p class="user-avatar-badge-text">{{ $user->level }}</p>
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
                <p class="user-status-text small">17 hours ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">Tomorow I'll be livestreaming along with <a href="profile-timeline.html">@DestroyDex</a> on my Youtube channel. We are gonna do a spedrun of Super Mochi Bros 3!</p>
              <!-- /WIDGET BOX STATUS TEXT -->
      
              <!-- VIDEO STATUS -->
              <a class="video-status" href="https://www.youtube.com/" target="_blank">
                <!-- VIDEO STATUS IMAGE -->
                <img class="video-status-image" src="img/cover/50.jpg" alt="cover-50">
                <!-- /VIDEO STATUS IMAGE -->
      
                <!-- VIDEO STATUS INFO -->
                <div class="video-status-info">
                  <!-- VIDEO STATUS META -->
                  <p class="video-status-meta">youtube.com</p>
                  <!-- /VIDEO STATUS META -->
      
                  <!-- VIDEO STATUS TITLE -->
                  <p class="video-status-title"><span class="bold">GameHuntress</span> on <span class="highlighted">Youtube</span></p>
                  <!-- /VIDEO STATUS TITLE -->
      
                  <!-- VIDEO STATUS TEXT -->
                  <p class="video-status-text">Watch the GameHuntress play all the greatest games.</p>
                  <!-- /VIDEO STATUS TEXT -->
                </div>
                <!-- /VIDEO STATUS INFO -->
              </a>
              <!-- /VIDEO STATUS -->
      
              <!-- TAG LIST -->
              <div class="tag-list">
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Stream</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Youtube</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Gaming</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Retro</a>
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
                        <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                        <!-- /REACTION IMAGE -->
            
                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Matt Parker</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Destroy Dex</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">The Green Goo</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
      
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
                          <p class="simple-dropdown-text">Sandra Strange</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jane Rodgers</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
      
                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/funny.png" alt="reaction-funny">
                        <!-- /REACTION IMAGE -->
            
                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
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
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jett Spiegel</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Marcus Jhonson</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
      
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><span class="bold">and 12 more...</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">22</p>
                    <!-- /META LINE TEXT -->
                  </div>
                  <!-- /META LINE -->
            
                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE LIST -->
                    <div class="meta-line-list user-avatar-list">
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->
                    
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="img/avatar/09.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
            
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->
                    
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
            
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->
                    
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="img/avatar/12.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
            
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->
                    
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="img/avatar/16.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
            
                      <!-- USER AVATAR -->
                      <div class="user-avatar micro no-stats">
                        <!-- USER AVATAR BORDER -->
                        <div class="user-avatar-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BORDER -->
                    
                        <!-- USER AVATAR CONTENT -->
                        <div class="user-avatar-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-image-18-20" data-src="img/avatar/06.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">30 Participants</p>
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
                    <p class="meta-line-link">12 Comments</p>
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
              <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->
      
                <!-- POST OPTION TEXT -->
                <p class="post-option-text">React!</p>
                <!-- /POST OPTION TEXT -->
              </div>
              <!-- /POST OPTION -->
      
              <!-- REACTION OPTIONS -->
              <div class="reaction-options reaction-options-dropdown">
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
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
              </svg>
              <!-- /POST OPTION ICON -->
      
              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Comment</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->
      
            <!-- POST OPTION -->
            <div class="post-option">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-share">
                <use xlink:href="#svg-share"></use>
              </svg>
              <!-- /POST OPTION ICON -->
      
              <!-- POST OPTION TEXT -->
              <p class="post-option-text">Share</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->
          </div>
          <!-- /POST OPTIONS -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Personal Activity</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content padded-for-scroll medium" data-simplebar>
            <!-- USER STATUS LIST -->
            <div class="user-status-list scroll-content">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-reaction">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> left a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on <a class="highlighted" href="profile-timeline.html">Destroy Dex</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">3 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-update">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> updated her <a class="highlighted" href="profile-photos.html">profile picture</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">11 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-reaction">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> left a happy <img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> reaction on <a class="highlighted" href="profile-timeline.html">Neko Bebop</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">3 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-comment">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> commented on <a class="highlighted" href="profile-timeline.html">Sarah Diamond</a>'s <a class="highlighted" href="profile-photos.html">photo</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">35 minutes ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-update">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> posted a new <a class="highlighted" href="profile-timeline.html">status update</a> "Hi to all! Remember"</p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">1 hour ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-comment">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> replied to a <a class="highlighted" href="profile-timeline.html">Damian Greyson</a>'s <a class="highlighted" href="profile-timeline.html">comment</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">1 hour ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-share">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-share">
                    <use xlink:href="#svg-share"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> shared <a class="highlighted" href="profile-timeline.html">Destroy Dex</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">4 hours ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-reaction">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> left a wow! <img class="reaction" src="img/reaction/wow.png" alt="reaction-wow"> reaction on <a class="highlighted" href="profile-timeline.html">Destroy Dex</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">2 days ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-update">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> updated her <a class="highlighted" href="profile-timeline.html">cover picture</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">1 week ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-reaction">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> left a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on <a class="highlighted" href="profile-timeline.html">Nick Grissom</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">1 week ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS ACTIVITY -->
                <div class="user-status-activity activity-reaction">
                  <!-- USER STATUS ACTIVITY ICON -->
                  <svg class="user-status-activity-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /USER STATUS ACTIVITY ICON -->
                </div>
                <!-- /USER STATUS ACTIVITY -->
            
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{ $user->name }}</a> left a funny <img class="reaction" src="img/reaction/funny.png" alt="reaction-funny"> reaction on <a class="highlighted" href="profile-timeline.html">Bearded Wonder</a>'s <a class="highlighted" href="profile-timeline.html">status update</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TIMESTAMP -->
                <p class="user-status-timestamp small-space">2 weeks ago</p>
                <!-- /USER STATUS TIMESTAMP -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /USER STATUS LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID -->

      <!-- SLIDER LINE -->
      <div class="slider-line">
        <!-- SLIDER CONTROLS -->
        <div id="stat-block-slider-controls" class="slider-controls">
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
    
        <!-- SLIDER SLIDES -->
        <div id="stat-block-slider" class="slider-slides">
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->
    
              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Last friend added</p>
                <!-- /STAT BLOCK TITLE -->
    
                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">5 Days Ago</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-status">
                  <use xlink:href="#svg-status"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->
    
              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Last post update</p>
                <!-- /STAT BLOCK TITLE -->
    
                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">1 Day Ago</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->
    
              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Most commented post</p>
                <!-- /STAT BLOCK TITLE -->
    
                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">56 Comments</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->
    
              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Most liked post</p>
                <!-- /STAT BLOCK TITLE -->
    
                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">904 Likes</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /SLIDER SLIDE -->
    
          <!-- SLIDER SLIDE -->
          <div class="slider-slide">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-share">
                  <use xlink:href="#svg-share"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->
    
              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Most shared post</p>
                <!-- /STAT BLOCK TITLE -->
    
                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">156 Shares</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /SLIDER SLIDE -->
        </div>
        <!-- /SLIDER SLIDES -->
      </div>
      <!-- /SLIDER LINE -->
    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Overview</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Gamification</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid">
      <!-- GRID -->
      <div class="grid grid-half change-on-desktop">
        <!-- ACHIEVEMENT BOX -->
        <div class="achievement-box secondary">
          <!-- ACHIEVEMENT BOX INFO WRAP -->
          <div class="achievement-box-info-wrap">
            <!-- ACHIEVEMENT BOX IMAGE -->
            <img class="achievement-box-image" src="img/badge/caffeinated-b.png" alt="badge-caffeinated-b">
            <!-- /ACHIEVEMENT BOX IMAGE -->
      
            <!-- ACHIEVEMENT BOX INFO -->
            <div class="achievement-box-info">
              <!-- ACHIEVEMENT BOX TITLE -->
              <p class="achievement-box-title">Last Badge Unlocked</p>
              <!-- /ACHIEVEMENT BOX TITLE -->
      
              <!-- ACHIEVEMENT BOX TEXT -->
              <p class="achievement-box-text"><span class="bold">Caffeinated</span> 2 days ago</p>
              <!-- /ACHIEVEMENT BOX TEXT -->
            </div>
            <!-- /ACHIEVEMENT BOX INFO -->
          </div>
          <!-- /ACHIEVEMENT BOX INFO WRAP -->
      
          <!-- BUTTON -->
          <a class="button white-solid" href="badges.html">Browse All</a>
          <!-- /BUTTON -->
        </div>
        <!-- /ACHIEVEMENT BOX -->
      
        <!-- ACHIEVEMENT BOX -->
        <div class="achievement-box primary">
          <!-- ACHIEVEMENT BOX INFO WRAP -->
          <div class="achievement-box-info-wrap">
            <!-- ACHIEVEMENT BOX IMAGE -->
            <img class="achievement-box-image" src="img/quest/completedq-l.png" alt="quest-completedq-l">
            <!-- /ACHIEVEMENT BOX IMAGE -->
      
            <!-- ACHIEVEMENT BOX INFO -->
            <div class="achievement-box-info">
              <!-- ACHIEVEMENT BOX TITLE -->
              <p class="achievement-box-title">Last Completed Quest</p>
              <!-- /ACHIEVEMENT BOX TITLE -->
      
              <!-- ACHIEVEMENT BOX TEXT -->
              <p class="achievement-box-text"><span class="bold">Nothing to Hide</span> 7 hours ago</p>
              <!-- /ACHIEVEMENT BOX TEXT -->
            </div>
            <!-- /ACHIEVEMENT BOX INFO -->
          </div>
          <!-- /ACHIEVEMENT BOX INFO WRAP -->
      
          <!-- BUTTON -->
          <a class="button white-solid" href="quests.html">Browse All</a>
          <!-- /BUTTON -->
        </div>
        <!-- /ACHIEVEMENT BOX -->
      </div>
      <!-- /GRID -->

      <!-- GRID -->
      <div class="grid grid-3-9">
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
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- LEVEL PROGRESS BOX -->
          <div class="level-progress-box">
            <!-- LEVEL PROGRESS BADGE -->
            <div class="level-progress-badge">
              <!-- LEVEL PROGRESS BADGE TITLE -->
              <p class="level-progress-badge-title">Level</p>
              <!-- /LEVEL PROGRESS BADGE TITLE -->
        
              <!-- LEVEL PROGRESS BADGE TEXT -->
              <p class="level-progress-badge-text">{{ $user->level }}</p>
              <!-- /LEVEL PROGRESS BADGE TEXT -->
            </div>
            <!-- /LEVEL PROGRESS BADGE -->
        
            <!-- PROGRESS STAT -->
            <div class="progress-stat">
              <!-- BAR PROGRESS WRAP -->
              <div class="bar-progress-wrap big">
                <!-- BAR PROGRESS INFO -->
                <p class="bar-progress-info start negative progress-with-text">+<span class="bar-progress-text"></span><span class="light">to reach the next level</span></p>
                <!-- /BAR PROGRESS INFO -->
          
                <!-- PROGRESS STAT INFO -->
                <p class="progress-stat-info">{{ $user->points }} total exp points received</p>
                <!-- /PROGRESS STAT INFO -->
              </div>
              <!-- /BAR PROGRESS WRAP -->
          
              <!-- PROGRESS STAT BAR -->
              <div id="exp-to-next-level" class="progress-stat-bar"></div>


              <!-- /PROGRESS STAT BAR -->
            </div>
            <!-- /PROGRESS STAT -->
          </div>
          <!-- /LEVEL PROGRESS BOX -->

          <!-- WIDGET BOX -->
          <div class="widget-box no-padding">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Experience History</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content small-margin-top padded-for-scroll small" data-simplebar>
              <!-- EXP LINE LIST -->
              <div class="exp-line-list scroll-content">
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-badges">
                    <use xlink:href="#svg-badges"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    80 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Keep it up! You reached tier II of the "The Warrior" badge</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">29 minutes ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-quests">
                    <use xlink:href="#svg-quests"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    65 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Congratz! You have completed the "Nothing to Hide" quest</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">7 hours ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-badges">
                    <use xlink:href="#svg-badges"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    40 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Great job! You just unlocked the "Caffeinated" badge</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">2 days ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-badges">
                    <use xlink:href="#svg-badges"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    100 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Amazing! You just unlocked the "Gold User" badge</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">5 days ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-badges">
                    <use xlink:href="#svg-badges"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    40 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Great job! You just unlocked the "Crazy Scientist" badge</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">1 week ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-quests">
                    <use xlink:href="#svg-quests"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    20 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Congratz! You have completed the "Press Start" quest</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">2 weeks ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
        
                <!-- EXP LINE -->
                <div class="exp-line">
                  <!-- EXP LINE ICON -->
                  <svg class="exp-line-icon icon-quests">
                    <use xlink:href="#svg-quests"></use>
                  </svg>
                  <!-- /EXP LINE ICON -->
        
                  <!-- TEXT STICKER -->
                  <p class="text-sticker small-text">
                    <!-- TEXT STICKER ICON -->
                    <svg class="text-sticker-icon icon-plus-small">
                      <use xlink:href="#svg-plus-small"></use>
                    </svg>
                    <!-- TEXT STICKER ICON -->
                    60 EXP
                  </p>
                  <!-- /TEXT STICKER -->
        
                  <!-- EXP LINE TEXT -->
                  <p class="exp-line-text">Congratz! You have completed the "Social King" quest</p>
                  <!-- /EXP LINE TEXT -->
        
                  <!-- EXP LINE TIMESTAMP -->
                  <p class="exp-line-timestamp">3 weeks ago</p>
                  <!-- /EXP LINE TIMESTAMP -->
                </div>
                <!-- /EXP LINE -->
              </div>
              <!-- /EXP LINE LIST -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
      <!-- /GRID -->
    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Overview</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Account Analytics</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid">
      <!-- GRID -->
      <div class="grid grid-3-3-3-3 centered">
        <!-- ACCOUNT STAT BOX -->
        <div class="account-stat-box account-stat-active-users">
          <!-- ACCOUNT STAT BOX ICON WRAP -->
          <div class="account-stat-box-icon-wrap">
            <!-- ACCOUNT STAT BOX ICON -->
            <svg class="account-stat-box-icon icon-friend">
              <use xlink:href="#svg-friend"></use>
            </svg>
            <!-- /ACCOUNT STAT BOX ICON -->
          </div>
          <!-- /ACCOUNT STAT BOX ICON WRAP -->
      
          <!-- ACCOUNT STAT BOX TITLE -->
          <p class="account-stat-box-title">71</p>
          <!-- /ACCOUNT STAT BOX TITLE -->
      
          <!-- ACCOUNT STAT BOX SUBTITLE -->
          <p class="account-stat-box-subtitle">Active Users</p>
          <!-- /ACCOUNT STAT BOX SUBTITLE -->
      
          <!-- ACCOUNT STAT BOX TEXT -->
          <p class="account-stat-box-text">Amount of active users visiting your account at this moment</p>
          <!-- /ACCOUNT STAT BOX TEXT -->
        </div>
        <!-- /ACCOUNT STAT BOX -->

        <!-- ACCOUNT STAT BOX -->
        <div class="account-stat-box account-stat-visits">
          <!-- PERCENTAGE DIFF -->
          <div class="percentage-diff">
            <!-- PERCENTAGE DIFF ICON WRAP -->
            <div class="percentage-diff-icon-wrap positive">
              <!-- PERCENTAGE DIFF ICON -->
              <svg class="percentage-diff-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
              </svg>
              <!-- /PERCENTAGE DIFF ICON -->
            </div>
            <!-- /PERCENTAGE DIFF ICON WRAP -->
      
            <!-- PERCENTAGE DIFF TEXT -->
            <p class="percentage-diff-text">3.6%</p>
            <!-- /PERCENTAGE DIFF TEXT -->
          </div>
          <!-- /PERCENTAGE DIFF -->

          <!-- ACCOUNT STAT BOX ICON WRAP -->
          <div class="account-stat-box-icon-wrap">
            <!-- ACCOUNT STAT BOX ICON -->
            <svg class="account-stat-box-icon icon-members">
              <use xlink:href="#svg-members"></use>
            </svg>
            <!-- /ACCOUNT STAT BOX ICON -->
          </div>
          <!-- /ACCOUNT STAT BOX ICON WRAP -->
      
          <!-- ACCOUNT STAT BOX TITLE -->
          <p class="account-stat-box-title">262</p>
          <!-- /ACCOUNT STAT BOX TITLE -->
      
          <!-- ACCOUNT STAT BOX SUBTITLE -->
          <p class="account-stat-box-subtitle">Account Visits</p>
          <!-- /ACCOUNT STAT BOX SUBTITLE -->
      
          <!-- ACCOUNT STAT BOX TEXT -->
          <p class="account-stat-box-text">Times old or new members visited any of your acount pages this month</p>
          <!-- /ACCOUNT STAT BOX TEXT -->
        </div>
        <!-- /ACCOUNT STAT BOX -->

        <!-- ACCOUNT STAT BOX -->
        <div class="account-stat-box account-stat-session-duration">
          <!-- PERCENTAGE DIFF -->
          <div class="percentage-diff">
            <!-- PERCENTAGE DIFF ICON WRAP -->
            <div class="percentage-diff-icon-wrap negative">
              <!-- PERCENTAGE DIFF ICON -->
              <svg class="percentage-diff-icon icon-minus-small">
                <use xlink:href="#svg-minus-small"></use>
              </svg>
              <!-- /PERCENTAGE DIFF ICON -->
            </div>
            <!-- /PERCENTAGE DIFF ICON WRAP -->
      
            <!-- PERCENTAGE DIFF TEXT -->
            <p class="percentage-diff-text">2.4%</p>
            <!-- /PERCENTAGE DIFF TEXT -->
          </div>
          <!-- /PERCENTAGE DIFF -->

          <!-- ACCOUNT STAT BOX ICON WRAP -->
          <div class="account-stat-box-icon-wrap">
            <!-- ACCOUNT STAT BOX ICON -->
            <svg class="account-stat-box-icon icon-clock">
              <use xlink:href="#svg-clock"></use>
            </svg>
            <!-- /ACCOUNT STAT BOX ICON -->
          </div>
          <!-- /ACCOUNT STAT BOX ICON WRAP -->
      
          <!-- ACCOUNT STAT BOX TITLE -->
          <p class="account-stat-box-title">4:39</p>
          <!-- /ACCOUNT STAT BOX TITLE -->
      
          <!-- ACCOUNT STAT BOX SUBTITLE -->
          <p class="account-stat-box-subtitle">Session Duration</p>
          <!-- /ACCOUNT STAT BOX SUBTITLE -->
      
          <!-- ACCOUNT STAT BOX TEXT -->
          <p class="account-stat-box-text">Average time in minutes of how much people spend on your pages</p>
          <!-- /ACCOUNT STAT BOX TEXT -->
        </div>
        <!-- /ACCOUNT STAT BOX -->

        <!-- ACCOUNT STAT BOX -->
        <div class="account-stat-box account-stat-returning-visitors">
          <!-- PERCENTAGE DIFF -->
          <div class="percentage-diff">
            <!-- PERCENTAGE DIFF ICON WRAP -->
            <div class="percentage-diff-icon-wrap positive">
              <!-- PERCENTAGE DIFF ICON -->
              <svg class="percentage-diff-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
              </svg>
              <!-- /PERCENTAGE DIFF ICON -->
            </div>
            <!-- /PERCENTAGE DIFF ICON WRAP -->
      
            <!-- PERCENTAGE DIFF TEXT -->
            <p class="percentage-diff-text">8.2%</p>
            <!-- /PERCENTAGE DIFF TEXT -->
          </div>
          <!-- /PERCENTAGE DIFF -->

          <!-- ACCOUNT STAT BOX ICON WRAP -->
          <div class="account-stat-box-icon-wrap">
            <!-- ACCOUNT STAT BOX ICON -->
            <svg class="account-stat-box-icon icon-return">
              <use xlink:href="#svg-return"></use>
            </svg>
            <!-- /ACCOUNT STAT BOX ICON -->
          </div>
          <!-- /ACCOUNT STAT BOX ICON WRAP -->
      
          <!-- ACCOUNT STAT BOX TITLE -->
          <p class="account-stat-box-title">80%</p>
          <!-- /ACCOUNT STAT BOX TITLE -->
      
          <!-- ACCOUNT STAT BOX SUBTITLE -->
          <p class="account-stat-box-subtitle">Returning Visitors</p>
          <!-- /ACCOUNT STAT BOX SUBTITLE -->
      
          <!-- ACCOUNT STAT BOX TEXT -->
          <p class="account-stat-box-text">Percentage of visitors that visited your account more than once</p>
          <!-- /ACCOUNT STAT BOX TEXT -->
        </div>
        <!-- /ACCOUNT STAT BOX -->
      </div>
      <!-- /GRID -->

      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX ACTIONS -->
        <div class="widget-box-actions">
          <!-- WIDGET BOX ACTION -->
          <div class="widget-box-action">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Monthly Report</p>
            <!-- /WIDGET BOX TITLE -->
          </div>
          <!-- /WIDGET BOX ACTION -->
    
          <!-- WIDGET BOX ACTION -->
          <div class="widget-box-action">
            <!-- REFERENCE ITEM LIST -->
            <div class="reference-item-list">
              <!-- REFERENCE ITEM -->
              <div class="reference-item">
                <!-- REFERENCE BULLET -->
                <div class="reference-bullet primary"></div>
                <!-- REFERENCE BULLET -->
    
                <!-- REFERENCE ITEM TEXT -->
                <p class="reference-item-text">Visits</p>
                <!-- /REFERENCE ITEM TEXT -->
              </div>
              <!-- /REFERENCE ITEM -->
    
              <!-- REFERENCE ITEM -->
              <div class="reference-item">
                <!-- REFERENCE BULLET -->
                <div class="reference-bullet secondary"></div>
                <!-- REFERENCE BULLET -->
    
                <!-- REFERENCE ITEM TEXT -->
                <p class="reference-item-text">Engagements</p>
                <!-- /REFERENCE ITEM TEXT -->
              </div>
              <!-- /REFERENCE ITEM -->
            </div>
            <!-- /REFERENCE ITEM LIST -->
    
            <!-- FORM SELECT -->
            <div class="form-select v2">
              <select id="ve-monthly-report-date" name="ve_monthly_report_date">
                <option value="0">September 2019</option>
                <option value="1">November 2019</option>
              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
            </div>
            <!-- /FORM SELECT -->
          </div>
          <!-- /WIDGET BOX ACTION -->
        </div>
        <!-- /WIDGET BOX ACTIONS -->
    
        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- CHART WRAP -->
          <div class="chart-wrap">
            <!-- CHART -->
            <div class="chart">
              <canvas id="ve-monthly-report-chart"></canvas>
            </div>
            <!-- /CHART -->
          </div>
          <!-- /CHART WRAP -->
        </div>
        <!-- WIDGET BOX CONTENT -->

        <!-- WIDGET BOX FOOTER -->
        <div class="widget-box-footer">
          <!-- CHART INFO -->
          <div class="chart-info">
            <!-- PROGRESS ARC WRAP -->
            <div class="progress-arc-wrap tiny">
              <!-- PROGRESS ARC -->
              <div class="progress-arc">
                <canvas id="ve-monthly-report-ratio-chart"></canvas>
              </div>
              <!-- PROGRESS ARC -->
          
              <!-- PROGRESS ARC INFO -->
              <div class="progress-arc-info">
                <!-- PROGRESS ARC TITLE -->
                <p class="progress-arc-title">Ratio</p>
                <!-- /PROGRESS ARC TITLE -->
              </div>
              <!-- /PROGRESS ARC INFO -->
            </div>
            <!-- /PROGRESS ARC WRAP -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1.067</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">t. visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">298</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">t. engagements</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">34.4</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">avg visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
      
              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">9.6</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">avg engagements</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->

              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">
                  <!-- USER STAT TITLE ICON -->
                  <svg class="user-stat-title-icon positive icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /USER STAT TITLE ICON -->
                  26.3%
                </p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits / jul 2019</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->

              <!-- USER STAT -->
              <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">
                  <!-- USER STAT TITLE ICON -->
                  <svg class="user-stat-title-icon negative icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /USER STAT TITLE ICON -->
                  4.9%
                </p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">engagements / jul 2019</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
          </div>
          <!-- /CHART INFO -->
        </div>
        <!-- /WIDGET BOX FOOTER -->
      </div>
      <!-- /WIDGET BOX -->

      <!-- GRID -->
      <div class="grid grid-9-3 stretched">
        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Top Friends Activity</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content no-margin-top">
              <!-- TABLE -->
              <div class="table table-top-friends join-rows">
                <!-- TABLE HEADER -->
                <div class="table-header">
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Friend</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
            
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column centered padded">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Reactions</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
            
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column centered padded">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Comments</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
            
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column centered padded">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Shares</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
            
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column centered padded">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Replies</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
            
                  <!-- TABLE HEADER COLUMN -->
                  <div class="table-header-column padded-left">
                    <!-- TABLE HEADER TITLE -->
                    <p class="table-header-title">Post Engagement</p>
                    <!-- /TABLE HEADER TITLE -->
                  </div>
                  <!-- /TABLE HEADER COLUMN -->
                </div>
                <!-- /TABLE HEADER -->
            
                <!-- TABLE BODY -->
                <div class="table-body">
                  <!-- TABLE ROW -->
                  <div class="table-row tiny">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
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
                        <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                        <!-- /USER STATUS TITLE -->
                    
                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Friended: Jan 14, 2017</p>
                        <!-- /USER STATUS TEXT -->
                      </div>
                      <!-- /USER STATUS -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">1569</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">750</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">109</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">223</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-left">
                      <!-- PROGRESS STAT WRAP -->
                      <div class="progress-stat-wrap">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                          <!-- PROGRESS STAT BAR -->
                          <div id="post-engagement-1" class="progress-stat-bar"></div>
                          <!-- /PROGRESS STAT BAR -->
                    
                          <!-- BAR PROGRESS WRAP -->
                          <div class="bar-progress-wrap">
                            <!-- BAR PROGRESS INFO -->
                            <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                            <!-- /BAR PROGRESS INFO -->
                          </div>
                          <!-- /BAR PROGRESS WRAP -->
                        </div>
                        <!-- /PROGRESS STAT -->
                      </div>
                      <!-- /PROGRESS STAT WRAP -->
                    </div>
                    <!-- /TABLE COLUMN -->
                  </div>
                  <!-- /TABLE ROW -->
            
                  <!-- TABLE ROW -->
                  <div class="table-row tiny">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
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
                              <p class="user-avatar-badge-text">13</p>
                              <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                          </div>
                          <!-- /USER AVATAR -->
                        </a>
                        <!-- /USER STATUS AVATAR -->
                    
                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a></p>
                        <!-- /USER STATUS TITLE -->
                    
                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Friended: May 22, 2017</p>
                        <!-- /USER STATUS TEXT -->
                      </div>
                      <!-- /USER STATUS -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">1036</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">803</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">97</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">126</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-left">
                      <!-- PROGRESS STAT WRAP -->
                      <div class="progress-stat-wrap">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                          <!-- PROGRESS STAT BAR -->
                          <div id="post-engagement-2" class="progress-stat-bar"></div>
                          <!-- /PROGRESS STAT BAR -->
                    
                          <!-- BAR PROGRESS WRAP -->
                          <div class="bar-progress-wrap">
                            <!-- BAR PROGRESS INFO -->
                            <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                            <!-- /BAR PROGRESS INFO -->
                          </div>
                          <!-- /BAR PROGRESS WRAP -->
                        </div>
                        <!-- /PROGRESS STAT -->
                      </div>
                      <!-- /PROGRESS STAT WRAP -->
                    </div>
                    <!-- /TABLE COLUMN -->
                  </div>
                  <!-- /TABLE ROW -->

                  <!-- TABLE ROW -->
                  <div class="table-row tiny">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
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
                        <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
                        <!-- /USER STATUS TITLE -->
                    
                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Friended: Sep 19, 2018</p>
                        <!-- /USER STATUS TEXT -->
                      </div>
                      <!-- /USER STATUS -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">860</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">662</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">102</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">91</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-left">
                      <!-- PROGRESS STAT WRAP -->
                      <div class="progress-stat-wrap">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                          <!-- PROGRESS STAT BAR -->
                          <div id="post-engagement-3" class="progress-stat-bar"></div>
                          <!-- /PROGRESS STAT BAR -->
                    
                          <!-- BAR PROGRESS WRAP -->
                          <div class="bar-progress-wrap">
                            <!-- BAR PROGRESS INFO -->
                            <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                            <!-- /BAR PROGRESS INFO -->
                          </div>
                          <!-- /BAR PROGRESS WRAP -->
                        </div>
                        <!-- /PROGRESS STAT -->
                      </div>
                      <!-- /PROGRESS STAT WRAP -->
                    </div>
                    <!-- /TABLE COLUMN -->
                  </div>
                  <!-- /TABLE ROW -->

                  <!-- TABLE ROW -->
                  <div class="table-row tiny">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
                      <!-- USER STATUS -->
                      <div class="user-status">
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
                        <p class="user-status-text small">Friended: Aug 6, 2017</p>
                        <!-- /USER STATUS TEXT -->
                      </div>
                      <!-- /USER STATUS -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">742</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">401</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">77</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">64</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-left">
                      <!-- PROGRESS STAT WRAP -->
                      <div class="progress-stat-wrap">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                          <!-- PROGRESS STAT BAR -->
                          <div id="post-engagement-4" class="progress-stat-bar"></div>
                          <!-- /PROGRESS STAT BAR -->
                    
                          <!-- BAR PROGRESS WRAP -->
                          <div class="bar-progress-wrap">
                            <!-- BAR PROGRESS INFO -->
                            <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                            <!-- /BAR PROGRESS INFO -->
                          </div>
                          <!-- /BAR PROGRESS WRAP -->
                        </div>
                        <!-- /PROGRESS STAT -->
                      </div>
                      <!-- /PROGRESS STAT WRAP -->
                    </div>
                    <!-- /TABLE COLUMN -->
                  </div>
                  <!-- /TABLE ROW -->

                  <!-- TABLE ROW -->
                  <div class="table-row tiny">
                    <!-- TABLE COLUMN -->
                    <div class="table-column">
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
                        <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a></p>
                        <!-- /USER STATUS TITLE -->
                    
                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">Friended: Dec 27, 2019</p>
                        <!-- /USER STATUS TEXT -->
                      </div>
                      <!-- /USER STATUS -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">421</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">200</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">34</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column centered padded">
                      <!-- TABLE TITLE -->
                      <p class="table-title">22</p>
                      <!-- /TABLE TITLE -->
                    </div>
                    <!-- /TABLE COLUMN -->
            
                    <!-- TABLE COLUMN -->
                    <div class="table-column padded-left">
                      <!-- PROGRESS STAT WRAP -->
                      <div class="progress-stat-wrap">
                        <!-- PROGRESS STAT -->
                        <div class="progress-stat">
                          <!-- PROGRESS STAT BAR -->
                          <div id="post-engagement-5" class="progress-stat-bar"></div>
                          <!-- /PROGRESS STAT BAR -->
                    
                          <!-- BAR PROGRESS WRAP -->
                          <div class="bar-progress-wrap">
                            <!-- BAR PROGRESS INFO -->
                            <p class="bar-progress-info medium negative"><span class="bar-progress-text no-space"></span></p>
                            <!-- /BAR PROGRESS INFO -->
                          </div>
                          <!-- /BAR PROGRESS WRAP -->
                        </div>
                        <!-- /PROGRESS STAT -->
                      </div>
                      <!-- /PROGRESS STAT WRAP -->
                    </div>
                    <!-- /TABLE COLUMN -->
                  </div>
                  <!-- /TABLE ROW -->
                </div>
                <!-- /TABLE BODY -->
              </div>
              <!-- /TABLE -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX ACTIONS -->
            <div class="widget-box-actions">
              <!-- WIDGET BOX ACTION -->
              <div class="widget-box-action">
                <!-- WIDGET BOX TITLE -->
                <p class="widget-box-title">Engagements</p>
                <!-- /WIDGET BOX TITLE -->
              </div>
              <!-- /WIDGET BOX ACTION -->
            </div>
            <!-- /WIDGET BOX ACTIONS -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- PROGRESS ARC WRAP -->
              <div class="progress-arc-wrap">
                <!-- PROGRESS ARC -->
                <div class="progress-arc">
                  <canvas id="engagements-chart"></canvas>
                </div>
                <!-- PROGRESS ARC -->

                <!-- PROGRESS ARC INFO -->
                <div class="progress-arc-info">
                  <!-- PROGRESS ARC TITLE -->
                  <p class="progress-arc-title">28.8K</p>
                  <!-- /PROGRESS ARC TITLE -->

                  <!-- PROGRESS ARC TEXT -->
                  <p class="progress-arc-text">Engagements</p>
                  <!-- /PROGRESS ARC TEXT -->
                </div>
                <!-- /PROGRESS ARC INFO -->
              </div>
              <!-- /PROGRESS ARC WRAP -->

              <!-- USER STATS -->
              <div class="user-stats reference">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- REFERENCE BULLET -->
                  <div class="reference-bullet secondary"></div>
                  <!-- /REFERENCE BULLET -->

                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">18.3K</p>
                  <!-- /USER STAT TITLE -->
          
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">reactions</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
          
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- REFERENCE BULLET -->
                  <div class="reference-bullet primary"></div>
                  <!-- /REFERENCE BULLET -->

                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">5.2K</p>
                  <!-- /USER STAT TITLE -->
          
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">comments</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /USER STATS -->

              <!-- USER STATS -->
              <div class="user-stats reference">
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- REFERENCE BULLET -->
                  <div class="reference-bullet blue"></div>
                  <!-- /REFERENCE BULLET -->

                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">1.4K</p>
                  <!-- /USER STAT TITLE -->
          
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">shares</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
          
                <!-- USER STAT -->
                <div class="user-stat big">
                  <!-- REFERENCE BULLET -->
                  <div class="reference-bullet light-blue"></div>
                  <!-- /REFERENCE BULLET -->

                  <!-- USER STAT TITLE -->
                  <p class="user-stat-title">3.9K</p>
                  <!-- /USER STAT TITLE -->
          
                  <!-- USER STAT TEXT -->
                  <p class="user-stat-text">replies</p>
                  <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
              </div>
              <!-- /USER STATS -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
      <!-- /GRID -->

      <!-- GRID -->
      <div class="grid grid-3-9 stretched">
        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Visits Top Countries</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- COUNTRY STAT LIST -->
              <div class="country-stat-list">
                <!-- COUNTRY STAT -->
                <div class="country-stat with-progress">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/usa.png" alt="flag-usa">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- PROGRESS STAT -->
                  <div class="progress-stat small">
                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info medium negative regular">United States<span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                
                    <!-- PROGRESS STAT BAR -->
                    <div id="top-country-1" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat with-progress">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/india.png" alt="flag-india">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- PROGRESS STAT -->
                  <div class="progress-stat small">
                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info medium negative regular">India<span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                
                    <!-- PROGRESS STAT BAR -->
                    <div id="top-country-2" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat with-progress">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/brazil.png" alt="flag-brazil">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- PROGRESS STAT -->
                  <div class="progress-stat small">
                    <!-- BAR PROGRESS WRAP -->
                    <div class="bar-progress-wrap">
                      <!-- BAR PROGRESS INFO -->
                      <p class="bar-progress-info medium negative regular">Brazil<span class="bar-progress-text no-space"></span></p>
                      <!-- /BAR PROGRESS INFO -->
                    </div>
                    <!-- /BAR PROGRESS WRAP -->
                
                    <!-- PROGRESS STAT BAR -->
                    <div id="top-country-3" class="progress-stat-bar"></div>
                    <!-- /PROGRESS STAT BAR -->
                  </div>
                  <!-- /PROGRESS STAT -->
                </div>
                <!-- /COUNTRY STAT -->
              
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/canada.png" alt="flag-canada">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">Canada</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">8.922</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/russia.png" alt="flag-russia">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">Russia</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">6.303</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/turkey.png" alt="flag-turkey">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">Turkey</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">6.278</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/france.png" alt="flag-france">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">France</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">4.520</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/germany.png" alt="flag-germany">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">Germany</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">3.225</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
        
                <!-- COUNTRY STAT -->
                <div class="country-stat">
                  <!-- COUNTRY STAT IMAGE -->
                  <img class="country-stat-image" src="img/flag/argentina.png" alt="flag-argentina">
                  <!-- /COUNTRY STAT IMAGE -->
              
                  <!-- COUNTRY STAT TITLE -->
                  <p class="country-stat-title">Argentina</p>
                  <!-- /COUNTRY STAT TITLE -->
              
                  <!-- COUNTRY STAT TEXT -->
                  <p class="country-stat-text">1.744</p>
                  <!-- /COUNTRY STAT TEXT -->
                </div>
                <!-- /COUNTRY STAT -->
              </div>
              <!-- /COUNTRY STAT LIST -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX ACTIONS -->
            <div class="widget-box-actions">
              <!-- WIDGET BOX ACTION -->
              <div class="widget-box-action">
                <!-- WIDGET BOX TITLE -->
                <p class="widget-box-title">Visits World Map</p>
                <!-- /WIDGET BOX TITLE -->
              </div>
              <!-- /WIDGET BOX ACTION -->

              <!-- WIDGET BOX ACTION -->
              <div class="widget-box-action">
                <!-- FORM SELECT -->
                <div class="form-select v2">
                  <select id="visits-map-date" name="visits_map_date">
                    <option value="0">September 2019</option>
                    <option value="1">November 2019</option>
                  </select>
                  <!-- FORM SELECT ICON -->
                  <svg class="form-select-icon icon-small-arrow">
                    <use xlink:href="#svg-small-arrow"></use>
                  </svg>
                  <!-- /FORM SELECT ICON -->
                </div>
                <!-- /FORM SELECT -->
              </div>
              <!-- /WIDGET BOX ACTION -->
            </div>
            <!-- /WIDGET BOX ACTIONS -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FULL WIDTH IMAGE -->
              <img class="full-width-image" src="img/flag/map.png" alt="map">
              <!-- /FULL WIDTH IMAGE -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
      <!-- /GRID -->

      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX ACTIONS -->
        <div class="widget-box-actions">
          <!-- WIDGET BOX ACTION -->
          <div class="widget-box-action">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Yearly Report</p>
            <!-- /WIDGET BOX TITLE -->
          </div>
          <!-- /WIDGET BOX ACTION -->
    
          <!-- WIDGET BOX ACTION -->
          <div class="widget-box-action">
            <!-- REFERENCE ITEM LIST -->
            <div class="reference-item-list">
              <!-- REFERENCE ITEM -->
              <div class="reference-item">
                <!-- REFERENCE BULLET -->
                <div class="reference-bullet primary"></div>
                <!-- REFERENCE BULLET -->
    
                <!-- REFERENCE ITEM TEXT -->
                <p class="reference-item-text">Reactions</p>
                <!-- /REFERENCE ITEM TEXT -->
              </div>
              <!-- /REFERENCE ITEM -->
    
              <!-- REFERENCE ITEM -->
              <div class="reference-item">
                <!-- REFERENCE BULLET -->
                <div class="reference-bullet blue"></div>
                <!-- REFERENCE BULLET -->
    
                <!-- REFERENCE ITEM TEXT -->
                <p class="reference-item-text">Comments</p>
                <!-- /REFERENCE ITEM TEXT -->
              </div>
              <!-- /REFERENCE ITEM -->
            </div>
            <!-- /REFERENCE ITEM LIST -->
    
            <!-- FORM SELECT -->
            <div class="form-select v2">
              <select id="rc-yearly-report-date" name="rc_yearly_report_date">
                <option value="0">Jan - Dec 2018</option>
                <option value="1">Jan - Dec 2019</option>
              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
            </div>
            <!-- /FORM SELECT -->
          </div>
          <!-- /WIDGET BOX ACTION -->
        </div>
        <!-- /WIDGET BOX ACTIONS -->
    
        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- CHART WRAP -->
          <div class="chart-wrap">
            <!-- CHART -->
            <div class="chart">
              <canvas id="rc-yearly-report-chart"></canvas>
            </div>
            <!-- /CHART -->
          </div>
          <!-- /CHART WRAP -->
        </div>
        <!-- WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

@include('partials/footer')

<script>

  app.plugins.createProgressBar({
    container: '#exp-to-next-level',
    height: 6,
    gradient: {
      colors: ['#615dfa', '#41efff']
    },
    scale: {
      start: 0,
      end: 100,
      stop: {{ $nextLevel }}
    },
    linkText: true,
    linkUnits: 'exp',
    invertedProgress: true,
    animateOnScroll: true
  });
  
  
</script>