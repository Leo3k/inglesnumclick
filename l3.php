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
        <h4 style="color:BLACK">RESTAURANT</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video below and fill in the blanks.<br><cite><b>l3</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sIWm5Fi8Z7Q"></iframe>
  </div><br>
  <div style="margin:auto;background-color:aliceblue;width:80%;">
      <details>
        <summary><b>USEFUL WORDS</b></summary>
      <details class='detail'>
        <summary>ready <a class="myButton" type="submit" value="Ouvir" onclick="english(`ready`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>prepared for something</b>
        <li><i>We are ready for the next adventure.</i></li></p>
      </details>
      <details class='detail'>
        <summary>soup <a class="myButton" type="submit" value="Ouvir" onclick="english(`soup`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>a liquid food made by boiling meat or vegetables in water</b>
        <li><i>This soup is delicious.</i></li></p>
      </details>
      <details class='detail'>
        <summary>order <a class="myButton" type="submit" value="Ouvir" onclick="english(`order`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>to ask for something at a restaurant, on a website, etc.</b>
        <li><i>We ordered a pizza last night.</i></li></p>
      </details>
      <details class='detail'>
        <summary>starter <a class="myButton" type="submit" value="Ouvir" onclick="english(`starter`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>a small dish that is served before the main course</b>
        <li><i>(synonym - appetizer) I'd like soup as a starter, please.</i></li></p>
      </details>
      <details class='detail'>
        <summary>main course <a class="myButton" type="submit" value="Ouvir" onclick="english(`main course`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>the main part of the meal</b>
        <li><i>I had lasagna for my main course.</i></li></p>
      </details>
      <details class='detail'>
        <summary>sauce <a class="myButton" type="submit" value="Ouvir" onclick="english(`sauce`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>a thick liquid that is eaten with food to add taste to it</b>
        <li><i>I love this tomato sauce.</i></li></p>
      </details>
      <details class='detail'>
        <summary>dessert <a class="myButton" type="submit" value="Ouvir" onclick="english(`dessert`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></summary>
        <p><b>sweet food eaten at the end of a meal</b>
        <li><i>What's for dessert?</i></li></p>
      </details>
      </details>
  </div><br>
  <p style="text-align:left;"><b>Waiter:</b> <input type='text' size='2' class='blank' maxlength="12">! <input type='text' size='2' class='blank' maxlength="22">?<br>
<b>Woman 1:</b> Well first, can you tell me please what is today's soup?<br>
<b>Waiter:</b> It's bean soup. It's <input type='text' size='2' class='blank' maxlength="9">.<br>
<b>Woman 1:</b> Okay, I'd like soup <input type='text' size='2' class='blank' maxlength="12"> and then could I have Veal Scallop <input type='text' size='2' class='blank' maxlength="18">?<br>
<b>Waiter:</b> Is that with salad?<br>
<b>Woman 1:</b> <input type='text' size='2' class='blank' maxlength="15">, please.<br>
<b>Waiter:</b> Certainly, madam.<br>
<b>Woman 2:</b> I'd like <input type='text' size='2' class='blank' maxlength="23"> please and then I'd like Spaghetti Bolognese <input type='text' size='2' class='blank' maxlength="18"> with salad.<br>
<b>Waiter:</b> And (for) you sir?<br>
<b>Man:</b> Could I have risotto <input type='text' size='2' class='blank' maxlength="12">, please? And then what is Chicken Amalfi?<br>
<b>Waiter:</b> It's <input type='text' size='2' class='blank' maxlength="14">. It's chicken with a <input type='text' size='2' class='blank' maxlength="25">. <br>
<b>Man:</b> That <input type='text' size='2' class='blank' maxlength="11">. I'd like that please.<br>
<b>Waiter:</b> And would you like <input type='text' size='2' class='blank' maxlength="18">?<br>
<b>Man:</b> Mary, Anna would you like wine?<br>
<b>Woman 1:</b> I'd love <input type='text' size='2' class='blank' maxlength="19">.<br>
<b>Waiter:</b> The <input type='text' size='2' class='blank' maxlength="10">?<br>
<b>Woman 1:</b> Yes, that's fine, thanks.<br>
<b>Woman 2:</b> I'd just like some <input type='text' size='2' class='blank' maxlength="15">.<br>
<b>Man:</b> Okay, <input type='text' size='2' class='blank' maxlength="11"> of the house red wine and <input type='text' size='2' class='blank' maxlength="8"> of sparkling water, please.<br>
<b>Waiter:</b> Very good.<br>
<b>Woman 2:</b> They have <input type='text' size='2' class='blank' maxlength="18"> here too. The <input type='text' size='2' class='blank' maxlength="9"> is wonderful.<br>
<b>Woman 1:</b> Great! I love <input type='text' size='2' class='blank' maxlength="7"> ice cream.<br>
<b>Man:</b> Me too.<br>
</p>
<button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
  <br><br>
  <details style="margin:auto;background-color:aliceblue;width:80%;text-transform:uppercase;">
        <summary>ANSWERS</summary>
        <br><p><b>'good evening'<br>'are you ready to order'<br>'very good'<br>'as a starter'<br>
        'for my main course'<br>'with vegetables'<br>'the same for my starter'<br>'for my main course'<br>
        'as a starter'<br>'our speciality'<br>'tomato and mushroom sauce'<br>'sounds good'<br>
        'something to drink'<br>'a glass of red wine'<br>'house wine'<br>
        'sparkling water'<br>'two glasses'<br>'a bottle'<br>'very good desserts'<br>'ice cream'<br>'italian'</b></p>
  </details><br>
  <p><b>Let's practice!</b></p>
  <p><i>Watch the video, but this time you have to pause and repeat what people say.</i></p>
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5RsOkV_Qago"></iframe>
  </div><br>
  <p><b>Quiz</b></p>
  <p><i>Watch the video and answer the questions.</i></p>
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v3t4CY94odU"></iframe>
  </div><br>
  <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QXHM35WBI"></iframe>
    </div>
