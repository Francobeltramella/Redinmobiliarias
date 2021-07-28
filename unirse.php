
<?php
include 'header.php';
include 'admin/conexion/conexion.php';

 ?>
 <!DOCTYPE html>
 
<html>

<head>
    <title>Unase | Red inmobiliarias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 
  <div class="py-5 bg-light" style="	background-attachment: fixed;	background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto text-light col-md-12">
          <h1>NUESTROS PLANES</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 p-3">
          <div class="card text-center" style="	background-image: linear-gradient(to bottom, rgb(80, 180, 200), rgb(250, 200, 120));">
            <div class="card-header p-3">
              <h3>MENSUAL</h3>
              <h2> <b>$1500 / Mes</b></h2>
            </div>
            <div class="card-body p-3"> <i class="d-block fa fa-stop-circle mb-2 text-muted fa-3x"></i>
              <p>PAGO MENSUAL&nbsp;</p>
              <ul class="list-unstyled my-3">
                <li class="mb-1 text-secondary">PRIMER MES GRATIS</li>
                <li class="mb-1">SISTEMA ADMINISTRATIVO</li>
                <li class="mb-1">PROPIEDADES ILIMITADA<br></li>
                 <li class="mb-1">PUBLICIDAD EN NUESTRAS REDES<br></li>
                <li class="mb-1">DESCUENTOS EN LOCALES<br></li>
                <br>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3">
          <div class="card text-center" style="	background-image: linear-gradient(to bottom, rgb(80, 180, 200), rgb(250, 200, 120));">
            <div class="card-header p-3">
              <h3>6 MESES</h3>
              <h2> <b>$6600 / Total</b></h2>
            </div>
            <div class="card-body p-3"> <i class="d-block fa fa-circle-o mb-2 text-muted fa-3x"></i>
              <p>6 MESES DE PAGO<br>10%&nbsp; DESCUENTO</p>
              <ul class="list-unstyled my-3">
                <li class="mb-1 text-secondary">PRIMER MES GRATIS</li>
                <li class="mb-1">SISTEMA ADMINISTRATIVO</li>
                <li class="mb-1">PROPIEDADES ILIMITADAS</li>
                 <li class="mb-1">PUBLICIDAD EN NUESTRAS REDES<br></li>
                <li class="mb-1">DESCUENTOS EN LOCALES</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3">
          <div class="card text-center" style="	background-image: linear-gradient(to bottom, rgb(80, 180, 200), rgb(250, 200, 120));">
            <div class="card-header p-3">
              <h3>1 AÑO</h3>
              <h2> <b>$12900/ Total</b></h2>
            </div>
            <div class="card-body p-3"> <i class="d-block fa fa-stop-circle-o mb-2 text-muted fa-3x"></i>
              <p>1 AÑO PAGO<br>20%&nbsp; DESCUENTO</p>
              <ul class="list-unstyled my-3">
                <li class="mb-1 text-secondary">PRIMER MES GRATIS</li>
                <li class="mb-1">SISTEMA ADMINISTRATIVO</li>
                <li class="mb-1">PROPIEDADES ILIMITADAS</li>
                 <li class="mb-1">PUBLICIDAD EN NUESTRAS REDES<br></li>
                <li class="mb-1">DESCUENTOS EN LOCALES&nbsp;<br></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  
  <div class="bg-info py-5" style="" >
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-4" style="">
          <h1>SUSCRIBITE!</h1>
          <p>SI TE INTERESA ALGUNO DE LOS PLANES.<br>RELLENA EL SIGUIENTE FORMULARIO PARA OBTENER MAS INFORMACION SOBRE EL SERVICIO.<br>SERAS CONTACTADO A LA BREVEDAD.</p>
        </div>
        <div class="col-md-5"><img class="img-fluid d-block w-75 float-right" src="../admin/img/icono.png"></div>
      </div>
      <div class="row">
        <div class="col-md-5 p-4">
          <h3>RED INMOBILIARIAS</h3>
          <p class="lead mt-3"> <b>CONTACTO</b></p>
          <p> <a href="#">+ 54 9 2284699092 </a></p>
          <p> <a href="#">Redinmobiliarias2020@hotmail.com</a></p>
          <p class="lead mt-3" style="">NUESTRAS REDES</p>
          <p> <a href="https://www.instagram.com/redinmobiliarias2020/">Instagram</a></p>
          <p> <a href="https://www.facebook.com/Red-Inmobiliarias-105807384350210/">Facebook</a></p>
        </div>
        <div class="col-md-7 p-4">
          <h3 class="mb-3">CONSULTA POR LOS PLANES</h3>

            <div class="form-row">
              <div class="form-group col-md-6"> <input type="text" class="form-control" id="nombre" placeholder="Nombre Apellido"> </div>
              <div class="form-group col-md-6"> <input type="text" class="form-control" id="correo" placeholder="Email"> </div>
            </div>
            <div class="form-group"> <input type="text" class="form-control" id="inmobiliaria" placeholder="Inmobiliaria"> </div>


            <div class="form-row">
              <div class="form-group col-md-6"> <input type="number" class="form-control" id="celular" placeholder="Celular (optional)"> </div>
              <div class="form-group col-md-6"> <input type="text" class="form-control" id="localidad" placeholder="Localidad"> </div>
            </div>
            <div class="form-group">
             <label for="exampleFormControlSelect1">POR DONDE QUIERE SER CONTACTADO</label>
              <select id="contacto" class="form-control" id="exampleFormControlSelect1">
     
                <option value="WHATSAPPL">WHATSAPP</option>
              <option value="EMAIL">EMAIL</option>


            </select>
            <div class="form-group">
             <label for="exampleFormControlSelect1">SELECCIONE PLAN DE INTERES</label>
              <select id="planes"  class="form-control" id="exampleFormControlSelect1">
                <option value="MENSUAL">PLAN MENSUAL: $1500 / MES</option>
              <option value="6MESES">PLAN 6 MESES: $6600 / TOTAL</option>
              <option value="ANIO">PLAN 1 AÑO: $13800 / TOTAL</option>

            </select>
          </div>
          <div class="form-group"> <input type="text" name="asunto" id="asunto" class="form-control"  placeholder="Asunto"> </div>

            <div class="form-group"> <textarea id="mensaje" class="form-control" id="form43" rows="3" placeholder="Mensaje"></textarea> </div>  <button type="button" class="btn btn-info" id="enviar">Enviar</button>
              <div class="resultado">

              </div>


        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
  <script>


$('#enviar').click(function(){
  $.post('email.php',{
      nombre:$('#nombre').val(),
      correo:$('#correo').val(),
      inmobiliaria:$('#inmobiliaria').val(),
      mensaje:$('#mensaje').val(),
      celular:$('#celular').val(),
      localidad:$('#localidad').val(),
       contacto:$('#contacto').val(),
      planes:$('#planes').val(),
     
      asunto:$('#asunto').val(),
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


  <?php
include 'footer.php';
   ?>
