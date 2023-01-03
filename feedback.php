<?php 
include "navbar.php";
require 'connection.php';  

$username = strtoupper($_GET['p']);

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $feedback = $_POST["feedback"];

$query = "UPDATE `site`.`CLASSES` SET `status` = 'finished', `feedback` = '$feedback' WHERE `id` = '$id'";
mysqli_query($conn, $query);
echo "<script> window.location.href = 'https://www.inglesnumclick.com.br/inglesnumclick/student.php?id=$username'; </script>";
}
?>
<div class='container-sm my-2' style='background-color:lightgray;color:black;padding:20px;margin:auto;width:400px;border-radius:5px;'>
        <form class='row' action='' method='post' autocomplete='off'>
            <div class='col-12'>
                <label for='inputEmail4' class='form-label'>Class ID</label>
                <input type='number' name='id' class='form-control'>
                <label for='inputEmail4' class='form-label'>Feedback</label>
                <input type='text' name='feedback' class='form-control'>
            </div>
            <div class='col-12'>
            <br>
                <button type='submit' name='submit' class='btn btn-primary'>SAVE</button>
            </div>
        </form>
</div>
