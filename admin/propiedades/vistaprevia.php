<?php include '../extend/header.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel_prop = $con->prepare("SELECT * FROM inventario WHERE propiedad = ? ");
$sel_prop->bind_param('s', $id);
$sel_prop->execute();
$res_prop = $sel_prop->get_result();
if ($f =$res_prop->fetch_assoc()) {

}
 ?>


<h5 align="center" > VISTA PREVIA PROPIEDAD / PUBLICO </h5>
  <br>
  <div class="row" style="margin-left:350px" >


 <div class="col-sm-6 ">
 <div class="card" style="background-color:#D3D3D3">

     <div class="card-image">

       <img src="<?php echo $f['foto_principal'] ?>">
           <h5 style=" position: absolute;
         color:white;font-family: Arial, Helvetica, sans-serif;font-weight: 800;
 top: 33%;
  -webkit-text-stroke: 4px black;
 left: 0%;
 transform: translate(-50%, -50%);
 font-size:50px;
 -webkit-transform: rotate(-40deg); "><?php echo $f['vendido'] ?></h5>
   <h5 style=" position: absolute;
        color:red;font-family: Arial, Helvetica, sans-serif;
 top: 34%;
  -webkit-text-stroke: 2px black;
 left: -5%;
 transform: translate(-50%, -50%);
 font-size:45px;
 -webkit-transform: rotate(-40deg); "><?php echo $f['alquilado'] ?></h5>

</div>
       <span class=" card-title "  > <strong><?php echo $f['operacion'] ?></strong> <br> <?php echo $f['moneda']." ".number_format($f['precio'],0,',','.');  ?></span>



     <div class="card-content">
     <strong> <p><?php echo $f['tipo_inmueble'] ?></p></strong>
     <i class="fas fa-shower fa-1x"  ></i> (<?php echo $f['banos'] ?>)  <i class="fas fa-bed fa-1x"></i>(<?php echo $f['recamaras'] ?>)  <i class="fas fa-car-side fa-1x"></i>(<?php echo $f['cocheras'] ?>)
     </div>

     <div class="card-content" style=" text-overflow: ellipsis;
white-space: nowrap;
overflow: hidden;">
       <i class="material-icons" style="font-size:20px; color:red;width: 10%;
">room</i>
       <?php echo $f['calle_num'].' , '.$f['municipio'].' , '.$f['estado']; ?>
     </div>

     <div class="card-action">
       <a href="editar_propiedad.php?id=<?php echo $f['propiedad'] ?>">Editar datos...</a>
       <a href="imagenes.php?id=<?php echo $f['propiedad'] ?>">Cambiar fotos...</a>
     </div>
   </div>
</div>


</div>

<?php include '../extend/scripts.php'; ?>
<script src="../js/estados.js"></script>
