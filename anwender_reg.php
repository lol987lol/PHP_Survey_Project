<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Wir sind in der anwender_reg.php</p>
    <?php

    //!!!!!!!!!
    //VARIABLES
    //!!!!!!!!!
    $dataBase = 'webdb_kirchberg';

    $username = $_POST['username_anwender'];
    $password = $_POST['password_anwender'];

    $anfrageString = "INSERT INTO anwender
                      VALUES ('$username', '$password')";

    //!!!!!!!!!!!!!!!!!!!
    // DATABASECONNECTION
    //!!!!!!!!!!!!!!!!!!!
    $connectionString = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connectionString, $dataBase);
    mysqli_query($connectionString, $anfrageString);


    mysqli_close($connectionString);

    sleep(5);
    header('Location: index.php');
     ?>
  </body>
</html>
