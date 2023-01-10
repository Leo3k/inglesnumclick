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
        <h4 style="color:BLACK">FRIENDS<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and answer the questions.<br><cite><b>l4</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mIBp8DdScwI"></iframe>
  </div><br>
  <p><b>Questions</b></p>
    <p><i>What are the names of the characters in the scene?</i></p>
    <p><i>What were they doing?</i></p>
    <p><i>Why was the girl acting like that?</i></p><br>
<p><b>Exercise</b></p>
<p><i>Rewatch the video and fill in the blanks with the missing words.</i></p>
<p style='text-align:left'>
<b>Phoebe</b>: Hey!

<br><br><b>Joey</b>: Hey. What are you <input type='text' size='2' class='blank' maxlength="5"> here?

<br><br><b>Phoebe</b>: Well, I <input type='text' size='2' class='blank' maxlength="7"> a lot about what you <input type='text' size='2' class='blank' maxlength="4"> and I realized that maybe I was a <input type='text' size='2' class='blank' maxlength="6"> judgemental. 

<br><br><b>Joey</b>: Phoebe, remember, hey, they are just fulfilling their <input type='text' size='2' class='blank' maxlength="9">…

<br><br><b>Phoebe</b>: <input type='text' size='2' class='blank' maxlength="7">!

<br><br><b>Joey</b>: Sure.

<br><br><b>Phoebe</b>: Yes. Okay. Yikes, that one doesn't look <input type='text' size='2' class='blank' maxlength="4"> fulfilled.

<br><br><b>Joey</b>: That's one of the old <input type='text' size='2' class='blank' maxlength="4">. He is just taking it to the <input type='text' size='2' class='blank' maxlength="4">.

<br><br><b>Phoebe</b>: You <input type='text' size='2' class='blank' maxlength="4"> the old <input type='text' size='2' class='blank' maxlength="4"> in the <input type='text' size='2' class='blank' maxlength="4">!? That is so “ageist”.

<br><br><b>Joey</b>: But we have to make <input type='text' size='2' class='blank' maxlength="4"> for the fresh <input type='text' size='2' class='blank' maxlength="4">.

<br><br><b>Phoebe</b>: So, what happens <input type='text' size='2' class='blank' maxlength="2"> the old <input type='text' size='2' class='blank' maxlength="4">?

<br><br><b>Joey</b>: They <input type='text' size='2' class='blank' maxlength="2"> into <input type='text' size='2' class='blank' maxlength="3"> chipper.

<br><br><b>Phoebe</b>: Well, I have a <input type='text' size='2' class='blank' maxlength="7"> that is not as <input type='text' size='2' class='blank' maxlength="5"> as it sounds.
              No! Nooooo!

<br><br><b>Joey</b>: Hey, heey!

<br><br><button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>

</p>
<p><b>Questions 2</b></p>
    <p><i>What does the word 'judgemental' mean?</i></p>
    <p><i>What do they mean by saying that the trees are fulfilling their destiny?</i></p>
    <p><i>Where do they put the old trees?</i></p>
    <p><i>What happens to them when they are not sold?</i></p><br>
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
    let a17 = document.getElementsByClassName('blank')[16].value.toLowerCase();
    let a18 = document.getElementsByClassName('blank')[17].value.toLowerCase();
    let a19 = document.getElementsByClassName('blank')[18].value.toLowerCase();
    let a20 = document.getElementsByClassName('blank')[19].value.toLowerCase();
    const b1 = 'doing';
    const b2 = 'thought';
    const b3 = 'said';
    const b4 = 'little';
    const b5 = 'christmas';
    const b6 = 'destiny';
    const b7 = 'very';
    const b8 = 'ones';
    const b9 = 'back';
    const b10 = 'keep';
    const b11 = 'ones';
    const b12 = 'back';
    const b13 = 'room';
    const b14 = "ones";
    const b15 = 'to';
    const b16 = 'guys';
    const b17 = 'go';
    const b18 = 'the';
    const b19 = 'feeling';
    const b20 = 'happy';
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
      type: "error",
      confirmButtonText: "OK" 
    })
}
</script>