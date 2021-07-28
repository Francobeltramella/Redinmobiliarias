<?php
include '../conexion/conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  foreach($_POST as $campo => $valor){
    $variable="$" . $campo. "='" . htmlentities($valor)."';";
    eval($variable);
  }

$header="Red inmobiliarias \r\n";
$header .="Respuesta de Inmobiliaria \r\n";
$header .=  "De : {$nick}< {$correo}> \r\n";

$mail=mail($correo,$asunto,$mensaje,$header);

if($mail){

    header('location:../extend/alert.php?msj=Mensaje Enviado&c=home&p=home&t=success');
}else {
  header('location:../extend/alert.php?msj=Mensaje  no enviado&c=home&p=home&t=error');
}

$con->close();
}else{
  header('location:../extend/alert.php?msj=Utiliza el formulario&c=home&p=home&t=error');
}

?>
