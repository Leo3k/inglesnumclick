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
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">READING</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Read the text below.<br><cite><b>r1</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <p><a class="myButton" type="submit" value="Ouvir" onclick="english(`Monica bought a new house with her husband. But since they just got married, they don't have any furniture yet. So, Monica needs to buy everything before they move into their new home. She needs a new table for the dining room, a new TV for the living room, a stove for the kitchen, and the list goes on and on. Luckily, however, her family will help her. Her sister Julia will buy the bed, her dad will buy the fridge, her mom will buy the couch, and her brother Tom will buy a washing machine. Monica is excited to see her new house after all of the furniture is in place.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p>Monica bought a new house with her husband. But since they just got married, they don't have any <b>furniture</b> yet. So, Monica needs to buy everything before they move into their new home. She needs a new <b>table</b> for the <b>dining room</b>, a new <b>TV</b> for the <b>living room</b>, a <b>stove</b> for the <b>kitchen</b>, and the list goes on and on. Luckily, however, her family will help her. Her sister Julia will buy the <b>bed</b>, her dad will buy the <b>fridge</b>, her mom will buy the <b>couch</b>, and her brother Tom will buy a <b>washing machine</b>. Monica is excited to see her new house after all of the furniture is in place.</p>
  <p><b>Exercise</b></p>
  <p><i>Match the word to the picture by writing down the number.</i></p>
    <img
          id="MDB-logo"
          src="imgs/rooms.png"
          alt="MDB Logo"
          draggable="false"
          height="400"
      /><br><br>
      <div style='background-color:aliceblue;padding:3px;'>
    <p><input type='text' size='1' class='blank' maxlength="1"> BEDROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`BEDROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
    <input type='text' size='1' class='blank' maxlength="1"> BATHROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`BATHROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><input type='text' size='1' class='blank' maxlength="1"> KITCHEN <a class="myButton" type="submit" value="Ouvir" onclick="english(`KITCHEN`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
    <input type='text' size='1' class='blank' maxlength="1"> LIVING ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`LIVING ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><input type='text' size='1' class='blank' maxlength="1"> DINING ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`DINING ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
    <input type='text' size='1' class='blank' maxlength="1"> LAUNDRY ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`LAUNDRY ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
    <br>
    <br></div><br>
    <img
          id="MDB-logo"
          src="imgs/STOVE.png"
          alt="MDB Logo"
          draggable="false"
          height="220"
      />
    <br><br>
    <table class="table table-dark table-hover">
        <tr>
        <td>KITCHEN <a class="myButton" type="submit" value="Ouvir" onclick="english(`KITCHEN`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>stove, fridge, microwave, sink, toaster, blender, coffee machine <a class="myButton" type="submit" value="Ouvir" onclick="english(`stove, fridge, microwave, sink, toaster, blender, coffee machine`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
        <tr>
        <td>BEDROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`BEDROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>bed, pillow, nightstand, blanket, mattress, wardrobe, lamp <a class="myButton" type="submit" value="Ouvir" onclick="english(`bed, pillow, nightstand, blanket, mattress, wardrobe, lamp`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
  </table>
  <br>
    <img
          id="MDB-logo"
          src="imgs/TOILET.png"
          alt="MDB Logo"
          draggable="false"
          height="220"
      />
    <br><br>
    <table class="table table-dark table-hover">
        <tr>
        <td>BATHROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`BATHROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>toilet, shower, sink, mirror, toothbrush, toothpaste, toilet paper<a class="myButton" type="submit" value="Ouvir" onclick="english(`toilet, shower, sink, mirror, toothbrush, toothpaste, toilet paper`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
        <tr>
        <td>DINING ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`DINING ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>table, chair, candle, plates, silverware, tablecloth, chandelier<a class="myButton" type="submit" value="Ouvir" onclick="english(`table, chair, candle, plates, silverware, tablecloth, chandelier`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
        <tr>
  </table>
  <br>
    <img
          id="MDB-logo"
          src="imgs/COUCH.png"
          alt="MDB Logo"
          draggable="false"
          height="220"
      />
    <br><br>
    <table class="table table-dark table-hover">
        <td>LIVING ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`LIVING ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>couch, TV, coffee table, rug, curtains, remote control, armchair<a class="myButton" type="submit" value="Ouvir" onclick="english(`couch, TV, coffee table, rug, curtains, remote control, armchair`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
        <tr>
        <td>LAUNDRY ROOM <a class="myButton" type="submit" value="Ouvir" onclick="english(`LAUNDRY ROOM`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>washing machine, dryer, laundry detergent, laundry basket, clothesline<a class="myButton" type="submit" value="Ouvir" onclick="english(`washing machine, dryer, laundry detergent, laundry basket, clothesline`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
    </table>
    <p><b>Reading Comprehension Questions</b></p>
    <p><i>Read the text again and asnwer the questions below.</p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QW2DPX32K"></iframe>
    </div><br>
    <p><b>Exercise 2</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://www.quiz-maker.com/Q9UQVIWGX"></iframe>
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
    const b1 = '5';
    const b2 = '3';
    const b3 = '1';
    const b4 = '2';
    const b5 = '4';
    const b6 = '6';
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
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 6 points.",
      confirmButtonText: "OK" 
    })
}
    </script>