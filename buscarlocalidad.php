<div class="col-12">
<div class="row" style=" margin-right: 0px;">
<?php
include'admin/conexion/conexion.php';

include 'header.php';
$localidad=$_POST['municipio'];


  $sel_marc=$con->prepare("SELECT id, foto , correo, nombre ,telefono ,estado ,municipio FROM usuario WHERE municipio='$localidad'");
  $sel_marc->execute();
  $sel_marc->bind_result($id,$foto,$correo,$nombre,$telefono,$estado,$municipio);

while ($sel_marc->fetch()){?>

 <div class="col-md-3 mt-3 mb-3">

  <div class="card ">

 <a href="vermasinmo.php?id=<?php echo $id ?>"> <img class="card-img-top" src="usuarios/<?php echo $foto?>" style="width="100" height="200""></a>

</div>
</div>

<?php }

$sel_marc->close();
$con->close();
 ?>

</div>

</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="admin/js/materialize.min.js"></script>
  <script>
  $('select').material_select();


  </script>
</body>

<?php include 'footer.php'; ?>
