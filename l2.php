<?php include "navbar.php" ?>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=HOp1bC0P"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
@media (min-width: 576px) { 
    #exercise {
        width:580px;
    }    
} 
.sound {
	width: 30px;
	height: 20px;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">THIS - THAT - THESE - THOSE</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Let's review the demonstrative pronouns and practice our listening skills at the same time.<br><cite><b>l2</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col"> </th>
        <th scope="col">SINGULAR <a class="myButton" type="submit" value="Ouvir" onclick="english(`singular`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></th>
        <th scope="col">PLURAL <a class="myButton" type="submit" value="Ouvir" onclick="english(`plural`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>NEAR <a class="myButton" type="submit" value="Ouvir" onclick="english(`near`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>THIS IS <a class="myButton" type="submit" value="Ouvir" onclick="english(`this is`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>THESE ARE <a class="myButton" type="submit" value="Ouvir" onclick="english(`these are`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
        <tr>
        <td>FAR <a class="myButton" type="submit" value="Ouvir" onclick="english(`far`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>THAT IS <a class="myButton" type="submit" value="Ouvir" onclick="english(`that is`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>THOSE ARE <a class="myButton" type="submit" value="Ouvir" onclick="english(`those are`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
    </tbody>
    </table>
    <p><b>Examples</b></p>
    <p><a class="myButton" type="submit" value="Ouvir" onclick="english(`this is my cat!, that is my dog!, these are my five cats!, those are his four dogs!`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <img
          id="MDB-logo"
          src="imgs/demonstratives.png"
          alt="MDB Logo"
          draggable="false"
          height="550"
      /><br><br>
    <p><b>Exercise</b></p>
    <p><i>Listen and fill in the blanks.</i></p>
    <div style='text-align:left;background-color:aliceblue;padding:3px;'>
    <p><b>1&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="7"> my favorite jacket. <a class="myButton" type="submit" value="Ouvir" onclick="english(`this is my favorite jacket`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>2&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="7"> my dad's car. <a class="myButton" type="submit" value="Ouvir" onclick="english(`that is my dad's car`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>3&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="9"> my sister's pens. <a class="myButton" type="submit" value="Ouvir" onclick="english(`these are my sister's pens`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>4&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="9"> my old CDs. <a class="myButton" type="submit" value="Ouvir" onclick="english(`those are my old CDs`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>5&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="9"> the wrong numbers. <a class="myButton" type="submit" value="Ouvir" onclick="english(`these are the wrong numbers`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>6&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="7"> a beautiful dress. <a class="myButton" type="submit" value="Ouvir" onclick="english(`that is a beautiful dress`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>7&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="9"> not the same books. <a class="myButton" type="submit" value="Ouvir" onclick="english(`these are not the same books`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>8&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="7"> not my cat. <a class="myButton" type="submit" value="Ouvir" onclick="english(`this is not my cat`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>9&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="9"> the same dogs that I saw last week. <a class="myButton" type="submit" value="Ouvir" onclick="english(`those are the same dogs that I saw last week.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>10&nbsp;-&nbsp;</b><input type='text' size='5' class='blank' maxlength="7"> a really good story. <a class="myButton" type="submit" value="Ouvir" onclick="english(`that is a really good story`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
    <br>
    <br>
    <p><b>Exercise 2</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://www.quiz-maker.com/QY1H03KVM"></iframe>
    </div><br>
  </div>
  <script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Male` , {rate:0.8, volume: 1, pitch:0.9});
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
    const b1 = 'this is';
    const b2 = 'that is';
    const b3 = 'these are';
    const b4 = 'those are';
    const b5 = 'these are';
    const b6 = 'that is';
    const b7 = 'these are';
    const b8 = 'this is';
    const b9 = 'those are';
    const b10 = 'that is';
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
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 10 points.",
      confirmButtonText: "OK" 
    })
}
  </script>