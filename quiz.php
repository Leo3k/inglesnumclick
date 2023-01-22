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
span {
    color:red;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">QUIZ<h4>
    </blockquote>
    <!-- <figcaption style="color:black" class="blockquote-footer">
        <?php //echo $id; ?><br><cite><b></b></cite>
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
                <h4 class='card-title' >".strtoupper($row['title'])."</h4>
                <div class='questions'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img1'].".png'
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
                    style='margin:5px'
                /><br>
                <p>2/10 - ".$row['q2']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca2']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa2']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img3'].".png'
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
                    style='margin:5px'
                /><br>
                <p>3/10 - ".$row['q3']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca3']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa3']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img4'].".png'
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
                    style='margin:5px'
                /><br>
                <p>6/10 - ".$row['q6']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca6']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa6']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img7'].".png'
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
                    style='margin:5px'
                /><br>
                <p>8/10 - ".$row['q8']."</p>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`c`)' 'type='submit' class='btn btn-primary'>".$row['ca8']."</button>
                <button onclick='this.style.backgroundColor = `navy`;checkAnswer(`w`)' type='submit' class='btn btn-primary'>".$row['wa8']."</button>
                </div>
                <div class='questions' style='display:none'>
                <h5>".$row['instructions']."</h5>
                <img
                    id='picture'
                    src='imgs/quiz/".$row['img9'].".png'
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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
                    alt='MDB Logo'
                    draggable='false'
                    height='165'
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