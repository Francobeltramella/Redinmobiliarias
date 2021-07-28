
<?php
include '../extend/header.php'
 ?>

<h3 align="CENTER" >MI PERFIL</h3>
<div class="col s4" align="CENTER" >
  <?php

  $nick=$_SESSION['nick'];
  $sel_ase = $con->prepare("SELECT correo, foto, telefono FROM usuario  WHERE nick='$nick' ");

  $sel_ase->execute();
  $res_ase = $sel_ase->get_result();
  if ($f_ase =$res_ase->fetch_assoc()) {

  }
   ?>

   <div class="col s12">

<div class="container">


<div class="col s6" align="center"  style="background-color:grey;  border-radius:5px; color: white; padding-bottom: 10px">

   <img src="../../usuarios/<?php echo $f_ase['foto'] ?>" width="300" height="290" style="padding-top:5px" class="circle" >
  <br><h5> <a href="../perfil/"  align="CENTER" style="color:orange" >EDITAR FOTO PERFIL </a></h5>
</div>
</div>
</div>

<br>
<div class="col s12">

<div class="container">


<div class="col s6" align="center"  style="background-color:grey;  border-radius:5px; color: white; padding-bottom: 10px">
 <h5 style="color:black" >INFORMACION PERSONAL</h5><br>
      <p><b>NOMBRE COMPLETO INMOBILIARIA: </b> <?php echo $_SESSION['nombre'] ?> </p>
      <p><b>CORREO: </b><?php echo $_SESSION['correo'] ?></p>
      <p><b>TELEFONO: </b> <?php echo $f_ase['telefono'] ?> </p>
       <br><h5> <a href="../perfil/perfil.php"  align="CENTER" style="color:orange" >EDITAR DATOS PERFIL </a></h5>
</div>
</div>
</div>


<?php
  $nick=$_SESSION['nick'];

    $sel_ase = $con->prepare("SELECT * FROM datasinmo  WHERE usuario_id='$nick' ");

    $sel_ase->execute();
    $res_ase = $sel_ase->get_result();
    if ($f_ase =$res_ase->fetch_assoc()) {

    }
     ?>

<div class="col s12">

<div class="container">
    <div class="col s6" align="center"  style="background-color:grey;  border-radius:5px; color: white; padding-bottom: 10px">
  <h4>Agregar datos de perfil</h4><br>

<?php if(isset($f_ase['dias'])){ ?>
<a href="editar_datos.php?id=<?php  echo $f_ase['id']?>" name="Editar datos" title="Editar datos" style=" width:50px; height:48px;  padding-top:5px" class="btn-floating blue"><i class="material-icons"  >loop</i></a>

<?php }else { ?>

<a href="agregardatos.php"  name="Agregar datos" class="btn-floating green " style=" width:50px; height:48px;  padding-top:5px "   > <i class="material-icons"   >add_circle_outline</i> </a>

<?php } ?>
<h4 style="color:black" >Datos Extras inmobiliaria</h4>

   <h5 style="color:black"  >Horario apertura / cierre:</h5>
   <p>Dias: <?php echo $f_ase['dias'] ?></p>

   <h5 style="color:black" >Sitios web</h5>
   <p>Sitio web: <?php echo $f_ase['sitioweb'] ?></p>
   <p>Instagram: <?php echo $f_ase['instagram'] ?></p>
   <p>Facebook: <?php echo $f_ase['facebook'] ?></p>

   <br>
   <form class="form" action="ins_nosotros.php" method="post" autocomplete=off >
          <label>¿Quienes somos?</label>
          <p>Hasta 900 caracteres</p>
          <textarea type="text"  name="descripcion" rows="10" cols="50"></textarea>
          <input type="hidden" name="id">
          <input type="hidden" name="usuario_id">
           <button type="submit" class="btn" >Guardar</button>
          </form>
          <br>

   <br>
   <?php
  $nick=$_SESSION['nick'];

    $sel = $con->prepare("SELECT * FROM nosotros  WHERE usuario_id='$nick' ");

    $sel->execute();
    $res = $sel->get_result();
    if ($f =$res->fetch_assoc()) {

    }
     ?>

   <h4 style="color:black" >¿Quienes somos?</h4>
   <p><?php echo $f['descripcion'] ?></p>
   <br>
<?php if( isset($f['descripcion'])) { ?>
   <a href="editar_datosn.php?id=<?php  echo $f['id']?>" name="Editar datos" style=" width:50px; height:48px; color:orange; padding-top:5px" >Editar</a>
   <?php } ?>

</div>



</div>
</div>


<?php
$id=$_SESSION['nick'];
$sel=$con->prepare("SELECT propiedad FROM inventario WHERE  nick_id='$id'");
$sel->bind_result($propiedad);
?>
<div class="row">
<div class="col-sm-4" >
<div class="card blue-grey darken-1">
<div class="card-content">
<span class="card-title white-text"> <b>PROPIEDADES</b>
</span>
<h2 align="center" class="white-text">
<?php
$propiedad='propiedad';
$sel->execute();
$res_venta=$sel->get_result();
echo mysqli_num_rows($res_venta);
?>
</h2>
</div>
<div class="card-action">
  <a href="../propiedades/">ver mas...</a>

</div>
</div>
</div>
<?php
$id=$_SESSION['nick'];
$sel=$con->prepare("SELECT id FROM clientes WHERE usuario_id='$id'");
$sel->bind_result($id);
?>
<div class="col-sm-4" >
<div class="card blue-grey darken-1">
<div class="card-content">
<span class="card-title white-text"> <b>CLIENTES</b>
</span>
<h2 align="center" class="white-text">
<?php
$id='id';
$sel->execute();
$res_venta=$sel->get_result();
echo mysqli_num_rows($res_venta);
?>
</h2>
</div>
<div class="card-action">
  <a href="../clientes/">ver mas...</a>

</div>
</div>
</div>

<?php
$id=$_SESSION['nick'];
$sel=$con->prepare("SELECT id FROM inquilinos WHERE usuario_id='$id'");
$sel->bind_result($id);
?>
<div class="col-sm-4" >
<div class="card blue-grey darken-1">
<div class="card-content">
<span class="card-title white-text"> <b>INQUILINOS</b>
</span>
<h2 align="center" class="white-text">
<?php
$id='id';
$sel->execute();
$res_venta=$sel->get_result();
echo mysqli_num_rows($res_venta);
?>
</h2>
</div>
<div class="card-action">
  <a href="../inquilinos/">ver mas...</a>

</div>
</div>

</div>
