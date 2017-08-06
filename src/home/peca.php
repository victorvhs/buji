<?php
//require_once "vendor/autoload.php";
session_start();
require_once("../db.class.php");
 if(!isset($_SESSION['usuario'])){
   header('Location:../index.php?erro=2');
 }
 if(isset($_POST["peca"]) && is_array($_POST["peca"]) &&isset($_POST["cod"]) && is_array($_POST['cod']) ){
     $capture_field_vals ="";
     $cod ="";
     foreach ($_POST['cod'] as $key => $cods) {
       $cod .= $cods;
       # code...
     }
     foreach($_POST["peca"] as $key => $text_field){
         $capture_field_vals .= $text_field .", ";
     }
     echo $cod;
     echo $capture_field_vals;
 }



// $objDb = new db();
 //$link = $objDb->conecta_mysql();
 //$res = mysqli_query($link, $sql);


 ?>
