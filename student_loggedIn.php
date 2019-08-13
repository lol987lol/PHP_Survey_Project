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
  </br>
  </body>
</html>
