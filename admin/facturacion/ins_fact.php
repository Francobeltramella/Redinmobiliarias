<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

 
  foreach ($_POST as $campo => $valor){
    $variable="$" . $campo . "='" . htmlentities($valor). "';";
    eval($variable);
}

$usuario_id=$_SESSION['nick'];


  $ins=$con->prepare("INSERT INTO facturacion VALUES(?,?,?,?,?,?,?,?,?,?,?)");
  $ins->bind_param("isssiiidiis", $id,$inquilino, $pago, $vencimiento, $monto, $impuestos, $expensas,
$iva,$punitarios,$bonificacion,$usuario_id);

  if($ins->execute()){
    header('location:../extend/alert.php?msj=Factura registrada&c=fac&p=in&t=success');
  }else{
    header('location:../extend/alert.php?msj=La factura no pudo ser registrada&c=fac&p=in&t=error');
  }
  $ins->close();
  $con->close();



}else{
  header('location:../extend/alert.php?msj=Utilia el formulario&c=pro&p=in&t=error');
}

 ?>
