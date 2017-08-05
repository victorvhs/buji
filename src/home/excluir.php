<?php
  session_start();
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

   if(isset($_GET['delete'])){
     echo "<script>
              alert('Formulario deletado com sucesso');
          </script>
    ";
     $sql_deletar = "DELETE FROM formularios WHERE formularios.id = '$id'";
     $res_deletar = mysqli_query($link, $sql_deletar);


    header('Location:procurar.php');
   }
   //$res = mysqli_fetch_all($res);
  // var_dump($res);
  include_once('menu.php');
 ?>

 	    <div class="container">
        <div class="jumbotron alert alert-danger">
           <h2 class="center">Dados excluídos não podem ser recuperados.<br> Se tem certeza clique em excluir outra vez.</h2>
        </div>
 	     <?php
        echo "<table class='table table-hover table-bordered'>
                <tr>
                  <th>Identificação</th>
                  <th>Chamado</th>
                  <th>Peça</th>
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
              "<a class='btn btn-danger' type='button' href='excluir.php?delete=1&id=".$escrever['id']."'>Excluir
                <span class='glyphicon glyphicon-remove'></span>
              </a>".
              "</td></tr>";              ;
            }/*Fim do while*/

         echo "</table>";
        ?>

 		</div>
 	      <div class="clearfix"></div>
 		</div>


  </div>
 			<script src=../static/bt/js/bootstrap.min.js></script>
 	</body>
 </html>
