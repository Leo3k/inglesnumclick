<?php 
session_start();
include "navbar.php";
require 'connection.php';  

if ($_SESSION['username'] !== 'LEO') {
    header("Location: index.php");
}

if (isset($_POST['confirm'])) {
    $id = $_SESSION['id']; 
    if ($_POST['confirm'] == 'Yes') {
      $delete = "DELETE FROM classes WHERE id= '$id'";
      mysqli_query($conn, $delete);
      header("Location:student.php");
    }
    else if ($_POST['confirm'] == 'No') {
        header("Location:student.php");  
    } 
}
?>
<div class='container-sm my-2' style='background-color:lightgray;color:black;padding:20px;margin:auto;width:400px;border-radius:5px;'>
        <form class='row' action='' method='post' autocomplete='off'>
            <div class='col-12'>
                <label for='inputEmail4' class='form-label'>Class ID</label>
                <input type='number' name='id' class='form-control'>
            </div>
            <div class='col-12'>
            <br>
                <button type='submit' name='delete' class='btn btn-primary'>DELETE</button>
            </div>
        </form>
      <?php
      if(isset($_POST["delete"])){
      $id = $_POST["id"];
      $_SESSION['id'] = $id; 
      echo 
      "<br>
      <p>Do you really want to delete this class?</p>
      <form class='row' action='' method='post' autocomplete='off'>
      <div class='col-12'>
      <button type='submit' name='confirm' value='Yes' class='btn btn-success'>Yes</button>
      <button type='submit' name='confirm' value='No' class='btn btn-danger'>No</button>
      </div>
      </form>";
    }
    ?>
</div>