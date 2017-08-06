<?php
session_start();
require_once("../db.class.php");
 if(!isset($_SESSION['usuario'])){
   header('Location:../index.php?erro=2');
 }
 include('menu.php');
?>
<div class="container">
<form id='form'>
  <div class="form-group col-md-7" id="compra">
    <div>
      <fieldset>
        <legend>Peças</legend>
        <label for="peca">Peca</label>
        <input type="text" class="form-control" id="peca"  name="peca[]" >
        <div class>
          <label for="cod">cod</label>
          <input type="text" class="form-control" id="cod"  name="cod[]"  >
          <br>
          <button class="add_field_button btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
        </div>

      </fieldset>
  </div>
  <div class="form-group col-md-7 compra2">
  </div>
</div>
<div class="col-md-3">
  <button type="button" name="enviar" id="enviar" >Enviar</button>
  <div class="" id="resultado">

  </div>

</div>
</form>
  </div>


</div>
<script src="../static/js/peca.js"></script>
