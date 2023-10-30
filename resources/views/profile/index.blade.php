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
    <!-- PROFILE HEADER -->
    <div class="profile-header">
      <!-- PROFILE HEADER COVER -->
      <figure class="profile-header-cover liquid">
        <img src="img/cover/01.jpg" alt="cover-01">
      </figure>
      <!-- /PROFILE HEADER COVER -->
  
      <!-- PROFILE HEADER INFO -->
      <div class="profile-header-info">
        <!-- USER SHORT DESCRIPTION -->
            @include('profile/partials/short_description')
        <!-- /USER SHORT DESCRIPTION -->
  
        <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
            @include('profile/partials/social_links')
        <!-- /PROFILE HEADER SOCIAL LINKS WRAP -->
  
        <!-- USER STATS -->
            @include('profile/partials/stats')
        <!-- /USER STATS -->
  
        <!-- PROFILE HEADER INFO ACTIONS -->
        <div class="profile-header-info-actions">
          <!-- PROFILE HEADER INFO ACTION -->
          <p class="profile-header-info-action button secondary"><span class="hide-text-mobile">Add</span> Friend +</p>
          <!-- /PROFILE HEADER INFO ACTION -->
          
          <!-- PROFILE HEADER INFO ACTION -->
          <p class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span> Message</p>
          <!-- /PROFILE HEADER INFO ACTION -->
        </div>
        <!-- /PROFILE HEADER INFO ACTIONS -->
      </div>
      <!-- /PROFILE HEADER INFO -->
    </div>
    <!-- /PROFILE HEADER -->

    <!-- SECTION NAVIGATION -->
        @include('profile/partials/navigation')
    <!-- /SECTION NAVIGATION -->

    <!-- GRID -->
    <div class="grid grid-3-6-3 mobile-prefer-content">
      <!-- GRID COLUMN -->
      <div class="grid-column">
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
          <p class="widget-box-title">About Me</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- PARAGRAPH -->
            <p class="paragraph">Hi! My name is Marina but some people may know me as GameHuntress! I have a Twitch channel where I stream, play and review all the newest games.</p>
            <!-- /PARAGRAPH -->
      
            <!-- INFORMATION LINE LIST -->
            <div class="information-line-list">
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Joined</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">March 26th, 2017</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">City</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">Los Angeles, California</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Country</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">United States</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Age</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">32 Years</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Web</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text"><a href="#">www.gamehuntress.com</a></p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
            </div>
            <!-- /INFORMATION LINE LIST -->
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
          <p class="widget-box-title">Badges <span class="highlighted">13</span></p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- BADGE LIST -->
            <div class="badge-list">
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Gold User">
                <img src="img/badge/gold-s.png" alt="badge-gold-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Profile Age">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Caffeinatted">
                <img src="img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="The Warrior">
                <img src="img/badge/warrior-s.png" alt="badge-warrior-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Forum Traveller">
                <img src="img/badge/traveller-s.png" alt="badge-traveller-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Crazy Scientist">
                <img src="img/badge/scientist-s.png" alt="badge-scientist-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Night Creature">
                <img src="img/badge/ncreature-s.png" alt="badge-ncreature-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Mightier Than Sword">
                <img src="img/badge/mightiers-s.png" alt="badge-mightiers-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="The Phantom">
                <img src="img/badge/phantom-s.png" alt="badge-phantom-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="The Collector">
                <img src="img/badge/collector-s.png" alt="badge-collector-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Bronze Cup">
                <img src="img/badge/bronzec-s.png" alt="badge-bronzec-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Silver Cup">
                <img src="img/badge/silverc-s.png" alt="badge-silverc-s">
              </div>
              <!-- /BADGE ITEM -->
      
              <!-- BADGE ITEM -->
              <div class="badge-item text-tooltip-tft" data-title="Gold Cup">
                <img src="img/badge/goldc-s.png" alt="badge-goldc-s">
              </div>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
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
          <p class="widget-box-title">Friends <span class="highlighted">82</span></p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- USER STATUS LIST -->
            <div class="user-status-list">
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
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
                <p class="user-status-title"><a class="bold" href="/{{ '@'.$profile->username }}">Sarah Diamond</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">2 friends in common</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
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
                <p class="user-status-title"><a class="bold" href="/{{ '@'.$profile->username }}">Nick Grissom</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">5 friends in common</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
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
                <p class="user-status-title"><a class="bold" href="/{{ '@'.$profile->username }}">Destroy Dex</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">0 friends in common</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
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
                <p class="user-status-title"><a class="bold" href="/{{ '@'.$profile->username }}">Neko Bebop</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">1 friends in common</p>
                <!-- /USER STATUS TEXT -->
            
                <!-- ACTION REQUEST LIST -->
                <div class="action-request-list">
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
      
              <!-- USER STATUS -->
              <div class="user-status request-small">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
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
                <p class="user-status-title"><a class="bold" href="/{{ '@'.$profile->username }}">The Green Goo</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">8 friends in common</p>
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
      
          <!-- WIDGET BOX BUTTON -->
          <a class="widget-box-button button small secondary" href="profile-friends.html">See all Friends</a>
          <!-- /WIDGET BOX BUTTON -->
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
          <p class="widget-box-title">Videos <span class="highlighted">7</span></p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- VIDEO BOX LIST -->
            <div class="video-box-list">
              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="img/cover/08.jpg" alt="cover-08">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->
            
                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->
            
                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">Mochi's Island Story Mode</p>
                    <!-- /VIDEO BOX TITLE -->
              
                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">1 hour ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->
      
              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="img/cover/09.jpg" alt="cover-09">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->
            
                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->
            
                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">Sunset Cowboys - Walkthrough</p>
                    <!-- /VIDEO BOX TITLE -->
              
                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">3 days ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->
      
              <!-- VIDEO BOX -->
              <div class="video-box small">
                <!-- VIDEO BOX COVER -->
                <div class="video-box-cover popup-video-trigger">
                  <!-- VIDEO BOX COVER IMAGE -->
                  <figure class="video-box-cover-image liquid">
                    <img src="img/cover/05.jpg" alt="cover-05">
                  </figure>
                  <!-- /VIDEO BOX COVER IMAGE -->
            
                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon icon-play">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->
            
                  <!-- VIDEO BOX INFO -->
                  <div class="video-box-info">
                    <!-- VIDEO BOX TITLE -->
                    <p class="video-box-title">Quest of the Ogre II: The Revenge USA...</p>
                    <!-- /VIDEO BOX TITLE -->
              
                    <!-- VIDEO BOX TEXT -->
                    <p class="video-box-text">5 days ago</p>
                    <!-- /VIDEO BOX TEXT -->
                  </div>
                  <!-- /VIDEO BOX INFO -->
                </div>
                <!-- /VIDEO BOX COVER -->
              </div>
              <!-- /VIDEO BOX -->
            </div>
            <!-- /VIDEO BOX LIST -->
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
          <p class="widget-box-title">Blog Posts <span class="highlighted">5</span></p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- POST PEEK LIST -->
            <div class="post-peek-list">
              <!-- POST PEEK -->
              <div class="post-peek">
                <!-- POST PEEK IMAGE -->
                <a class="post-peek-image" href="profile-post.html">
                  <figure class="picture small round liquid">
                    <img src="img/cover/19.jpg" alt="cover-19">
                  </figure>
                </a>
                <!-- /POST PEEK IMAGE -->
            
                <!-- POST PEEK TITLE -->
                <p class="post-peek-title"><a href="profile-post.html">Here's the how and why did I became a full time Gaming Streamer</a></p>
                <!-- /POST PEEK TITLE -->
            
                <!-- POST PEEK TEXT -->
                <p class="post-peek-text">6 days ago</p>
                <!-- /POST PEEK TEXT -->
              </div>
              <!-- /POST PEEK -->
      
              <!-- POST PEEK -->
              <div class="post-peek">
                <!-- POST PEEK IMAGE -->
                <a class="post-peek-image" href="profile-post.html">
                  <figure class="picture small round liquid">
                    <img src="img/cover/10.jpg" alt="cover-10">
                  </figure>
                </a>
                <!-- /POST PEEK IMAGE -->
            
                <!-- POST PEEK TITLE -->
                <p class="post-peek-title"><a href="profile-post.html">I spoke with the developers of RoBot SaMurai II at the 2019 GamingCon</a></p>
                <!-- /POST PEEK TITLE -->
            
                <!-- POST PEEK TEXT -->
                <p class="post-peek-text">3 weeks ago</p>
                <!-- /POST PEEK TEXT -->
              </div>
              <!-- /POST PEEK -->
      
              <!-- POST PEEK -->
              <div class="post-peek">
                <!-- POST PEEK IMAGE -->
                <a class="post-peek-image" href="profile-post.html">
                  <figure class="picture small round liquid">
                    <img src="img/cover/20.jpg" alt="cover-20">
                  </figure>
                </a>
                <!-- /POST PEEK IMAGE -->
            
                <!-- POST PEEK TITLE -->
                <p class="post-peek-title"><a href="profile-post.html">I will be at this month's StreamCon with NekoBebop</a></p>
                <!-- /POST PEEK TITLE -->
            
                <!-- POST PEEK TEXT -->
                <p class="post-peek-text">4 weeks ago</p>
                <!-- /POST PEEK TEXT -->
              </div>
              <!-- /POST PEEK -->
      
              <!-- POST PEEK -->
              <div class="post-peek">
                <!-- POST PEEK IMAGE -->
                <a class="post-peek-image" href="profile-post.html">
                  <figure class="picture small round liquid">
                    <img src="img/cover/06.jpg" alt="cover-06">
                  </figure>
                </a>
                <!-- /POST PEEK IMAGE -->
            
                <!-- POST PEEK TITLE -->
                <p class="post-peek-title"><a href="profile-post.html">[Exclusive!] Check out all the new missions and story of the Fire Witch DLC!</a></p>
                <!-- /POST PEEK TITLE -->
            
                <!-- POST PEEK TEXT -->
                <p class="post-peek-text">1 month ago</p>
                <!-- /POST PEEK TEXT -->
              </div>
              <!-- /POST PEEK -->
      
              <!-- POST PEEK -->
              <div class="post-peek">
                <!-- POST PEEK IMAGE -->
                <a class="post-peek-image" href="profile-post.html">
                  <figure class="picture small round liquid">
                    <img src="img/cover/07.jpg" alt="cover-07">
                  </figure>
                </a>
                <!-- /POST PEEK IMAGE -->
            
                <!-- POST PEEK TITLE -->
                <p class="post-peek-title"><a href="profile-post.html">Old Super Mochi's Island is getting a remake!</a></p>
                <!-- /POST PEEK TITLE -->
            
                <!-- POST PEEK TEXT -->
                <p class="post-peek-text">1 month ago</p>
                <!-- /POST PEEK TEXT -->
              </div>
              <!-- /POST PEEK -->
            </div>
            <!-- /POST PEEK LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
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
            <!-- TAG STICKER -->
            <div class="tag-sticker">
              <!-- TAG STICKER ICON -->
              <svg class="tag-sticker-icon primary icon-pinned">
                <use xlink:href="#svg-pinned"></use>
              </svg>
              <!-- /TAG STICKER ICON -->
            </div>
            <!-- /TAG STICKER -->

            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">5 hours ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->

              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">Hi to all! Remember that today I'll be livestreaming along with <a href="/{{ '@'.$profile->username }}">@NekoBebop</a> the new character of the brand new Xenowatch patch "Anya Darkness". See you there!</p>
              <!-- /WIDGET BOX STATUS TEXT -->

              <!-- VIDEO STATUS -->
              <a class="video-status small" href="https://www.twitch.tv/" target="_blank">
                <!-- VIDEO STATUS IMAGE -->
                <img class="video-status-image mobile" src="img/cover/06.jpg" alt="cover-06">
                <!-- /VIDEO STATUS IMAGE -->

                <!-- VIDEO STATUS IMAGE -->
                <figure class="video-status-image liquid">
                  <img src="img/cover/06.jpg" alt="cover-06">
                </figure>
                <!-- /VIDEO STATUS IMAGE -->

                <!-- VIDEO STATUS INFO -->
                <div class="video-status-info">
                  <!-- VIDEO STATUS TITLE -->
                  <p class="video-status-title"><span class="bold">GameHuntress</span> on <span class="highlighted">Twitch</span></p>
                  <!-- /VIDEO STATUS TITLE -->

                  <!-- VIDEO STATUS TEXT -->
                  <p class="video-status-text">Watch the GameHuntress play all the greatest games for both new and old consoles!. Join her in this epic quest!</p>
                  <!-- /VIDEO STATUS TEXT -->

                  <!-- VIDEO STATUS META -->
                  <p class="video-status-meta">twitch.tv</p>
                  <!-- /VIDEO STATUS META -->
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
                <a class="tag-item secondary" href="/feed">Xenowatch</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Gaming</a>
                <!-- /TAG ITEM -->

                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Twitch</a>
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

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jett Spiegel</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Marcus Jhonson</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jane Rodgers</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->

                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><span class="bold">and 2 more...</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">12</p>
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
                    <p class="meta-line-text">14 Participants</p>
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
                    <p class="meta-line-link">3 Comments</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">29 minutes ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">I have great news to share with you all! I've been officially made a game streaming verified partner by Streamy <a href="#">http://lyt.ly/snej25</a>. What does this mean? I'll be uploading new content every day, improving the quality and I'm gonna have access to games a month before the official release.</p>
              <!-- /WIDGET BOX STATUS TEXT -->
      
              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">This is a dream come true, thanks to all for the support!!!</p>
              <!-- /WIDGET BOX STATUS TEXT -->
      
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
                          <p class="simple-dropdown-text">Jett Spiegel</p>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/23.jpg"></div>
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
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">7 Participants</p>
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
                    <p class="meta-line-link">8 Comments</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">29 minutes ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->
              
              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
              <!-- /WIDGET BOX STATUS TEXT -->
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->
      
            <!-- WIDGET BOX PICTURE -->
            <figure class="widget-box-picture popup-picture-trigger">
              <img src="img/cover/04.jpg" alt="cover-04">
            </figure>
            <!-- /WIDGET BOX PICTURE -->
      
            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
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
                    <p class="meta-line-text">{{ $user->currentLevel }}</p>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/02.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">27 Participants</p>
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
            <div class="post-option active">
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
      
          <!-- POST COMMENT LIST -->
          <div class="post-comment-list">
            <!-- POST COMMENT -->
            <div class="post-comment">
              <!-- USER AVATAR -->
              <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
              <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
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
                    <p class="meta-line-timestamp">15 minutes ago</p>
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
              <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
              <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
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
                    <p class="meta-line-timestamp">2 minutes ago</p>
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
              <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
              <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Destroy Dex</a>YEAHHH!! <a href="/{{ '@'.$profile->username }}">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
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
                    <p class="meta-line-timestamp">27 minutes ago</p>
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
              <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
              <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
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
                    <p class="meta-line-timestamp">39 minutes ago</p>
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
        
            <!-- POST COMMENT FORM -->
            <div class="post-comment-form">
              <!-- USER AVATAR -->
              <div class="user-avatar small no-outline">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                      <label for="post-reply">Your Reply</label>
                      <input type="text" id="post-reply" name="post_reply">
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
          <!-- /POST COMMENT LIST -->
        </div>
        <!-- /WIDGET BOX -->

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
            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">17 hours ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->
      
              <!-- WIDGET BOX STATUS TEXT -->
              <p class="widget-box-status-text">Tomorow I'll be livestreaming along with <a href="/{{ '@'.$profile->username }}">@DestroyDex</a> on my Youtube channel. We are gonna do a spedrun of Super Mochi Bros 3!</p>
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
                <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
                <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a> wrote a <span class="bold">Blog Post</span></p>
                <!-- /USER STATUS TITLE -->
            
                <!-- USER STATUS TEXT -->
                <p class="user-status-text small">2 days ago</p>
                <!-- /USER STATUS TEXT -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /WIDGET BOX STATUS CONTENT -->
      
            <!-- POST PREVIEW -->
            <div class="post-preview medium">
              <!-- POST PREVIEW IMAGE -->
              <figure class="post-preview-image liquid">
                <img src="img/cover/19.jpg" alt="cover-19">
              </figure>
              <!-- /POST PREVIEW IMAGE -->
          
              <!-- POST PREVIEW INFO -->
              <div class="post-preview-info">
                <!-- POST PREVIEW TIMESTAMP -->
                <p class="post-preview-timestamp">5 mins read</p>
                <!-- /POST PREVIEW TIMESTAMP -->
          
                <!-- POST PREVIEW TITLE -->
                <p class="post-preview-title">Here's the how and why did I became a full time Gaming Streamer</p>
                <!-- /POST PREVIEW TITLE -->
          
                <!-- POST PREVIEW TEXT -->
                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <!-- /POST PREVIEW TEXT -->
          
                <!-- POST PREVIEW TEXT -->
                <p class="post-preview-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam...</p>
                <!-- /POST PREVIEW TEXT -->
          
                <!-- POST PREVIEW LINK -->
                <a class="post-preview-link" href="profile-post.html">Read more...</a>
                <!-- /POST PREVIEW LINK -->
              </div>
              <!-- /POST PREVIEW INFO -->
            </div>
            <!-- /POST PREVIEW -->
      
            <!-- WIDGET BOX STATUS CONTENT -->
            <div class="widget-box-status-content">
              <!-- TAG LIST -->
              <div class="tag-list">
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Streamer</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Gaming</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Job</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Life</a>
                <!-- /TAG ITEM -->
      
                <!-- TAG ITEM -->
                <a class="tag-item secondary" href="/feed">Experience</a>
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
                        <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/wow.png" alt="reaction-wow">
                        <!-- /REACTION IMAGE -->
          
                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
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
                          <p class="simple-dropdown-text">Marcus Jhonson</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
          
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
                          <p class="simple-dropdown-text">Jett Spiegel</p>
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
          
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jett Spiegel</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
          
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Marcus Jhonson</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
          
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text">Jane Rodgers</p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
          
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><span class="bold">and 7 more...</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    </div>
                    <!-- /REACTION ITEM LIST -->
          
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">19</p>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/11.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
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
                          <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR CONTENT -->
                      </div>
                      <!-- /USER AVATAR -->
                    </div>
                    <!-- /META LINE LIST -->
            
                    <!-- META LINE TEXT -->
                    <p class="meta-line-text">22 Participants</p>
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
                    <p class="meta-line-link">5 Comments</p>
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

      <!-- GRID COLUMN -->
      <div class="grid-column">
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
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->

          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Stream Box</p>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content small-margin-top">
            <!-- STREAM BOX -->
            <div class="stream-box no-video-radius">
              <!-- STREAM BOX VIDEO -->
              <div class="stream-box-video">
                <iframe src="https://player.twitch.tv/?channel=cohhcarnage" allowfullscreen></iframe>
              </div>
              <!-- /STREAM BOX VIDEO -->
          
              <!-- STREAM BOX IMAGE -->
              <div class="stream-box-image">
                <figure class="picture tiny circle liquid">
                  <img src="img/avatar/01-social.png" alt="avatar-01-social">
                </figure>
              </div>
              <!-- /STREAM BOX IMAGE -->
          
              <!-- STREAM BOX INFO -->
              <div class="stream-box-info">
                <!-- STREAM BOX TITLE -->
                <p class="stream-box-title"><a href="profile-stream.html">I'm Playing Athena’s Goddess Story...</a></p>
                <!-- /STREAM BOX TITLE -->
          
                <!-- STREAM BOX TEXT -->
                <p class="stream-box-text"><a href="https://www.twitch.tv/" target="_blank">@GameHuntress</a></p>
                <!-- /STREAM BOX TEXT -->
              </div>
              <!-- /STREAM BOX INFO -->
            </div>
            <!-- /STREAM BOX -->
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
          <p class="widget-box-title">Photos <span class="highlighted">74</span></p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- PICTURE ITEM LIST -->
            <div class="picture-item-list small">
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="{{ asset('storage/img/profile/' . $profile->pictureName) }}" alt="avatar-01">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/10.jpg" alt="avatar-10">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/12.jpg" alt="avatar-12">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/02.jpg" alt="avatar-02">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/06.jpg" alt="avatar-06">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/13.jpg" alt="avatar-13">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/04.jpg" alt="avatar-04">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/15.jpg" alt="avatar-15">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/11.jpg" alt="avatar-11">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/08.jpg" alt="avatar-08">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <div class="picture-item">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/16.jpg" alt="avatar-16">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /PICTURE ITEM -->
      
              <!-- PICTURE ITEM -->
              <a class="picture-item" href="profile-photos.html">
                <!-- PICTURE -->
                <figure class="picture round liquid">
                  <img src="img/cover/17.jpg" alt="avatar-17">
                </figure>
                <!-- /PICTURE -->
      
                <!-- PICTURE ITEM OVERLAY -->
                <div class="picture-item-overlay round">
                  <!-- PICTURE ITEM OVERLAY TEXT -->
                  <p class="picture-item-overlay-text">+61</p>
                  <!-- /PICTURE ITEM OVERLAY TEXT -->
                </div>
                <!-- /PICTURE ITEM OVERLAY -->
              </a>
              <!-- /PICTURE ITEM -->
            </div>
            <!-- /PICTURE ITEM LIST -->
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
          <p class="widget-box-title">Twitter Feed</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- TWEET FEED -->
            <div class="tweet-feed"></div>
            <!-- /TWEET FEED -->
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
          <p class="widget-box-title">Groups <span class="highlighted">7</span></p>
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
          <p class="widget-box-title">Latest Item</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- PRODUCT PREVIEW -->
            <div class="product-preview small">
              <!-- PRODUCT PREVIEW IMAGE -->
              <a href="marketplace-product.html">
                <figure class="product-preview-image liquid">
                  <img src="img/marketplace/items/01.jpg" alt="item-01">
                </figure>
              </a>
              <!-- /PRODUCT PREVIEW IMAGE -->
          
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- TEXT STICKER -->
                <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
                <!-- /TEXT STICKER -->
          
                <!-- PRODUCT PREVIEW TITLE -->
                <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                <!-- /PRODUCT PREVIEW TITLE -->
          
                <!-- PRODUCT PREVIEW CATEGORY -->
                <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
                <!-- /PRODUCT PREVIEW CATEGORY -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
            </div>
            <!-- /PRODUCT PREVIEW -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

  <!-- POPUP VIDEO -->
  <div class="popup-video">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-video-trigger">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- IFRAME WRAP -->
    <div class="iframe-wrap">
      <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
    </div>
    <!-- /IFRAME WRAP -->
  </div>
  <!-- /POPUP VIDEO -->

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
              <a class="user-status-avatar" href="/{{ '@'.$profile->username }}">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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
              <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
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
                  <p class="meta-line-text">{{ $user->currentLevel }}</p>
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
            <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
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
            <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
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
            <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Destroy Dex</a>YEAHHH!! <a href="/{{ '@'.$profile->username }}">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
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
            <a class="user-avatar small no-outline" href="/{{ '@'.$profile->username }}">
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="/{{ '@'.$profile->username }}">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
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
            <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $profile->pictureName) }}"></div>
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

@include('partials/footer')