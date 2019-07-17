<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if($_SESSION['U'] == 123321) {
      echo "Wir sind in der anwender_loggedIn.php";
    ?>
    <br>
    <p>Register Student!</p>
    <a href="register_student.php">
      <img border="0" alt="Student" src="Student.png">
    </a>
    <br>
    <p>Create Survey!</p>
    <a href="create_survey.php">
      <img border="0" alt="Survey" src="Survey.png">
    </a>
    <?php
    } else {
      header('Location: index.php');
    }
    ?>
  </body>
</html>
