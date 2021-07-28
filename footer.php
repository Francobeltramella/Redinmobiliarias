<!-- Footer -->
<div class="py-3 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <p class="lead">  ¿Estas interesado en formar parte?<br>Dejanos tu email y nos contactaremos a la brevedad </p>
        <form class="form-inline">
          <div class="form-group">
            <input type="email" name="correo2"  id="correo2" class="form-control"  placeholder="Email">  </div>
            <button type="button" class="btn btn-info" id="enviar2">Enviar</button>
              <div class="resultado1">

              </div>
        </form>
      </div>
      <div class="col-4 col-md-1 align-self-center my-3">
        <a href="https://www.facebook.com/Red-Inmobiliarias-105807384350210/" target="blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
      </div>

      <div class="col-4 col-md-1 align-self-center my-3">
        <a href="https://www.instagram.com/redinmobiliarias2020/" target="blank"><i class="fa fa-fw fa-instagram fa-3x text-white"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-12 my-3 text-center">
        <p class="text-muted">© Copyright 2020 Red Inmobiliarias- All rights reserved.</p>
        <?php include 'contador.php' ?>
       
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

           <script>
           $('#enviar2').click(function(){
             $.post('email.php',{
              correo2:$('#correo2').val(),

               id_propiedad:$('#id_propiedad').val(),
               beforeSend: function(){
                 $('.resultado1').html("Espere un momento por favor..")

               }
             },function(respuesta){
               $('.resultado1').html(respuesta);

             }
           );
           });

           </script>
