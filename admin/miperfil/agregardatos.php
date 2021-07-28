<?php include '../extend/header.php' ?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">AGREGAR DATOS PERFIL / INMOBILIARIA</span>
        <form class="form" action="ins_datos.php" method="post" autocomplete=off >
            
           
          
          
          <h5>HORARIOS APERTURA / CIERRE</h5>
          <br>
             
           <div class="input-field">
              <p>Dias:</p>
            <input type="text" name="dias" value="">
            
            </div>
         
          
          <br>
          <h5> Redes Sociales </h5>
          <div class="input-field">
                Sitio web: <input type="url" name="sitioweb" placeholder="¿Tienes un sitio web?">
                Instagram: <input type="url" name="instagram" placeholder="">
                Facebook: <input type="url" name="facebook" placeholder="">

          </div>
          
        

          <button type="submit" class="btn" >Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
