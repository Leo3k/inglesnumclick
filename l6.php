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

div#sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">JUMANJI: WELCOME TO THE JUNGLE<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and fill in the blanks.<br><cite><b>l6</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vhEOInyNr54"></iframe>
  </div><br>
<p style='text-align:left'>
<b>Martha:</b> Hey!<br>

<b>Spencer:</b> Hey!<br>

<b>Martha:</b> What are you doing?<br>

<b>Spencer:</b> I am just filling these up.<br>

<b>Martha:</b> <input type='text' size='2' class='blank' maxlength="4">
.<br>

<b>Spencer:</b> Yeah. I am glad you are <input type='text' size='2' class='blank' maxlength="4">
, I have <input type='text' size='2' class='blank' maxlength="9">
 to <input type='text' size='2' class='blank' maxlength="4">
 you.<br>

<b>Martha:</b> Yeah?<br>

<b>Spencer:</b> But I wanna tell you <input type='text' size='2' class='blank' maxlength="3">
, just in case that <input type='text' size='2' class='blank' maxlength="4">
 time that we <input type='text' size='2' class='blank' maxlength="4"> I am no longer <input type='text' size='2' class='blank' maxlength="5">.
I like you, Martha. I like like you. Like I am fully into you.<br>

<b>Martha:</b> You are?<br>

<b>Spencer:</b> I am and I have been <input type='text' size='2' class='blank' maxlength="5"> like the seventh grade.<br>

<b>Martha:</b> Really? I was a … I don't <input type='text' size='2' class='blank' maxlength="5"> this has ever happened <input type='text' size='2' class='blank' maxlength="6">.<br>

<b>Spencer:</b> What do you <input type='text' size='2' class='blank' maxlength="4">?<br>

<b>Martha:</b> Oh, what I mean is like I don't think anyone has ever liked me that I … I can't <input type='text' size='2' class='blank' maxlength="7"> I am doing <input type='text' size='2' class='blank' maxlength="4">, I never tell <input type='text' size='2' class='blank' maxlength="6"> how I f… I am into you too, Spencer.<br>

<b>Spencer:</b> You are?<br>

<b>Martha:</b> Yes. YES! God, you are <input type='text' size='2' class='blank' maxlength="5">, and <input type='text' size='2' class='blank' maxlength="5">, and <input type='text' size='2' class='blank' maxlength="4">. Yeah, I am <input type='text' size='2' class='blank' maxlength="6"> into you.<br>

<b>Spencer:</b> Wait. Are sure it is not because of like all of…?<br>

<b>Martha:</b> What? Oh my god, no, no. That is not my <input type='text' size='2' class='blank' maxlength="4">. I am into nerds.<br>

<b>Spencer:</b> Really? I am a <input type='text' size='2' class='blank' maxlength="4">.<br>

*kissing<br>

<b>Spencer:</b> That was… I was so…<br>

<b>Martha:</b> I know. I have never. Like I have never kissed anyone.<br>

<b>Spencer:</b> You have n…?<br>

<b>Martha:</b> Never. That was the <input type='text' size='2' class='blank' maxlength="5"> time.<br>

<b>Spencer:</b> I have never.<br>

<b>Martha:</b> Oh, you haven't?<br>

<b>Spencer:</b> No.<br>

<b>Martha:</b> Okay, cool.<br>

<b>Spencer:</b> You can't tell, <input type='text' size='2' class='blank' maxlength="5">?<br>

<b>Fridge:</b> Oh <input type='text' size='2' class='blank' maxlength="4"> on. Hey, I don't want to <input type='text' size='2' class='blank' maxlength="3"> that. I don't. Not <input type='text' size='2' class='blank' maxlength="5">. While you are <input type='text' size='2' class='blank' maxlength="4"> here professing your <input type='text' size='2' class='blank' maxlength="4"> for one another, I <input type='text' size='2' class='blank' maxlength="5"> the jaguar. Let's <input type='text' size='2' class='blank' maxlength="2">! God!<br>

<br><button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>

</p>
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
    let a21 = document.getElementsByClassName('blank')[20].value.toLowerCase();
    let a22 = document.getElementsByClassName('blank')[21].value.toLowerCase();
    let a23 = document.getElementsByClassName('blank')[22].value.toLowerCase();
    let a24 = document.getElementsByClassName('blank')[23].value.toLowerCase();
    let a25 = document.getElementsByClassName('blank')[24].value.toLowerCase();
    let a26 = document.getElementsByClassName('blank')[25].value.toLowerCase();
    let a27 = document.getElementsByClassName('blank')[26].value.toLowerCase();
    let a28 = document.getElementsByClassName('blank')[27].value.toLowerCase();
    let a29 = document.getElementsByClassName('blank')[28].value.toLowerCase();
    let a30 = document.getElementsByClassName('blank')[29].value.toLowerCase();
    const b1 = 'cool';
    const b2 = 'here';
    const b3 = 'something';
    const b4 = 'tell';
    const b5 = 'now';
    const b6 = 'next';
    const b7 = 'talk';
    const b8 = 'brave';
    const b9 = 'since';
    const b10 = 'think';
    const b11 = 'before';
    const b12 = 'mean';
    const b13 = 'believe';
    const b14 = "this";
    const b15 = 'anyone';
    const b16 = 'smart';
    const b17 = 'sweet';
    const b18 = 'cute';
    const b19 = 'pretty';
    const b20 = 'type';
    const b21 = 'nerd';
    const b22 = 'first';
    const b23 = 'right';
    const b24 = 'come';
    const b25 = 'see';
    const b26 = 'today';
    const b27 = 'down';
    const b28 = 'love';
    const b29 = 'found';
    const b30 = 'go';
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
    if (a22 == b22) {
      document.getElementsByClassName('blank')[21].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[21].style.color = 'red';
    }
    if (a23 == b23) {
      document.getElementsByClassName('blank')[22].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[22].style.color = 'red';
    }
    if (a24 == b24) {
      document.getElementsByClassName('blank')[23].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[23].style.color = 'red';
    }
    if (a25 == b25) {
      document.getElementsByClassName('blank')[24].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[24].style.color = 'red';
    }
    if (a26 == b26) {
      document.getElementsByClassName('blank')[25].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[25].style.color = 'red';
    }
    if (a27 == b27) {
      document.getElementsByClassName('blank')[26].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[26].style.color = 'red';
    }
    if (a28 == b28) {
      document.getElementsByClassName('blank')[27].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[27].style.color = 'red';
    }
    if (a29 == b29) {
      document.getElementsByClassName('blank')[28].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[28].style.color = 'red';
    }
    if (a30 == b30) {
      document.getElementsByClassName('blank')[29].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[29].style.color = 'red';
    }
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 30 points.",
      type: "error",
      confirmButtonText: "OK" 
    })
}
</script>