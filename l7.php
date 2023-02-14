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
        <h4 style="color:BLACK">THE BIG BANG THEORY<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and fill in the blanks.<br><cite><b>l7</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8eD-DcdjRi4"></iframe>
  </div><br>
<p style='text-align:left'>

<b>Leonard:</b> Sorry, somebody is sitting there.<br>

<b>Sheldon:</b> Who?<br>

<b>Leonard:</b> My Physics Bowl Trophy!<br>

<b>Sheldon:</b> That trophy is <input type='text' size='2' class='blank' maxlength="11">. I <input type='text' size='2' class='blank' maxlength="9">  therefore you did not win. <br>

<b>Leonard:</b> I know someone who would disagree.<br>

<b>Sheldon:</b> Who?<br>

<b>Leonard:</b> My Physics Bowl Trophy! Leonard is so smart. Sheldon who?<br>

<b>Sheldon:</b> All right. That's very <input type='text' size='2' class='blank' maxlength="8">.<br>

<b>Leonard:</b> You're right, I'm sorry. I'm nooot! <br>

<b>Penny:</b> Okay! New <input type='text' size='2' class='blank' maxlength="7">! I am <input type='text' size='2' class='blank' maxlength="8"> once and for all who is the smartest around here. Okay? Are you ready?<br>

<b>Sheldon:</b> <input type='text' size='2' class='blank' maxlength="10">.<br>

<b>Leonard:</b> Bring it on!<br>

<b>Penny:</b> Marcia, Jan, and Cindy were the three daughters in what TV family? … The Brady Bunch. Okay. Sammy Hagar <input type='text' size='2' class='blank' maxlength="8"> David Lee Roth as the lead singer in what group?  <br>

<b>Sheldon:</b> The Brady Bunch?<br>

<b>Penny:</b> Van Halen. All right, Madonna was <input type='text' size='2' class='blank' maxlength="7"> to this Ridgemont High Alum… Oh my god! Sean Penn!<br>

<b>Leonard:</b> How do you know <input type='text' size='2' class='blank' maxlength="5"> things?<br>

<b>Penny:</b> I go outside and I talk to people. Okay, here. What actor <input type='text' size='2' class='blank' maxlength="5"> the record of being named People Magazine's sexiest man <input type='text' size='2' class='blank' maxlength="5">?<br>

<b>Sheldon:</b> William Shatner.<br>

<b>Leonard:</b> I don't think it's Shatner.<br>

<b>Sheldon:</b> Then it's gotta be Patrick Stewart.<br>

<b>Penny:</b> No.<br>

<b>Sheldon:</b> Formal <input type='text' size='2' class='blank' maxlength="7">.<br>

<b>Penny:</b> All right, singer who sang 'oops, I did it again'? …Okay. Tweety Bird tawt he taw a what?<br>
<b>Sheldon:</b> Romulan.<br>

<b>Penny:</b> Yes, he tawt he taw a Romulan.<br>

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
    
    const b1 = 'meaningless';
    const b2 = 'forfeited';
    const b3 = 'immature';
    const b4 = 'contest';
    const b5 = 'settling';
    const b6 = 'absolutely';
    const b7 = 'replaced';
    const b8 = 'married';
    const b9 = 'these';
    const b10 = 'holds';
    const b11 = 'alive';
    const b12 = 'protest';
    
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
    
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 12 points.",
      type: "error",
      confirmButtonText: "OK" 
    })
}
</script>