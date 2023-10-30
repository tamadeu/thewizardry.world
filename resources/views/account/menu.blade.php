<div class="sidebar-box no-padding">
    <!-- SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU HEADER -->
        <div class="sidebar-menu-header accordion-trigger-linked">
          <!-- SIDEBAR MENU HEADER ICON -->
          <svg class="sidebar-menu-header-icon icon-profile">
            <use xlink:href="#svg-profile"></use>
          </svg>
          <!-- /SIDEBAR MENU HEADER ICON -->

          <!-- SIDEBAR MENU HEADER CONTROL ICON -->
          <div class="sidebar-menu-header-control-icon">
            <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
            <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
              <use xlink:href="#svg-minus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

            <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
            <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
          </div>
          <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

          <!-- SIDEBAR MENU HEADER TITLE -->
          <p class="sidebar-menu-header-title">My Profile</p>
          <!-- /SIDEBAR MENU HEADER TITLE -->

          <!-- SIDEBAR MENU HEADER TEXT -->
          <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
          <!-- /SIDEBAR MENU HEADER TEXT -->
        </div>
        <!-- /SIDEBAR MENU HEADER -->

        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body accordion-content-linked @if($activeMenu == "profile_info" || $activeMenu == "profile_social" || $activeMenu == "profile_notifications" || $activeMenu == "profile_messages" || $activeMenu == "profile_requests") accordion-open @endif">
          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link @if($activeMenu == "profile_info") active @endif" href="{{ route('profile.info') }}">Profile Info</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "profile_social") active @endif" href="{{ route('profile.social') }}">Social &amp; Stream</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "profile_notifications") active @endif" href="{{ route('profile.notifications') }}">Notifications</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "profile_messages") active @endif" href="{{ route('profile.messages') }}">Messages</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "profile_requests") active @endif" href="{{ route('profile.requests') }}">Friend Requests</a>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU HEADER -->
        <div class="sidebar-menu-header accordion-trigger-linked">
          <!-- SIDEBAR MENU HEADER ICON -->
          <svg class="sidebar-menu-header-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /SIDEBAR MENU HEADER ICON -->

          <!-- SIDEBAR MENU HEADER CONTROL ICON -->
          <div class="sidebar-menu-header-control-icon">
            <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
            <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
              <use xlink:href="#svg-minus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

            <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
            <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
          </div>
          <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

          <!-- SIDEBAR MENU HEADER TITLE -->
          <p class="sidebar-menu-header-title">Account</p>
          <!-- /SIDEBAR MENU HEADER TITLE -->

          <!-- SIDEBAR MENU HEADER TEXT -->
          <p class="sidebar-menu-header-text">Change settings, configure notifications, and review your privacy</p>
          <!-- /SIDEBAR MENU HEADER TEXT -->
        </div>
        <!-- /SIDEBAR MENU HEADER -->

        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body accordion-content-linked @if($activeMenu == "account_info" || $activeMenu == "account_password" || $activeMenu == "account_settings") accordion-open @endif">
          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "account_info") active @endif" href="{{ route('account.info') }}">Account Info</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "account_password") active @endif" href="{{ route('account.password') }}">Change Password</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "account_settings") active @endif" href="{{ route('account.settings') }}">General Settings</a>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU HEADER -->
        <div class="sidebar-menu-header accordion-trigger-linked">
          <!-- SIDEBAR MENU HEADER ICON -->
          <svg class="sidebar-menu-header-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /SIDEBAR MENU HEADER ICON -->

          <!-- SIDEBAR MENU HEADER CONTROL ICON -->
          <div class="sidebar-menu-header-control-icon">
            <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
            <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
              <use xlink:href="#svg-minus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

            <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
            <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
          </div>
          <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

          <!-- SIDEBAR MENU HEADER TITLE -->
          <p class="sidebar-menu-header-title">Groups</p>
          <!-- /SIDEBAR MENU HEADER TITLE -->

          <!-- SIDEBAR MENU HEADER TEXT -->
          <p class="sidebar-menu-header-text">Create new groups, manage the ones you created or accept invites!</p>
          <!-- /SIDEBAR MENU HEADER TEXT -->
        </div>
        <!-- /SIDEBAR MENU HEADER -->

        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body accordion-content-linked @if($activeMenu == "groups_manage" || $activeMenu == "groups_invitations") accordion-open @endif">
          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "groups_manage") active @endif" href="{{ route('groups.manage') }}">Manage Groups</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "groups_invitations") active @endif" href="{{ route('groups.invitations') }}">Invitations</a>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU HEADER -->
        <div class="sidebar-menu-header accordion-trigger-linked">
          <!-- SIDEBAR MENU HEADER ICON -->
          <svg class="sidebar-menu-header-icon icon-store">
            <use xlink:href="#svg-store"></use>
          </svg>
          <!-- /SIDEBAR MENU HEADER ICON -->

          <!-- SIDEBAR MENU HEADER CONTROL ICON -->
          <div class="sidebar-menu-header-control-icon">
            <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
            <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
              <use xlink:href="#svg-minus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

            <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
            <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
          </div>
          <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

          <!-- SIDEBAR MENU HEADER TITLE -->
          <p class="sidebar-menu-header-title">My Store</p>
          <!-- /SIDEBAR MENU HEADER TITLE -->

          <!-- SIDEBAR MENU HEADER TEXT -->
          <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
          <!-- /SIDEBAR MENU HEADER TEXT -->
        </div>
        <!-- /SIDEBAR MENU HEADER -->

        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body accordion-content-linked @if($activeMenu == "store_account" || $activeMenu == "store_statement" || $activeMenu == "store_items" || $activeMenu == "store_downloads") accordion-open @endif">
          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "store_account") active @endif" href="{{ route('store.account') }}">My Account</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "store_statement") active @endif" href="{{ route('store.statement') }}">Sales Statement</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "store_items") active @endif" href="{{ route('store.items') }}">Manage Items</a>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <a class="sidebar-menu-link  @if($activeMenu == "store_downloads") active @endif" href="{{ route('store.downloads') }}">Downloads</a>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->
    </div>
    <!-- /SIDEBAR MENU -->
    <div class="sidebar-box-footer">
      <!-- BUTTON -->
      <p class="button primary">Save Changes!</p>
      <!-- /BUTTON -->
    </div>
  </div>