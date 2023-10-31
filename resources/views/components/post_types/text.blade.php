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
          <a class="user-status-avatar" href="profile-timeline.html">
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
          <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">{{ $post->studentName }}</a></p>
          <!-- /USER STATUS TITLE -->
      
          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">39 minutes ago</p>
          <!-- /USER STATUS TEXT -->
        </div>
        <!-- /USER STATUS -->

        <!-- WIDGET BOX STATUS TEXT -->
        <p class="widget-box-status-text">{{ $post->content }}</p>
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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/dislike.png" alt="reaction-dislike">
                  <!-- /REACTION IMAGE -->
      
                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/dislike.png" alt="reaction-dislike"> <span class="bold">Dislike</span></p>
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
                    <p class="simple-dropdown-text"><span class="bold">and 2 more...</span></p>
                    <!-- /SIMPLE DROPDOWN TEXT -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /REACTION ITEM -->
              </div>
              <!-- /META LINE LIST -->
      
              <!-- META LINE TEXT -->
              <p class="meta-line-text">11</p>
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
                    <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /META LINE LIST -->
      
              <!-- META LINE TEXT -->
              <p class="meta-line-text">18 Participants</p>
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
              <p class="meta-line-link">15 Comments</p>
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

        @foreach($reactions->list as $reaction)
            @if($reaction->postId == $post->id && $reaction->givingUserId == $user->id)
              <div class="post-option reaction-options-dropdown-trigger">
                <!-- POST OPTION ICON -->
                <svg class="post-option-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /POST OPTION ICON -->

                <!-- POST OPTION TEXT -->
                    <p class="post-option-text active">{{ $reaction->type }}</p>
                <!-- /POST OPTION TEXT -->
              </div>
            @else
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
            @endif
          @endforeach

        <!-- /POST OPTION -->

        <!-- REACTION OPTIONS -->
        <div class="reaction-options reaction-options-dropdown">
          <!-- REACTION OPTION -->
          <div class="reaction-option text-tooltip-tft" data-title="Like">
            <!-- REACTION OPTION IMAGE -->
            <form id="like_{{ $post->id }}">
              @csrf
              <img class="reaction-option-image" src="img/reaction/like.png" id="reaction-like_{{ $post->id }}" alt="reaction-like">
            </form>
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

  <script>
    // Get the image element by its id
    const imageElement_{{ $post->id }} = document.getElementById('reaction-like_{{$post->id}}');

    const likeForm_{{ $post->id }} = document.getElementById('like_{{$post->id}}');

  
    // Get the CSRF token from the page
    const csrfToken_{{ $post->id }} = likeForm_{{ $post->id }}.querySelector('input[name="_token"]').value;
  
    // Add a click event listener to the image
    imageElement_{{ $post->id }}.addEventListener('click', () => {
      // Define the data you want to send in the POST request
      var myHeaders = new Headers();
      myHeaders.append('Content-Type', 'application/json');
      myHeaders.append('X-CSRF-TOKEN', csrfToken_{{ $post->id }});

      var raw = JSON.stringify({
        "type": "{{ $post->type }}",
        "postId": "{{ $post->id }}",
        "receivingUser": "{{ $post->studentId }}"
      });

      var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
      };

      fetch("{{ route('react') }}", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error)); 
    });
  </script>
  