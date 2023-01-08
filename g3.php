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
    color:red;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">SIMPLE PRESENT<h4><p><i>(AFFIRMATIVE SENTENCES)</i></p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Let's learn some common verbs and how to conjugate them in the Simple Present tense! <br><cite><b>g3</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <p><a class="myButton" type="submit" value="Ouvir" onclick="english(`eat, run, drink, sleep, travel, play`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
  <img
          id="MDB-logo"
          src="imgs/sleep.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      /><br><br>
      <table class="table table-light table-hover">
      <tbody>
        <tr>
        <td>I - YOU - WE - THEY</td>
        <td>eat, run, drink, sleep, travel, play</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-light table-hover">
      <tbody>
        <p><b>We must add an 's' to the end of the verb with the third person singular (she/he/it) </b></p>
        <tr>
        <td>HE - SHE - IT</td>
        <td>eats, runs, drinks, sleeps, travels, plays</td>
        </tr>
        </tbody>
    </table>
      <label for="verbs">Select a verb:</label>
        <select name="verbs" id="verbs" onchange="verbSelect()">
        <option value="verb">verb</option>
        <option value="eat">eat</option>
        <option value="run">run</option>
        <option value="drink">drink</option>
        <option value="sleep">sleep</option>
        <option value="travel">travel</option>
        <option value="play">play</option>
        </select>
        <p id='ex'></p><br>
        <br>
    <p><b>Exercise</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</i></p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QIWKK0U72"></iframe>
    </div><br>
        <img
          id="MDB-logo"
          src="imgs/study.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      /><br><br>
      <p><b>We need to add 'es' when the verb ends in...</b></p>
      <table class="table table-light table-hover">
      <tbody>
        <tr>
        <td>o - ch - sh - th - ss - x - z</td>
        <td>goes, does, watches, washes, kisses, fixes, buzzes</td>
        </tr>
        </tbody>
    </table>
    <p><b>And when the verb ends in a consonant + y, we must remove 'y' and add 'ies'.</b></p>
    <table class="table table-light table-hover">
      <tbody>
        <tr>
        <td>consonant + y</td>
        <td>studies, flies, fortifies, occupies</td>
        </tr>
        </tbody>
    </table>
    <p><b>The verb "HAVE" is an exception. We add an 's', but remove the 've'.</b></p>
    <table class="table table-light table-hover">
      <tbody>
        <tr>
        <td>have</td>
        <td>has</td>
        </tr>
        </tbody>
    </table>
        
    <label for="verbs2">Select a verb:</label>
        <select name="verbs" id="verbs2" onchange="verbSelect2()">
        <option value="verb">verb</option>
        <option value="have">have</option>
        <option value="watch">watch</option>
        <option value="kiss">kiss</option>
        <option value="fix">fix</option>
        <option value="wash">wash</option>
        <option value="study">study</option>
        </select>
    <p id='ex2'></p>
    <br>
    <p><b>Exercise 2</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</i></p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/Q1E2EIJ53"></iframe>
    </div><br>
    <br>
    <p><b>Exercise 3</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</i></p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://www.quiz-maker.com/Q81V87OZJ"></iframe>
    </div><br>
    <br>
    <p><b>Exercise 4</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</i></p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://www.quiz-maker.com/Q9UQVIO9X"></iframe>
    </div><br>
  </div>
  <script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Female` , {rate:0.8, volume: 1, pitch:0.9});
} 
    function verbSelect(){
    let verb = document.getElementById('verbs').value;
    switch (verb) {
    case "eat":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I eat pizza, he eats pizza, she eats pizza, it eats pizza, we eat pizza, you eat pizza, they eat pizza')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>eat</b> pizza.</p>
        <p>He <b><span>eats</span></b> pizza.</p>
        <p>She <b><span>eats</span></b> pizza.</p>
        <p>It <b><span>eats</span></b> pizza.</p>
        <p>We <b>eat</b> pizza.</p>
        <p>You <b>eat</b> pizza.</p>
        <p>They <b>eat</b> pizza.</p>`;
        break;
    case "run":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I run every day, he runs every day, she runs every day, it runs every day, we run every day, you run every day, they run every day')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>run</b> every day.</p>
        <p>He <b><span>runs</span></b> every day.</p>
        <p>She <b><span>runs</span></b> every day.</p>
        <p>It <b><span>runs</span></b> every day.</p>
        <p>We <b>run</b> every day.</p>
        <p>You <b>run</b> every day.</p>
        <p>They <b>run</b> every day.</p>`;
        break;
    case "drink":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I drink coffee in the morning, he drinks coffee in the morning, she drinks coffee in the morning, it drinks coffee in the morning, we drink coffee in the morning, you drink coffee in the morning, they drink coffee in the morning')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>drink</b> coffee in the morning.</p>
        <p>He <b><span>drinks</span></b> coffee in the morning.</p>
        <p>She <b><span>drinks</span></b> coffee in the morning.</p>
        <p>It <b><span>drinks</span></b> coffee in the morning.</p>
        <p>We <b>drink</b> coffee in the morning.</p>
        <p>You <b>drink</b> coffee in the morning.</p>
        <p>They <b>drink</b> coffee in the morning.</p>`;
        break;
    case "sleep":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I sleep 8 hours a day, he sleeps 8 hours a day, she sleeps 8 hours a day, it sleeps 8 hours a day, we sleep 8 hours a day, you sleep 8 hours a day, they sleep 8 hours a day')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>sleep</b> 8 hours a day.</p>
        <p>He <b><span>sleeps</span></b> 8 hours a day.</p>
        <p>She <b><span>sleeps</span></b> 8 hours a day.</p>
        <p>It <b><span>sleeps</span></b> 8 hours a day.</p>
        <p>We <b>sleep</b> 8 hours a day.</p>
        <p>You <b>sleep</b> 8 hours a day.</p>
        <p>They <b>sleep</b> 8 hours a day.</p>`;
        break;
    case "travel":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I travel every summer, he travels every summer, she travels every summer, it travels every summer, we travel every summer, you travel every summer, they travel every summer')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>travel</b> every summer.</p>
        <p>He <b><span>travels</span></b> every summer.</p>
        <p>She <b><span>travels</span></b> every summer.</p>
        <p>It <b><span>travels</span></b> every summer.</p>
        <p>We <b>travel</b> every summer.</p>
        <p>You <b>travel</b> every summer.</p>
        <p>They <b>travel</b> every summer.</p>`;
        break;
    case "play":
        document.getElementById('ex').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I play tennis, he plays tennis, she plays tennis, it plays tennis, we play tennis, you play tennis, they play tennis')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br><p>I <b>play</b> tennis.</p>
        <p>He <b><span>plays</span></b> tennis.</p>
        <p>She <b><span>plays</span></b> tennis.</p>
        <p>It <b><span>plays</span></b> tennis.</p>
        <p>We <b>play</b> tennis.</p>
        <p>You <b>play</b> tennis.</p>
        <p>They <b>play</b> tennis.</p>`;
    }
    }

    function verbSelect2(){
    let verb2 = document.getElementById('verbs2').value;
    switch (verb2) {
    case "have":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I have a cat. He has a dog')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>I have a cat.</p>
        <p>He <span>has</span> a dog.</p>`;
        break;
    case "watch":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('They watch cartoons. She watches movies.')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>They watch cartoons.</p>
        <p>She <span>watches</span> movies.</p>`;
        break;
    case "kiss":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I kiss my girlfriend. She kisses her boyfriend.')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>I kiss my girlfriend.</p>
        <p>She <span>kisses</span> her boyfriend.</p>`;
        break;
    case "fix":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('You fix your computer. The mechanic fixes your car.')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>You fix your computer.</p>
        <p>The mechanic <span>fixes</span> your car.</p>`;
        break;
    case "wash":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('We wash our hands. The boy washes his hands.')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>We wash our hands.</p>
        <p>The boy <span>washes</span> his hands.</p>`;
        break;
    case "study":
        document.getElementById('ex2').innerHTML = `
        <a class="myButton" type="submit" value="Ouvir" onclick="english('I study a lot. She studies a lot too.')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        <br><br>
        <p>I study a lot.</p>
        <p>She <span>studies</span> a lot too.</p>`;
    }
    };
</script>