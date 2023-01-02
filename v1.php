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
        <h4 style="color:BLACK">Feelings & Emotions</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Listen and repeat. <br><cite><b>v1</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128578; HAPPY<a class="myButton" type="submit" value="Ouvir" onclick="english(`happy`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128577; SAD<a class="myButton" type="submit" value="Ouvir" onclick="english(`sad`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#129298; SICK<a class="myButton" type="submit" value="Ouvir" onclick="english(`sick`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128544; ANGRY<a class="myButton" type="submit" value="Ouvir" onclick="english(`angry`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128552; AFRAID<a class="myButton" type="submit" value="Ouvir" onclick="english(`afraid`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128563; EMBARRASSED<a class="myButton" type="submit" value="Ouvir" onclick="english(`embarrassed`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#129314; NAUSEOUS<a class="myButton" type="submit" value="Ouvir" onclick="english(`nauseous`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128558; SURPRISED<a class="myButton" type="submit" value="Ouvir" onclick="english(`surprised`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#129300; CONFUSED<a class="myButton" type="submit" value="Ouvir" onclick="english(`confused`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            &#128555; TIRED<a class="myButton" type="submit" value="Ouvir" onclick="english(`tired`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
    </ul><br>
    <p><b>Let's practice</b></p>
    <p><i>Write down the feelings/emotions that correspond to the pictures.</p>
    <img src="imgs/v1.png" width='400px' height='800px' class="rounded" alt="...">
    <div>
        <br>
    <p><b>1</b> - He is <input type='text' size='5' class='blank' maxlength="3">
    <b>2</b> - She is <input type='text' size='5' class='blank' maxlength="5"></p>
    <p><b>3</b> - She is <input type='text' size='5' class='blank' maxlength="6">
    <b>4</b> - She is <input type='text' size='5' class='blank' maxlength="4"></p>
    <p><b>5</b> - She is <input type='text' size='5' class='blank' maxlength="8">
    <b>6</b> - He is <input type='text' size='5' class='blank' maxlength="8"></p>
    <p><b>7</b> - He is <input type='text' size='5' class='blank' maxlength="5">
    <b>8</b> - She is <input type='text' size='5' class='blank' maxlength="9"></p>
    <p><b>9</b> - She is <input type='text' size='5' class='blank' maxlength="11">
    <b>10</b> - They are <input type='text' size='5' class='blank' maxlength="5"></p>
    <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>        
    </div><br>
    <div>
    <p><b>Quiz</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</p>
    <div class="embed-responsive embed-responsive-1by1" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QXHMZOGBI"></iframe>
    </div>
    </div><br><br>
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
    const b1 = 'sad';
    const b2 = 'tired';
    const b3 = 'afraid';
    const b4 = 'sick';
    const b5 = 'nauseous';
    const b6 = 'confused';
    const b7 = 'angry';
    const b8 = 'surprised';
    const b9 = 'embarrassed';
    const b10 = 'happy';
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