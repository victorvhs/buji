<?php
//require_once "vendor/autoload.php";
session_start();
require_once("../db.class.php");
 if(!isset($_SESSION['usuario'])){
   header('Location:../index.php?erro=2');
 }
 $chamado = $_POST['procurar'];
 $objDb = new db();
 $link = $objDb->conecta_mysql();
 $sql = 'SELECT id, chamado, peca, RMA FROM formularios';
 $res = mysqli_query($link, $sql);
 if (isset($_POST['procurar'])) {
   $chamado = $_POST['procurar'];
   $sql = "SELECT id, chamado, peca, RMA FROM formularios WHERE chamado LIKE '%$chamado%'";
   $res = mysqli_query($link, $sql);
//   $escrever=mysqli_fetch_array($res);


 }
 //$S=mysql_fetch_assoc($result);
 echo "<table class='table table-hover table-bordered'>
        <tr>
          <th>Identificação</th>
          <th>Chamado</th>
          <th>Peça</th>
          <th>Gerar</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>" ;

 /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
 while($escrever=mysqli_fetch_array($res)){
   /*Escreve cada linha da tabela*/
   echo "<tr><td>".
      $escrever['id'].
      "</td><td>".
      $escrever['chamado'].
      "</td><td>".
      $escrever['peca'].
      "</td><td>".
      "<a class='btn btn-primary' href='gerar.php?id=".$escrever['id']."''>Gerar
        <span class='fa fa-cogs' aria-hidden='true'</span>
      </a>"
      ."</td><td>".
      "<a class='btn btn-primary' href='editar.php?id=".$escrever['id']."''>Editar
        <span class='glyphicon glyphicon-pencil' aria-hidden='true'</span>
      </a>".
      "</td><td>".
      "<a class='btn btn-danger' type='button' href='excluir.php?id=".$escrever['id']."'>Excluir
        <span class='glyphicon glyphicon-remove'></span>
      </a>".
      "</td></tr>"
      ;
    }/*Fim do while*/

 echo "</table>";

  ?>
