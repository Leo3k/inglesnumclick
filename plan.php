<?php 
include "navbar.php";
require 'connection.php';  

$username = strtoupper($_GET['id']);

if(isset($_POST["submit"])){
    $student = $_POST["student"];
    $date = $_POST["date"];
    $activity1 = $_POST["activity1"];
    $activity2 = $_POST["activity2"];
    $activity3 = $_POST["activity3"];
    $activity4 = $_POST["activity4"];
    $teacher = $_POST["teacher"];

$query = "INSERT INTO classes VALUES(null, '$student', '$date', '$activity1', '$activity2', '$activity3', '$activity4', '$teacher', 'planned', '')";
mysqli_query($conn, $query);
echo "<script> window.location.href = 'student.php?id=$username'; </script>";
}

?>
    <div class='container-sm my-2' style='color:white;padding:20px'>
      <form class='row g-3' action='' method='post' autocomplete='off'>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Student</label>
          <select  name="student" class="form-control" id="exampleFormControlSelect1">
                <?php require 'connection.php';
                  $sql = "SELECT * FROM login";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()) {            
                echo
                "<option value='".$row['username']."'>".$row['username']."</option>";
                  };
                ?>
            </select>
        </div>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Teacher</label>
          <select  name="teacher" class="form-control" id="exampleFormControlSelect1">
                <?php require 'connection.php';
                  $sql = "SELECT * FROM teachers";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()) {            
                echo
                "<option value='".$row['teacher']."'>".$row['teacher']."</option>";
                  };
                ?>
            </select>
        </div>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Activity 1</label>
          <input type='text' name='activity1' class='form-control' id='inputEmail4'>
        </div>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Activity 2</label>
          <input type='text' name='activity2' class='form-control' id='inputEmail4'>
        </div>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Activity 3</label>
          <input type='text' name='activity3' class='form-control' id='inputEmail4'>
        </div>
        <div class='col-md-6'>
          <label for='inputEmail4' class='form-label'>Slides</label>
          <input type='text' name='activity4' class='form-control' id='inputEmail4'>
        </div>
        <div class='col-md-6'>
            <label for='inputData' class='form-label'>Date</label>
            <input type='text' name='date' class='form-control' id='inputZip' placeholder='MM/DD/YYYY'>
        </div>
        <div class='col-12'>
        <br>
          <button type='submit' name='submit' class='btn btn-primary'>SAVE</button>
        </div>
      </form>
    </div>
    "; 
  
    
  
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
        $(document).ready(function(){
            $('.select2').select2();
            var date_input=$('input[name="date"]');
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
</script>