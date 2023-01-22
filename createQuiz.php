<?php include "navbar.php" ?>
<?php require 'connection.php';

if(isset($_POST["submit"])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $instructions = mysqli_real_escape_string($conn, $_POST['instructions']);
    $q1 = mysqli_real_escape_string($conn, $_POST['q1']);
    $q2 = mysqli_real_escape_string($conn, $_POST['q2']);
    $q3 = mysqli_real_escape_string($conn, $_POST['q3']);
    $q4 = mysqli_real_escape_string($conn, $_POST['q4']);
    $q5 = mysqli_real_escape_string($conn, $_POST['q5']);
    $q6 = mysqli_real_escape_string($conn, $_POST['q6']);
    $q7 = mysqli_real_escape_string($conn, $_POST['q7']);
    $q8 = mysqli_real_escape_string($conn, $_POST['q8']);
    $q9 = mysqli_real_escape_string($conn, $_POST['q9']);
    $q10 = mysqli_real_escape_string($conn, $_POST['q10']);
    $img1 = $_POST["img1"];
    $img2 = $_POST["img2"];
    $img3 = $_POST["img3"];
    $img4 = $_POST["img4"];
    $img5 = $_POST["img5"];
    $img6 = $_POST["img6"];
    $img7 = $_POST["img7"];
    $img8 = $_POST["img8"];
    $img9 = $_POST["img9"];
    $img10 = $_POST["img10"];
    $ca1 = mysqli_real_escape_string($conn, $_POST['ca1']);
    $ca2 = mysqli_real_escape_string($conn, $_POST['ca2']);
    $ca3 = mysqli_real_escape_string($conn, $_POST['ca3']);
    $ca4 = mysqli_real_escape_string($conn, $_POST['ca4']);
    $ca5 = mysqli_real_escape_string($conn, $_POST['ca5']);
    $ca6 = mysqli_real_escape_string($conn, $_POST['ca6']);
    $ca7 = mysqli_real_escape_string($conn, $_POST['ca7']);
    $ca8 = mysqli_real_escape_string($conn, $_POST['ca8']);
    $ca9 = mysqli_real_escape_string($conn, $_POST['ca9']);
    $ca10 = mysqli_real_escape_string($conn, $_POST['ca10']);
    $wa1 = mysqli_real_escape_string($conn, $_POST['wa1']);
    $wa2 = mysqli_real_escape_string($conn, $_POST['wa2']);
    $wa3 = mysqli_real_escape_string($conn, $_POST['wa3']);
    $wa4 = mysqli_real_escape_string($conn, $_POST['wa4']);
    $wa5 = mysqli_real_escape_string($conn, $_POST['wa5']);
    $wa6 = mysqli_real_escape_string($conn, $_POST['wa6']);
    $wa7 = mysqli_real_escape_string($conn, $_POST['wa7']);
    $wa8 = mysqli_real_escape_string($conn, $_POST['wa8']);
    $wa9 = mysqli_real_escape_string($conn, $_POST['wa9']);
    $wa10 = mysqli_real_escape_string($conn, $_POST['wa10']);

    $query = "INSERT INTO `site`.`quizzes` (`title`, `instructions`, `q1`, `img1`, `ca1`, `wa1`, `q2`, `img2`, `ca2`, `wa2`, `q3`, `img3`, `ca3`, `wa3`, `q4`, `img4`, `ca4`, `wa4`, `q5`, `img5`, `ca5`, `wa5`, `q6`, `img6`, `ca6`, `wa6`, `q7`, `img7`, `ca7`, `wa7`, `q8`, `img8`, `ca8`, `wa8`, `q9`, `img9`, `ca9`, `wa9`, `q10`, `img10`, `ca10`, `wa10`) VALUES ('$title', '$instructions', '$q1', '$img1', '$ca1', '$wa1', '$q2', '$img2', '$ca2', '$wa2', '$q3', '$img3', '$ca3', '$wa3', '$q4', '$img4', '$ca4', '$wa4', '$q5', '$img5', '$ca5', '$wa5', '$q6', '$img6', '$ca6', '$wa6', '$q7', '$img7', '$ca7', '$wa7', '$q8', '$img8', '$ca8', '$wa8', '$q9', '$img9', '$ca9', '$wa9', '$q10', '$img10', '$ca10', '$wa10')";
    mysqli_query($conn, $query);
    echo "<script> window.location.href = 'viewQuiz.php'; </script>";
}

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
    color:#152039;
}

form div:hover{
    background-color: limegreen;
}
</style>
<div id='exercise' style="border:1px solid white;border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h4 style="color:BLACK">CREATE QUIZ<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        MAKE AN ENGLISH QUIZ<br><cite><b></b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
    <form style='color:white' action='' method='post' autocomplete='off'>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>TITLE</label>
                <input name='title' type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>INSTRUCTIONS</label>
                <input name='instructions' type="text" class="form-control">
            </div>
        </div>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 1</label>
                <input name='q1' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 1</label>
                    <input name='img1' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 1</label>
                    <input name='ca1' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 1</label>
                    <input name='wa1' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 2</label>
                <input name='q2' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 2</label>
                    <input name='img2' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 2</label>
                    <input name='ca2' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 2</label>
                    <input name='wa2' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 3</label>
                <input name='q3' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 3</label>
                    <input name='img3' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 3</label>
                    <input name='ca3' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 3</label>
                    <input name='wa3' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 4</label>
                <input name='q4' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 4</label>
                    <input name='img4' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 4</label>
                    <input name='ca4' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 4</label>
                    <input name='wa4' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 5</label>
                <input name='q5' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 5</label>
                    <input name='img5' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 5</label>
                    <input name='ca5' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 5</label>
                    <input name='wa5' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 6</label>
                <input name='q6' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 6</label>
                    <input name='img6' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 6</label>
                    <input name='ca6' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 6</label>
                    <input name='wa6' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 7</label>
                <input name='q7' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 7</label>
                    <input name='img7' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 7</label>
                    <input name='ca7' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 7</label>
                    <input name='wa7' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 8</label>
                <input name='q8' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 8</label>
                    <input name='img8' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 8</label>
                    <input name='ca8' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 8</label>
                    <input name='wa8' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 9</label>
                <input name='q9' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 9</label>
                    <input name='img9' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 9</label>
                    <input name='ca9' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 9</label>
                    <input name='wa9' type="text" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div style='background-color:#152039;border-radius:5px;padding:5px;margin:5px;'>
            <div class="form-group">
                <label>QUESTION 10</label>
                <input name='q10' type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>IMAGE 10</label>
                    <input name='img10' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>CORRECT ANSWER 10</label>
                    <input name='ca10' type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label>WRONG ANSWER 10</label>
                    <input name='wa10' type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class='col-12'>
                <button type='submit' style='background-color:#152039;color:white;' name='submit' class='btn'>GENERATE QUIZ</button>
        </div>
    </form>
</div>
</div>