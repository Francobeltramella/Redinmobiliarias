<?php
include 'admin/conexion/conexion.php';
 ?>


   <div class="col-md-3 mb-3 mt-3" >
           <div class="card"> 
           <?php if(isset($f['foto_principal'])){ ?>
           <img class="card-img-top" style="" src="admin/propiedades/<?php echo $f['foto_principal'] ?>" alt="Card image " style="position:relative;  background-size=auto; " >
           <?php }else{  ?>
            <img class="card-img-top" style="" src="admin/propiedades/casas/foto_principal.jpg" alt="Card image " style="position:relative;  background-size=auto; " >
           <?php } ?>
             <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h2 class="text-light" style="  position: center;
            color:white;font-family: Arial, Helvetica, sans-serif;font-weight: 800;top: 33%;-webkit-text-stroke: 4px black;left: 5%;transform: translate(-50%, -50%);font-size:50px;-webkit-transform: rotate(-40deg); " ><?php echo $f['vendido'] ?></h2>
    <h2 class="text-light" style=" position: center;color:white;font-family: Arial, Helvetica, sans-serif;font-weight: 800;top: 33%;
    -webkit-text-stroke: 4px black;left: 5%;transform: translate(-50%, -50%);font-size:40px;-webkit-transform: rotate(-40deg); " ><?php echo $f['alquilado'] ?></h2>
            </div>
          </div>

             <div class="card-body shadow p-1   rounded  " style=" text-overflow: ellipsis;white-space: nowrap; overflow: hidden;background-color:#d4d4d4 " >


               <div class="row">
                 <div class="col-8">
                 <h5>    <strong><?php echo $f['operacion'] ?></strong> <br> <?php echo $f['moneda']." ".number_format($f['precio'],0,',','.');  ?></h5>
                 </div>
                 <div class="col-4 " >
                   <img src="usuarios/<?php echo $f_ase['foto'] ?>" alt="" style=" width:60px; height:60px; border-radius: 50px;  "   >
                 </div>
               </div><p class="card-text" > <strong> <p><?php echo $f['tipo_inmueble'] ?></strong><br>
                <i class="fa fa-bath fa-1x fa-red"  ></i>  <?php echo $f['banos'] ?>  <i class="fa fa-bed fa-1x" ></i>   <?php echo $f['recamaras'] ?>  <i class="fa fa-car fa-1x" ></i>  <?php echo $f['cocheras'] ?></p>
                <br>   <i class="fa fa-map-marker fa-0x" style="font-size:20px; color:red;width: 10%;"></i><?php echo $f['calle_num'].' , '.$f['municipio'].' , '.$f['estado']; ?>
            <br><br><a href="vermasprop.php?id=<?php echo $f['propiedad'] ?>" class="btn btn-light top-right btn-sm w-100">VER MAS</a>
             </div>

       </div>

