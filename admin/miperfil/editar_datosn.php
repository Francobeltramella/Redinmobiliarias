<?php include '../extend/header.php';
$id=htmlentities($_GET['id']);

$sel=$con->prepare("SELECT * FROM nosotros WHERE id= ?");
$sel->bind_param('i',$id);
$sel->execute();
$res=$sel->get_result();

if($f=$res->fetch_assoc()){}


 ?>
 <form class="form" action="up_nosotros.php" method="post" autocomplete=off >

          <label>¿Quienes somos?</label>
          
          <textarea type="text"  name="descripcion"   rows="10" cols="50"></textarea>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
  
           <button type="submit" class="btn" >Guardar</button>
          </form>