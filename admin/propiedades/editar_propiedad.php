<?php include '../extend/header.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel_prop = $con->prepare("SELECT * FROM inventario WHERE propiedad = ? ");
$sel_prop->bind_param('s', $id);
$sel_prop->execute();
$res_prop = $sel_prop->get_result();
if ($f_prop =$res_prop->fetch_assoc()) {

}
 ?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">EDITAR PROPIEDAD </span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <h5 align="center"><b>DATOS GENERALES</b></h5>
        <form  action="upprop.php" method="post" autocomplete="off" >
          <div class="row">
            <div class="col s6">
              <select id="estado" name="estado" >
                <?php
                $sel_edo=$con->prepare("SELECT idestados FROM estados WHERE estado =?");
                $sel_edo->bind_param('i',$f_prop['estado']);
                $sel_edo->execute();
                $res_edo=$sel_edo->get_result();
                if($f_edo=$res_edo->fetch_assoc()){

                }

                 ?>
                <option value="<?php echo $f_edo['idestados'] ?>" ><?php echo $f_prop['estado'] ?></option>
                <?php $sel_estado = $con->prepare("SELECT * FROM estados ");
                $sel_estado->execute();
                $res_estado = $sel_estado->get_result();
                while ($f_estado =$res_estado->fetch_assoc()) {?>
                <option value="<?php echo $f_estado['idestados'] ?>"><?php echo $f_estado['estado'] ?></option>
                <?php }
                $sel_estado->close();
                 ?>
              </select>
            </div>
            <div class="col s6">
                
              <div class="res_estado" value="<?php echo $f_prop['estado'] ?>"  ></div>
              
            </div>
          </div>
        <div class="row">
          <div class="col s6">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              
              <div class="container">

                           <select name="moneda"  >
                             <option value="<?php f_prop['moneda']?>"   > <?php f_prop['moneda']?></option>
                             <option value="U$S">U$S</option>
                             <option value="$">$</option>
                             <option value="CONSULTAR">CONSULTAR</option>
                             </select>
                            </div>



            <div class="input-field">
              <input type="number" name="precio"  id="precio" step='0.01'  value="<?php echo $f_prop['precio'] ?>" >
              <label for="precio">Precio</label>
            </div>


            <div class="input-field">
              <input type="text" name="fraccionamiento"  id="fraccionamiento"  onblur="may(this.value, this.id)" value="<?php echo $f_prop['fraccionamiento'] ?>" >
              <label for="fraccionamiento">Fraccionamiento</label>
            </div>

          </div> <!--Termina Primer columna -->
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="calle_num"   id="calle_num" onblur="may(this.value, this.id)"  value="<?php echo $f_prop['calle_num'] ?>" >
              <label for="calle_num">Calle y numero</label>
            </div>


            <div class="input-field">
              <input type="text" name="numero_int"  id="numero_int" value="<?php echo $f_prop['numero_int'] ?>" >
              <label for="num_int">Numero interior</label>
            </div>

          </div><!-- TerminaSegunda columna -->
        </div>


        <h5 align="center"><b>CARACTERISTICAS</b></h5>
        <div class="row">
          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2t"   id="m2t" value="<?php echo $f_prop['m2t'] ?>" >
              <label for="m2t">Metros cuadrados de terreno</label>
            </div>
            <div class="input-field">
              <input type="number" name="banos"   id="banos" value="<?php echo $f_prop['banos'] ?>" >
              <label for="banos">Baños</label>
            </div>
            <div class="input-field">
              <input type="number" name="plantas"   id="plantas" value="<?php echo $f_prop['plantas'] ?>"  >
              <label for="plantas">Plantas</label>
            </div>
            <div class="input-field">
              <textarea name="caracteristicas" rows="8" cols="80" id="caracteristicas" onblur="may(this.value, this.id)" class="materialize-textarea"><?php echo $f_prop['caracteristicas'] ?></textarea>
              <label for="caracteristicas">Otras caracteristicas</label>
            </div>

          </div><!--Termina Primer columna -->

          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2c"   id="m2c"  value="<?php echo $f_prop['m2c'] ?>">
              <label for="m2c">Metros cuadrados de construccion</label>
            </div>
            <div class="input-field">
              <input type="number" name="recamaras"   id="recamaras" value="<?php echo $f_prop['recamaras'] ?>" >
              <label for="recamaras">Recamaras</label>
            </div>
            <div class="input-field">
              <input type="number" name="cocheras"   id="cocheras" value="<?php echo $f_prop['cocheras'] ?>" >
              <label for="cocheras">Cocheras</label>
            </div>
            <div class="input-field">
              <textarea name="observaciones" rows="8" cols="80" id="observaciones" onblur="may(this.value, this.id)" class="materialize-textarea"><?php echo $f_prop['observaciones'] ?></textarea>
              <label for="observaciones">Observaciones</label>
            </div>

          </div><!-- TerminaSegunda columna -->
          <div class="input-field col s12">
            <input type="text" name="servicios"  id="servicios"   ><?php echo $f_prop['servicios'] ?>
            <label for="servicios">Servicios incluidos</label>
        </div>
        </div>


        <h5 align="center"><b>DATOS DE VENTA</b></h5>
        <div class="row">
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="forma_pago"  id="forma_pago" onblur="may(this.value, this.id)"  pattern="[A-Z\s ]+" value="<?php echo $f_prop['forma_pago'] ?>" >
              <label for="forma_pago">Forma de pago</label>
            </div>



              <?php if ($_SESSION['nivel']  == 'ADMINISTRADOR'): ?>
               
                <?php else: ?>
                  <input type="text" readonly name="asesor" value="<?php echo $f_prop['asesor'] ?>">
              <?php endif; ?>
              <select name="tipo_inmueble"  >
                            <option value="<?php echo $f_prop['tipo_inmueble']?>"   ><?php echo $f_prop['tipo_inmueble']?></option>
                            <option value="CASA">CASA</option>
                            <option value="TERRENO">TERRENO</option>
                            <option value="LOCAL">LOCAL</option>
                            <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                            <option value="CAMPO">CAMPO</option>
                            <option value="QUINTA">QUINTA</option>
                            <option value="LLAVE DE NEGOCIO">LLAVE DE NEGOCIO</option>
                            <option value="DEPARTAMENTOS AL POZO">DEPARTAMENTOS AL POZO</option>
                            <option value="FONDOS DE COMERCIO" >FONDO DE COMERCIO</option>
                            <option value="CAMPO" >CAMPO</option>
                            <option value="COCHERA">COCHERA</option>
                            <option value="GALPOS">GALPON</option>
                            <option value="OFICINA">OFICINA</option>



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
                            <option value="<?php echo $f_prop['operacion']?>"><?php echo $f_prop['operacion']?></option>
                            <option value="VENTA">VENTA</option>
                            <option value="ALQUILER">ALQUILER</option>
                            <option value="TRASPASO">TRASPASO</option>
                            <option value="ALQUILER TEMPORARIO">ALQUILER TEMPORARIO</option>
                            <option value="ARRENDAMIENTO">ARRENDAMIENTO</option>


                          </select>
                          </div>
                      
                          


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

<?php include '../extend/scripts.php'; ?>
<script src="../js/estados.js"></script>



