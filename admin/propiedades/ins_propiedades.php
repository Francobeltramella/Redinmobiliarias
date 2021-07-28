<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $nick_id=$_SESSION['nick'];
  foreach ($_POST as $campo => $valor){
    $variable="$" . $campo . "='" . htmlentities($valor). "';";
    eval($variable);
}




$sel = $con->prepare("SELECT estado FROM estados WHERE idestados=?");
$sel->bind_param('i',$estado);
$sel->execute();
$res=$sel->get_result();
if($f=$res->fetch_assoc()){
  $nombre_estado=$f['estado'];
}


$id=sha1(rand(00000,99999));
$consecutivo='';
$foto_principal="casas/foto_principal.png";
$mapa=$calle_num." ,".$fraccionamiento. ", ". $nombre_estado. " ,". $municipio;
$marcado='';
$vendido='';
$alquilado='';
$estatus='ACTIVO';

$ins = $con->prepare("INSERT INTO inventario VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$ins->bind_param("siissssdsssiiisiiisssssssssssssss", $id,$consecutivo,$id_cliente,$nombre_estado,$municipio,
$nombre_cliente,$moneda,$precio,$fraccionamiento,$calle_num,$numero_int,$m2t,$banos,$plantas,$caracteristicas,$m2c,
$recamaras,$cocheras,$observaciones,$servicios,$forma_pago,$asesor,$tipo_inmueble,$fecha_registro,$comentario_web,$operacion,
$foto_principal,$mapa,$marcado,$estatus,$nick_id,$vendido,$alquilado);
if($ins->execute()){
    header('location:../extend/alert.php?msj=Guardo propiedad&c=prop&p=in&t=success');
}else{
    header('location:../extend/alert.php?msj=No guardo la propiedad&c=prop&p=in&t=error');
}






    $con->close();


  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=home&p=in&t=error');
  }


 ?>
