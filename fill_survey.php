<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fragebogen erstellen</title>
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

     $count_questions = $_POST['count_questions'];
     $survey_titel = $_POST['survey_titel'];
     $anwender = $_SESSION['Anwender'];

     $anfrageString = "INSERT INTO fragebogen
                       VALUES ('$anwender', '$survey_titel')";

     //!!!!!!!!!!!!!!!!!!!
     // DATABASECONNECTION
     //!!!!!!!!!!!!!!!!!!!
     $connectionString = mysqli_connect('localhost', 'root', '');
     mysqli_select_db($connectionString, $dataBase);
     mysqli_query($connectionString, $anfrageString);

     mysqli_close($connectionString);

      ?>

     <h1>Geben Sie Ihre Fragen ein</h1>
     <form class="survey_details" action="fill_survey.php" method="post">
       <label class="control-label" for="textinput">Fragen: </label>

       <!-- Button  -->
       <div>
         <div class="button">
           <button id="button_create_survey" name="create_survey">Fragen speichern</button>
         </div>
       </div>

     </form>
  </body>
</html>
