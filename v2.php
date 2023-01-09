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
        <h4 style="color:BLACK">OCCUPATIONS</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and learn some professions in English.<br><cite><b>v2</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ef0yW2_xqm4"></iframe>
  </div><br>
  <p><b>Let's practice!</b></p>
  <p><i>Look at the pictures below and write down the occupations.</i></p>
  <img
          id="job"
          src="imgs/jobs.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      />
      <img
          id="job2"
          src="imgs/jobs2.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      /><br><br>
    <p>1- <input type='text' size='2' class='blank' maxlength="3">
    2- <input type='text' size='2' class='blank' maxlength="5">
    3- <input type='text' size='2' class='blank' maxlength="14"></p>
    <p>4- <input type='text' size='2' class='blank' maxlength="11">
    5- <input type='text' size='2' class='blank' maxlength="6">
    6- <input type='text' size='2' class='blank' maxlength="7"></p>
    <p>7- <input type='text' size='2' class='blank' maxlength="7">
    8- <input type='text' size='2' class='blank' maxlength="5">
    9- <input type='text' size='2' class='blank' maxlength="7"></p>
    <p>10- <input type='text' size='2' class='blank' maxlength="7">
    11- <input type='text' size='2' class='blank' maxlength="4">
    12- <input type='text' size='2' class='blank' maxlength="7"></p>
    <p>13- <input type='text' size='2' class='blank' maxlength="7">
    14- <input type='text' size='2' class='blank' maxlength="8">
    15- <input type='text' size='2' class='blank' maxlength="9"></p>
    <p>16- <input type='text' size='2' class='blank' maxlength="6"></p><br>
    <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
    <button style='display:none' id='ans' type='button' onclick='seeAnswers()' class="btn btn-danger">ANSWERS</button>
    <br><span id='spn'></span>
</div>
<script>
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
    const b1 = 'vet';
    const b2 = 'nurse';
    const b3 = 'police officer';
    const b4 = 'firefighter';
    const b5 = 'doctor';
    const b6 = 'teacher';
    const b7 = 'builder';
    const b8 = 'pilot';
    const b9 = 'dentist';
    const b10 = 'mailman';
    const b11 = 'chef';
    const b12 = 'painter';
    const b13 = 'janitor';
    const b14 = "handyman";
    const b15 = 'librarian';
    const b16 = 'farmer';
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
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 16 points.",
      type: "error",
      confirmButtonText: "OK" 
    })
    document.getElementById('ans').style.display = 'block';
    document.getElementById('spn').style.display = 'none';
  }
  function seeAnswers() {
    document.getElementById('job').setAttribute('src','imgs/job1.png');
    document.getElementById('job2').setAttribute('src','imgs/job2.png');
    document.getElementById('ans').style.display = 'none';
    document.getElementById('spn').innerHTML = 'LOOK AT THE PICTURES AGAIN!';
    document.getElementById('spn').style.display = 'block';
    document.getElementById('spn').style.color = 'red';
  }


</script>