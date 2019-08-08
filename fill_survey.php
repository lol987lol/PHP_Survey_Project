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
     <form class="survey_questions" action="save_questions.php" method="post">

       <h2>Fragebogen: <?php echo "$survey_titel" ?></h2>

        <?php
            for ($i=1; $i <= $count_questions; $i++) {
              $question_No = $survey_titel . $i;
              echo "Fragenummer: $i";
              echo '
                <input type="text" name="'.$question_No.'" placeholder="Frage"> </br>
              ';
            }
            echo "</br>";
          ?>

          <input type="hidden" name="questioncounter" value="<?php echo $count_questions; ?>">
          <input type="hidden" name="surveyname" value="<?php echo $survey_titel; ?>">
       <!-- Button  -->
       <div>
         <div class="button">
           <button id="button_safe_questions" name="safe_questions">Fragen speichern</button>
         </div>
       </div>

     </form>
  </body>
</html>
