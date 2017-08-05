<?php
  session_start();
   if(!isset($_SESSION['usuario'])){
     header('Location:../index.php?erro=2');
   }
   include_once('menu.php');
 ?>

<div class="container " >
  <div class="row">
    <div class="col-sm-2">
      <div class="panel panel-default">
        <div class="panel-heading">  <h3 style="text-align:center;">Menu</h3> </div>
          <div class="panel-body">
            <div class="col-md-5">
              <a type="button" class="bt btn btn-info btn-lg " href="novo.php">Inserir</a>
              <a type="button" class="bt btn btn-info btn-lg " href="procurar.php">Procurar</a>
              <a type="button" class="bt btn btn-info btn-lg " href="relatorios.php">Relatorios</a>
              <a type="button" class="bt btn btn-info btn-lg " href="pedirNota.php">Pedir Nota</a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="">
        <p><h2>Procurar</h2></p>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" name="valProcurar" id="valProcurar" placeholder="Insira o chamado">
        <span class="input-group-addon" id="procurar"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
      <div id="resultado">

      </div>
    </div>
    <div class="col-sm-4">
    </div>

  </div><!-- Fecha Row -->
</div> <!-- Fecha conteiner -->
<script src=../static/bt/js/bootstrap.min.js></script>
<script src=../static/js/procurar.js></script>
</body>
</html>
