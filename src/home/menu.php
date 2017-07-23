<?php
   if(!isset($_SESSION['usuario'])){
     header('Location:home.php');
   }
   ?>
<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Buj</title>
    <!-- jquery - link cdn -->
    <script src="../static/js/jquery-2.2.4.min.js"></script>
    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="../static/bt/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/fta/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sair.php"><i class="fa fa-sign-out" aria-hidden="true"></i>   Sair <?php echo $_SESSION['usuario']; ?> ?</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="procurar.php"> <span class="glyphicon glyphicon-search" ></span> Pesquisar</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="novo.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Novo</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
