<?php include "navbar.php" ?>
<div style="border:1px solid white;width:380px; border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
        <h2 style="color:BLACK">What level are you?</p>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
        Choose your level
    </figcaption>
    </figure>
  </div>
  <div class="card-body">
    <?php
    $skill = $_GET['p'];
    echo
    "<a href='exercises.php?p=BEGINNER&id={$skill}' style='margin:5px;' class='btn btn-primary'>A - BEGINNER</a>
    <a href='exercises.php?p=INTERMEDIATE&id={$skill}' style='margin:5px;' class='btn btn-success'>B - INTERMEDIATE</a>
    <a href='exercises.php?p=ADVANCED&id={$skill}' style='margin:5px;' class='btn btn-danger'>C - ADVANCED</a>";
   ?>
  </div>
</div>
</div>