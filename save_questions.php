<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fragen speichern bogen erstellen</title>
  </head>
  <body>
    <?php
    include "functions.inc.php";
     ?>

     <?php

     session_start();

     //!!!!!!!!!
     //VARIABLES
     //!!!!!!!!!
     $dataBase = 'webdb_kirchberg';

     $questioncounter = $_POST['questioncounter'];
     $surveyname = $_POST['surveyname'];

     $connectionString = mysqli_connect('localhost', 'root', '');

     for ($i=1; $i<=$questioncounter; $i++) {

       $c = $surveyname . $i;
       $question = $_POST[$c];

       $anfrageString = "INSERT INTO fragen
                         VALUES ('$surveyname', '$i', '$question')";

       //!!!!!!!!!!!!!!!!!!!
       // DATABASECONNECTION
       //!!!!!!!!!!!!!!!!!!!

       $connectionString = mysqli_connect('localhost', 'root', '');
       mysqli_select_db($connectionString, $dataBase);
       mysqli_query($connectionString, $anfrageString);
     }

     mysqli_close($connectionString);

     header('Location: create_survey.php');

      ?>

  </body>
</html>
