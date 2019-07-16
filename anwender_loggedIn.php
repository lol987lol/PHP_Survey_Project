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
    } else {
      header('Location: index.php');
    }
    ?>
  </body>
</html>
