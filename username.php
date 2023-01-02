<?php 
session_start();
include "navbar.php"
?>
<?php 

define('HOST', '108.167.132.22');
define('USUARIO', 'ingle814_leo');
define('SENHA', 'eu<#MACEIO');
define('DB', 'ingle814_site');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado');

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";


if (!isset($_SESSION['username'])) {

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $query = "SELECT * FROM login WHERE username = '$username'";
    mysqli_query($conn, $query);
    $result = $conn->query($query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            header("Location: password.php?id=$username");
        } else {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Username Not Found!'
              })
            </script>;";
        }
    } else {
        echo 'Error';
    }
}
} else {
    header("Location: student.php");
}
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div style="border:1px solid white;width:380px; border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
    <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h2 style="color:white">What is your username?</p>
    </blockquote>
    <figcaption style="color:white" class="blockquote-footer">
        Type in your username below
    </figcaption>
    </figure>
    <form class="input-group" action="" method="post" autocomplete="off">
        <input name='username' style="text-align:center;" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        <button type="submit" name="submit" class="btn btn-info">SEND</button>
    </form>
</div>
