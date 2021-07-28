<?php
include 'admin/conexion/conexion_web.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  foreach($_POST as $campo => $valor){
    $variable="$" . $campo. "='" . htmlentities($valor)."';";
    eval($variable);
  }

$header="Cliente web\r\n";
$header .="A Inmobiliaria \r\n";
$header .=  "De: {$nombre} < {$correo}> \r\n";

$header .="$tel";

$mail=mail($correo1,$asunto,$mensaje,$header);

if($mail){
  echo "<h3 style='color:green;'>Su mensaje ha sido enviado</h3>";
  }else{
  echo "<h3 style='color:red;'>Su mensaje no ha sido enviado</h3>";
  }

$con->close();
}else{
echo "<h3 style='color:red;'>Su mensaje no ha sido enviado</h3>";
}

?>