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
    </div>
    <div class="col-sm-4">
    </div>

  </div><!-- Fecha Row -->
</div> <!-- Fecha conteiner -->
<script src=static/bt/js/bootstrap.min.js></script>
</body>
</html>
