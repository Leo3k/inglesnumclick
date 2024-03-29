<?php 
include "navbar.php"; 
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
echo "<h1>".strtoupper($_GET['id'])."</h1>";
?>
<table class='table' style='width:420px'>
<thead class='thead-light'>
      <tr>
        <th scope='col'>id</th>
        <th scope='col'>date</th>
        <th scope='col'>activities</th>
        <?php
        if (strtoupper($_GET['id']) == 'TEACHER'){
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
    
    $username = strtoupper($_GET['id']);
    if (strtoupper($_GET['id']) == 'TEACHER') {
      $query = "SELECT * FROM classes";
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
    if (strtoupper($_GET['id']) == 'TEACHER') {
      echo "<tr style='color:white';>   
      <th scope='row'><a href='classes.php?id=$id'>$id</a></th>
      <td>".$newDate."</td>
      <td>
          <a href='$a1'>&#9989; Lesson</a>
      </td>
      <td><button class='btn btn-success'>".$row['student']."</button></td>
      </tr>";
    }
     else {
    echo "<tr style='color:white';>   
        <th scope='row'><a href='classes.php?id=$id'>$id</a></th>
        <td>".$newDate."</td>
        <td>
            <a href='$a1'>&#9989; Lesson</a>
        </td>
        <td><button class='btn btn-success'>".$row['teacher']."</button></td>
        </tr>";
    }
  }

?>
    </tbody>
  </table>
  <?php
    if (strtoupper($_GET['id']) == 'TEACHER') {
      echo "
      <a href='plan.php?id=$username' class='btn btn-primary'>PLAN CLASS</a>
      <a href='feedback.php?p=$username' class='btn btn-primary'>FEEDBACK</a>
      <a href='delete.php?id=$username' class='btn btn-danger'>DELETE CLASS</a><br>
      <a href='viewQuiz.php' class='btn btn-info'>VIEW QUIZ</a>
      <a href='createQuiz.php' class='btn btn-success'>CREATE QUIZ</a>
      "; 
    } 
  ?> <br><br>
  <!-- <a href='logout.php'>Log out</a> -->
</div>