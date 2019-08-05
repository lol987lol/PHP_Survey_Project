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
<div class="form-group">
  <label class="control-label" for="textinput">Kurs</label>
  <div class="input">
  <input id="textinput" name="kurs_student" type="text" placeholder="Kurs" class="form-control input-md">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <div class="button">
    <button id="button_safe_student" name="save_student">Speichern</button>
  </div>
</div>

</form>
</div>
<a href="anwender_loggedIn.php">Zurück zur Funktionsauswahl</a>
