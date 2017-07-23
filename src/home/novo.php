<?php
  session_start();
   if(!isset($_SESSION['usuario'])){
     header('Location:../index.php?erro=2');
   }
   $status = isset($_GET['status']) ? $_GET['status'] : 0;
   include('menu.php');
 ?>

  <div class="container">
    <div class="col-md-10">
      <?php
        if($status == 1){
          echo "<script>alert('Cadastrado com sucesso'); </script>";
        }elseif ($status == 2) {
          echo "<script>alert('Não faça bobajem. O chamado é obrigatorio.'); </script>";
          # code...
        }

      ?>

      <form class="form" action="" method="post" id="formNovo">
        <div class="form-group">
            <label for="chamado" id="nomeChamado">Chamado</label>
            <input type="text" class="form-control" id="chamado" placeholder="Chamado" name="chamado" required >
        </div>
        <div class="form-group ">
          <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="modelo"  >
        </div>
        <div class="form-group">
            <label for="serie">Numero de Serie</label>
            <input type="text" class="form-control" id="serie" placeholder="Nun. serie" name="serie">
        </div>
      </div>
      <hr>
      <div  class="form-inline">
          <div class="form-group form-inline">
              <label for="peca">Peça</label>
              <input type="text" class="form-control" id="peca" placeholder="Peça" name="peca">
          </div>
          <div class="form-group">
              <label for="pecaCodigo">Codigo</label>
              <input type="text" class="form-control" id="pecaCodigo" placeholder="Codigo da peça" name="pecaCodigo">
          </div>
          <div class="form-group ">
            <label for="contador">Contador de Instalação</label>
            <input type="number" class="form-control" id="contador" name="contador" placeholder="Cont. Instalação">
        </div>
      </div>
      <hr>
      <div class=" form-group col-sd-9">
          <div class="form-group">
              <label for="nf">Nota Fiscal</label>
              <input type="number" class="form-control"  id="nf" placeholder="Nota Fiscal" name="nf">
          </div>
          <div class="form-group" id="compra">
              <label for="dataCompra">Data Compra</label>
              <input type="date" class="form-control" id="dataCompra"  name="dataCompra" >
          </div>
      </div>
      <div class="form-inline">
          <div class="form-group">
              <label for="dataInstala">Data da Instalação</label>
              <input type="date" class="form-control" id="dataInstala" name="dataInstala" >
          </div>
          <div class="form-group">
              <label for="dataAnalise">Data de Abertura</label>
              <input type="date" class="form-control" id="dataAnalise" name="dataAnalise" >
          </div>
          <div class="form-group ">
            <label for="contador_defeito">Contador de Defeito</label>
            <input type="number" class="form-control" id="contador_defeito" name="contador_defeito" placeholder="Cont. Defeito" >
          </div>
        </div>
      <hr>
      <div class="form-group">
          <label for="defeito">Descrição do Defeito </label>
          <textarea name="defeito" id="defeito" rows="4" cols="30" class="form-control" placeholder="Descição do defeito Resumidamente"></textarea>
      </div>
      <button type="button" class="btn bnt-primary" id="btSubmit">Enviar</button>
      </form>
      </div>
  </div>



  <script src="../static/bt/js/bootstrap.min.js"></script>
  <script src="../static/gravar.js"></script>

</body>
</html>
