
<nav  class="black" >
  <a href="" data-activates="menu" class="button-collpase" ><i class="material-icons" >menu</i></a>
</nav>
<ul id="menu" class="side-nav fixed"  >
  <li  >
    <div class="userView" style="background: linear-gradient(rgb(85, 147, 241), rgb(228, 236, 241), rgb(243, 179, 96))" >
      <div class="background">

      </div>
      <a href="../perfil/index.php" ><img src="../usuarios/<?php  echo $_SESSION['foto']   ?>" class="circle" alt=""></a>
      <a href="../perfil/perfil.php" class="black-text" ><?php echo $_SESSION['nombre']   ?></a>
      <a href="" class="black-text"><?php echo $_SESSION ["correo"] ?></a>
    </div>
  </li>
  <li><a href="../inicio"><i class="material-icons">home</i> INICIO</a></li>
  <li><div class="divider" ></div></li>
  <li><a href="../usuarios"><i class="material-icons">contacts</i> USUARIOS</a></li>
  <li><div class="divider" ></div></li>
  <li><a href="../clientes"><i class="material-icons">contact_phone</i>INQUILINOS</a></li>
  <li><div class="divider" ></div></li>

  <li><a class="dropdown-button"  data-activates="dropdown1">PROPIEDADES<i class="material-icons ">work</i></a></li>
  <li><div class="divider" ></div></li>

  <li><a href="../login/salir.php"><i class="material-icons">power_settings_new</i> SALIR</a></li>
  <li><div class="divider" ></div></li>

</ul>
<ul id="dropdown1" class="dropdown-content">
  <li> <a href="../propiedades/index.php">GENERAL</a> </li>
  <li><a href="../propiedades/index.php?ope=VENTA">VENTA</a></li>
  <li><a href="../propiedades/index.php?ope=RENTA">ALQUILER</a></li>
  <li><a href="../propiedades/index.php?ope=TRASPASO">TRASPADO</a></li>
  <li><a href="../propiedades/index.php?ope=OCUPADO">OCUPADO</a></li>
  <li><a href="../propiedades/cancelados.php">CANCELADOS</a></li>


</ul>
