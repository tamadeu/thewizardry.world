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

          @if($post->studentId == $user->id)
          <!-- SIMPLE DROPDOWN LINK -->
          <p class="simple-dropdown-link">Edit Post</p>
          <!-- /SIMPLE DROPDOWN LINK -->

          <!-- SIMPLE DROPDOWN LINK -->
          <form action="{{route('delete')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$post->id}}" />
            <button type="submit" class="simple-dropdown-link">Delete Post</button>
            <!-- /SIMPLE DROPDOWN LINK -->
          </form>
          <!-- SIMPLE DROPDOWN LINK -->
          <p class="simple-dropdown-link">Make it Featured</p>
          <!-- /SIMPLE DROPDOWN LINK -->
          @endif

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
          <a class="user-status-avatar" href="/{{ '@'.$post->username }}">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="{{ asset('storage/img/profile/' . $post->userAvatar) }}"></div>
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
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </a>
          <!-- /USER STATUS AVATAR -->
      
          <!-- USER STATUS TITLE -->
          <p class="user-status-title medium"><a class="bold" href="/{{ '@'.$post->username }}">{{ $post->studentName }}</a></p>
          <!-- /USER STATUS TITLE -->
      
          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">39 minutes ago</p>
          <!-- /USER STATUS TEXT -->
        </div>
        <!-- /USER STATUS -->

        <!-- WIDGET BOX STATUS TEXT -->
        <p class="widget-box-status-text">{!! $post->content !!}</p>
        <!-- /WIDGET BOX STATUS TEXT -->

        <!-- CONTENT ACTIONS -->
        @include('components/post_types/partials/actions')
        <!-- /CONTENT ACTIONS -->
      </div>
      <!-- /WIDGET BOX STATUS CONTENT -->
    </div>
    <!-- /WIDGET BOX STATUS -->

    <!-- POST OPTIONS -->
    @include('components/post_types/partials/options')
    <!-- /POST OPTIONS -->
  </div>
  