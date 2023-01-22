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
        <h4 style="color:BLACK">VIEW QUIZ<h4>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        SELECT AN ENGLISH QUIZ<br><cite><b></b></cite>
    </figcaption> 
    </figure>
  </div>
  <div class="card-body">
    <select name="quiz" onchange="location = this.value;" class="form-select" aria-label="Default select example">
        <option value="option">quiz</option>
        <?php
            $sql = "SELECT * FROM quizzes";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {            
            echo
            "<option value='quiz.php?id=".$row['id']."'>".$row['title']."</option>";
            };
        ?>
    </select> 
  </div>
</div>