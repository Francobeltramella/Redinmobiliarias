$('#correo').change(function(){
  $.post('ajax_validacion_correo.php',{
    correo:$('#correo').val(),

    beforeSend: function(){
      $('.validacionCorreo').html("Espere un momento por favor..")
    }
  },function(respuesta){
    $('.validacionCorreo').html(respuesta);

  }
);
});
