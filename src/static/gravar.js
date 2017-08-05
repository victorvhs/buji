$(document).ready(function (){
  $('#btSubmit').click(function (){
    if($('#chamado').val().length > 0){
      $.ajax({
        url: 'form.php',
        method: 'post',
        data: $('#formNovo').serialize(),
        success: function(data){
          alert(data);
          $('#chamado').val('');
          $('#modelo').val('');
          $('#serie').val('');
          $('#peca').val('');
          $('#pecaCodigo').val('');
          $('#contador').val('');
          $('#nf').val('');
          $('#dataCompra').val('');
          $('#dataInstala').val('');
          $('#dataAnalise').val('');
          $('#contador_defeito').val('');
          $('#defeito').val('');
        }
      });
    }else{
      $('#nomeChamado').html("<span style='color: red;'>Chamado <small>Campo obrigatorio</small></span>")
      $('#chamado').focus();
    }
    });
});
