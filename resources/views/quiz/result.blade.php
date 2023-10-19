@include('partials/head')
<style>

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Rajdhani,sans-serif;
  cursor: pointer;

}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  margin-bottom: 10px;
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

form {
  --background: #ffffff;
  --text: #414856;
  --radio: #7C96B2;
  --radio-checked: #4F29F0;
  --radio-size: 20px;
  --width: 100px;
  --height: 140px;
  --border-radius: 10px;
  border-radius: var(--border-radius);
  color: var(--text);
  position: relative;
  padding: 30px 45px;
  display: grid;
  grid-template-columns: auto var(--radio-size);
  align-items: center;
}
form label {
  cursor: pointer;
}
form input[type=radio] {
  -webkit-appearance: none;
  -moz-appearance: none;
  position: relative;
  height: var(--radio-size);
  width: var(--radio-size);
  outline: none;
  margin: 0;
  cursor: pointer;
  border: 2px solid var(--radio);
  background: transparent;
  border-radius: 50%;
  display: grid;
  justify-self: end;
  justify-items: center;
  align-items: center;
  overflow: hidden;
  transition: border 0.5s ease;
}
form input[type=radio]::before, form input[type=radio]::after {
  content: "";
  display: flex;
  justify-self: center;
  border-radius: 50%;
}
form input[type=radio]::before {
  position: absolute;
  width: 100%;
  height: 100%;
  background: var(--background);
  z-index: 1;
  opacity: var(--opacity, 1);
}
form input[type=radio]::after {
  position: relative;
  width: calc(100% /2);
  height: calc(100% /2);
  background: var(--radio-checked);
  top: var(--y, 100%);
  transition: top 0.5s cubic-bezier(0.48, 1.97, 0.5, 0.63);
}
form input[type=radio]:checked {
  --radio: var(--radio-checked);
}
form input[type=radio]:checked::after {
  --y: 0%;
  -webkit-animation: stretch-animate 0.3s ease-out 0.17s;
          animation: stretch-animate 0.3s ease-out 0.17s;
}
form input[type=radio]:checked::before {
  --opacity: 0;
}
form input[type=radio]:checked ~ input[type=radio]::after {
  --y: -100%;
}
form input[type=radio]:not(:checked)::before {
  --opacity: 1;
  transition: opacity 0s linear 0.5s;
}

@-webkit-keyframes stretch-animate {
  0% {
    transform: scale(1, 1);
  }
  28% {
    transform: scale(1.15, 0.85);
  }
  50% {
    transform: scale(0.9, 1.1);
  }
  100% {
    transform: scale(1, 1);
  }
}

@keyframes stretch-animate {
  0% {
    transform: scale(1, 1);
  }
  28% {
    transform: scale(1.15, 0.85);
  }
  50% {
    transform: scale(0.9, 1.1);
  }
  100% {
    transform: scale(1, 1);
  }
}

</style>
  <!-- PAGE LOADER -->
  <div class="page-loader">
    <!-- PAGE LOADER DECORATION -->
    <div class="page-loader-decoration">
      <!-- ICON LOGO -->
      <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
        <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
      </svg>
      <!-- /ICON LOGO -->
    </div>
    <!-- /PAGE LOADER DECORATION -->

    <!-- PAGE LOADER INFO -->
    <div class="page-loader-info">
      <!-- PAGE LOADER INFO TITLE -->
      <p class="page-loader-info-title">Vikinger</p>
      <!-- /PAGE LOADER INFO TITLE -->

      <!-- PAGE LOADER INFO TEXT -->
      <p class="page-loader-info-text">Loading...</p>
      <!-- /PAGE LOADER INFO TEXT -->
    </div>
    <!-- /PAGE LOADER INFO -->
    
    <!-- PAGE LOADER INDICATOR -->
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <!-- /PAGE LOADER INDICATOR -->
  </div>
  <!-- /PAGE LOADER -->

  <!-- NAVIGATION WIDGET -->
  <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
    <!-- USER AVATAR -->
    <a class="user-avatar small no-outline online" href="profile-timeline.html">
      <!-- USER AVATAR CONTENT -->
      <div class="user-avatar-content">
        <!-- HEXAGON -->
        <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
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
        <p class="user-avatar-badge-text">24</p>
        <!-- /USER AVATAR BADGE TEXT -->
      </div>
      <!-- /USER AVATAR BADGE -->
    </a>
    <!-- /USER AVATAR -->

    <!-- MENU -->
    <ul class="menu small">
      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="newsfeed.html" data-title="Newsfeed">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item active">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-streams">
            <use xlink:href="#svg-streams"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-forums">
            <use xlink:href="#svg-forums"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="marketplace.html" data-title="Marketplace">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
  </nav>
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
      <img class="section-banner-icon" src="img/banner/groups-icon.png" alt="groups-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Congratulations!</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">This is amazing!!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <div class="grid grid-3-3 top-space centered">
    <div class="badge-item-stat">
        <!-- TEXT STICKER -->
        <p class="text-sticker">
          <!-- TEXT STICKER ICON -->
          <svg class="text-sticker-icon icon-plus-small">
            <use xlink:href="#svg-plus-small"></use>
          </svg>
          <!-- TEXT STICKER ICON -->
          20 Exp
        </p>
        <!-- /TEXT STICKER -->
    
        <!-- BADGE ITEM STAT IMAGE PREVIEW -->
        <img class="badge-item-stat-image-preview" src="img/badge/bronze-s.png" alt="badge-bronze-s">
        <!-- /BADGE ITEM STAT IMAGE PREVIEW -->
    
        <!-- BADGE ITEM STAT IMAGE -->
        <img class="badge-item-stat-image" src="img/badge/bronze-b.png" alt="badge-bronze-b">
        <!-- /BADGE ITEM STAT IMAGE -->
    
        <!-- BADGE ITEM STAT TITLE -->
        <h1>{{ $user->houseName }}!!</h1>
        <!-- /BADGE ITEM STAT TITLE -->
    
        <!-- BADGE ITEM STAT TEXT -->
        <p class="badge-item-stat-text">{!! $house->story !!}</p>
        <!-- /BADGE ITEM STAT TEXT -->
      </div>

    <!-- GRID -->
    </div>
    
  </div>
  <!-- /CONTENT GRID -->
  
@include('partials/footer')