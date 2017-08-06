/*$(document).ready(function (){

  $('#peca').change(function procurar() {

      alert("oi");


  });
});
*/

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".compra2"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div>'+
                                '<fieldset>'+
                                '<legend> Peça </legend>'+
                                '<label for="peca">Peca</label>'+
                                '<input type="text" class="form-control" id="peca"  name="peca[]" >'+
                                '<label for="cod">cod</label> '+
                                '<input type="text" class="form-control" id="cod"  name="cod[]" >'+
                                '<a href="#" class="remove_field btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>'+
                                '</fieldset>'+
                              '</div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault();
        $(this).parent('fieldset').remove(); x--;
    })
    $('#enviar').click(function x(e) {
      $.ajax({
        url: 'peca.php',
        method: 'post',
        data: $("#form").serialize(),
        success: function(data){
        $('#resultado').html(data);
        }
      });

    })
});
