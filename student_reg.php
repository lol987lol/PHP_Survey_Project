<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Wir sind in der student_reg.php</p>
    <?php

    //!!!!!!!!!
    //VARIABLES
    //!!!!!!!!!
    $dataBase = 'webdb_kirchberg';

    $mnr = $_POST['mnr_student'];
    $name = $_POST['name_student'];
    $kurs = $_POST['kurs_student'];

    $anfrageString = "INSERT INTO student
                      VALUES ('$mnr', '$name', '$kurs')";

    //!!!!!!!!!!!!!!!!!!!
    // DATABASECONNECTION
    //!!!!!!!!!!!!!!!!!!!
    $connectionString = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connectionString, $dataBase);
    mysqli_query($connectionString, $anfrageString);


    mysqli_close($connectionString);

    sleep(5);
    header('Location: register_student.php');
     ?>
  </body>
</html>
