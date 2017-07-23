<?php
//require_once "vendor/autoload.php";
require_once("../db.class.php");
	$chamado    = strtoupper($_POST['chamado']);
	$n_serie 	    = strtoupper($_POST['serie']) ;
	$modelo     = strtoupper($_POST['modelo']) ;
	$peca       = strtoupper($_POST['peca'] );
	$contador   = strtoupper($_POST['contador']) ;
	$pecaCod = strtoupper($_POST['pecaCodigo']);
	$defeito    =  $_POST['defeito'];
	$dataInstalacao =  $_POST['dataInstala'];
  $contadorDefeito = $_POST['contador_defeito'];
	$nf =  $_POST['nf'] ;
  $dataCompra  =  $_POST['dataCompra'] ;
	$dataAnalise =  $_POST['dataAnalise'] ;
  $id = $_POST['id'];
  $RMA = $_POST['RMA'];

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
$sql = "UPDATE formularios SET
              chamado='$chamado',
              peca='$peca',
              pecaCod='$pecaCod',
              modelo='$modelo',
              contador='$contador',
              defeito='$defeito',
              contadorDefeito='$contadorDefeito',
              dataInstalacao='$dataInstalacao',
              dataCompra='$dataCompra',
              dataAnalise='$dataAnalise',
              nf='$nf',
              n_serie='$n_serie',
              RMA='$RMA'
              WHERE id ='$id' ";
//executar a query
$result = mysqli_query($link, $sql);
if($result){
  echo "Gravado com sucesso";
	header('Location:procurar.php?status=1');
} else {
  echo 'Erro ao registrar. O banco não me respondou a tempo.';
}
