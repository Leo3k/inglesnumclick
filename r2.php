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
        <h4 style="color:BLACK">Our Solar System</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Let's learn more about the planets in the solar system.<br><cite><b>r2</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <p><a class="myButton" type="submit" value="Ouvir" onclick="english(`mercury, venus, earth, mars, jupiter, saturn, uranus, neptune`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
  <img
          id="job"
          src="imgs/planets.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      /><br><br>
      <p><b>Reading</b></p>
  <p><i>Read the text below.</i></p>
  <p>
  Why is it Called the Solar System?</p><p>

There are many planetary systems like ours in the universe, with planets orbiting a host star. Our planetary system is called “the solar system” because we use the word “solar” to describe things related to our star, after the Latin word for Sun, "solis."</p><p>

Our solar system consists of our star, the Sun, and everything bound to it by gravity - the planets Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, and Neptune; dwarf planets such as Pluto; dozens of moons; and millions of asteroids, comets, and meteoroids. Beyond our own solar system, we have discovered thousands of planetary systems orbiting other stars in the Milky Way.
  </p><p><i>Source: https://solarsystem.nasa.gov/solar-system/our-solar-system/overview/</i></p>
  <p><b>Video</b></p>
  <p><i>Watch the video about the solar system with English subtitles.</i></p>
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/libKVRa01L8"></iframe>
  </div><br>  
  <p><b>Fun Facts</b></p>
  <p><i>Find out some fun facts about our solar system.</i></p>
  <p><a href="https://starwalk.space/en/quiz/guess-the-planet">Click Here</a></p>
  <br><p><b>Quiz</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QGYE65BAE"></iframe>
    </div>
    </div><br><br>
</div>
  <script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Female` , {rate:0.8, volume: 1, pitch:0.9});
} 
</script>