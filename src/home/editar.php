<?php
  session_start();
   if(!isset($_SESSION['usuario'])){
     header('Location:../index.php?erro=2');
   }
   if(isset($_GET['id'])){
     $id = $_GET['id'];
   }else{
     echo "Não sei o que vc quer editar<br>
          Vá para casa e pense um pouco sobre isso";
   }
   require_once("../db.class.php");

   $objDb = new db();
   $link = $objDb->conecta_mysql();
   $sql = "SELECT * FROM formularios WHERE id='$id' ";
   $res = mysqli_query($link, $sql);

   $res = mysqli_fetch_assoc($res);
   include_once('menu.php');
 ?>

 <div class="container">
   <div class="col-md-10">
     <form class="form" action="form_editar.php" method="post">
       <input type="text" hidden="true" name="id"  value="<?= $res['id']; ?>">
       <div class="form-group">
           <label for="RMA">RMA</label>
           <input type="text" class="form-control " id="RMA" placeholder="RMA" name="RMA"
           value="<?php
            if(!$res['RMA']){
              echo '...';
            }else{
              echo $res['RMA'];}?>">
       </div>
       <div class="form-group">
           <label for="chamado">Chamado</label>
           <input type="text" class="form-control " id="chamado" placeholder="Chamado" name="chamado"  value="<?= $res['chamado']; ?>">
       </div>
       <div class="form-group ">
         <div class="form-group">
               <label for="modelo">Modelo</label>
               <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="modelo" value="<?= $res['modelo']?>" >
       </div>
       <div class="form-group">
           <label for="serie">Numero de Serie</label>
           <input type="text" class="form-control" id="serie" placeholder="Nun. serie" name="serie" value="<?= $res['n_serie']?>">
       </div>
     </div>
     <hr>
     <div  class="form-inline">
         <div class="form-group form-inline">
             <label for="peca">Peça</label>
             <input type="text" class="form-control" id="peca" placeholder="Peça" name="peca" value="<?= $res['peca']?>">
         </div>
         <div class="form-group">
             <label for="pecaCodigo">Codigo</label>
             <input type="text" class="form-control" id="pecaCodigo" placeholder="Codigo da peça" name="pecaCodigo" value="<?= $res['pecaCod']?>">
         </div>
         <div class="form-group ">
           <label for="contador">Contador de Instalação</label>
           <input type="number" class="form-control" id="contador" name="contador" placeholder="Cont. Instalação" value="<?= $res['contador']?>">
       </div>
     </div>
     <hr>
     <div class=" form-group col-sd-9">
         <div class="form-group">
             <label for="nf">Nota Fiscal</label>
             <input type="number" class="form-control"  id="nf" placeholder="Nota Fiscal" name="nf" value="<?= $res['nf']?>">
         </div>
         <div class="form-group" id="compra">
             <label for="dataCompra">Data Compra</label>
             <input type="date" class="form-control" id="dataCompra"  name="dataCompra"  value="<?= $res['dataCompra']?>">
         </div>
     </div>
     <div class="form-inline">
         <div class="form-group">
             <label for="dataInstala">Data da Instalação</label>
             <input type="date" class="form-control" id="dataInstala" name="dataInstala" value="<?= $res['dataInstalacao']?>">
         </div>
         <div class="form-group">
             <label for="dataAnalise">Data de Abertura</label>
             <input type="date" class="form-control" id="dataAnalise" name="dataAnalise" value="<?= $res['dataAnalise']?>">
         </div>
         <div class="form-group ">
           <label for="contador_defeito">Contador de Defeito</label>
           <input type="number" class="form-control" id="contador_defeito" name="contador_defeito" placeholder="Cont. Defeito" value="<?= $res['contadorDefeito']?>">
         </div>
       </div>
     <hr>
     <div class="form-group">
         <label for="defeito">Descrição do Defeito </label>
         <textarea name="defeito" id="defeito" rows="4" cols="30" class="form-control" placeholder="Descição do defeito Resumidamente"><?= $res['defeito']?></textarea>
     </div>
     <button type="submit" class="btn bnt-primary">Enviar</button>
     </form>
    </div>
 </div>
