<head>
  Formulare
</head>
<body>
  <form class="form-horizontal" action="machwas.php">
<fieldset>

<!-- Form Name -->
<legend>WebDB_Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput1" type="text" placeholder="text1" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput2" type="text" placeholder="tex2" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput3" type="text" placeholder="text3" class="form-control input-md">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password Input</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput1" type="password" placeholder="password" class="form-control input-md">
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4">
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Double Button</label>
  <div class="col-md-8">
    <button id="button1id" name="save_btn" class="btn btn-success">Speichern</button>
    <button id="button2id" name="send_btn" class="btn btn-danger">Abschicken</button>
  </div>
</div>

</fieldset>
</form>
</body>
