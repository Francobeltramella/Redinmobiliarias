<?php
include '../conexion/conexion.php';
$estado=htmlentities($_POST['estado']);
 ?>
 <input  type="text"  list="municipios" id="municipio" name="municipio" required>
    <option  value="" disable selected >ESCRIBA UNA CIUDAD</option>
    <?php $sel_muni=$con->prepare("SELECT * FROM municipios WHERE idestado =? ORDER BY municipio");
    $sel_muni->bind_param('i', $estado);
    $sel_muni->execute();
    $res_muni=$sel_muni->get_result();
    while ($f_muni= $res_muni->fetch_assoc()) {?>
<datalist id="municipios">
  <option  value="<?php echo $f_muni['municipio'] ?>"><?php echo $f_muni['municipio'] ?></option>
  <?php }

  $sel_muni->close();
  ?>
</datalist>

 </select>
<script>
$('select').material_select();

</script>
