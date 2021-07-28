<?php include '../extend/header.php' ?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Alta de Inquilinos</span>
        <form class="form" action="ins_inquilino.php" method="post" autocomplete=off >
          <div class="input-field">
            <input type="text" name="nombre"  title="Solo letras" pattern="[A-Z/s ]+"  id="nombre" onblur="may(this.value, this.id)"  >
            <label for="nombre">Nombre</label>
          </div>
          <div class="input-field">
            <input type="text" name="apellido"    id="apellido" onblur="may(this.value, this.id)"  >
            <label for="apellido">Apellido/s</label>
          </div>
          <div class="input-field ">
           <input type="text" name="dni"   id="dni"  >
           <label for="dni">DNI</label>
         </div>
          <div class="input-field">
            <input type="text" name="locacion"    id="locacion"   >
            <label for="direccion">Locacion</label>
          </div>
          <div class="input-field">
            <input type="number" name="telefono"   id="telefono"  >
            <label for="telefono">Telefono</label>
          </div>
          <div class="input-field">
            <input type="email" name="correo"   id="correo"   >
            <label for="email">Correo</label>
          </div>
          <p>Contrato desde :</p>
          <div class="input-field ">
            <input type="date" name="desde"    id="desde">
            <label for=""></label>
          </div>
          <p> Hasta :</p>
          <div class="input-field ">
          <input type="date" name="hasta"    id="hasta">
            <label for=""></label>
          </div>

          <button type="submit" class="btn" >Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col s12">
    <nav class="brown lighten-3" >
      <div class="nav-wrapper">
        <div class="input-field">
          <input type="search"   id="buscar" autocomplete="off"  >
          <label for="buscar"><i class="material-icons" >search</i></label>
          <i class="material-icons" >close</i>
        </div>
      </div>
    </nav>
  </div>
</div>

<?php
$id=$_SESSION['nick'];
   $sel=$con->prepare("SELECT * FROM inquilinos WHERE usuario_id='$id'");

$sel->execute();
$res=$sel->get_result();
$row=mysqli_num_rows($res);

 ?>

 <div class="row">
   <div class="col s12">
     <div class="card">
       <div class="card-content">
         <span class="card-title"> Inquilinos (<?php echo $row ?>)</span>
         <table>
           <thead>
             <tr class="cabecera">
               <th>Nombre</th>
               <th>Apellido</th>
               <th>DNI</th>
               <th>Locacion</th>
               <th>Telefono</th>
               <th>Correo</th>
               <th>Contrato desde</th>
               <th>Hasta</th>


             </tr>
           </thead>
           <?php while($f=$res->fetch_assoc()){ ?>
             <tr>
               <td><?php echo $f['nombre'] ?></td>
               <td><?php echo $f['apellido'] ?></td>
               <td><?php echo $f['dni'] ?></td>
               <td><?php echo $f['locacion'] ?></td>
               <td><?php echo $f['telefono'] ?></td>
               <td><?php echo $f['correo'] ?></td>
               <td><?php echo $f['desde'] ?></td>
               <td><?php echo $f['hasta'] ?></td>

               <td> <a href="editar_inquilino.php?id=<?php  echo $f['id']?>" class="btn-floating blue"><i class="material-icons">loop</i></a> </td>
               <td>
                 <a href="# " class="btn-floating red" onclick="
                 swal({
                   title:'Esta seguro que desea eliminar al cliente?',
                   text:'Al eliminarlo no podra recuperarlo!',
                   type:'warning',
                   showCancelButton:'true',
                   confirmButtonColor:'#3085d6',
                   cancelButtonColor:'#d33',
                   confirmButtonText:'Si , eliminar!'
                 }).then(function(){

                   location.href='eliminar_inquilino.php?id=<?php  echo $f['id'] ?>';

                 })"><i class="material-icons">clear</i></a>  </td>

               </td>
             </tr>
             <?php   }
             $sel->close();
             $con->close();
             ?>
         </table>
       </div>

     </div>

   </div>

 </div>

<?php include '../extend/scripts.php'; ?>

</body>
</html>
