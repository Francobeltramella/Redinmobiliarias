<?php
include 'admin/conexion/conexion.php';
 ?>


 <?php $sel_img = $con->prepare("SELECT * FROM imagenes WHERE id_propiedad = ? ");
 $sel_img->bind_param('s', $id);
 $sel_img->execute();
 $res_img = $sel_img->get_result();
 while ($f_img =$res_img->fetch_assoc()) {?>
  <?php $images=$f_img['ruta'] ?>

  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <?php if(count($images)>0):?>
  <!-- aqui insertaremos el slider -->
  <div id="carousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicatodores -->
    <ol class="carousel-indicators">
  <?php $cnt=0; foreach($images as $img):?>
      <li data-target="#carousel1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
  <?php $cnt++; endforeach; ?>
    </ol>

    <!-- Contenedor de las imagenes -->
    <div class="carousel-inner" role="listbox">
  <?php $cnt=0; foreach($images as $img):?>
      <div class="item <?php if($cnt==0){ echo 'active'; }?>">
        <img src="<?php echo $f_img['ruta'] ?>" alt="Imagen 1">
        <div class="carousel-caption"><?php echo $img->title; ?></div>
      </div>
  <?php $cnt++; endforeach; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>

  </div>
  <?php else:?>
    <h4 class="alert alert-warning">No hay imagenes</h4>
  <?php endif; ?>

  <?php }
     ?>
  </div>
  </div>
  </div>
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>
