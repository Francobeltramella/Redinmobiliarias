<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

  foreach ($_POST as $campo => $valor){
    $variable="$" . $campo . "='" . htmlentities($valor). "';";
    eval($variable);
}
$usuario_id=$_SESSION['nick'];

$ins = $con->prepare("INSERT INTO basedatos VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$ins->bind_param("ississssssssssssisssisssisss", $id,$nombre,$apellido,$dni,$fecha,$estado,$pareja,$pago,$contrato,$inmueble,$impuestos,
$disturbios,$comentarios,$categoria,$nombreg1,$apellidog1,$dnig1,$tipogarante1,$nombreg2,$apellidog2,$dnig2,$tipogarante2,$nombreg3,$apellidog3,$dnig3,$tipogarante3,$iddato,$usuario_id);
if($ins->execute()){
    header('location:../extend/alert.php?msj=Guardo datos&c=bd&p=in&t=success');
}else{
    header('location:../extend/alert.php?msj=No guardo datos&c=bd&p=in&t=error');
}






    $con->close();


  }else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=home&p=in&t=error');
  }


 ?>
