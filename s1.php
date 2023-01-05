<?php include "navbar.php" ?>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=HOp1bC0P"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
@media (min-width: 576px) { 
    #exercise {
        width:580px;
    }    
} 
@media (max-width: 576px) { 
    img {
        width:100%;
    }    
} 
.sound {
	width: 30px;
	height: 20px;
}
span {
    color:midnightblue;
    font-style: italic;
}
.timer {
    font-size: 40px;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">RANDOM QUESTIONS</h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Click the button below to see a random question. Now, you have 1 minute to answer it.<br><cite><b>s1</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
    <h5 id="question">Question</h5><br>
  <button type='submit' onclick="randomQuestion()" name='submit' class='btn btn-danger'>GENERATE QUESTION</button>
  <br><br><span class="timer">
    <span id="counter"></span>
  </span>     
</div>
  <script>    
        function randomQuestion() {
        let question;
        let number = Math.floor(Math.random() * 12);
        switch (number) {
        case 0:
            question = "WHAT DID YOU HAVE FOR BREAKFAST THIS MORNING?";
            break;
        case 1:
            question = "WHAT WAS YOUR FAVORITE FOOD WHEN YOU WERE A KID?";
            break;
        case 2:
            question = "HOW OFTEN DO YOU DRINK ALCOHOL?";
            break;
        case 3:
            question = "WHAT WOULD YOUR IDEAL MORNING ROUTINE LOOK LIKE?";
            break;
        case 4:
            question = "WHERE DO YOU SEE YOURSELF IN 5 YEARS?";
            break;
        case 5:
            question = "WHAT DO YOU LIKE TO DO IN YOUR FREE TIME?";
            break;
        case 6:
            question = "WHAT WOULD YOUR DREAM HOUSE BE LIKE?";
            break;
        case 7:
            question = "IN YOUR OPINION, WHAT ARE SOME OF THE BEST MOVIES EVER MADE?";
            break;
        case 8:
            question = "HAVE YOU EVER BEEN STUNG OR BITTEN BY AN ANIMAL OR INSECT?";
            break;
        case 9:
            question = "HAVE YOU EVER BOUGHT ANYTHING AND REGRETTED IT LATER?";
            break;
        case 10:
            question = "DID YOU PASS YOUR DRIVING TEST FIRST TIME?";
            break;
        case 11:
            question = "DO YOU GET ENOUGH EXERCISE?";
            break;
        }
        document.getElementById('question').innerHTML = question;
        function countdown() {
        var seconds = 60;
        function tick() {
          var counter = document.getElementById("counter");
          seconds--;
          counter.innerHTML =
            "0:" + (seconds < 10 ? "0" : "") + String(seconds);
          if (seconds > 0) {
            setTimeout(tick, 1000);
          }
        }
        tick();
      }
      countdown();
}
        
  </script>