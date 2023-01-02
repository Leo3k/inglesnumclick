<?php include "navbar.php" ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
require 'connection.php';

if(isset($_POST["submit"])) {
    $username =  $_GET["id"];
    $password = $_POST["password"];
    
    $check = "select id, username from login where username = '{$username}' and password = '{$password}'";

    $result = mysqli_query($conn, $check);
    $row = mysqli_num_rows($result);
    if($row >= 1) {
        echo "<script> window.location.href = 'student.php?id=$username'; </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Incorrect Password!'
          })
        </script>;";
    }
}
?>
<div style="border:1px solid white;width:380px; border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
    <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h2 style="color:white">What is your password?</p>
    </blockquote>
    <figcaption style="color:white" class="blockquote-footer">
        Type in your password below
    </figcaption>
    </figure>
    <form class="input-group" action="" method="post" autocomplete="off">
        <input name="password" style="text-align:center;text-transform:uppercase" type="password" id="inputPassword5" class="form-control" placeholder="password" aria-describedby="passwordHelpBlock">
        <button type="submit" name="submit" class="btn btn-info">SEND</button>
    </form>
</div>
