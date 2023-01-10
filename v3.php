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
.detail {
  background-color: midnightblue;
  color: white;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">DAYS OF THE WEEK</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video about the days of the week.<br><cite><b>v3</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xNZwlw5haTM"></iframe>
  </div><br>
  <p><b>The Days Of The Week</b></p>
  <p><i>Look at the below and play the audio file to hear the correct pronunciation.</i></p>
  <p><a class="myButton" type="submit" value="Ouvir" onclick="english(`days of the week, sunday, monday, tuesday, wednesday, thursday, friday, saturday`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
  <img
          id="job"
          src="imgs/days.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      /><br><br>
  <p><b>Let's practice!</b></p>
  <p><i>Watch the video below and answer the quiz.</i></p>
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Hmk4cZ6HCm0"></iframe>
  </div><br>
</div>
  <script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Female` , {rate:0.8, volume: 1, pitch:0.9});
} 
</script>