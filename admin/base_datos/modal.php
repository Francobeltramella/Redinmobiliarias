<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel = $con->prepare("SELECT * FROM basedatos WHERE id=? ");
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

   <tr>
     <td colspan="4" class="center" ></td>
   </tr>
   <tr>
     <br>
     <h5>Categoria</h5>

     <td><h2><?php echo $f['categoria'] ?></h2></td>
   </tr>
   <br>
   <tr>
     <h5><td>FECHA DE DOCUMENTO</td></h5>
     <td><?php echo $f['fecha'] ?></td>
     <h5><td>Nombre</td></h5>
     <td><?php echo $f['nombre'] ?></td>
     <br>
     <h5><td>Apellido</td></h5>
     <td><?php echo $f['apellido'] ?></td>
     <br>
     <h5><td>DNI</td></h5>
     <td><?php echo $f['dni'] ?></td>
     <br>
     <h5><td>ESTADO CIVIL</td></h5>
     <td><?php echo $f['estado']?></td>
     <td><?php echo $f['pareja']?></td>
   </tr>
   <tr>
     <h5>Datos alquiler</h5>
     <td>Pago a termino: <?php echo $f['pago'] ?></td>
     <br>
     <td>Contrato a termino: <?php echo $f['contrato'] ?></td>
     <br>
     <td>Condicion del inmueble: <?php echo $f['inmueble'] ?></td>
     <br>
     <td>Impuestos del inmueble: <?php echo $f['impuestos'] ?></td>
     <br>
     <td>Disturbios:<?php echo $f['disturbios'] ?></td>



   </tr>
   <tr>
     <h5>Datos Agregados:</h5>
     <td><?php echo $f['comentarios'] ?></td>
   </tr>
   <tr>
     <h5>Garantia 1</h5>
     <td>Nombre</td>
     <td><?php echo $f['nombreg1'] ?></td>
     <br>
     <td>Apellido</td>
     <td><?php echo $f['apellidog1'] ?></td>
     <br>
     <td>DNI</td>
     <td><?php echo $f['dnig1'] ?></td>
     <td><?php echo $f['tipogarante1'] ?></td>
   </tr>
   <tr>
     <h5>Garantia 2</h5>
     <td>Nombre</td>
     <td><?php echo $f['nombreg2'] ?></td>
     <br>
     <td>Apellido</td>
     <td><?php echo $f['apellidog2'] ?></td>
     <br>
     <td>DNI</td>
     <td><?php echo $f['dnig2'] ?></td>
      <td><?php echo $f['tipogarante2'] ?></td>
   </tr>
   <tr>
     <h5>Garantia 3</h5>
     <td>Nombre</td>
     <td><?php echo $f['nombreg3'] ?></td>
     <br>
     <td>Apellido</td>
     <td><?php echo $f['apellidog3'] ?></td>
     <br>
     <td>DNI</td>
     <td><?php echo $f['dnig3'] ?></td>
      <td><?php echo $f['tipogarante3'] ?></td>
   </tr>
   
 </body>
 </html>
