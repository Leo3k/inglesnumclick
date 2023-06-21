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
        <h4 style="color:BLACK">MAD LIBS</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Fill in the blanks below.<br><cite><b>w2</b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body" style='text-align:left;padding-left:10px;'>
    person (man/woman/girl...): <input type='text' size='2'><br><br>
    adjective used to descibe a place: <input type='text' size='2'><br><br>
    place (house/apartment...): <input type='text' size='2'><br><br>
    food: <input type='text' size='2'><br><br>
    body part: <input type='text' size='2'><br><br>
    kitchen utensil: <input type='text' size='2'><br><br>
    adjective used to describe a cut/wound: <input type='text' size='2'><br><br>
    health care professional (doctor, nurse, vet...): <input type='text' size='2'><br><br>
    adverb used to describe how someone works: <input type='text' size='2'><br><br>
    adjective used to describe a person's behavior: <input type='text' size='2'><br><br>
    adjective used to describe your personal hygiene: <input type='text' size='2'><br><br>
    object we use for protection: <input type='text' size='2'><br><br>
    number: <input type='text' size='2'><br><br>
    adjective used to describe an athlete <input type='text' size='2'><br><br>
    adjective used to describe how someone feels <input type='text' size='2'><br><br>

    <button onclick='reveal()'>Reveal</button><br>
<br><br>
<p id='p234'></p>
</div>
<script>
    var inputs = document.getElementsByTagName("input");

let text = document.getElementById('p234');

function reveal() {
  text.innerHTML = "Once upon a time, there was a " + inputs[0].value + " named Peter who lived alone in a " + inputs[1].value + " " + inputs[2].value + ". One day, while he was cooking " + inputs[3].value + ", he accidentally cut his " + inputs[4].value + " with a " + inputs[5].value + ". The cut was " + inputs[6].value + " and bleeding wouldn't stop. Concerned, Peter decided it was time to visit the " + inputs[7].value + ". " + "<br><br>" + "At the appointment, Peter anxiously explained what had happened. The " + inputs[7].value + " examined his " + inputs[4].value + " and cleaned the wound " + inputs[8].value + ". Fortunately, there were no signs of infection, but the " + inputs[7].value + " advised Peter to be " + inputs[9].value + ". He recommended keeping the wound " + inputs[10].value + " and covered with a " + inputs[11].value + " until it healed. Additionally, the " + inputs[7].value + " suggested that Peter should get a tetanus shot, as it had been a while since his last vaccination. Relieved to know he was on the right track, Peter followed the doctor's advice and took good care of his " + inputs[4].value + "." + "<br><br>" + "" + inputs[12].value + " days later, Peter's " + inputs[4].value + " started to heal, and the bleeding had stopped. He realized the importance of seeking medical help when faced with an injury. From then on, Peter became more " + inputs[8].value + " in the kitchen, always using caution and " + inputs[13].value + " techniques. He was " + inputs[14].value + " for the " + inputs[7].value + "'s expertise and was reminded of the significance of taking care of one's health";
}
  </script>