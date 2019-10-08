<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$answer1 = $_POST['q1'];
$answer2 = $_POST['q2'];
$answer3 = $_POST['q3'];
$answer4 = $_POST['q4'];
$answer5 = $_POST['q5'];

$Correct = 0;

if ($answer1 == "Eaton Lawr2") { $Correct++; }
if ($answer2 == "Gibbons") { $Correct++; }
if ($answer3 == "Big SegFault Energy") { $Correct++; }
if ($answer4 == "C++") { $Correct++; }
if ($answer5 == "CHOOSE ME!") { $Correct++; }

$percent = ($Correct / 5) * 100;

echo "QUESTION1: Where is EECS 448 lecture classroom?<br>
      You Answered: $answer1 <br>
      Correct answer: Eaton Lawr2<br><br><br>

      QUESTION2: WWho is our EECS 448 professor?<br>
      You Answered: $answer2 <br>
      Correct answer: Gibbons<br><br><br>

      QUESTION3: What is Haonan's 448 Group name?<br>
      You Answered: $answer3 <br>
      Correct answer: Big SegFault Energy<br><br><br>

      QUESTION4: Which programming language we used in our first Project?<br>
      You Answered: $answer4 <br>
      Correct answer: C++<br><br><br>

      QUESTION5: How is the quiz going so far?<br>
      You Answered: $answer5 <br>
      Correct answer: CHOOSE ME!<br><br><br>

      You got $Correct / 5 ($percent %)Correct!!
      "

 ?>
