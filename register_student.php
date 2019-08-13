<!-- STUDENT -->
<!-- !!!!!!!! -->
<div>
<form class="student_registration" action="student_reg.php" method="post">

<!-- Form Name -->
<h1>Registrierung von neuem Studenten</h1>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="textinput">Matrikelnummer</label>
  <div class="input">
  <input id="textinput" name="mnr_student" type="text" placeholder="MNR" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="textinput">Name</label>
  <div class="input">
  <input id="textinput" name="name_student" type="text" placeholder="Name" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
Kurs:
    </br>
      <select class="dropdown_kurs" name="kurs_student">
        <?php
        $connectionString = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($connectionString, 'webdb_kirchberg');
        $anfrage= mysqli_query($connectionString, 'SELECT * FROM kurs');

          while ($kurs = mysqli_fetch_assoc($anfrage)) {
            echo '<option>'. $kurs["Kuerzel"] .'</option>';
          }

        mysqli_close($connectionString);
         ?>
      </select>
    </br>
    </br>

<!-- Button (Double) -->
<div class="form-group">
  <div class="button">
    <button id="button_safe_student" name="save_student">Speichern</button>
  </div>
</div>

</form>
</div>
<a href="anwender_loggedIn.php">Zurück zur Funktionsauswahl</a>
