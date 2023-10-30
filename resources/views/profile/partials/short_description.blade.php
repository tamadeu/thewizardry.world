<div class="user-short-description big">
    <!-- USER SHORT DESCRIPTION AVATAR -->
    <a class="user-short-description-avatar user-avatar big" href="/{{ '@'.$profile->username }}">
      <!-- USER AVATAR BORDER -->
      <div class="user-avatar-border">
        <!-- HEXAGON -->
        <div class="hexagon-148-164"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR BORDER -->
  
      <!-- USER AVATAR CONTENT -->
      <div class="user-avatar-content">
        <!-- HEXAGON -->
        <div class="hexagon-image-100-110" data-src="{{ asset('storage/img/profile/' . $profile->avatar) }}"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR CONTENT -->
  
      <!-- USER AVATAR PROGRESS -->
      <div class="user-avatar-progress">
        <!-- HEXAGON -->
        <div class="hexagon-progress-124-136"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR PROGRESS -->
  
      <!-- USER AVATAR PROGRESS BORDER -->
      <div class="user-avatar-progress-border">
        <!-- HEXAGON -->
        <div class="hexagon-border-124-136"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR PROGRESS BORDER -->
  
      <!-- USER AVATAR BADGE -->
      <div class="user-avatar-badge">
        <!-- USER AVATAR BADGE BORDER -->
        <div class="user-avatar-badge-border">
          <!-- HEXAGON -->
          <div class="hexagon-40-44"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BADGE BORDER -->
  
        <!-- USER AVATAR BADGE CONTENT -->
        <div class="user-avatar-badge-content">
          <!-- HEXAGON -->
          <div class="hexagon-dark-32-34"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BADGE CONTENT -->
  
        <!-- USER AVATAR BADGE TEXT -->
        <p class="user-avatar-badge-text">{{ $user->currentLevel }}</p>
        <!-- /USER AVATAR BADGE TEXT -->
      </div>
      <!-- /USER AVATAR BADGE -->
    </a>
    <!-- /USER SHORT DESCRIPTION AVATAR -->

    <!-- USER SHORT DESCRIPTION AVATAR -->
    <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="/{{ '@'.$profile->username }}">
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
        <div class="hexagon-image-82-90" data-src="{{ asset('storage/img/profile/' . $profile->avatar) }}"></div>
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
        <p class="user-avatar-badge-text">{{ $user->currentLevel }}</p>
        <!-- /USER AVATAR BADGE TEXT -->
      </div>
      <!-- /USER AVATAR BADGE -->
    </a>
    <!-- /USER SHORT DESCRIPTION AVATAR -->

    <!-- USER SHORT DESCRIPTION TITLE -->
    <p class="user-short-description-title"><a href="/{{ '@'.$profile->username }}">{{ $profile->name }}</a></p>
    <!-- /USER SHORT DESCRIPTION TITLE -->

    <!-- USER SHORT DESCRIPTION TEXT -->
    <p class="user-short-description-text"><a href="#">@if(isset($profile->houseName)) {{ $profile->houseName}} @endif</a></p>
    <!-- /USER SHORT DESCRIPTION TEXT -->
  </div>