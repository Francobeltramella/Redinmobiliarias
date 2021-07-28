<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel = $con->prepare("SELECT * FROM facturacion WHERE id=? ");
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
     <h5>Facturacion</h5>

     <td><h2><?php echo $f['inquilino'] ?></h2></td>
     <?php
     $total= $f['monto'] + $f['impuestos']+$f['expensas']+$f['punitarios']+$f['bonificacion'];?>
     <td><h4>Total: <?php echo "$". number_format($total,0,',','.'); ?></h4></td>
   </tr>
   <br>
   <tr>
     <h5><td>Fechas facturacion</td></h5>
     <td><?php echo $f['pago'] ?></td>
     <br>
     <h5><td>Vencimiento</td></h5>
     <td><?php echo $f['vencimiento'] ?></td>
     <br>
    
   </tr>
   <tr>
     <h5>Detalles factura</h5>
     <td>Monto alquiler: <?php echo "$". number_format($f['monto'],0,',','.');  ?></td>
     <br>
     <td>Impuestos: <?php echo"$". number_format($f['impuestos'],0,',','.'); ?></td>
     <br>
     <td>Expensas: <?php echo "$". number_format($f['expensas'],0,',','.'); ?></td>
     <br>
     <td>I.V.A: <?php echo "%". number_format($f['iva'],0,',','.'); ?></td>
     <br>
     <td>Punitarios:<?php echo "$". number_format($f['punitarios'],0,',','.');?></td>
     <br>
     <td>Bonificacion:<?php echo "$". number_format($f['bonificacion'],0,',','.'); ?></td>



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
   </tr>
 </body>
 </html>
