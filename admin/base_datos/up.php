<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

  foreach ($_POST as $campo => $valor){
    $variable="$" . $campo . "='" . htmlentities($valor). "';";
    eval($variable);
}



$up = $con->prepare("UPDATE basedatos SET  nombre=?,apellido=?,dni=?,fecha=?,estado=?,pareja=?,pago=?,contrato=?,inmueble=?,impuestos=?,disturbios=?,comentarios=?,categoria=?,nombreg1=?,apellidog1=?,dnig1=?,tipogarante1,nombreg2=?,apellidog2=?,dnig2=?,tipogarante2=?,nombreg3=?,apellidog3=?,dnig3=?,tipogarante3=?  WHERE id=? ");
$up->bind_param("ssissssssssssssisssisssisi",$nombre,$apellido,$dni,$fecha,$estado,$pareja,$pago,$contrato,$inmueble,$impuestos,
$disturbios,$comentarios,$categoria,$nombreg1,$apellidog1,$dnig1,$tipogarante1,$nombreg2,$apellidog2,$dnig2,$tipogarante2,$nombreg3,$apellidog3,$dnig3,$tipogarante3,$id);

if ($up->execute()) {
  header('location:../extend/alert.php?msj=Edito propiedad&c=prop&p=in&t=success');
}else{
  header('location:../extend/alert.php?msj=No edito la propiedad&c=prop&p=in&t=error');
}


  $con->close();
  }else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>