</div>
  <script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Female` , {rate:0.8, volume: 1, pitch:0.9});
} 
  function checkAnswers() {
    let a1 = document.getElementsByClassName('blank')[0].value.toLowerCase();
    let a2 = document.getElementsByClassName('blank')[1].value.toLowerCase();
    let a3 = document.getElementsByClassName('blank')[2].value.toLowerCase();
    let a4 = document.getElementsByClassName('blank')[3].value.toLowerCase();
    let a5 = document.getElementsByClassName('blank')[4].value.toLowerCase();
    let a6 = document.getElementsByClassName('blank')[5].value.toLowerCase();
    let a7 = document.getElementsByClassName('blank')[6].value.toLowerCase();
    let a8 = document.getElementsByClassName('blank')[7].value.toLowerCase();
    let a9 = document.getElementsByClassName('blank')[8].value.toLowerCase();
    let a10 = document.getElementsByClassName('blank')[9].value.toLowerCase();
    let a11 = document.getElementsByClassName('blank')[10].value.toLowerCase();
    let a12 = document.getElementsByClassName('blank')[11].value.toLowerCase();
    let a13 = document.getElementsByClassName('blank')[12].value.toLowerCase();
    let a14 = document.getElementsByClassName('blank')[13].value.toLowerCase();
    let a15 = document.getElementsByClassName('blank')[14].value.toLowerCase();
    let a16 = document.getElementsByClassName('blank')[15].value.toLowerCase();
    let a17 = document.getElementsByClassName('blank')[16].value.toLowerCase();
    let a18 = document.getElementsByClassName('blank')[17].value.toLowerCase();
    let a19 = document.getElementsByClassName('blank')[18].value.toLowerCase();
    let a20 = document.getElementsByClassName('blank')[19].value.toLowerCase();
    let a21 = document.getElementsByClassName('blank')[20].value.toLowerCase();
    const b1 = 'good evening';
    const b2 = 'are you ready to order';
    const b3 = 'very good';
    const b4 = 'as a starter';
    const b5 = 'for my main course';
    const b6 = 'with vegetables';
    const b7 = 'the same for my starter';
    const b8 = 'for my main course';
    const b9 = 'as a starter';
    const b10 = 'our speciality';
    const b11 = 'tomato and mushroom sauce';
    const b12 = 'sounds good';
    const b13 = 'something to drink';
    const b14 = "a glass of red wine";
    const b15 = 'house wine';
    const b16 = 'sparkling water';
    const b17 = 'two glasses';
    const b18 = 'a bottle';
    const b19 = 'very good desserts';
    const b20 = 'ice cream';
    const b21 = 'italian';
    let point = 0;
    if (a1 == b1) {
      document.getElementsByClassName('blank')[0].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[0].style.color = 'red';
    }
    if (a2 == b2) {
      document.getElementsByClassName('blank')[1].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[1].style.color = 'red';
    }
    if (a3 == b3) {
      document.getElementsByClassName('blank')[2].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[2].style.color = 'red';
    }
    if (a4 == b4) {
      document.getElementsByClassName('blank')[3].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[3].style.color = 'red';
    }
    if (a5 == b5) {
      document.getElementsByClassName('blank')[4].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[4].style.color = 'red';
    }
    if (a6 == b6) {
      document.getElementsByClassName('blank')[5].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[5].style.color = 'red';
    }
    if (a7 == b7) {
      document.getElementsByClassName('blank')[6].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[6].style.color = 'red';
    }
    if (a8 == b8) {
      document.getElementsByClassName('blank')[7].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[7].style.color = 'red';
    }
    if (a9 == b9) {
      document.getElementsByClassName('blank')[8].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[8].style.color = 'red';
    }
    if (a10 == b10) {
      document.getElementsByClassName('blank')[9].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[9].style.color = 'red';
    }
    if (a11 == b11) {
      document.getElementsByClassName('blank')[10].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[10].style.color = 'red';
    }
    if (a12 == b12) {
      document.getElementsByClassName('blank')[11].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[11].style.color = 'red';
    }
    if (a13 == b13) {
      document.getElementsByClassName('blank')[12].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[12].style.color = 'red';
    }
    if (a14 == b14) {
      document.getElementsByClassName('blank')[13].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[13].style.color = 'red';
    }
    if (a15 == b15) {
      document.getElementsByClassName('blank')[14].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[14].style.color = 'red';
    }
    if (a16 == b16) {
      document.getElementsByClassName('blank')[15].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[15].style.color = 'red';
    }
    if (a17 == b17) {
      document.getElementsByClassName('blank')[16].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[16].style.color = 'red';
    }
    if (a18 == b18) {
      document.getElementsByClassName('blank')[17].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[17].style.color = 'red';
    }
    if (a19 == b19) {
      document.getElementsByClassName('blank')[18].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[18].style.color = 'red';
    }
    if (a20 == b20) {
      document.getElementsByClassName('blank')[19].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[19].style.color = 'red';
    }
    if (a21 == b21) {
      document.getElementsByClassName('blank')[20].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[20].style.color = 'red';
    }
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 21 points.",
      confirmButtonText: "OK" 
    })
  }
  </script>