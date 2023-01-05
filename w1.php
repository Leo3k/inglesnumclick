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
    color:midnightblue;
    font-style: italic;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">THERE IS - THERE ARE</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Pay attention to the table and examples below.<br><cite><b>w1</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
  <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">SINGULAR <a class="myButton" type="submit" value="Ouvir" onclick="english(`singular`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></th>
        <th scope="col">PLURAL <a class="myButton" type="submit" value="Ouvir" onclick="english(`plural`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>THERE IS <a class="myButton" type="submit" value="Ouvir" onclick="english(`there is`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        <td>THERE ARE <a class="myButton" type="submit" value="Ouvir" onclick="english(`there are`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></td>
        </tr>
    </tbody>
    </table>
    <p><b>SINGULAR</b></p>
    <p><span>Affirmative:</span> <b>There is</b> a dog in my bedroom.<a class="myButton" type="submit" value="Ouvir" onclick="english(`There is a dog in my bedroom.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><span>Negative:</span> <b>There isn't</b> a cat in the garage.<a class="myButton" type="submit" value="Ouvir" onclick="english(`There isn't a cat in the garage.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>    
    <p><span>Interrogative:</span> <b>Is there</b> a rabbit in the garden?<a class="myButton" type="submit" value="Ouvir" onclick="english(`Is there a rabbit in the garden?`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><b>PLURAL</b></p>
    <p><span>Affirmative:</span> <b>There are</b> two birds in the sky.<a class="myButton" type="submit" value="Ouvir" onclick="english(`There are two birds in the sky.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <p><span>Negative:</span> <b>There aren't</b> dogs in my house.<a class="myButton" type="submit" value="Ouvir" onclick="english(`There aren't dogs in my house.`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>    
    <p><span>Interrogative:</span> <b>Are there</b> two wallets on the table?<a class="myButton" type="submit" value="Ouvir" onclick="english(`Are there two wallets on the table?`)"><img class="sound" src="https://img.icons8.com/fluency/48/000000/room-sound.png"/></a></p>
    <div style='background-color:aliceblue;padding:3px;'>
        <p><b>Exercise 1</b></p>
        <p><i>Unscramble the sentences and write them down in the correct order. PS. Don't forget the punctuation.</i></p>
        <p><b> IS A MAN THERE YOUR IN ROOM LIVING? </b></p>
        <input type='text' size='30' class='blank' maxlength="35"><br><br>
        <p><b> ARE PEOPLE THREE DANCING THERE THE IN KITCHEN. </b></p>
        <input type='text' size='30' class='blank' maxlength="46"><br><br>
        <p><b> ISN'T A THERE TV HERE. </b></p>
        <input type='text' size='30' class='blank' maxlength="22"><br><br>
        <p><b> THERE IS BATHROOM HERE NEAR? </b></p>
        <input type='text' size='30' class='blank' maxlength="30"><br><br>
        <p><b> ANY PLAYERS THERE SHORT AREN'T ON TEAM THE. </b></p>
        <input type='text' size='30' class='blank' maxlength="43"><br><br>
        <p><b> A IS HUGE THERE SPIDER THE WALL ON. </b></p>
        <input type='text' size='30' class='blank' maxlength="35"><br><br>
        <p><b> THERE NO ARE CLOUDS THE IN SKY. </b></p>
        <input type='text' size='30' class='blank' maxlength="31"><br><br>
        <p><b> RESTAURANT IS A NEARBY THERE? </b></p>
        <input type='text' size='30' class='blank' maxlength="29"><br><br>
        <p><b> THERE ARE CHILDREN NEIGHBORHOOD THIS IN MANY? </b></p>
        <input type='text' size='30' class='blank' maxlength="45"><br><br>
        <p><b> IS THERE A BEAUTIFUL TREES BEHIND THE WATERFALL. </b></p>
        <input type='text' size='30' class='blank' maxlength="48"><br><br>
        <button type='button' onclick='checkAnswers()' class="btn btn-primary">CHECK</button>
    </div>
    <br><p><b>Exercise 2</b></p>
        <p><i>Look at the picture and fill in the blanks using the words in bold.</i></p>
    <img
          id="MDB-logo"
          src="imgs/bedroom.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      />
      <p><b>THERE IS (3X) - THERE ARE - BEDROOM - BED - GUITAR - DESK - CLOCK - WALL - DRESSER</b></p>
      <p><input type='text' size='3' class='blank' maxlength="9"> a lot of things in Zack's <input type='text' size='3' class='blank' maxlength="7">.
      <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="4"> beside the <input type='text' size='3' class='blank' maxlength="7">.
      <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="6"> near the <input type='text' size='3' class='blank' maxlength="3">.
        And <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="5"> on the <input type='text' size='3' class='blank' maxlength="4">.
      </p>
      <img
          id="MDB-logo"
          src="imgs/bathroom.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      />
      <p><b>THERE IS (2X) - THERE ARE - WINDOWS (2X) - BATHROOM - TOILET - BATHTUB - VASE - PLANTS (2X)</b></p>
      <p>Vanessa's <input type='text' size='3' class='blank' maxlength="8"> is beautiful.
      <input type='text' size='3' class='blank' maxlength="9"> <input type='text' size='3' class='blank' maxlength="6"> near the <input type='text' size='3' class='blank' maxlength="7">.
      <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="6"> next to the small <input type='text' size='3' class='blank' maxlength="4">.
        And <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="7"> in front of the two <input type='text' size='3' class='blank' maxlength="7"> with the big <input type='text' size='3' class='blank' maxlength="6">.
      </p>
      <img
          id="MDB-logo"
          src="imgs/kitchen.png"
          alt="MDB Logo"
          draggable="false"
          height="295"
      />
      <p><b>THERE IS (2X) - THERE ARE - STOVE - KITCHEN - TRASH CAN (2X) - COUNTERTOP - TRASH - THINGS</b></p>
      <p>Mark's <input type='text' size='3' class='blank' maxlength="7"> is messy.
      <input type='text' size='3' class='blank' maxlength="8"> a <input type='text' size='3' class='blank' maxlength="9"> next to an old <input type='text' size='3' class='blank' maxlength="5">.
      <input type='text' size='3' class='blank' maxlength="8"> a lot of <input type='text' size='3' class='blank' maxlength="5"> in the <input type='text' size='3' class='blank' maxlength="9">.
        And <input type='text' size='3' class='blank' maxlength="9"> many different <input type='text' size='3' class='blank' maxlength="6"> on the <input type='text' size='3' class='blank' maxlength="10">.
        <br><br><button type='button' onclick='checkAnswers2()' class="btn btn-primary">CHECK</button>
    </p>
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
    const b1 = 'is there a man in your living room?';
    const b2 = 'there are three people dancing in the kitchen.';
    const b3 = `there isn't a tv here.`;
    const b4 = 'is there a bathroom near here?';
    const b5 = `there aren't any short players on the team.`;
    const b6 = 'there is a huge spider on the wall.';
    const b7 = 'there are no clouds in the sky.';
    const b8 = 'is there a restaurant nearby?';
    const b9 = 'are there many children in this neighborhood?';
    const b10 = 'there is a beautiful waterfall behind the trees.';
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
function checkAnswers2() {
    let a1 = document.getElementsByTagName('input')[10].value.toLowerCase();
    let a2 = document.getElementsByTagName('input')[11].value.toLowerCase();
    let a3 = document.getElementsByTagName('input')[12].value.toLowerCase();
    let a4 = document.getElementsByTagName('input')[13].value.toLowerCase();
    let a5 = document.getElementsByTagName('input')[14].value.toLowerCase();
    let a6 = document.getElementsByTagName('input')[15].value.toLowerCase();
    let a7 = document.getElementsByTagName('input')[16].value.toLowerCase();
    let a8 = document.getElementsByTagName('input')[17].value.toLowerCase();
    let a9 = document.getElementsByTagName('input')[18].value.toLowerCase();
    let a10 = document.getElementsByTagName('input')[19].value.toLowerCase();
    let a11 = document.getElementsByTagName('input')[20].value.toLowerCase();
    let a12 = document.getElementsByTagName('input')[21].value.toLowerCase();
    let a13 = document.getElementsByTagName('input')[22].value.toLowerCase();
    let a14 = document.getElementsByTagName('input')[23].value.toLowerCase();
    let a15 = document.getElementsByTagName('input')[24].value.toLowerCase();
    let a16 = document.getElementsByTagName('input')[25].value.toLowerCase();
    let a17 = document.getElementsByTagName('input')[26].value.toLowerCase();
    let a18 = document.getElementsByTagName('input')[27].value.toLowerCase();
    let a19 = document.getElementsByTagName('input')[28].value.toLowerCase();
    let a20 = document.getElementsByTagName('input')[29].value.toLowerCase();
    let a21 = document.getElementsByTagName('input')[30].value.toLowerCase();
    let a22 = document.getElementsByTagName('input')[31].value.toLowerCase();
    let a23 = document.getElementsByTagName('input')[32].value.toLowerCase();
    let a24 = document.getElementsByTagName('input')[33].value.toLowerCase();
    let a25 = document.getElementsByTagName('input')[34].value.toLowerCase();
    let a26 = document.getElementsByTagName('input')[35].value.toLowerCase();
    let a27 = document.getElementsByTagName('input')[36].value.toLowerCase();
    let a28 = document.getElementsByTagName('input')[37].value.toLowerCase();
    let a29 = document.getElementsByTagName('input')[38].value.toLowerCase();
    let a30 = document.getElementsByTagName('input')[39].value.toLowerCase();
    let a31 = document.getElementsByTagName('input')[40].value.toLowerCase();
    let a32 = document.getElementsByTagName('input')[41].value.toLowerCase();
    const b1 = 'there are';
    const b2 = 'bedroom';
    const b3 = `there is`;
    const b4 = 'desk';
    const b5 = `dresser`;
    const b6 = 'there is';
    const b7 = 'guitar';
    const b8 = 'bed';
    const b9 = 'there is';
    const b10 = 'clock';
    const b11 = 'wall';
    const b12 = 'bathroom';
    const b13 = `there are`;
    const b14 = 'plants';
    const b15 = `windows`;
    const b16 = 'there is';
    const b17 = 'toilet';
    const b18 = 'vase';
    const b19 = 'there is';
    const b20 = 'bathtub';
    const b21 = 'windows';
    const b22 = `plants`;
    const b23 = 'kitchen';
    const b24 = `there is`;
    const b25 = 'trash can';
    const b26 = 'stove';
    const b27 = 'there is';
    const b28 = 'trash';
    const b29 = 'trash can';
    const b30 = 'there are';
    const b31 = 'things';
    const b32 = 'countertop';
    let point = 0;
    if (a1 == b1) {
      document.getElementsByTagName('input')[10].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[10].style.color = 'red';
    }
    if (a2 == b2) {
      document.getElementsByTagName('input')[11].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[11].style.color = 'red';
    }
    if (a3 == b3) {
      document.getElementsByTagName('input')[12].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[12].style.color = 'red';
    }
    if (a4 == b4) {
      document.getElementsByTagName('input')[13].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[13].style.color = 'red';
    }
    if (a5 == b5) {
      document.getElementsByTagName('input')[14].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[14].style.color = 'red';
    }
    if (a6 == b6) {
      document.getElementsByTagName('input')[15].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[15].style.color = 'red';
    }
    if (a7 == b7) {
      document.getElementsByTagName('input')[16].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[16].style.color = 'red';
    }
    if (a8 == b8) {
      document.getElementsByTagName('input')[17].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[17].style.color = 'red';
    }
    if (a9 == b9) {
      document.getElementsByTagName('input')[18].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[18].style.color = 'red';
    }
    if (a10 == b10) {
      document.getElementsByTagName('input')[19].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[19].style.color = 'red';
    }
    if (a11 == b11) {
      document.getElementsByTagName('input')[20].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[20].style.color = 'red';
    }
    if (a12 == b12) {
      document.getElementsByTagName('input')[21].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[21].style.color = 'red';
    }
    if (a13 == b13) {
      document.getElementsByTagName('input')[22].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[22].style.color = 'red';
    }
    if (a14 == b14) {
      document.getElementsByTagName('input')[23].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[23].style.color = 'red';
    }
    if (a15 == b15) {
      document.getElementsByTagName('input')[24].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[24].style.color = 'red';
    }
    if (a16 == b16) {
      document.getElementsByTagName('input')[25].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[25].style.color = 'red';
    }
    if (a17 == b17) {
      document.getElementsByTagName('input')[26].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[26].style.color = 'red';
    }
    if (a18 == b18) {
      document.getElementsByTagName('input')[27].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[27].style.color = 'red';
    }
    if (a19 == b19) {
      document.getElementsByTagName('input')[28].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[28].style.color = 'red';
    }
    if (a20 == b20) {
      document.getElementsByTagName('input')[29].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[29].style.color = 'red';
    }
    if (a21 == b21) {
      document.getElementsByTagName('input')[30].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[30].style.color = 'red';
    }
    if (a22 == b22) {
      document.getElementsByTagName('input')[31].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[31].style.color = 'red';
    }
    if (a23 == b23) {
      document.getElementsByTagName('input')[32].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[32].style.color = 'red';
    }
    if (a24 == b24) {
      document.getElementsByTagName('input')[33].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[33].style.color = 'red';
    }
    if (a25 == b25) {
      document.getElementsByTagName('input')[34].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[34].style.color = 'red';
    }
    if (a26 == b26) {
      document.getElementsByTagName('input')[35].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[35].style.color = 'red';
    }
    if (a27 == b27) {
      document.getElementsByTagName('input')[36].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[36].style.color = 'red';
    }
    if (a28 == b28) {
      document.getElementsByTagName('input')[37].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[37].style.color = 'red';
    }
    if (a29 == b29) {
      document.getElementsByTagName('input')[38].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[38].style.color = 'red';
    }
    if (a30 == b30) {
      document.getElementsByTagName('input')[39].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[39].style.color = 'red';
    }
    if (a31 == b31) {
      document.getElementsByTagName('input')[40].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[40].style.color = 'red';
    }
    if (a32 == b32) {
      document.getElementsByTagName('input')[41].style.color = 'green';
      point++;
    } else {
      document.getElementsByTagName('input')[41].style.color = 'red';
    }
    Swal.fire({
      title: "SCORE",
      icon: 'success',
      text: "You got " + point + " out of 32 points.",
      confirmButtonText: "OK" 
    })
}
  </script>