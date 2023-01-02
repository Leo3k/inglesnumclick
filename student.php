<?php 
session_start();
include "navbar.php"; 

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}
?>
<style>
table {
  font-family: arial, sans-serif;
  border: 1px solid red;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    border: 1px solid red;
  text-align: left;
  padding: 8px;
}
</style>
<div style="width:420px;text-align:center;color:white;padding-left:0px;" class="container">
<?php
echo "<h1>".strtoupper($_SESSION['username'])."</h1>";
?>
<table class='table' style='width:420px'>
<thead class='thead-light'>
      <tr>
        <th scope='col'>id</th>
        <th scope='col'>date</th>
        <th scope='col'>activities</th>
        <?php
        if ($_SESSION['username'] == 'LEO'){
          echo "<th scope='col'>student</th>";
        }   
        else {
          echo "<th scope='col'>teacher</th>";
        }
        ?>
      </tr>
    </thead>
    <tbody>
<?php require 'connection.php';
    
    $username = strtoupper($_SESSION['username']);
    if ($_SESSION['username'] == 'LEO') {
      $query = "SELECT * FROM classes WHERE teacher = '$username'";
    }
    else {
    $query = "SELECT * FROM classes WHERE student = '$username'";
    }
    mysqli_query($conn, $query);
    $result = $conn->query($query);

    if (!$result) {
        die('Invalid query: ' . $conn->error);
    }

    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $a1 = $row['activity1'];
        $a2 = $row['activity2'];
        $a3 = $row['activity3'];
        $a4 = $row['activity4'];
        $originalDate = $row['date'];
        $newDate = date('d/m', strtotime($originalDate));
    if ($_SESSION['username'] == 'LEO') {
      echo "<tr style='color:white';>   
      <th scope='row'><a href='classes.php?id=$id'>$id</a></th>
      <td>".$newDate."</td>
      <td>
          <a href='$a1.php'>&#9989;</a>&nbsp;
          <a href='$a2.php'>&#9989;</a>&nbsp;
          <a href='$a3.php'>&#9989;</a>&nbsp;
          <a href='$a4.php'>&#9989;</a>
      </td>
      <td style='width:100px;margin:2px;margin-left:13px;' class='btn btn-success'>".$row['student']."</td>
      </tr>";
    }
     else {
    echo "<tr style='color:white';>   
        <th scope='row'><a href='classes.php?id=$id'>$id</a></th>
        <td>".$newDate."</td>
        <td>
            <a href='$a1.php'>&#9989;</a>&nbsp;
            <a href='$a2.php'>&#9989;</a>&nbsp;
            <a href='$a3.php'>&#9989;</a>&nbsp;
            <a href='$a4.php'>&#9989;</a>
        </td>
        <td style='width:100px;margin:2px;margin-left:13px;' class='btn btn-success'>".$row['teacher']."</td>
        </tr>";
    }
  }

?>
    </tbody>
  </table>
  <?php
    if ($_SESSION['username'] == 'LEO') {
      echo "
      <a href='plan.php' class='btn btn-primary'>PLAN CLASS</a>
      <a href='feedback.php' class='btn btn-primary'>FEEDBACK</a>
      <a href='delete.php' class='btn btn-danger'>DELETE CLASS</a>
      "; 
    } 
  ?> <br><br>
  <a href='logout.php'>Log out</a>
</div>