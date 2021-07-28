<?php
include 'admin/conexion/conexion.php';
include 'header.php';



$id = htmlentities($_GET['id']);
$sel = $con->prepare("SELECT * FROM usuario WHERE id = ? ");
$sel->bind_param('s', $id);
$sel->execute();
$res = $sel->get_result();
if ($f =$res->fetch_assoc()) {
    $nick=$f['nick'];
$nombre=$f['nombre'];
$telefono=$f['telefono'];
$correo=$f['correo'];
$estado=$f['estado'];
$municipio=$f['municipio'];
$calle_num=$f['callenum'];
$nick=$f['nick'];
}
?>



<body>
 <!-- Navbar -->
 <!-- Cover -->
 <!--<div class="align-items-center d-flex cover bg-light py-0" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" >
     <div class="container">
       <div class="row">
         <div class="col-lg-7 align-self-center text-lg-left text-left w-100 h-75" >
           <img src="../usuarios/<?php echo $f['foto'] ?>" alt="" style="	width: 500px;	height: 400px; ">

         </div>
         <div class="col-lg-5 p-3  ">
           <form class="p-4 bg-info" method="post" action="https://formspree.io/"  >
             <h4 class="mb-4 text-center">CONTACTO</h4>
             <div class="form-group"> <label>Nombre</label>
               <input class="form-control" placeholder="Su nombre"> </div>
             <div class="form-group"> <label>Email</label>
               <input type="email" class="form-control" placeholder="Correo"> </div>
             <div class="form-group"> <label>Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> </div>
             <button type="submit" class="btn mt-4 btn-block p-2 btn-primary"><b>CONSULTAR</b></button>
           </form>
         </div>
       </div>
     </div>
   </div>
 -->
 <div class="section-fade-out pt-5 pb-5" style="	background-image: url(admin/img/5.jpg);	background-position: bottom;	background-size: 100%;	background-size:cover; ">
    <div class="container mt-5 pt-4 pb-5">
      <div class="row">
        <div class="col-md-4 my-5  text-lg-left text-center align-self-center">
          <h1 class="display-6 text-center "><?php echo $nombre ?></h1>
          <p  class="lead  text-center"><?php echo $telefono ?></p>
          <p style="font-size:15px" class="lead  text-center"><?php echo $correo ?></p>

          <p class="lead  text-center text-warning"><?php echo $municipio ?></p>

        </div>
        <div class="col-lg-8">
          <img class="img-fluid d-block mx-auto " src="../usuarios/<?php echo $f['foto'] ?>" width="600px"> </div>
      </div>
    </div>
  </div>
 <!-- Intro -->

 <div class="py-5" >
    <div class="container">
      <div class="row py-5">
        <div class="col-md-5 order-2 order-md-1 animate-in-left">
          <img class="img-fluid d-block my-3 mx-auto" src="../usuarios/<?php echo $f['foto'] ?>" width="400"> </div>
        <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
            <?php
  
 

    $sel = $con->prepare("SELECT * FROM nosotros  WHERE usuario_id='$nick' ");

    $sel->execute();
    $res = $sel->get_result();
    if ($f_i =$res->fetch_assoc()) {

    }
     ?>
            
          <h2>QUIENES SOMOS</h2>
          <p class="my-4 text-dark"><?php echo $f_i['descripcion']?></p>
        </div>
      </div>
    </div>
  </div>
 <!-- Gallery -->
 <!-- Menu -->
 <!-- Carousel reviews -->
 <!-- Carousel venue -->
 <!-- Events -->

 <div class="py-5" id="features">
   <div class="container">
     <div class="row">
       <div class="col-12 text-center">
        <h2 class="pb-4"><b><b>PROPIEDADES</b> </b> </h2

       <div class="col-12">
       <div class="row" style=" margin-right: 0px;">




 <?php
 $id=$f['nick'];
 $sel_marc=$con->prepare("SELECT foto_principal,precio,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id,moneda  FROM inventario WHERE marcado='SI' AND nick_id='$id'");

 $sel_marc->execute();
 $sel_marc->bind_result($foto_principal,$precio,$estado,$municipio,$fraccionamiento,$propiedad,$banos,$recamaras,$cocheras,$operacion,$moneda, $tipo_inmueble,$calle_num,$vendido,$alquilado,$nick_id,$moneda);
 $res=$sel_marc->get_result();
 while ($f=$res->fetch_assoc()){
?>

<?php
include 'targetas.php';
   ?>


 <?php }
   $sel_marc->close();

   ?>
 </div>

 </div>
