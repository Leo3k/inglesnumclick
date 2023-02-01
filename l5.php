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
        <h4 style="color:BLACK">CAUGHT IN PROVIDENCE<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and fill in the blanks.<br><cite><b>l5</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7nAdxY0aMG0"></iframe>
  </div><br>
<p style='text-align:left'>
<b>Judge:</b> Alright, tell me about this little <input type='text' size='2' class='blank' maxlength="3">
. What's his <input type='text' size='2' class='blank' maxlength="4">
?<br>
<b>Mom:</b> This little guy is d..  You wanna tell him your name?<br>
<b>Boy:</b> Okay.<br>
<b>Mom:</b> 'Cause he's <input type='text' size='2' class='blank' maxlength="5">
 to talk.<br>
<b>Boy:</b> So, my name is Aheed.<br>
<b>Judge:</b> Oh, have him come up <input type='text' size='2' class='blank' maxlength="4">
. Put him <input type='text' size='2' class='blank' maxlength="4">
. Come up here!<br>
<b>Mom:</b> Oh, lord. haHAha<br>
<b>Judge:</b> Can you <input type='text' size='2' class='blank' maxlength="3">
 him? No, you can't see him.<br>
<b>Mom:</b> They can. haHAha<br>
<b>Judge:</b> Do you mind if I <input type='text' size='2' class='blank' maxlength="4">
 him up?<br>
<b>Mom:</b> No, no, it's fine. haHahA<br>
<b>Judge:</b> How <input type='text' size='2' class='blank' maxlength="3">
 you?<br>
<b>Boy:</b> Good.<br>
<b>Judge:</b> Good? You wanna help <input type='text' size='2' class='blank' maxlength="2">
 out?<br>
<b>Boy:</b> *nods*<br>
<b>Judge:</b> Your mother is changed with <input type='text' size='2' class='blank' maxlength="7">
 at a meter that <input type='text' size='2' class='blank' maxlength="7">
. 
Do you understand that?<br>
<b>Boy:</b> *nods*
<b>Judge:</b> Okay. Is she guilty or not guilty?<br>
<b>Boy:</b> Not guilty.<br>
<b>Judge:</b> Not guilty? This <input type='text' size='2' class='blank' maxlength="3">
 is a company <input type='text' size='2' class='blank' maxlength="3">
.<br>
<b>Mom:</b> He is. haHaHA<br>
<b>Judge:</b> You <input type='text' size='2' class='blank' maxlength="4">
 her she is gonna owe you a nice <input type='text' size='2' class='blank' maxlength="3">
 cone of ice cream <input type='text' size='2' class='blank' maxlength="7">
, okay?<br>
<b>Boy:</b> Okay.<br>
<b>Judge:</b> What <input type='text' size='2' class='blank' maxlength="4">
 of ice cream do you like?<br>
<b>Boy:</b> I have a popsicle.<br>
<b>Judge:</b> Popsicle? You'll just get a popsicle tonight.<br>
<b>Boy:</b> And I have… and it <input type='text' size='2' class='blank' maxlength="3">
 my favorite <input type='text' size='2' class='blank' maxlength="6">
.<br>
<b>Judge:</b> You got it?<br>
<b>Mom:</b> Yes, his favorite.<br>
<b>Judge:</b> Make sure now, we're gonna check on <input type='text' size='2' class='blank' maxlength="3">
.<br>
<b>Mom:</b> Okay.<br>
<b>Judge:</b> Okay, I think you are gonna be a <input type='text' size='2' class='blank' maxlength="6">
 someday. You did a good <input type='text' size='2' class='blank' maxlength="3">
.<br>
<b>Boy:</b> Okay.<br>
<b>Judge:</b> Okay. I'll tell you that, you see this little <input type='text' size='2' class='blank' maxlength="7">
? He will <input type='text' size='2' class='blank' maxlength="8">
 this the rest of his <input type='text' size='2' class='blank' maxlength="4">
. Trust me.<br>
<b>Mom:</b> I am pretty sure.<br>
<b>Judge:</b> When kids come up here and they <input type='text' size='2' class='blank' maxlength="5">
, they don't think the government is <input type='text' size='2' class='blank' maxlength="8">
. They don't think the institutions of government are <input type='text' size='2' class='blank' maxlength="8">
. They realize that we do have some people that <input type='text' size='2' class='blank' maxlength="10">
 circumstances, okay?<br>
<b>Mom:</b> Right.<br>
<b>Judge:</b> Okay. You did a good job helping your <input type='text' size='2' class='blank' maxlength="6">
.
All right. Good <input type='text' size='2' class='blank' maxlength="4">
 to you.<br>




<br><br><button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>

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
    let a31 = document.getElementsByClassName('blank')[30].value.toLowerCase();
    const b1 = 'guy';
    const b2 = 'name';
    const b3 = 'dying';
    const b4 = 'here';
    const b5 = 'down';
    const b6 = 'see';
    const b7 = 'pick';
    const b8 = 'are';
    const b9 = 'me';
    const b10 = 'parking';
    const b11 = 'expired';
    const b12 = 'kid';
    const b13 = 'man';
    const b14 = "tell";
    const b15 = 'big';
    const b16 = 'tonight';
    const b17 = 'kind';
    const b18 = 'has';
    const b19 = 'colors';
    const b20 = 'you';
    const b21 = 'lawyer';
    const b22 = 'job';
    const b23 = 'episode';
    const b24 = 'remember';
    const b25 = 'life';
    const b26 = 'leave';
    const b27 = 'terrible';
    const b28 = 'terrible';
    const b29 = 'understand';
    const b30 = 'mother';
    const b31 = 'luck';
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
    if (a31 == b31) {
      document.getElementsByClassName('blank')[30].style.color = 'green';
      point++;
    } else {
      document.getElementsByClassName('blank')[30].style.color = 'red';
    }
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 31 points.",
      type: "error",
      confirmButtonText: "OK" 
    })
}
</script>