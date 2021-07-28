<?php
include 'admin/conexion/conexion.php';
include 'header.php';
$id = htmlentities($_GET['id']);
$sel = $con->prepare("SELECT * FROM inventario WHERE propiedad = ?  ");
$sel->bind_param('s', $id);
$sel->execute();
$res = $sel->get_result();
if ($f =$res->fetch_assoc()) {

 ?>
 <?php
  $asesor=$f['asesor'];
  $nick=$f['nick_id'];
 $sel_ase = $con->prepare("SELECT correo, foto,id FROM usuario  WHERE nick='$nick' ");

 $sel_ase->execute();
 $res_ase = $sel_ase->get_result();
 if ($f_ase =$res_ase->fetch_assoc()) {

 }
  ?>
  <body >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <div class="py-5   text-center bg-dark" >
    <br><br><br>
    <div class="container shadow p-1   rounded" style="background-color:grey">
      <div class="card-header text-left">
        <h2  ><?php echo $f['tipo_inmueble'] ?> EN <?php echo $f['operacion'] ?><br>  PRECIO <?php echo $f['moneda']." ".number_format($f['precio'],0,',','.'); ?></h2>
      </div>
      <div class="row">
        <div class="col-lg-6 mx-auto"> <img style="position:relative" class="img-fluid d-block mt-1 ml-1 mb-1" src="../admin/propiedades/<?php echo $f['foto_principal'] ?>" >
        <div class="card-img-overlay d-flex justify-content-center align-items-center">
        <h2 class="text-light" style=" position: center;color:white;font-family: Arial, Helvetica, sans-serif;font-weight: 800;top: 33%;-webkit-text-stroke: 4px black;left: 5%;transform: translate(-50%, -50%);font-size:78px;-webkit-transform: rotate(-40deg); " ><?php echo $f['vendido'] ?></h2>
        <h2 class="text-light" style=" position: center  ;color:white;font-family: Arial, Helvetica, sans-serif;font-weight: 800;top: 33%;-webkit-text-stroke: 4px black;left: 5%;transform: translate(-50%, -50%);font-size:60px;-webkit-transform: rotate(-40deg); " ><?php echo $f['alquilado'] ?></h2>
      </div>
    </div>
    <div class="px-md-5 p-2 d-flex flex-column justify-content-center col-lg-6 order-1 order-lg-3" style="">
      <i class="" style="" > <img src="usuarios/<?php echo $f_ase['foto'] ?>" alt="" style=" width:100px; height:100px; border-radius: 50px;  "   ></i>
      <h1><?php echo $f['tipo_inmueble'] ?></h1>
          <p><b>UBICACION:</b> <?php echo $f['calle_num'].' , '.$f['municipio'].' , '.$f['estado'] ?></p></p>
          <p><b>DESCRIPCION:</b> <?php echo $f['comentario_web'] ?></p>
          <p><b>RECAMARAS:</b> <?php echo $f['recamaras'] ?></p>
          <p><b>BAÑOS:</b> <?php echo $f['banos'] ?></p>
          <p><b>COCHERAS:</b> <?php echo $f['cocheras'] ?></p>
          <p><b>PLANTAS:</b> <?php echo $f['plantas'] ?></p>
          <a href="vermasinmo.php?id=<?php echo $f_ase['id'] ?>"><p>IR A INMOBILIARIA</p> </a>
        </div>
      </div>
    </div>
  </div>



<?php }
   ?>


<div class="container">
  <div class="row" style=" margin-right: 0px; ">
  </div>

   <?php $sel_img = $con->prepare("SELECT * FROM imagenes WHERE id_propiedad = ? ");
   $sel_img->bind_param('s', $id);
   $sel_img->execute();
   $res_img = $sel_img->get_result();
   while ($f_img =$res_img->fetch_assoc()) {?>
     <a href="../admin/propiedades/<?php echo $f_img['ruta'] ?>" data-toggle="lightbox" data-max-width="100%">
       <img src="../admin/propiedades/<?php echo $f_img['ruta'] ?>" class="img-fluid mb-3 ml-1">
                 </a>



   <?php }
      ?>
    </div>
</div>

<div class="py-5" >
  <div class="container">
    <div class="row pt-5">
       <div class="align-self-center col-lg-7 text-md-left text-center">
         <h2 class="text-center" >Consulta Propiedad </h2>
         <p class="my-4 text-muted">
           <div class="form-group"> <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Nombre"> </div>
           <div class="form-group"> <input type="text" class="form-control" id="telefono"  name="telefono" placeholder="telefono"> </div>
           <div class="form-group"> <input type="email" class="form-control" id="correo" name="correo"  placeholder="Email"> </div>

           <div class="form-group"> <textarea class="form-control" id="mensaje" rows="3" name="mensaje" placeholder="Mensaje"></textarea> </div>
              <input type="hidden" name="id_propiedad" id="id_propiedad" value="<?php echo $id ?>">
                <input type="hidden" name="nick" id="nick" value="<?php echo $nick ?>">
           <button type="button  " class="btn btn-primary shadowed" id="enviar1">Enviar</button>
           <div class="resultado">

           </div>
         </p>

       </div>
       <div class="align-self-center mt-5 col-lg-5 animate-in-right">
         <img class="img-fluid d-block" src="admin/img/consultapro.jpeg"> </div>
     </div>
   </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!-- Script: Smooth scrolling between anchors in the same page -->
 <script src="js/smooth-scroll.js"></script>

  <script>
    $('#enviar1').click(function(){
      $.post('inscomentario.php',{
        nombre:$('#nombre').val(),
        telefono:$('#telefono').val(),
        correo:$('#correo').val(),

        mensaje:$('#mensaje').val(),
         nick:$('#nick').val(),
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
</body>
<?php include 'footer.php'; ?>
