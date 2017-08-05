<?php
  session_start();

  require_once '../lib/dompdf/autoload.inc.php';
  // instantiate and use the dompdf class
  use Dompdf\Dompdf;

   if(!isset($_SESSION['usuario'])){
     header('Location:../index.php?erro=2');
   }
   if(!isset($_GET['id'])){
     echo "Não sei o que vc quer fazer.<br>
          Volte para casa e pense um pouco sobre isso";
   }
   require_once("../db.class.php");

   $id = $_GET['id'];

   $objDb = new db();
   $link = $objDb->conecta_mysql();
   $sql = "SELECT * FROM formularios WHERE id = '$id'" ;
   $res = mysqli_query($link, $sql);
   $escrever=mysqli_fetch_array($res);
   $garantia = '<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Atenção, apenas um teste</title>
<style>
* { font-family: sans-serif; }
</style>
</head>

<body>

<header>
    <h1>Atenção, isso é apenas um teste</h1>
    <p>Estou dando um exemplo sobre como utilizar a dompdf.
    Meu nome é <b>Luiz Otávio</b> E trabalho no blog
    <a href="http://www.todoespacoonline.com/w/">todoespacoonline.com/w</a>. Minha foto segue abaixo:
    </p>

    <p style="text-align:center">
        <img src="foto.jpg">
    </p>
</header>

</body>

</html>';


   //Gerando o PDF
   $dompdf = new Dompdf();
   $dompdf->loadHtml($garantia);
   // (Optional) Setup the paper size and orientation
   $dompdf->setPaper('A4', 'landscape');
   // Render the HTML as PDF
   $dompdf->render();
   // Output the generated PDF to Browser
   $dompdf->stream();






?>
