<div class="post-options">
    <!-- POST OPTION WRAP -->
    <div class="post-option-wrap">
      <!-- POST OPTION -->

      @php
      $postId = $post->id;
        $postReactionsFound = array_filter($reactions->list, function ($item) use ($postId) {
        return $item->postId === $postId;
        });

        $postReactions = array_values($postReactionsFound);

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
            <svg class="post-option-icon icon-thumbs-up" style="fill: #23d2e2; opacity: 1;">
              <use xlink:href="#svg-thumbs-up"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
                <p class="post-option-text" id="reactionVerb_{{$post->id}}" style="color: #3e3f5e;">{{ $reaction->verb }}</p>
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

                let reactions_{{$post->id}} = parseInt(document.querySelector('#reactions_{{$post->id}}').textContent);
                let reactionVerb_{{$post->id}} = document.querySelector('#reactionVerb_{{$post->id}}');

                var existingPostReactions_{{$post->id}} = @json($postReactions);

                var newHtml_{{$post->id}} = `  
                                <div class="reaction-item" style="position: relative;">
                                <!-- REACTION IMAGE -->
                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/{{$reactionType->alt}}.png" alt="reaction-{{$reactionType->alt}}">
                                <!-- /REACTION IMAGE -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown padded reaction-item-dropdown"
                                    style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/{{$reactionType->alt}}.png" alt="reaction-{{$reactionType->alt}}"> <span
                                        class="bold">{{$reactionType->name}}</span></p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                    <!-- SIMPLE DROPDOWN TEXT -->
                                    <p class="simple-dropdown-text">{{$user->name}}</p>
                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                                </div>`


                if(existingPostReactions_{{$post->id}}.length > 0){


                    // undo reaction if the user clicks on the same reaction they already reacted on the same post. So the reaction is deleted.
                        const sameReactionFound_{{$post->id}} = existingPostReactions_{{$post->id}}.filter(item => 
                            item.givingUserId === "{{$user->id}}" && item.reactionTypeId === "{{$reactionType->id}}"
                        );

                        if (sameReactionFound_{{$post->id}}.length > 0) {
                            console.log('undo reaction if the user clicks on the same reaction they already reacted on the same post. So the reaction is deleted.')
                            console.log(sameReactionFound_{{$post->id}})
                            reactions_{{$post->id}} -= 1;
                            document.querySelector('#reactions_{{$post->id}}').textContent = reactions_{{$post->id}};
                        }
                    // END

                    // checks if the user already reacted to the post, but a different reaction, so it will be updated
                        const foundReactionDiffType_{{$post->id}} = existingPostReactions_{{$post->id}}.filter(item => 
                            item.givingUserId === "{{$user->id}}" && item.reactionTypeId !== "{{$reactionType->id}}"
                        );

                        if (foundReactionDiffType_{{$post->id}}.length > 0) {
                            console.log('checks if the user already reacted to the post, but a different reaction, so it will be updated')
                            console.log(foundReactionDiffType_{{$post->id}})
                            reactionVerb_{{$post->id}}.textContent = "{{$reactionType->verb}}"
                            reactionsType_{{$post->id}}.insertAdjacentHTML("beforeend",newHtml_{{$post->id}})
                        }
                    // END

                    // the post already has some reactions, but not from the same user. So a new reaction is created
                        const newReaction_{{$post->id}} = existingPostReactions_{{$post->id}}.filter(item => 
                            item.givingUserId === "{{$user->id}}" && item.reactionTypeId === "{{$reactionType->id}}"
                        );

                        if (newReaction_{{$post->id}}.length == 0) {
                            console.log('the post already has some reactions, but not from the same user. So a new reaction is created')
                            console.log(newReaction_{{$post->id}})
                            reactions_{{$post->id}} += 1;

                            document.querySelector('#reactions_{{$post->id}}').textContent = reactions_{{$post->id}};

                            let reactionsType_{{$post->id}} = document.querySelector('#reactionsType_{{$post->id}}');

                            reactionsType_{{$post->id}}.insertAdjacentHTML("beforeend",newHtml_{{$post->id}})
                        }
                    // END

                } else {

                    // if the post still doesn't have any reactions, a new one will be created.
                    reactions_{{$post->id}} += 1;

                    document.querySelector('#reactions_{{$post->id}}').textContent = reactions_{{$post->id}};

                    let reactionsType_{{$post->id}} = document.querySelector('#reactionsType_{{$post->id}}');

                    reactionsType_{{$post->id}}.insertAdjacentHTML("beforeend",newHtml_{{$post->id}})
                }


                var settings = {
                  "url": "{{ route('react') }}",
                  "method": "POST",
                  "timeout": 0,
                  "headers": {
                    "X-CSRF-TOKEN": `${csrfToken_{{ $reactionType->alt }}_{{ $post->id }}}`,
                    "Content-Type": "application/json"
                  },
                  "data": JSON.stringify({
                    "reactionTypeId": "{{ $reactionType->id }}",
                    "postId": "{{ $post->id }}",
                    "receivingUser": "{{ $post->studentId }}"
                  }),
                };

                $.ajax(settings).done(function (response) {
                  if (response.message) {
                          console.log(response.message); // Log the success message
                      }
                
                });

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