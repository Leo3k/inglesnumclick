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
        <h4 style="color:BLACK">To BE</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Pay attention to the table below. <br><cite><b>g1</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Affirmative</th>
        <th scope="col">Negative</th>
        <th scope="col">Interrogative</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>I am</td>
        <td>I am not</td>
        <td>Am I...?</td>
        </tr>
        <tr>
        <td>She is<br>He is<br>It is</td>
        <td>She is not<br>He is not<br>It is not</td>
        <td>Is she?<br>Is he?<br>Is it?</td>
        </tr>
        <tr>
        <td>You are<br>We are<br>They are</td>
        <td>You are not<br>We are not<br>They are not</td>
        <td>Are you?<br>Are we?<br>Are they?</td>
        </tr>
    </tbody>
    </table>
    <p><b>Examples</b></p>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            I am happy. <a class="myButton" type="submit" value="Ouvir" onclick="english('I am happy')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            I am not a doctor. <a class="myButton" type="submit" value="Ouvir" onclick="english('I am not a doctor')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Am I your best friend? <a class="myButton" type="submit" value="Ouvir" onclick="english('Am I your best friend?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            She is angry. <a class="myButton" type="submit" value="Ouvir" onclick="english('She is angry')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            He is not a dentist. <a class="myButton" type="submit" value="Ouvir" onclick="english('He is not a dentist')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Is it black? <a class="myButton" type="submit" value="Ouvir" onclick="english('Is it black?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            You are tired. <a class="myButton" type="submit" value="Ouvir" onclick="english('You are tired')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            We are not from Brazil. <a class="myButton" type="submit" value="Ouvir" onclick="english('We are not from Brazil')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Are they German? <a class="myButton" type="submit" value="Ouvir" onclick="english('Are they German?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
    </ul><br>
    <p><b>Short Forms</b></p>
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Affirmative</th>
        <th scope="col">Negative</th>
        <th scope="col">Interrogative</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>I'm</td>
        <td>I'm not</td>
        <td>Am I...?</td>
        </tr>
        <tr>
        <td>She's<br>He's<br>It's</td>
        <td>She isn't<br>He isn't<br>It isn't</td>
        <td>Is she?<br>Is he?<br>Is it?</td>
        </tr>
        <tr>
        <td>You're<br>We're<br>They're</td>
        <td>You aren't<br>We aren't<br>They aren't</td>
        <td>Are you?<br>Are we?<br>Are they?</td>
        </tr>
    </tbody>
    </table>
    <p><b>Extra Examples</b></p>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            I'm John. <a class="myButton" type="submit" value="Ouvir" onclick="english(`I'm John`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            I'm not sad. <a class="myButton" type="submit" value="Ouvir" onclick="english(`I'm not sad`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Fred's an engineer. <a class="myButton" type="submit" value="Ouvir" onclick="english(`Fred's an engineer.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Julia isn't rich. <a class="myButton" type="submit" value="Ouvir" onclick="english(`Julia isn't rich.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Is Jack a pilot? <a class="myButton" type="submit" value="Ouvir" onclick="english('Is Jack a pilot?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            You're famous. <a class="myButton" type="submit" value="Ouvir" onclick="english(`You're famous`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            We aren't your students. <a class="myButton" type="submit" value="Ouvir" onclick="english(`We aren't your students`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Are they from Spain? <a class="myButton" type="submit" value="Ouvir" onclick="english('Are they from Spain?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Are John and Monica here? <a class="myButton" type="submit" value="Ouvir" onclick="english('Are John and Monica here?')"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a>
        </li>
    </ul><br>
    <p><b>Exercise 1</b></p>
    <p><i>Fill in the blanks with <b>am, is,</b> or <b>are.</b></i></p>
    <div style='text-align:left;background-color:aliceblue;padding:3px;'>
    <p><b>1</b> - I <input type='text' size='1' class='blank' maxlength="2"> happy and he <input type='text' size='1' class='blank' maxlength="2"> sad.</p>
    <p><b>2</b> - We <input type='text' size='1' class='blank' maxlength="3"> tall and she <input type='text' size='1' class='blank' maxlength="2"> short.</p>
    <p><b>3</b> - You <input type='text' size='1' class='blank' maxlength="3"> young and they <input type='text' size='1' class='blank' maxlength="3"> old.</p>
    <p><b>4</b> - Amanda <input type='text' size='1' class='blank' maxlength="2"> Brazilian and Peter <input type='text' size='1' class='blank' maxlength="2"> French.</p>
    <p><b>5</b> - I <input type='text' size='1' class='blank' maxlength="2"> a teacher and my girlfriend <input type='text' size='1' class='blank' maxlength="2"> an architect.</p>
    <p><b>6</b> - Tom and Angelina <input type='text' size='1' class='blank' maxlength="3"> my best friends and Jennifer <input type='text' size='1' class='blank' maxlength="2"> my sister.</p>
    <p><b>7</b> - Fred and I <input type='text' size='1' class='blank' maxlength="3"> cousins and Chris <input type='text' size='1' class='blank' maxlength="2"> my brother.</p>
    <p><b>8</b> - I <input type='text' size='1' class='blank' maxlength="2"> a good student, but my sister <input type='text' size='1' class='blank' maxlength="2"> a terrible student.</p>
    <p><b>9</b> - He <input type='text' size='1' class='blank' maxlength="2"> a good dancer and I <input type='text' size='1' class='blank' maxlength="2"> an excellent singer.</p>
    <p><b>10</b> - She <input type='text' size='1' class='blank' maxlength="2"> not my friend. She <input type='text' size='1' class='blank' maxlength="2"> my boss.</p>
    <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
    </div><br>
    <p><b>Exercise 2</b></p>
    <p><i>Select the correct alternatives to complete the quiz below.</p>
    <div class="embed-responsive embed-responsive-16by9" id="sticky">
        <iframe class="embed-responsive-item" src="https://take.quiz-maker.com/QG2XKFAAL"></iframe>
    </div><br>
    <p><b>Exercise 3</b></p>
    <p><i>Fill in the blanks with <b>am not, isn't,</b> or <b>aren't.</b></i></p>
    <div style='text-align:left;background-color:aliceblue;padding:3px;'>
    <p><b>1</b> - I <input type='text' size='1' class='blank2' maxlength="6"> a lawyer and he <input type='text' size='1' class='blank2' maxlength="5"> an actor.</p>
    <p><b>2</b> - You <input type='text' size='1' class='blank2' maxlength="6"> Mexican and she <input type='text' size='1' class='blank2' maxlength="5"> Irish.</p>
    <p><b>3</b> - We <input type='text' size='1' class='blank2' maxlength="6"> from Italy and they <input type='text' size='1' class='blank2' maxlength="6"> from the US.</p>
    <button type='button' onclick='checkAnswers2()' class="btn btn-primary">CHECK</button>        
    </div>
</div>
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
    const b1 = 'am';
    const b2 = 'is';
    const b3 = 'are';
    const b4 = 'is';
    const b5 = 'are';
    const b6 = 'are';
    const b7 = 'is';
    const b8 = 'is';
    const b9 = 'am';
    const b10 = 'is';
    const b11 = 'are';
    const b12 = 'is';
    const b13 = 'are';
    const b14 = "is";
    const b15 = 'am';
    const b16 = 'is';
    const b17 = 'is';
    const b18 = 'am';
    const b19 = 'is';
    const b20 = 'is';
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
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 20 points.",
      confirmButtonText: "OK" 
    })
}
function checkAnswers2() {
    let a1 = document.getElementsByClassName('blank2')[0].value.toLowerCase();
    let a2 = document.getElementsByClassName('blank2')[1].value.toLowerCase();
    let a3 = document.getElementsByClassName('blank2')[2].value.toLowerCase();
    let a4 = document.getElementsByClassName('blank2')[3].value.toLowerCase();
    let a5 = document.getElementsByClassName('blank2')[4].value.toLowerCase();
    let a6 = document.getElementsByClassName('blank2')[5].value.toLowerCase();
    const b1 = 'am not';
    const b2 = `isn't`;
    const b3 = `aren't`;
    const b4 = `isn't`;
    const b5 = `aren't`;
    const b6 = `aren't`;
    let points = 0;
    if (a1 == b1) {
      document.getElementsByClassName('blank2')[0].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[0].style.color = 'red';
    }
    if (a2 == b2) {
      document.getElementsByClassName('blank2')[1].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[1].style.color = 'red';
    }
    if (a3 == b3) {
      document.getElementsByClassName('blank2')[2].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[2].style.color = 'red';
    }
    if (a4 == b4) {
      document.getElementsByClassName('blank2')[3].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[3].style.color = 'red';
    }
    if (a5 == b5) {
      document.getElementsByClassName('blank2')[4].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[4].style.color = 'red';
    }
    if (a6 == b6) {
      document.getElementsByClassName('blank2')[5].style.color = 'green';
      points++;
    } else {
      document.getElementsByClassName('blank2')[5].style.color = 'red';
    }
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + points + " out of 6 points.",
      confirmButtonText: "OK" 
    })
}
</script>