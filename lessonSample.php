<?php include "navbar.php";
require 'connection.php';
?>
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
        <h4 style="color:BLACK">
        <?php 
        
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $query = "SELECT * FROM quizzes WHERE id = '$id'";
            mysqli_query($conn, $query);
            $result = $conn->query($query);

            if (!$result) {
                die('Invalid query: ' . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
            echo "
                <h4 class='card-title' >".strtoupper($row['title'])."</h4>";
            }
        }
        ?></p>
    </blockquote>
    <!-- <figcaption style="color:black" class="blockquote-footer">
        Watch the video below and fill in the blanks.<br><cite><b>l3</b></cite>
    </figcaption>  -->
    </figure>
  </div>
  <div class="card-body">
  <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $query = "SELECT * FROM quizzes WHERE id = '$id'";
            mysqli_query($conn, $query);
            $result = $conn->query($query);

            if (!$result) {
                die('Invalid query: ' . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
            echo "
            <img
                    id='picture'
                    src='imgs/quiz/".$row['mainimg'].".png' 
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /> <!-- insert via database -->
            <table class='table table-light table-hover'>
            <tbody>
                <tr>
                <td>".$row['ca4']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca4']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca3']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca3']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca1']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca1']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca5']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca5']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca2']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca2']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                </tr>
                <tr>
                <td>".$row['ca8']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca8']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca6']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca6']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca9']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca9']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca7']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca7']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['ca10']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['ca10']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                </tr>
                <tr>
                <td>".$row['wa10']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa10']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa9']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa9']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa8']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa8']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa7']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa7']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa1']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa1']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                </tr>
                <tr>
                <td>".$row['wa2']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa2']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa3']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa3']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa4']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa4']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa5']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa5']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                <td>".$row['wa6']."<a class='myButton' type='submit' value='Ouvir' onclick='english(`".$row['wa6']."`)'><img class='sound' src='https://img.icons8.com/fluency/48/000000/room-sound.png'/></a></td>
                </tr>
            </tbody>
            </table><br>
                <div class='questions'>
                <h3>QUIZ</h3>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img1'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>1/10 - ".$row['q1']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca1']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa1']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img2'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>2/10 - ".$row['q2']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa2']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca2']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img3'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>3/10 - ".$row['q3']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa3']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca3']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img4'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>4/10 - ".$row['q4']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca4']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa4']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img5'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>5/10 - ".$row['q5']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca5']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa5']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img6'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>6/10 - ".$row['q6']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa6']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca6']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img7'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>7/10 - ".$row['q7']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca7']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa7']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img8'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>8/10 - ".$row['q8']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa8']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca8']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img9'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>9/10 - ".$row['q9']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca9']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa9']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img10'].".png'
                    draggable='false'
                    height='280'
                    style='margin:5px'
                /><br>
                <p>10/10 - ".$row['q10']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`);showResult()' 'type='submit' class='btn btn-primary'>".$row['ca10']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`);showResult()' type='submit' class='btn btn-primary'>".$row['wa10']."</button>
                </div>
                ";
            }
        }
    ?>
    <div class='questions' style='display:none'>
                <p style='margin-bottom:1px;'>Final Score</p>
                <img
                    id='picture'
                    src='imgs/quiz/quiz.png'
                    draggable='false'
                    height='280'
                    style='margin:5px;margin-top:1px;'
                />
                <p id='f' style='margin-bottom:1px;'></p>
                <p id='w' style='margin-bottom:1px;'></p>
                <button onclick="window.location.reload();" class='btn btn-danger'>START AGAIN</button>
    </div>
  </div>
</div>
</div>
<script>
    function english(msg){
     responsiveVoice.speak(msg, `US English Female` , {rate:1.0, volume: 1, pitch:0.9});
}
    let score = 0;
    let question = 1;
    let wrongAnswers = '';
    function checkAnswer(id) {
        question++;
        let previous = question - 2;
        let next = question - 1;
        if (id == 'c'){
            score++;
        } else if (id == 'w'){
            wrongAnswers = wrongAnswers + ' ' + (question - 1);
        }
        wait = setTimeout(nextQuestion, 1000);
        function nextQuestion() {
        switch (question) {
        case 2:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 3:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 4:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 5:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 6:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 7:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
        case 8:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 9:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 10:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            break;
        case 11:
            document.getElementsByClassName('questions')[previous].style.display = 'none';
            document.getElementsByClassName('questions')[next].style.display = 'block';
            document.getElementById('f').innerHTML = "You got " + score + " out of 10 points.";
            document.getElementById('w').innerHTML = "Wrong Answers: " + wrongAnswers;
            break;
        }
        }
    }

    function showResult() {
        Swal.fire({
        title: "SCORE",
        icon: 'success',
        text: "You got " + score + " out of 10 points.",
        confirmButtonText: "OK" 
    })}
</script>