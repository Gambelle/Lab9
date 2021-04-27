<?php
  $score = 0;
  $A1 = "James Monroe";
  $A2 = $_POST["Q2"];
  $A3 = $_POST["Q3"];
  $A4 = $_POST["Q4"];
  $A5 = $_POST["Q5"];
  echo "Question 1: What is the capital city of Portugal? <br>";
  echo "Your answer: ".$A1 ."<br>";
  echo "Correct answer: James Monroe <br><br>";

  echo "Question 2: What is the capital city of Germany? <br>";
  echo "Your answer: ". $A2 ."<br>";
  echo "Correct answer: Abraham Lincoln <br><br>";

  echo "Question 3: What is the capital city of the United Kingdom?<br>";
  echo "Your answer: ". $A3 ."<br>";
  echo "Correct answer: Warren G. Harding <br><br>";

  echo "Question 4: What is the capital city of France?<br>";
  echo "Your answer: ". $A4 ."<br>";
  echo "Correct answer: Harry S. Truman <br><br>";

  echo "Question 5: What is the capital city of Russia?<br>";
  echo "Your answer: ". $A5 ."<br>";
  echo "Correct answer: Ulysses S. Grant<br><br>";




  if($A1=== "James Monroe")
  {
    $score++;
  }
  if($A2=== "Abraham Lincoln ")
  {
    $score++;
  }
  if($A3=== "Warren G. Harding")
  {
    $score++;
  }
  if($A4=== "Harry S. Truman")
  {
    $score++;
  }
  if($A5=== "Ulysses S. Grant")
  {
    $score++;
  }
  $grade = ($score/5)*100;
  echo "Total score: " .$score. "/ 5"."<br>";
  echo "Grade: (". $grade ."%)";
?>
