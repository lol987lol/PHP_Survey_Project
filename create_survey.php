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
     <h1>Geben Die Details zu Ihrem Fragebogen an</h1>
     <form class="survey_details" action="fill_survey.php" method="post">
       <label class="control-label" for="textinput">Questioncount: </label>
       <input type="text" name="count_questions" placeholder="How many questions?">
       <br>
       <br>
       <label class="control-label" for="textinput">Survey-Titel: </label>
       <input type="text" name="survey_titel" placeholder="Titel of your Survey?">

       <!-- Button  -->
       <div>
         <div class="button">
           <button id="button_create_survey" name="create_survey">Erstellen</button>
         </div>
       </div>

       <div class="Surveys">
         <br><br>
         <h3>Hier sehen Sie Ihren bisherigen Umfragen</h3>
       </div>
       <select class="DropdownSurvey" name="DropdownSUR">
         <?php
           //!!!!!!!!!
           //VARIABLES
           //!!!!!!!!!
           $dataBase = 'webdb_kirchberg';
           $anfrageString = "SELECT * FROM fragebogen";

           //!!!!!!!!!!!!!!!!!!!
           // DATABASECONNECTION
           //!!!!!!!!!!!!!!!!!!!
           $connectionString = mysqli_connect('localhost', 'root', '');
           mysqli_select_db($connectionString, $dataBase);
           $erg = mysqli_query ($connectionString, $anfrageString);

           echo '
             <option selected="selected">------</option>
           ';

           while ($table = mysqli_fetch_assoc($erg)) {
             echo '
               <option>'. $table['titel']. '</option>
             ';
           }
             mysqli_close($connectionString);
          ?>
       </select>

       <button type="submit" formaction="/form/create_survey.php" name="create_table">Anzeigen</button>

       <?php

       $survey_choice = $_POST['DropdownSUR'];

       echo "<br/>";
       echo "<br/>";
       echo "Inhalt der Tabelle:";echo $survey_choice;

          if (isset($_POST['create_table'])) {
            echo "<br/><br/>";
          }

          $anfrageStringSurvey = "SELECT fragenummer, frage
                                  FROM fragen
                                  WHERE fragebogentitel='$survey_choice'";

          //!!!!!!!!!!!!!!!!!!!
          // DATABASECONNECTION
          //!!!!!!!!!!!!!!!!!!!
          $connectionString = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($connectionString, $dataBase);
          $ergSurvey = mysqli_query ($connectionString, $anfrageStringSurvey);

          echo "<table id='Current_Survey' style='border: 1px solid black;'>";

        ?>

        <tr>
          <th>Fragenummer</th>
          <th>Frage</th>
        </tr>

          <?php
          while ($table = mysqli_fetch_assoc($ergSurvey)) {
          ?>
              <tr>
                <td><?php echo $table['fragenummer'] ?></td>
                <td><?php echo $table['frage'] ?></td>
              </tr>

              <?php
                  }

                  echo "</table>";
                    mysqli_close($connectionString);
              ?>
     </form>
  </body>
</html>
