
<?php include 'admin/conexion/conexion.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <div class="bg-info py-2">
    <div class="container">
      <div class="row">
        <div class="mx-auto text-center col-lg-6"></div>
      </div>
      <div class="row">
        <div class="p-0 order-2 order-md-1 col-lg-6"> <iframe src="https://www.google.com/maps/d/embed?mid=1xkRcCyiDZyW3UoZcJ80ZYjtOtOvm6mEw"  width="100%" height="450"
 frameborder="0" style="border:0;"
 allowfullscreen="" ></iframe> </div>
        <div class="px-4 order-1 order-md-2 col-lg-6">
          <h2 class="mb-4">CONTACTO</h2>

            <div class="form-group"> <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Nombre"> </div>
            <div class="form-group"> <input type="email" name="correo"  id="correo" class="form-control"  placeholder="Email"> </div>
            <div class="form-group"> <input type="text" name="asunto" id="asunto" class="form-control"  placeholder="Asunto"> </div>
            <div class="form-group"> <textarea class="form-control"  rows="3" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea> </div>
            <button type="button" class="btn" id="enviar">Enviar</button>
            <div class="resultado">

            </div>

        </div>
      </div>
    </div>
  </div>

<script>

$('#enviar').click(function(){
  $.post('email.php',{
    nombre:$('#nombre').val(),
    asunto:$('#correo').val(),
    correo:$('#asunto').val(),
    mensaje:$('#mensaje').val(),
    id_propiedad:$('#id_propiedad').val(),
    beforeSend: function(){
      $('.resultado').html("Espere un momento por favor..")

    }
  },function(respuesta){
    $('.resultado').html(respuesta);

  }
);
});

</script>
