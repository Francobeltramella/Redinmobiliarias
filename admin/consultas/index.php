<?php include '../extend/header.php';

$id=$_SESSION['nick'];

  $sel=$con->prepare("SELECT * FROM usuario WHERE nick='$id'");


$sel->execute();
$res=$sel->get_result();
  if($f=$res->fetch_assoc()){} ?>
<br>
<h4 align="center">ENVIA TU PROBLEMA, DUDA O CONSULTA A NUESTROS ASESORES <br> Contestaremos a la brevedad </h4>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Enviar Consulta a RED INMOBILIARIAS</span>
        <form  action="../inicio/email1.php" method="post">
          <div class="input-field">
            <input type="text" name="asunto"  title="asunto"  id="asunto" onblur="may(this.value, this.id)"  >
            <label for="asunto">Asunto:</label>
          </div>
          <div class="input-field">
            <textarea name="mensaje" rows="8" cols="80" id="mensaje" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
            <label for="mensaje">Mensaje:</label>
            <input type="hidden" name="correo" value="<?php echo $f['correo'] ?>">
            <input type="hidden" name="nick" value="<?php echo $f['nick'] ?>">
          </div>
          <button type="submit" class="btn">Enviar correo</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>

</body>
</html>
