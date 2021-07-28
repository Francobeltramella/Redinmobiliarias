
<!DOCTYPE html>
<?php include 'admin/conexion/conexion.php'; ?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link  rel="icon"   href="admin/img/icono.png" type="image/png" />
  <title>Red Inmobiliarias</title>
  <meta name="description" content="Encontra tu lugar en el mundo">
  <meta name="keywords" content="Todas la inmobiliarias en un solo lugar">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="neon.css">
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e618c7e18e828001204ffc6&product=inline-share-buttons' async='async'></script>
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="admin/js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="admin/js/animate-in.js"></script>
</head>

<body  class="bg-light">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="admin/img/iconoprincipal.png" style="width: 30%"> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul  class="navbar-nav ">
          <li class="nav-item mx-2  ">
            <a class="nav-link text-warning " href="ventas.php"><b><b>VENTAS</b></b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-warning" href="alquileres.php"><b><b>ALQUILERES</b></b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-warning" href="inmobiliarias.php"><b><b>INMOBILIARIAS</b></b></a>
          </li>
        </ul>
        <?php if ((isset($_SESSION['nick'])) && ($_SESSION['nick'] != ""))
      {       ?>
        <a class="btn navbar-btn mx-2 btn-light text-dark" href="admin/index.php"  ><?php    echo $_SESSION['nick'];?></a><?php

      }
      else
      {?><a class="btn navbar-btn mx-2 btn-light" href="admin/index.php"  >INICIAR SESION</a><?php }?>
      </div>
    </div>
  </nav>
