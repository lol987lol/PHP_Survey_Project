<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Wir sind in der anwender_loggingIn.php</p>
    <?php
    session_start();

    //!!!!!!!!!
    //VARIABLES
    //!!!!!!!!!
    $dataBase = 'webdb_kirchberg';

    $username = $_POST['username_anwender_anmeldung'];
    $password = $_POST['password_anwender_anmeldung'];

    $anfrageStringCheckUser = "SELECT COUNT(*) as anz
                               FROM anwender
                               WHERE name = '$username'
                               AND kennwort = '$password'";

    $UserAuthorized = 123321;

    //!!!!!!!!!!!!!!!!!!!
    // Login Confirmation
    //!!!!!!!!!!!!!!!!!!!
    $connectionString = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connectionString, $dataBase);

    $UserCount = mysqli_fetch_assoc(mysqli_query($connectionString, $anfrageStringCheckUser))['anz'];

    if ($UserCount == 0) {
      echo "User ist nicht da <br>";
      echo "<a href='index.php'>Zur Anmeldung</a>";
    } else {
      echo "User ist da";
      $_SESSION['U'] = $UserAuthorized;
      header('Location: anwender_loggedIn.php');
    }

    mysqli_close($connectionString);
     ?>
  </body>
</html>
