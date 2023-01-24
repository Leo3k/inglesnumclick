<?php include "navbar.php" ?>
<div class="card" style="margin:auto;width: 18rem;">
  <div class="card-body">
<?php require 'connection.php';
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM classes WHERE id = '$id'";
    mysqli_query($conn, $query);
    $result = $conn->query($query);

    if (!$result) {
        die('Invalid query: ' . $conn->error);
    }

    while($row = $result->fetch_assoc()) {
    echo "
        <p class='card-title' ><b>Lesson Id:</b> ".$row['id']."</p>
        <p class='card-subtitle mb-2 text-muted'><b>Date:</b> ".$row['date']."</p>
        <p class='card-text'><b>Student's name:</b> ".$row['student']."</p>
        <p class='card-text'><b>Teacher's name:</b> ".$row['teacher']."</p>
        <p class='card-text'><b>Activity 1:</b> <a href='".$row['activity1']."'>".$row['activity1']."</a></p>
        <p class='card-text'><b>Status:</b> ".$row['status']."</p>
        <p class='card-text'><b>Feedback:</b> ".$row['feedback']."</p>   
        ";
    }
}
?>
 </div>
</div>
