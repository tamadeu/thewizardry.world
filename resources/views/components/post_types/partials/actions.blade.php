<div class="content-actions">
    <!-- CONTENT ACTION -->
    <div class="content-action">
      <!-- META LINE -->
      <div class="meta-line">
        <!-- META LINE LIST -->
        <div class="meta-line-list reaction-item-list" id="reactionsType_{{$post->id}}">

          @php
            $postId = $post->id;
            $postReactionsFound = array_filter($reactions->list, function ($item) use ($postId) {
              return $item->postId === $postId;
            });

          $postReactions = array_values($postReactionsFound);

          $summary = array();

          foreach ($postReactions as $item) {
              $reactionType = $item->reactionTypeName;
              if (!isset($summary[$reactionType])) {
                  $summary[$reactionType] = 0;
              }
              $summary[$reactionType]++;
          }


          @endphp      
            @if(count($postReactions) > 0)
              @foreach($summary as $index => $count)
                <div class="reaction-item" style="position: relative;">
                  <!-- REACTION IMAGE -->
                  <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/{{$index}}.png" alt="reaction-{{$index}}">
                  <!-- /REACTION IMAGE -->
              
                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown"
                    style="position: absolute; z-index: 9999; bottom: 38px; left: -16px; opacity: 0; visibility: hidden; transform: translate(0px, 20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/{{$index}}.png" alt="reaction-{{$index}}"> <span
                        class="bold">{{$index}}</span></p>
                    <!-- /SIMPLE DROPDOWN TEXT -->
                    @if($count > 5)
                      @for($x = 0; $x < 5; $x++)
                          <!-- SIMPLE DROPDOWN TEXT -->
                          @if($postReactions[$x]->reactionTypeName === $index)
                            <p class="simple-dropdown-text">{{ $postReactions[$x]->givingUserName }}</p>
                          @endif
                          <!-- /SIMPLE DROPDOWN TEXT -->
                      @endfor
                      <p class="simple-dropdown-text"><span class="bold">and {{ $count - 5 }} more...</span></p>
                    @else
                      @for($y = 0; $y < count($summary); $y++)
                          <!-- SIMPLE DROPDOWN TEXT -->
                          @if($postReactions[$y]->reactionTypeName === $index)
                            <p class="simple-dropdown-text">{{ $postReactions[$y]->givingUserName }}</p>
                          @endif
                          <!-- /SIMPLE DROPDOWN TEXT -->
                      @endfor
                    @endif
            
                    <!-- /SIMPLE DROPDOWN TEXT -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
              @endforeach
            @endif
        </div>
        <!-- /META LINE LIST -->

        @php
          $countReactions = count($postReactions);
        @endphp
        <!-- META LINE TEXT -->
        <p class="meta-line-text" id="reactions_{{$post->id}}">{{ $countReactions }}</p>
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