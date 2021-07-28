<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel = $con->prepare("SELECT * FROM inventario WHERE propiedad = ? ");
$sel->bind_param('s', $id);
$sel->execute();
$res = $sel->get_result();
if ($f =$res->fetch_assoc()) {
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../css/materialize.min.css">
   <title>modal</title>
 </head>
 <body>
<h5 align="right"><b><?php echo $f['moneda']. number_format($f['precio'], 0 ,',', '.'); ?></b></h5>
 <table class="striped" width="100%" >
   <tr>
     <td colspan="4" class="center" ><b>Datos generales</b></td>
   </tr>
   
   <tr>
     <td>Calle y numero</td>
     <td><?php echo $f['calle_num']?></td>
     <td>Localidad</td>
     <td><?php echo $f['fraccionamiento'] ?></td>
   </tr>
   <tr>
     <td>Piso y departamento</td>
     <td><?php echo $f['numero_int']?></td>
     <td>Provincia</td>
     <td><?php echo $f['estado'] ?></td>
   </tr>
   <tr>
     <td>Ciudad</td>
     <td><?php echo $f['municipio']?></td>
     <td colspan="2"></td>
   </tr>
   <tr>
     <td colspan="4" class="center" ><b>Caracteristicas</b></td>
   </tr>
   <tr>
     <td>M2 Terreno.</td>
     <td><?php echo $f['m2t']?></td>
     <td>M2 Construccion</td>
     <td><?php echo $f['m2c'] ?></td>
   </tr>
   <tr>
     <td>Baños</td>
     <td><?php echo $f['banos']?></td>
     <td>Plantas</td>
     <td><?php echo $f['plantas'] ?></td>
   </tr>
   <tr>
     <td>Habitaciones</td>
     <td><?php echo $f['recamaras']?></td>
     <td>Cocheras</td>
     <td><?php echo $f['cocheras'] ?></td>
   </tr>
   <tr>
     <td>Caracteristicas</td>
     <td><?php echo $f['caracteristicas']?></td>
     <td>Observaciones</td>
     <td><?php echo $f['observaciones'] ?></td>
   </tr>
   <tr>
   <td>Servicios incluidos</td>
   <td><?php echo $f['servicios'] ?></td>
   </tr>
   <tr>
     <td colspan="4" class="center" ><b>Datos de venta</b></td>
   </tr>
   <tr>
     <td>Forma de pago</td>
     <td><?php echo $f['forma_pago']?></td>
     <td>Asesor</td>
     <td><?php echo $f['asesor'] ?></td>
   </tr>
   <tr>
     <td>Tipo de inmueble</td>
     <td><?php echo $f['tipo_inmueble']?></td>
     <td>Fecha de registro</td>
     <td><?php echo date('d-m-Y', strtotime($f['fecha_registro'])) ?></td>
   </tr>
   <tr>
     <td>Comentario web</td>
     <td><?php echo $f['comentario_web']?></td>
     <td>Operacion</td>
     <td><?php echo $f['operacion'] ?></td>
   </tr>

 </table>
 </body>
 </html>
