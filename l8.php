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
        <h4 style="color:BLACK">MY WIFE AND KIDS<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Watch the video and fill in the blanks.<br><cite><b>l8</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <div class="embed-responsive embed-responsive-16by9" id="sticky"> <!-- Download videos or record screen-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EYrUMmyFNqU"></iframe>
  </div><br>
<p style='text-align:left'>

<b>Jay:</b> This feels so wrong!<br><br>
<b>Michael:</b> I know, but it was great, wasn't it?<br><br>
<b>Jay:</b> Oh, yeah baby. I had a <input type='text' size='2' class='blank' maxlength="8"> time tonight.<br><br>
<b>Michael:</b> All three of us did.<br><br>
<b>Jay:</b> Three?<br><br>
<b>Michael:</b> Yeah. You, me and the cop that made us leave. <br><br>
<b>Jay:</b> Wait, I know why you did this.<br><br>
<b>Michael:</b> Why's that?<br><br>
<b>Jay:</b> To take my mind off the what-ifs.<br><br>
<b>Michael:</b> Yes, you <input type='text' size='2' class='blank' maxlength="4"> a bad <input type='text' size='2' class='blank' maxlength="4"> of the what-ifs.<br><br>
<b>Jay:</b> I know. I can't help it, I am a <input type='text' size='2' class='blank' maxlength="6">. Anyway, <input type='text' size='2' class='blank' maxlength="5"> you! <br><br>
<b>Michael:</b> It was my pleasure … <input type='text' size='2' class='blank' maxlength="4"> times. <br><br>
<b>Jay:</b> Hahaha. Come on. Let's try to sneak into this <input type='text' size='2' class='blank' maxlength="5"> without waking anybody up. <br><br>
<b>Michael:</b> Shhh … quiet. I don't wanna get caught and then get punished<br><br>
<b>Jay:</b> I'll punish you, all right?<br><br>
<b>Michael:</b> Oh yeah, you <input type='text' size='2' class='blank' maxlength="7">? <br><br>
<b>Jay:</b> Oh yeah. <br><br>
<b>Michael:</b> You'll be the school teacher, and I'll be the bad 'widdle' <input type='text' size='2' class='blank' maxlength="3">. <br><br>
<b>Jay:</b> Hihihi. <br><br>
<b>Michael:</b> Hey! Why is the <input type='text' size='2' class='blank' maxlength="7"> light on? … Hey, what are you two guys doing up?<br><br>
<b>Jay:</b> Yeah, what are you doing here? It's five o'clock in the <input type='text' size='2' class='blank' maxlength="7">. <br><br>
<b>Junior:</b> We were too wide to <input type='text' size='2' class='blank' maxlength="5">, with the <input type='text' size='2' class='blank' maxlength="10">, talking about the trip to Japan and a bunch of other stuff.<br><br>
<b>Vanessa:</b> So, here we are.<br><br>
<b>Michael:</b> Look, I know Junior's told you about his graduation present, and I want to give you my <input type='text' size='2' class='blank' maxlength="7">. I think that if he turns down this trip to Japan, he's making a great <input type='text' size='2' class='blank' maxlength="7">.<br><br>
<b>Jay:</b> I do too. I think it's an <input type='text' size='2' class='blank' maxlength="11"> of a lifetime, Vanessa.<br><br>
<b>Michael:</b> That's right! And you know what? A little separation is <input type='text' size='2' class='blank' maxlength="7"> for a relationship.<br><br>
<b>Jay:</b> That's right! <br><br>
<b>Michael:</b> You know? It's good to get away.<br><br>
<b>Jay:</b> Right! <br><br>
<b>Michael:</b> That's why I have a job. So I don't have to be around her all the time.<br><br>
<b>Jay:</b> All right! <br><br>
<b>Michael:</b> Sometimes, she gets on my nerves, I'd rather be in books, in traffic…<br><br>
<b>Jay:</b> All right! All right! ALL RIGHT! <br><br>
<b>Michael:</b> I mean, what I am saying is if you wanna have a great homecoming, you got to leave <input type='text' size='2' class='blank' maxlength="4"> sometimes. <br><br>
<b>Jay:</b> Absence does make the heart grow fonder. <br><br>
<b>Michael:</b> Yeah. And the more you could be away, the better…<br><br>
<b>Jay:</b> ALL… <br><br>
<b>Junior:</b> Look, mom, dad… we've been sitting here and talking for a couple of <input type='text' size='2' class='blank' maxlength="5"> and I don't think I am gonna go to <input type='text' size='2' class='blank' maxlength="5">.<br><br>
<b>Jay:</b> You know what? That makes us very <input type='text' size='2' class='blank' maxlength="3">, Junior. This is very disappointing. <br><br>
<b>Michael:</b> Look. Okay. Can you at least give us an explanation why? <br><br>
<b>Junior:</b> She's <input type='text' size='2' class='blank' maxlength="8">.<br><br>

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
    
    const b1 = 'fabulous';
    const b2 = 'have';
    const b3 = 'case';
    const b4 = 'mother';
    const b5 = 'thank';
    const b6 = 'both';
    const b7 = 'house';
    const b8 = 'promise';
    const b9 = 'boy';
    const b10 = 'kitchen';
    const b11 = 'morning';
    const b12 = 'sleep';
    const b13 = 'graduation';
    const b14 = "opinion";
    const b15 = 'mistake';
    const b16 = 'opportunity';
    const b17 = 'healthy';
    const b18 = 'home';
    const b19 = 'hours';
    const b20 = 'japan';
    const b21 = 'sad';
    const b22 = 'pregnant';
    
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
    
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 22 points.",
      type: "error",
      confirmButtonText: "OK" 
    })
}
</script>