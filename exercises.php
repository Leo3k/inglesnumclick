<?php include "navbar.php" ?>
<div style="border:1px solid white;width:380px; border-radius:5px; margin:auto; text-align:center; margin-top:5px;padding:5px;">
<div class="card text-center">
  <div class="card-header">
  <figure class="text-center mt-3">
    <blockquote class="blockquote">
    <?php
    $skill = strtoupper($_GET['id']);
        echo "<h3 style='color:BLACK'>{$skill}&nbsp;EXERCISES</p>";
    ?>
    </blockquote>
    <figcaption style="color:black" class="blockquote-footer">
    <?php
    $level = strtoupper($_GET['p']);
        echo "<b>{$level}</b>";
    ?>
    </figcaption>
    </figure>
  </div>
  <div class="card-body">
    <?php
    $skill = $_GET['id'];
    $level = $_GET['p'];

switch ($skill) {
  case "grammar":
    if ($level == "BEGINNER") {
      echo "
      <p>&#128214;&nbsp;Grammar 1:&nbsp;<a href='g1.php'>To BE</a> &#11088;</p><br>
      <p>&#128214;&nbsp;Grammar 2:&nbsp;<a href='g3.php'>SIMPLE PRESENT (AFFIRMATIVE SENTENCES)</a> &#11088;&#11088;</p>";
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#128214;&nbsp;Grammar 1:&nbsp;<a href='g2.php'>Comparative Adjectives</a> &#11088;&#11088;&#11088;</p>";
    } else {
      
    }
    break;
  case "listening":
    if ($level == "BEGINNER") {
      echo "<p>&#127911;&nbsp;Listening 1&nbsp;<a href='l2.php'>This, That, These, and Those</a> &#11088;&#11088;</p>";
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#127911;&nbsp;Listening 1:&nbsp;<a href='l3.php'>Restaurant</a> &#11088;&#11088;&#11088;</p>";
    } else {
      echo "
      <p>&#127909;&nbsp;Movie Scene:&nbsp;<a href='l1.php'>She Is Out Of My League</a> &#11088;&#11088;&#11088;&#11088;</p><br>
      <p>&#127909;&nbsp;Short Clip:&nbsp;<a href='l4.php'>Friends</a> &#11088;&#11088;&#11088;</p>";
    }
    break;
  case "reading":
    if ($level == "BEGINNER") {
      echo "<p>&#127911;&nbsp;Reading 1&nbsp;<a href='r1.php'>Rooms and Furniture (WILL)</a> &#11088;&#11088;&#11088;</p>";
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#127758;&nbsp;Reading 1&nbsp;<a href='r2.php'>The Solar System</a> &#11088;&#11088;&#11088;&#11088;</p>";
    } else {
      
    }
    break;
  case "writing":
    if ($level == "BEGINNER") {
      
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#x270d;&nbsp;Writing 1:&nbsp;<a href='w1.php'>There is - There are</a> &#11088;&#11088;&#11088;</p>";
    } else {
      
    }
    break;
  case "vocabulary":
    if ($level == "BEGINNER") {
      echo "<p>&#128552;&nbsp;Vocab 1:&nbsp;<a href='v1.php'>Feelings & Emotions</a> &#11088;</p>
      <br><p>&#128197;&nbsp;Vocab 2:&nbsp;<a href='v3.php'>Days of The Week</a> &#11088;</p>";
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#128188;&nbsp;Vocab 1:&nbsp;<a href='v2.php'>Occupations</a> &#11088;&#11088;</p>";
    } else {
      
    }
    break;
  case "speaking":
    if ($level == "BEGINNER") {
      
    } else if (($level == "INTERMEDIATE")) {
      echo "<p>&#10067;&nbsp;Speaking 1:&nbsp;<a href='s1.php'>Random Questions</a> &#11088;&#11088;&#11088;</p>";
    } else {
      
    }
    break;
  default:
    echo "Go back to the previous page";
}
    ?>
  </div>
</div>
</div>