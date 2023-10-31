@include('partials/head')
<style>
.drop-container {
  position: relative;
  display: flex;
  gap: 10px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 200px;
  width: 100%;
  padding: 20px;
  border-radius: 10px;
  border: 2px dashed #555;
  color: #444;
  cursor: pointer;
  transition: background .2s ease-in-out, border .2s ease-in-out;
}

.drop-container:hover,
.drop-container.drag-active {
  background: #eee;
  border-color: #111;
}

.drop-container:hover .drop-title,
.drop-container.drag-active .drop-title {
  color: #222;
}

.drop-title {
  color: #444;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  transition: color .2s ease-in-out;
}

input[type=file] {
  width: 350px;
  max-width: 100%;
  color: #444;
  padding: 5px;
  background: #fff;
  border-radius: 10px;
  border: 1px solid #555;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #23d2e2;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #1bc5d4;
}
  </style>
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
            <h2 class="section-title">Profile Info</h2>
            <!-- /SECTION TITLE -->
          </div>

          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif
          <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- GRID -->
          <div class="grid grid-4-4 centered">
            <!-- USER PREVIEW -->
            
            <!-- /USER PREVIEW -->

            <!-- UPLOAD BOX -->
            <form action="{{ route('updateAvatar') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="upload-box" style="padding-top: 0; height: 200px">
                <label for="images" class="drop-container" id="changeAvatar">
                  <span class="drop-title">Change Avatar</span>
                  or
                  <input type="file" id="avatar" name="avatar" accept="image/*" required>
                  <button type="submit" class="button primary">Update Avatar!</button>

                </label>
              </div>
            </form>
            <!-- /UPLOAD BOX -->
          
            <!-- UPLOAD BOX -->
            <form action="{{ route('updateCover') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="upload-box" style="padding-top: 0">
                <label for="images" class="drop-container" id="changeCover">
                  <span class="drop-title">Change Cover</span>
                  or
                  <input type="file" id="cover" name="cover" accept="image/*" required>
                  <button type="submit" class="button primary">Update Cover!</button>
                </label>
              </div>
            </form>
            <!-- /UPLOAD BOX -->
          </div>
          <!-- /GRID -->

          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">About Your Profile</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->
              <form class="form">
                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="profile-name">Profile Name</label>
                      <input type="text" id="profile-name" name="profile_name" value="{{ $user->name }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="profile-tagline">Tagline</label>
                      <input type="text" id="profile-tagline" name="profile_tagline" value="{{ $user->tagline }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small full">
                      <textarea id="profile-description" name="profile_description" placeholder="Write a little description about you..." value="{{ $user->description }}"></textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="profile-public-email">Public Email</label>
                      <input type="text" id="profile-public-email" name="profile_public_email" value="{{ $user->email }}">
                    </div>
                    <!-- /FORM INPUT -->

                    <!-- FORM INPUT -->
                    <div class="form-input small">
                      <label for="profile-public-website">Public Website</label>
                      <input type="text" id="profile-public-website" name="profile_public_website">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="profile-country">Country</label>
                      <select id="profile-country" name="profile_country">
                        <option value="0">Select your Country</option>
                        <option value="Brazil" @if($user->country == "Brazil") selected @endif>Brazil</option>
                        <option value="England" @if($user->country == "England") selected @endif>England</option>
                        <option value="United States" @if($user->country == "United States") selected @endif>United States</option>
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

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="profile-city">City</label>
                      <select id="profile-city" name="profile_city">
                        <option value="0">Select your City</option>
                        <option value="1" selected>New York</option>
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
                  <div class="form-item">
                    <!-- FORM INPUT DECORATED -->
                    <div class="form-input-decorated">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-birthday">Birthday</label>
                        <input type="text" id="profile-birthday" name="profile_birthday" value="{{ $user->dateOfBirth }}">
                      </div>
                      <!-- /FORM INPUT -->
          
                      <!-- FORM INPUT ICON -->
                      <svg class="form-input-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                      </svg>
                      <!-- /FORM INPUT ICON -->
                    </div>
                    <!-- /FORM INPUT DECORATED -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="profile-occupation">Occupation</label>
                      <input type="text" id="profile-occupation" name="profile_occupation" value="Costume Designer">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="profile-status">Status</label>
                      <select id="profile-status" name="profile_status">
                        <option value="0">Select your Status</option>
                        <option value="1" selected>In a Relationship</option>
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

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small">
                      <label for="profile-birthplace">Birthplace</label>
                      <input type="text" id="profile-birthplace" name="profile_birthplace">
                    </div>
                    <!-- /FORM INPUT -->
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

          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Manage Badges</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- DRAGGABLE ITEMS -->
              <div class="draggable-items">
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/gold-s.png" alt="badge-gold-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/age-s.png" alt="badge-age-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/warrior-s.png" alt="badge-warrior-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/traveller-s.png" alt="badge-traveller-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/scientist-s.png" alt="badge-scientist-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/ncreature-s.png" alt="badge-ncreature-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/mightiers-s.png" alt="badge-mightiers-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/phantom-s.png" alt="badge-phantom-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/collector-s.png" alt="badge-collector-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/bronzec-s.png" alt="badge-bronzec-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/silverc-s.png" alt="badge-silverc-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item">
                  <!-- BADGE ITEM -->
                  <div class="badge-item">
                    <img src="/img/badge/goldc-s.png" alt="badge-goldc-s">
                  </div>
                  <!-- /BADGE ITEM -->
                </div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
            
                <!-- DRAGGABLE ITEM -->
                <div class="draggable-item empty"></div>
                <!-- /DRAGGABLE ITEM -->
              </div>
              <!-- /DRAGGABLE ITEMS -->

              <!-- WIDGET BOX TEXT -->
              <p class="widget-box-text light">Choose the order in which your badges are shown. Just drag and place them wherever you want!</p>
              <!-- /WIDGET BOX TEXT -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->

          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Interests</p>
            <!-- /WIDGET BOX TITLE -->
        
            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->
              <form class="form">
                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea active">
                      <label for="profile-favourite-shows">Favourite TV Shows</label>
                      <textarea id="profile-favourite-shows" name="profile_favourite_shows">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy, The Last Windbender, Game of Wars.</textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea active">
                      <label for="profile-favourite-music">Favourite Music Bands / Artists</label>
                      <textarea id="profile-favourite-music" name="profile_favourite_music">Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea active">
                      <label for="profile-favourite-movies">Favourite Movies</label>
                      <textarea id="profile-favourite-movies" name="profile_favourite_movies">The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea active">
                      <label for="profile-favourite-books">Favourite Books</label>
                      <textarea id="profile-favourite-books" name="profile_favourite_books">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water</textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea active">
                      <label for="profile-favourite-games">Favourite Games</label>
                      <textarea id="profile-favourite-games" name="profile_favourite_games">The First of Us, Assassin's Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto</textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea">
                      <label for="profile-hobbies">My Hobbies</label>
                      <textarea id="profile-hobbies" name="profile_hobbies"></textarea>
                    </div>
                    <!-- /FORM INPUT -->
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

  <script>
  const changeAvatar = document.getElementById("changeAvatar")
  const changeCover = document.getElementById("changeCover")
  const avatar = document.getElementById("avatar")
  const cover = document.getElementById("cover")

  changeAvatar.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)

  changeAvatar.addEventListener("dragenter", () => {
    changeAvatar.classList.add("drag-active")
  })

  changeAvatar.addEventListener("dragleave", () => {
    changeAvatar.classList.remove("drag-active")
  })

  changeAvatar.addEventListener("drop", (e) => {
    e.preventDefault()
    changeAvatar.classList.remove("drag-active")
    avatar.files = e.dataTransfer.files
  })
  
  changeCover.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)

  changeCover.addEventListener("dragenter", () => {
    changeCover.classList.add("drag-active")
  })

  changeCover.addEventListener("dragleave", () => {
    changeCover.classList.remove("drag-active")
  })

  changeCover.addEventListener("drop", (e) => {
    e.preventDefault()
    changeCover.classList.remove("drag-active")
    cover.files = e.dataTransfer.files
  })
    </script>