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
            <h2 class="section-title">Messages</h2>
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

        <!-- CHAT WIDGET WRAP -->
        <div class="chat-widget-wrap">
          <!-- CHAT WIDGET -->
          <div class="chat-widget static">
            <!-- CHAT WIDGET MESSAGES -->
            <div class="chat-widget-messages" data-simplebar>
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/04.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then we'll meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
      
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/05.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Awesome! I'll see you there!</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">54 mins ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
      
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message active">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/03.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
      
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/07.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">I'm sending you the latest news of the release...</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">16 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/20.jpg"></div>
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
                        <p class="user-avatar-badge-text">9</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Matt Parker</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/09.jpg"></div>
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
                        <p class="user-avatar-badge-text">27</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Sandra Strange</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/12.jpg"></div>
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
                        <p class="user-avatar-badge-text">10</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">James Murdock</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then we'll meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">7 days ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/10.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/02.jpg"></div>
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
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Destroy Dex</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/08.jpg"></div>
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
                        <p class="user-avatar-badge-text">4</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Damian Greyson</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
        
              <!-- CHAT WIDGET MESSAGE -->
              <div class="chat-widget-message">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="/img/avatar/14.jpg"></div>
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
                        <p class="user-avatar-badge-text">3</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Paul Lang</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream the new game?</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE -->
            </div>
            <!-- /CHAT WIDGET MESSAGES -->
        
            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
              <!-- INTERACTIVE INPUT -->
              <div class="interactive-input small">
                <input type="text" id="chat-widget-search-2" name="chat_widget_search_2" placeholder="Search Messages...">
                <!-- INTERACTIVE INPUT ICON WRAP -->
                <div class="interactive-input-icon-wrap">
                  <!-- INTERACTIVE INPUT ICON -->
                  <svg class="interactive-input-icon icon-magnifying-glass">
                    <use xlink:href="#svg-magnifying-glass"></use>
                  </svg>
                  <!-- /INTERACTIVE INPUT ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ICON WRAP -->
        
                <!-- INTERACTIVE INPUT ACTION -->
                <div class="interactive-input-action">
                  <!-- INTERACTIVE INPUT ACTION ICON -->
                  <svg class="interactive-input-action-icon icon-cross-thin">
                    <use xlink:href="#svg-cross-thin"></use>
                  </svg>
                  <!-- /INTERACTIVE INPUT ACTION ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ACTION -->
              </div>
              <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->
          </div>
          <!-- /CHAT WIDGET -->
      
          <!-- CHAT WIDGET -->
          <div class="chat-widget">
            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
              <!-- CHAT WIDGET SETTINGS -->
              <div class="chat-widget-settings">
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
                    <p class="simple-dropdown-link">Report</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Block</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Mute</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /POST SETTINGS WRAP -->
              </div>
              <!-- CHAT WIDGET SETTINGS -->
        
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <div class="user-status-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline online">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="/img/avatar/03.jpg"></div>
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
                </div>
                <!-- /USER STATUS AVATAR -->
        
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                <!-- /USER STATUS TITLE -->
        
                <!-- USER STATUS TAG -->
                <p class="user-status-tag online">Online</p>
                <!-- /USER STATUS TAG -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET HEADER -->
        
            <!-- CHAT WIDGET CONVERSATION -->
            <div class="chat-widget-conversation" data-simplebar>
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar tiny no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-24-26" data-src="/img/avatar/03.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
        
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker right">
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hey Nick!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last time we saw was at Neko's party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">10:05AM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
        
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar tiny no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-24-26" data-src="/img/avatar/03.jpg"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
            </div>
            <!-- /CHAT WIDGET CONVERSATION -->
        
            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- INTERACTIVE INPUT -->
                  <div class="interactive-input small">
                    <input type="text" id="chat-widget-message-text-2" name="chat_widget_message_text_2" placeholder="Write a message...">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap actionable">
                      <!-- TOOLTIP WRAP -->
                      <div class="tooltip-wrap text-tooltip-tft" data-title="Send Photo">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-camera">
                          <use xlink:href="#svg-camera"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                      </div>
                      <!-- /TOOLTIP WRAP -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->
            
                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                      <!-- INTERACTIVE INPUT ACTION ICON -->
                      <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                      </svg>
                      <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                  </div>
                  <!-- /INTERACTIVE INPUT -->
                </div>
                <!-- /FORM ITEM -->
      
                <!-- FORM ITEM -->
                <div class="form-item auto-width">
                  <!-- BUTTON -->
                  <p class="button primary padded">
                    <!-- BUTTON ICON -->
                    <svg class="button-icon no-space icon-send-message">
                      <use xlink:href="#svg-send-message"></use>
                    </svg>
                    <!-- /BUTTON ICON -->
                  </p>
                  <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->
            </form>
            <!-- /CHAT WIDGET FORM -->
          </div>
          <!-- /CHAT WIDGET -->
        </div>
        <!-- /CHAT WIDGET WRAP -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

@include('partials/footer')