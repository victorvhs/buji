$(document).ready(function (){
  $('#btSubmit').click(function (){
    if($('#chamado').val().length > 0){
      alert('Chamado preenchido');
    }else{
      $('#nomeChamado').html("<span style='color: red';>Chamado <small>Campo obrigatorio</small></span>")
      $('#chamado').focus();
    }
    });
});
