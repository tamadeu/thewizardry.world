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

.prevBtn, .nextBtn {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Rajdhani,sans-serif;
  cursor: pointer;

}

.prevBtn:hover, .nextBtn:hover {
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

.formQuiz {
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
.formQuiz label {
  cursor: pointer;
}
.formQuiz input[type=radio] {
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
.formQuiz input[type=radio]::before, form input[type=radio]::after {
  content: "";
  display: flex;
  justify-self: center;
  border-radius: 50%;
}
.formQuiz input[type=radio]::before {
  position: absolute;
  width: 100%;
  height: 100%;
  background: var(--background);
  z-index: 1;
  opacity: var(--opacity, 1);
}
.formQuiz input[type=radio]::after {
  position: relative;
  width: calc(100% /2);
  height: calc(100% /2);
  background: var(--radio-checked);
  top: var(--y, 100%);
  transition: top 0.5s cubic-bezier(0.48, 1.97, 0.5, 0.63);
}
.formQuiz input[type=radio]:checked {
  --radio: var(--radio-checked);
}
.formQuiz input[type=radio]:checked::after {
  --y: 0%;
  -webkit-animation: stretch-animate 0.3s ease-out 0.17s;
          animation: stretch-animate 0.3s ease-out 0.17s;
}
.formQuiz input[type=radio]:checked::before {
  --opacity: 0;
}
.formQuiz input[type=radio]:checked ~ input[type=radio]::after {
  --y: -100%;
}
.formQuiz input[type=radio]:not(:checked)::before {
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
      <img class="section-banner-icon" src="img/banner/groups-icon.png" alt="groups-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">House Selection</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">I bet you're eagger to know your future house!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <form id="regForm" method="POST" class="formQuiz" action="/sendQuiz">
      @csrf

      <div class="tab">
        <div class="widget-box" style="background-color: transparent; box-shadow: none;">
          <!-- WIDGET BOX TITLE -->
          <h1>Congratulations!</h1>
          <!-- /WIDGET BOX TITLE -->

          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- SWITCH OPTION LIST -->
            <div class="switch-option-list" style="width:80%">

              <h3>Your application was accepted in the <span style="color: #615dfa">{{ $user->schoolName }}</span>!!</h3></br>

              <p>Now we will conduct a quick test to assign you to your House.</p></br>
              <p>It is extremelly important that you answer all questions with all your heart. The selected house will be your future house in the The Wizardry World.</p>

            </div>
            <!-- /SWITCH OPTION LIST -->
          </div>
          <!-- WIDGET BOX CONTENT -->
        </div>
      </div>
      
      
      <!-- One "tab" for each step in the form: -->
      @foreach($questions->list as $question)
        <div class="tab">
          <div class="widget-box" style="background-color: transparent; box-shadow: none;">
            <!-- WIDGET BOX TITLE -->
            <h3>{{ $question->name }}</h3>
            <!-- /WIDGET BOX TITLE -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- SWITCH OPTION LIST -->
              <div class="switch-option-list">

                @foreach($answers->list as $answer)
                  <!-- SWITCH OPTION -->
                  @if($question->id == $answer->quizzQuestionId)
                    <div class="switch-option">
                      <div class="row">
                        <div class="col-1">
                          <!-- FORM SWITCH -->
                          <input id="{{ $answer->id }}" type="radio" name="{{ $question->id }}" value="{{ $answer->houseId }}">
                          <!-- /FORM SWITCH -->
                        </div>
                        <div class="col-11">
                          <!-- SWITCH OPTION TEXT -->
                          <p class="switch-option-text">{{$answer->name}}</p>
                          <!-- /SWITCH OPTION TEXT -->
                        </div>
                      </div>
                    </div>
                  @endif
                  <!-- /SWITCH OPTION -->
                @endforeach

              </div>
              <!-- /SWITCH OPTION LIST -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
        </div>
      @endforeach

      <div style="z-index: 99;">
        <div style="float:right;">
          <button type="button" class="prevBtn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          
          <button type="button" class="nextBtn" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        @foreach($questions->list as $question)
          <span class="step"></span>
        @endforeach
      </div>
    </form>

    <!-- GRID -->
    
  </div>
  <!-- /CONTENT GRID -->
  <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
@include('partials/footer')