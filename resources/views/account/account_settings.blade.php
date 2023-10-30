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
      <div class="account-hub-content">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Account</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">General Settings</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Email Notifications</p>
            <!-- /WIDGET BOX TITLE -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- SWITCH OPTION LIST -->
              <div class="switch-option-list">
                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Comments</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">You'll be notified when someone comments on your posts and/or replies to your comments</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch active">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->

                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Tags</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">These are notifications for when someone tags you in a post of image</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch active">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->

                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Friend Requests</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">You'll be notified when someone send you a friend request</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch active">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->

                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Groups</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">These are notifications for activity on groups you created or joined</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->

                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Events</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">You'll be notified about events you created or added to your calendar</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch active">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->

                <!-- SWITCH OPTION -->
                <div class="switch-option">
                  <!-- SWITCH OPTION TITLE -->
                  <p class="switch-option-title">Marketplace</p>
                  <!-- /SWITCH OPTION TITLE -->

                  <!-- SWITCH OPTION TEXT -->
                  <p class="switch-option-text">These are notifications for marketplace items you posted</p>
                  <!-- /SWITCH OPTION TEXT -->

                  <!-- FORM SWITCH -->
                  <div class="form-switch">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                  </div>
                  <!-- /FORM SWITCH -->
                </div>
                <!-- /SWITCH OPTION -->
              </div>
              <!-- /SWITCH OPTION LIST -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->

          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Privacy Settings</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->
              <form class="form">
                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item centered">
                    <label class="form-title" for="profile-privacy-visibility">Who can see your profile?</label>
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <select id="profile-privacy-visibility" name="profile_privacy_visibility">
                        <option value="1" selected>Members Only</option>
                        <option value="2">Everyone (Public)</option>
                      </select>
                      <!-- FORM SELECT ICON -->
                      <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                      </svg>
                      <!-- /FORM SELECT ICON -->
                    </div>
                    <!-- /FORM SELECT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item centered">
                    <label class="form-title" for="profile-privacy-friend-request">Who can send you a friend request?</label>
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <select id="profile-privacy-friend-request" name="profile_privacy_friend_request">
                        <option value="1" selected>Everyone (Public)</option>
                        <option value="2">Friends of Friends</option>
                        <option value="3">No One (Private)</option>
                      </select>
                      <!-- FORM SELECT ICON -->
                      <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                      </svg>
                      <!-- /FORM SELECT ICON -->
                    </div>
                    <!-- /FORM SELECT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item centered">
                    <label class="form-title" for="profile-privacy-chat-activity">Who can see your chat activity?</label>
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <select id="profile-privacy-chat-activity" name="profile_privacy_chat_activity">
                        <option value="1" selected>Friends Only</option>
                        <option value="2">Everyone (Public)</option>
                      </select>
                      <!-- FORM SELECT ICON -->
                      <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                      </svg>
                      <!-- /FORM SELECT ICON -->
                    </div>
                    <!-- /FORM SELECT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
              </form>
              <!-- /FORM -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

@include('partials/footer')