$(document).ready(function (){
  $('#btSubmit').click(function (){
    if($('#chamado').val().length > 0){
      $.ajax({
        url: 'form.php',
        method: 'post',
        data: $('#formNovo').serialize(),
        success: function(data){
          alert(data);
        }
      });
    }else{
      $('#nomeChamado').html("<span style='color: red;'>Chamado <small>Campo obrigatorio</small></span>")
      $('#chamado').focus();
    }
    });
});
