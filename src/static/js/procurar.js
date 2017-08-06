$(document).ready(function (){

  $('#valProcurar').change(function procurar() {
    if($('#valProcurar').val().length > 0){
      $.ajax({
        url: 'form2.php',
        method: 'post',
        data: {'procurar': $('#valProcurar').val()},
        success: function(data){
        $('#resultado').html(data);
        }
      });
    }
  });
});
