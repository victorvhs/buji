<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Buji</title>
		<!-- jquery - link cdn -->
		<!-- TODO Colocar os script locais. -->
		<!-- jquery - link cdn -->
    <script src="static/js/jquery.js"></script>
    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="static/bt/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/fta/css/font-awesome.min.css">
		<script>
			$(document).ready( function(){
				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){
					var campo_vazio = false;
					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_usuario').css({'border-color': '#CCC'});
					}if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}	if(campo_vazio) return false;
				});
			});
		</script>
	</head>

	<body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top ">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    <div class="container">
	      <!-- Main component for a primary marketing message or call to action -->
	      </div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="jumbotron">
		        <h1>Buji - Garantia</h1>
						<?php
							if($erro == 2){
								echo "<h2>Você precisa fazer login para acessar essa paginas</h2>";
							}elseif ($erro == 3) {
								echo "<h2>Você Saiu, Esperamos Que volte em breve</h2>";
							} elseif ($erro == 1){
								echo '<h2> <font color="#FF0000">Usuário e ou senha inválido(s)</font></h2>';
							}
						 ?>
					 </div>
				<form method="post" action="validar_acesso.php" id="formLogin">
					<div class="form-group">
						<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
					</div>
					<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
				</form>
			</form>
		</div>
		<div class="col-md-4"></div>
	      <div class="clearfix"></div>
		</div>
		<script src=static/bt/js/bootstrap.min.js></script>
	</body>
</html>
