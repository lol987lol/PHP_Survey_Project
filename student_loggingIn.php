<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();

    $dataBase = 'webdb_kirchberg';

    $mnr = $_POST['mnr_student'];

    $anfrageStringCheckUser = "SELECT COUNT(*) as anz
                               FROM student
                               WHERE MNR = '$mnr'";
    $anfrageStringStudent = "SELECT Name From student Where MNR = '$mnr'";

    // Überprüfung
    $connectionString = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connectionString, $dataBase);

    $student_name = mysqli_fetch_assoc(mysqli_query($connectionString, $anfrageStringStudent))['Name'];
    $UserCount = mysqli_fetch_assoc(mysqli_query($connectionString, $anfrageStringCheckUser))['anz'];

    if ($UserCount == 0) {
      echo "Student ist nicht da <br>";
      echo "<a href='index.php'>Zur Anmeldung</a>";
    } else {
      echo "User ist da";
      $_SESSION['Student'] = $student_name;
      $_SESSION['MNR'] = $mnr;
      header('Location: student_loggedIn.php');
    }

    mysqli_close($connectionString);
     ?>
  </body>
</html>
