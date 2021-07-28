<?php include 'admin/conexion/conexion_web.php';
include 'header.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    
if  ( $_POST['municipio'] &&  $_POST['operaciones'] && $_POST['tinmueble'] ){
    $municipio=htmlentities($_POST['municipio']);
    $operacion=htmlentities($_POST['operaciones']);
    $tipo_inmueble=htmlentities($_POST['tinmueble']);
    $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND municipio='$municipio' AND operacion='$operacion' AND tipo_inmueble='$tipo_inmueble' ");
    $sel_marc->bind_param('sss',$municipio,$operacion,$tipo_inmueble);


} else  if ($_POST['operaciones'] &&  $_POST['municipio']){
    $municipio=htmlentities($_POST['municipio']);
    $operacion=htmlentities($_POST['operaciones']);
    $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND  municipio='$municipio' AND operacion='$operacion'");

  } else if($_POST['municipio']){
    $municipio=htmlentities($_POST['municipio']);
    $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND  municipio='$municipio'");
 
  } else if ($_POST['operaciones'] &&  $_POST['tinmueble']){
    $tipo_inmueble=htmlentities($_POST['tinmueble']);
    $operacion=htmlentities($_POST['operaciones']);
    $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND operacion='$operacion' AND tipo_inmueble='$tipo_inmueble'");




  }else if ($_POST['operaciones']){
    $operacion=htmlentities($_POST['operaciones']);
    $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND  operacion='$operacion'");

  }else if($_POST['tinmueble']){
      $tipo_inmueble=htmlentities($_POST['tinmueble']);
      $sel_marc=$con->prepare("SELECT foto_principal,precio,marcado,estado,municipio,fraccionamiento,propiedad,banos ,recamaras,cocheras,operacion,moneda ,tipo_inmueble,calle_num,vendido,alquilado,nick_id FROM inventario WHERE marcado='SI' AND  tipo_inmueble='$tipo_inmueble'");


  }
  $sel_marc->execute();
  $res_marc=$sel_marc->get_result();
}else{
header('location:index.php');
exit;
}?>

<div class="py-5" id="features">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="pb-4"><b><b><?php echo "$tipo_inmueble".'  '."$operacion".'  '."$municipio"  ?>   </b> </b> </h2>
        <div class="col-12">
        <div class="row" style=" margin-right: 0px;">
  <?php
  while ($f=$res_marc->fetch_assoc()) {
    ?>
    <?php include 'targetas.php'?>
  <?php }
  $sel_marc->close();
  $con->close();
  ?>
</div>
</div>
</div>
</div>
</div>
</div>



<?php include 'footer.php'; ?>
<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in the same page -->
<script src="admin/js/smooth-scroll.js"></script>