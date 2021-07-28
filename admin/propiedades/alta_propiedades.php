<?php include '../extend/header.php';
$id=$con->real_escape_string(htmlentities($_GET['id']));
$nombre=$con->real_escape_string(htmlentities($_GET['nombre']));
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Ingreso de propiedad</span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <h5 align="center"><b>DATOS GENERALES</b></h5>
        <form  action="ins_propiedades.php" method="post" autocomplete="off" >
          <!--AJAX AQUI -->
          <div class="row">
            <div class="col s6">
              <select id="estado" name="estado" style="text-transform: uppercase;" >
                <option value="">SELECCIONA UNA PROVINCIA</option>
                <?php $sel_estado=$con->prepare("SELECT * FROM estados");
                $sel_estado->execute();
                $res_estado=$sel_estado->get_result();
                while ($f_estado= $res_estado->fetch_assoc()) {?>

                <option value="<?php echo $f_estado['idestados'] ?>"><?php echo $f_estado['estado'] ?></option>
              <?php }
              $sel_estado->close();

              ?>



              </select>
            </div>
            <div class="col s6">
              <div class="res_estado"></div>

            </div>

          </div>
        <div class="row">
          <div class="col s6">
              <input type="hidden" name="id_cliente" value="<?php echo $id ?>">
              <input type="hidden" name="nombre_cliente" value="<?php echo $nombre ?>">
              <div class="container">

              <select name="moneda"  >
                <option value=""   >ELIGE EL TIPO DE MONEDA / CONSULTAR </option>
                <option value="U$S">U$S</option>
                <option value="$">$</option>
                <option value="CONSULTAR">CONSULTAR</option>
               </div>

            <div class="input-field">
              <input type="number" name="precio"  id="precio" step='0.01'   >
              <label for="precio">Precio</label>
            </div>
            <div class="input-field">
              <input type="text" name="fraccionamiento"  id="fraccionamiento"  onblur="may(this.value, this.id)" >
              <label for="fraccionamiento">Localidad</label>
            </div>

          </div> <!--Termina Primer columna -->
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="calle_num"   id="calle_num" onblur="may(this.value, this.id)"   >
              <label for="calle_num">Calle y numero</label>
            </div>
            <div class="input-field">
              <input type="text" name="numero_int"  id="numero_int"  >
              <label for="numero_int">Piso y departamento</label>
            </div>

          </div><!-- TerminaSegunda columna -->

        </div>


        <h5 align="center"><b>CARACTERISTICAS</b></h5>
        <div class="row">
          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2t"   id="m2t"  >
              <label for="m2t">Metros cuadrados de terreno</label>
            </div>
            <div class="input-field">
              <input type="number" name="banos"   id="banos"  >
              <label for="banos">Baños</label>
            </div>
            <div class="input-field">
              <input type="number" name="plantas"   id="plantas"  >
              <label for="plantas">Plantas</label>
            </div>
            <div class="input-field">
              <textarea name="caracteristicas" rows="8" cols="80" id="caracteristicas" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="caracteristicas">Otras caracteristicas</label>
            </div>

          </div><!--Termina Primer columna -->

          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2c"   id="m2c"  >
              <label for="m2c">Metros cuadrados de construccion</label>
            </div>
            <div class="input-field">
              <input type="number" name="recamaras"   id="recamaras"  >
              <label for="recamaras">Habitaciones</label>
            </div>
            <div class="input-field">
              <input type="number" name="cocheras"   id="cocheras"  >
              <label for="cocheras">Cocheras</label>
            </div>
            <div class="input-field">
              <textarea name="observaciones" rows="8" cols="80" id="observaciones" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="observaciones">Observaciones</label>
            </div>

          </div><!-- TerminaSegunda columna -->
          <div class="input-field col s12">
            <input type="text" name="servicios"  id="servicios"   >
            <label for="servicios">Servicios incluidos</label>
        </div>
        </div>


        <h5 align="center"><b>DATOS DE VENTA</b></h5>
        <div class="row">
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="forma_pago"  id="forma_pago" onblur="may(this.value, this.id)"  pattern="[A-Z\s ]+"  >
              <label for="forma_pago">Forma de pago</label>
            </div>


              <?php if($_SESSION['nivel']=='ADMINISTRADOR'): ?>
              <select class="" name="asesor">
                <option value="" >ESCOGE UN ASESOR</option>
                <?php $sel=$con->prepare("SELECT nombre FROM usuario WHERE bloqueo=1");
                $sel->execute();
                $res=$sel->get_result();
                if($f=$res->fetch_assoc()){?>
                  <option value="<?php echo $_SESSION['nombre']; ?>"><?php echo $_SESSION['nombre']; ?></option>
                <?php }
                $sel->close();
                $con->close(); ?>
              </select>
            <?php else: ?>
              <input type="text" readonly name="asesor" value="<?php echo $_SESSION['nombre'] ?>">
            <?php endif; ?>

            <select name="tipo_inmueble"  >
              <option value=""   >ELIGE EL TIPO DE INMUEBLE</option>
              <option value="CASA">CASA</option>
              <option value="TERRENO">TERRENO</option>
              <option value="LOCAL">LOCAL</option>
              <option value="DEPARTAMENTO">DEPARTAMENTO</option>
              <option value="CAMPO">CAMPO</option>
              <option value="QUINTA">QUINTA</option>
              <option value="CABAÑA">CABAÑA</option>
              <option value="QUINCHO">QUINCHO</option>
              <option value="LLAVE DE NEGOCIO">LLAVE DE NEGOCIO</option>
              <option value="DEPARTAMENTO AL POZO">DEPARTAMENTO AL POZO</option>
              <option value="FONDO DE COMERCIO" >FONDO DE COMERCIO</option>
              <option value="CAMPO" >CAMPO</option>
              <option value="CHACRA">CHACRA</option>
              <option value="COCHERA">COCHERA</option>
              <option value="GALPON">GALPON</option>
              <option value="OFICINA">OFICINA</option>
              <option value="CONSULTORIO">CONSULTORIO</option>
              <option value="POSADA">POSADA</option>
              <option value="HOTEL">HOTEL</option>
              <option value="DUPLEX">DUPLEX</option>
              <option value="DEPARTAMENTO INTERNO">DEPARTAMENTO INTERNO</option>
              <option value="OTROS">OTROS</option>



            </select>

          </div><!-- Termina Primera columna -->

          <div class="col s6">

            <div class="input-field">
              <!-- Se inicializa-->
              <input type="date" class="datepicker" name="fecha_registro" id="fecha_registro"  >
              <label for="fecha_registro">Fecha de registro</label>
            </div>

            <div class="input-field">
              <textarea name="comentario_web" rows="8" cols="80" id="comentario_web" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="comentario_web">Comentario para los clientes en la web</label>
            </div>

            <select name="operacion"   >
              <option value=""  >ELIGE LA OPERACION</option>
              <option value="VENTA">VENTA</option>
              <option value="ALQUILER">ALQUILER</option>
              <option value="ALQUILER TEMPORARIO">ALQUILER TEMPORARIO</option>
              <option value="ARRENDAMIENTO">ARRENDAMIENTO</option>


            </select>

          </div><!-- Termina Segunda columna -->
        </div>
        <center>
        <button type="submit" class="btn">Guardar</button>
        </center>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php';

?>
<script src="../js/estados.js">

</script>
</body>
</html>
