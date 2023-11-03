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

                @php
                  $postId = $post->id;
                  $postReactionsFound = array_filter($reactions->list, function ($item) use ($postId) {
                    return $item->postId === $postId;
                  });

                $postReactions = array_values($postReactionsFound)
                @endphp

                @foreach($reactionTypes->list as $reactionType)

                  @foreach($postReactions as $postReaction)
                    @if($postReaction->reactionTypeId == $reactionType->id)
                      <!-- REACTION ITEM -->
                      <div class="reaction-item">
                        <!-- REACTION IMAGE -->
                        <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/{{ $reactionType->alt }}.png" alt="reaction-{{ $reactionType->alt }}">
                        <!-- /REACTION IMAGE -->
            
                        <!-- SIMPLE DROPDOWN -->
                        <div class="simple-dropdown padded reaction-item-dropdown">
                          <!-- SIMPLE DROPDOWN TEXT -->
                          <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/{{ $reactionType->alt }}.png" alt="reaction-{{ $reactionType->alt }}"> <span class="bold">{{ $reactionType->name }}</span></p>
                          <!-- /SIMPLE DROPDOWN TEXT -->
                          @foreach($postReactions as $postReaction)
                            @if($postReaction->reactionTypeId == $reactionType->id)
                              <!-- SIMPLE DROPDOWN TEXT -->
                              <p class="simple-dropdown-text">{{ $postReaction->givingUserName }}</p>
                              <!-- /SIMPLE DROPDOWN TEXT -->
                            @endif
                          @endforeach
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                      </div>
                      <!-- /REACTION ITEM -->
                    @endif
                  @endforeach
                


                @endforeach

              </div>
              <!-- /META LINE LIST -->
      
              @php
                $countReactions = count($postReactions);
              @endphp
              <!-- META LINE TEXT -->
              <p class="meta-line-text">{{ $countReactions }}</p>
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

        @php
          $userId = $user->id;
          $userPostReactionsFound = array_filter($reactions->list, function ($item) use ($postId, $userId) {
            return $item->postId === $postId && $item->givingUserId == $userId;
          });

          if (!empty($userPostReactionsFound)) {
            $reaction = reset($userPostReactionsFound);
          } else {
            $reaction = null;
          }
        @endphp

          @if($reaction)
            <div class="post-option reaction-options-dropdown-trigger">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-thumbs-up">
                <use xlink:href="#svg-thumbs-up"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
                  <p class="post-option-text active">{{ $reaction->verb }}</p>
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

        <!-- /POST OPTION -->

        
        <div class="reaction-options reaction-options-dropdown">
          @foreach($reactionTypes->list as $reactionType)
            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="{{ $reactionType->name }}">
              <!-- REACTION OPTION IMAGE -->
              <form id="{{ $reactionType->alt }}_{{ $post->id }}">
                @csrf
                <img class="reaction-option-image" src="img/reaction/{{ $reactionType->alt }}.png" id="reaction-{{ $reactionType->alt }}_{{ $post->id }}" alt="reaction-{{ $reactionType->alt }}">
              </form>
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->
            <script>
              // Get the image element by its id
              const image{{ $reactionType->name }}_{{ $post->id }} = document.getElementById('reaction-{{ $reactionType->alt }}_{{$post->id}}');
          
              const {{ $reactionType->alt }}Form_{{ $post->id }} = document.getElementById('{{ $reactionType->alt }}_{{$post->id}}');
          
            
              // Get the CSRF token from the page
              const csrfToken_{{ $reactionType->alt }}_{{ $post->id }} = {{ $reactionType->alt }}Form_{{ $post->id }}.querySelector('input[name="_token"]').value;
            
              // Add a click event listener to the image
              image{{ $reactionType->name }}_{{ $post->id }}.addEventListener('click', () => {
                // Define the data you want to send in the POST request
                var myHeaders = new Headers();
                myHeaders.append('Content-Type', 'application/json');
                myHeaders.append('X-CSRF-TOKEN', csrfToken_{{ $reactionType->alt }}_{{ $post->id }});
          
                var raw = JSON.stringify({
                  "reactionTypeId": "{{ $reactionType->id }}",
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
          @endforeach

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
  