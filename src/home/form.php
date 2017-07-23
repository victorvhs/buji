<?php
//require_once "vendor/autoload.php";
require_once("../db.class.php");
 if(!$_POST['chamado']){
		header('Location: novo.php?status=2');
	}

	$chamado    = strtoupper($_POST['chamado']);
	$n_serie 	  = strtoupper($_POST['serie']) ;
	$modelo     = strtoupper($_POST['modelo']) ;
	$peca       = strtoupper($_POST['peca'] );
	$contador   = strtoupper($_POST['contador']) ;
	$pecaCod 		= strtoupper($_POST['pecaCodigo']);
	$defeito    =  $_POST['defeito'];
	$dataInstalacao =  $_POST['dataInstala'];
  $contadorDefeito = $_POST['contador_defeito'];

  if (isset($_POST['nf']) ||
		isset($_POST['dataCompra']) ||
		isset($_POST['dataAnalise']))
	{
		$nf =  $_POST['nf'] ;
		$dataCompra  =  $_POST['dataCompra'] ;
		$dataAnalise =  $_POST['dataAnalise'] ;
	}
	else{
		$nf = null;
		$dataCompra = null ;
		$dataAnalise = null ;
	}

$objDb = new db();
$link = $objDb->conecta_mysql();
/*
CREATE TABLE formularios(
 	id int NOT NULL PRIMARY KEY,
    chamado varchar(80),
    peca varchar(80),
    pecaCod varchar(80),
    modelo varchar(80),
    contador int,
    defeito text(900),
    contadorDefeito int ,
    dataInstalacao varchar(30),
    dataCompra varchar(30),
    dataAnalise varchar(30),
    nf int
 )
*/


$sql = " INSERT INTO formularios (chamado, peca, pecaCod, modelo, contador, defeito, contadorDefeito, dataInstalacao, dataCompra, dataAnalise, nf, n_serie)
 VALUES ('$chamado', '$peca', '$pecaCod', '$modelo', '$contador', '$defeito', '$contadorDefeito','$dataInstalacao', '$dataCompra', '$dataAnalise', '$nf','$n_serie') " ;
//executar a query
$result = mysqli_query($link, $sql);
if($result){
 header('Location: novo.php?status=1');
echo "gravado";
} else {
  echo 'Erro ao registrar. O banco não me respondou a tempo.';
}
