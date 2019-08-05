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
     <form class="survey_details" action="survey_details.php" method="post">
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

     </form>
  </body>
</html>
