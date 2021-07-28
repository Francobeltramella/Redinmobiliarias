<?php    include("../conexion/conexion.php"); ?>
<nav  class="grey">


<?php      include("../notificaciones/index.php");   ?>



  <a href="" data-activates="menu" class="button-collpase" ><i class="material-icons">menu</i></a>
<ul>
<!--  <li> <li class="right" > <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn circle blue" style="width:60px"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span> <i class="material-icons " >notification_important</i></button>
            <div id="notification-latest"></div></li>-->
</li>
</ul>
</nav>
<ul id="menu" class="side-nav fixed" >
  <li  >
    <div class="userView" style="background: grey" >
      <div class="background">

      </div>
      <a href="../perfil/index.php" ><img src="../../usuarios/<?php  echo $_SESSION['foto']   ?>" class="circle" alt=""></a>
      <a href="../perfil/perfil.php" class="white-text" ><?php echo $_SESSION['nombre']   ?></a>

    </div>
  </li>
  <li><a href="../inicio"><i class="material-icons">home</i> INICIO</a></li>
  <li><div class="divider" ></div></li>
    <li><a href="../miperfil"><i class="material-icons">person</i> PERFIL </a></li>
  <li><div class="divider" ></div></li>

  <li><a href="../clientes?<?php echo (session_id()) ?>"><i class="material-icons">contact_phone</i> CLIENTES</a></li>
  <li><div class="divider" ></div></li>
      <li><a href="../inquilinos"><i class="material-icons">person_pin</i>INQUILINOS</a></li>
  <li><div class="divider" ></div></li>
  <li><a href="../propiedades/alta_propiedades.php"><i class="material-icons">home</i> AGREGAR PROPIEDAD</a></li>
  <li><div class="divider" ></div></li>
   <li><a class="dropdown-button" href="../propiedades/index.php" data-activates="dropdown1">PROPIEDADES<i class="material-icons ">work</i></a></li>
  <li><div class="divider" ></div></li>
  <li><a href="../base_datos/index.php"><i class="material-icons">people_outline
</i> BASE DE DATOS</a></li>
 <li><div class="divider" ></div></li>
 <li><a  href="../descuentos/index.php" ><i class="material-icons ">local_offer</i>DESCUENTOS</a></li>
 <li><div class="divider" ></div></li>
  <li><a  href="../inicio/tutoriales.php" ><i class="material-icons ">play_arrow</i>TUTORIALES</a></li>
  <li><div class="divider" ></div></li>
  <li><a  href="../consultas" ><i class="material-icons ">emoji_people</i>CONSULTAS O DUDAS</a></li>
  <li><div class="divider" ></div></li>
  <li><a href="../login/salir.php"><i class="material-icons">power_settings_new</i> SALIR</a></li>
  <li><div class="divider" ></div></li>




</ul>
<ul id="dropdown1" class="dropdown-content">
  <li> <a href="../propiedades/index.php">GENERAL</a> </li>
  <li><a href="../propiedades/index.php?ope=VENTA">VENTA</a></li>
  <li><a href="../propiedades/index.php?ope=RENTA">ALQUILER</a></li>

  <li><a href="../propiedades/cancelados.php">CANCELADOS</a></li>


</ul>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="../js/ie10-viewport-bug-workaround.js"></script>
