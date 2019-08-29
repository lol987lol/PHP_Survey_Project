<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      $student_name= $_SESSION['Student'];
      echo $student_name . ' ist eingeloggt.';
    ?>

    <p>Answer Surveys</p>
    <a href="answer_survey.php">
      <img border="0" alt="Answer" src="Survey.png">
    </a>

  </br>
  </body>
</html>