</div>
</div></div></div>

<div class="py-5" >
   <div class="container">
<div class="row pt-5">
       <div class="align-self-center col-lg-7 text-md-left text-center">
         <h2 class="text-center" >Consultas </h2>
         <p class="my-4 text-muted">
           <div class="form-group"> <label>Nombre</label>
              <input class="form-control" name="nombre" id="nombre" placeholder=" Su nombre"> </div>
            <div class="form-group"> <label>Email</label>
              <input type="email" name="correo"  id="correo" class="form-control" placeholder="Correo"> </div>
               <div class="form-group"> <label>TEL</label>
              <input class="form-control" name="tel" id="tel" placeholder=" Su telefono / celular"> </div>
            <div class="form-group"> <label>Mensaje</label>
               <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea> </div>
                 <input type="hidden" name="correo1"  id="correo1" class="form-control" value="<?php echo $correo ?>">
              <button type="button" class="btn btn-info" id="enviar">Enviar</button>
           <div class="resultado">

           </div>

         </p>

       </div>
       <div class="align-self-center mt-5 col-lg-5 animate-in-right">
         <img class="img-fluid d-block" src="admin/img/consulta.jpeg"> </div>
     </div>
   </div>
 </div>

 <?php


     $sel_ase = $con->prepare("SELECT * FROM datasinmo  WHERE usuario_id='$nick' ");

     $sel_ase->execute();
     $res_ase = $sel_ase->get_result();
     if ($f_ase =$res_ase->fetch_assoc()) {

     }
      ?>


<div class="py-3 bg-dark" >
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Locacion</b> </h5>
          <ul class="list-unstyled">
            <li> <a href="https://www.google.it/maps?id=<?php echo $municipio ?>" target="blank" class="text-light"><?php echo $calle_num ?> <br><?php echo $municipio ?></a> </li>

          </ul>
        </div>
        <div class="col-lg-3 col-6 p-3 text-light">
          <h5> <b>Contacto</b> </h5>
          <ul class="list-unstyled">
            <li>   <a  href="<?php echo $telefono?>" class="text-light"><?php echo $telefono ?></a> </li>
            <li> <a  style="font-size:7px"  href="<?php echo $correo ?>" class="text-light"><?php echo $correo ?></a></li>

          </ul>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>Atencion al publico</b> </h5>
          <p class="mb-0"> <?php echo $f_ase['dias']?></p>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>Redes </b> </h5>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between my-2"> 
              <a href="<?php echo $f_ase['instagram']?>"><i class="d-block fa fa-instagram text-muted fa-lg mx-3 fa-2x "></i></a>
               <a href="<?php echo $f_ase['facebook']?>"><i class="d-block fa fa-facebook-official text-muted fa-lg mx-3 fa-2x"></i></a>
              <a href="<?php echo $f_ase['sitioweb']?>"><i class="d-block fa fa-desktop text-muted fa-lg mx-3 fa-2x"></i></a>
              </div>
          </div>
        </div>
      </div>


 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!-- Script: Smooth scrolling between anchors in the same page -->
 <script src="js/smooth-scroll.js"></script>
 <script>

$('#enviar').click(function(){
  $.post('emailinmo.php',{
    nombre:$('#nombre').val(),
    correo:$('#correo').val(),
    tel:$('#tel').val(),
    mensaje:$('#mensaje').val(),
    correo1:$('#correo1').val(),
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

</html>
