<?php include '../extend/header.php';
$id=htmlentities($_GET['id']);

$sel=$con->prepare("SELECT * FROM datasinmo WHERE id= ?");
$sel->bind_param('i',$id);
$sel->execute();
$res=$sel->get_result();

if($f=$res->fetch_assoc()){}


 ?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">AGREGAR DATOS PERFIL / INMOBILIARIA</span>
        <form class="form" action="up_datos.php" method="post" autocomplete=off >
              <input type="hidden" name="id" value="<?php echo $id ?>">
          <h5>HORARIOS APERTURA / CIERRE</h5>
          <br>
          <div class="input-field">
              <p>Dias:</p>
            <input type="text" name="dias" value="<?php echo $f['dias'] ?>">
            
            </div>
          

         
          <br>
          <h5> Redes Sociales </h5>
          <div class="input-field">
                Sitio web: <input type="url" name="sitioweb" value="<?php echo $f['sitioweb'] ?>">
                Instagram: <input type="url" name="instagram" value="<?php echo $f['instagram'] ?>">
                Facebook: <input type="url" name="facebook" value="<?php echo $f['facebook'] ?>">

          </div>
          
          <button type="submit" class="btn" >Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
$sel->close();
$con->close();?>