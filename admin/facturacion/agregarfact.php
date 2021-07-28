<?php include '../extend/header.php' ?>
<?php
$nick=$_SESSION['nick'];

    $sel_ase = $con->prepare("SELECT * FROM inquilinos WHERE usuario_id='$nick' ");

    $sel_ase->execute();
    $res_ase = $sel_ase->get_result();
    if ($f_ase =$res_ase->fetch_assoc()) {

    }
     ?>
    
<div class="row">

    <div class="card">
        <h4 align="center">Nueva facturacion</h4>


        
        <form class="form" action="ins_fact.php" method="post" autocomplete=off >
        
           <div class="col s12">
              <br>
              
                <div class="form-group" name="inquilino"><input type="text"  list="inquilino" name="inquilino" class=" col-sm-12 custom-select custom-select-sm"> <p>Seleccion inquilino</p></div>
             <datalist id="inquilino">
          
               <option  value="<?php echo  $f_ase['apellido']. "  ". $f_ase['dni'] ?> " ></option>
               

             </datalist>
             </div>
            
         
         <div class="col s6">
             
          <div class="input-field">
              <br>
              <p >Fecha de pago:</p>
            <input type="date" name="pago"    id="pago" >
         </div>
          </div>
          <div class="col s6">
          <div class="input-field ">
              <br>
              <p >Venciminto:</p>
           <input type="date" name="vencimiento"   id="vencimiento"  >
          
         </div>
         </div>
         </div>
          <div class="col s12">
              <div class="col s3">
          <div class="input-field">
              <p>Monto alquiler $</p>
            <input type="number" name="monto"   id="monto"  >
            
          </div>
          </div>
          <div class="col s3">
          <div class="input-field">
              <p>Impuestos municipales $</p>
            <input type="number" name="impuestos"   id="impuestos"   >
            
          </div>
          </div>
          <div class="col s3">
          <div class="input-field ">
           <p>Expensas $</p>
            <input type="number" name="expensas"   id="expensas"   >
          </div>
          </div>
           <div class="col s3">
          <div class="input-field ">
           <p>I.V.A  (%)</p> 
            <input min="0"   step="0.001"  type="number" name="iva"   id="iva"   >
          </div>
          </div>
          </div>
           <div class="col s12">
              <div class="col s6">
          <div class="input-field">
              <p>Punitarios $</p>
            <input type="number" name="punitarios"   id="punitarios"  >
            
          </div>
          </div>
          <div class="col s6">
          <div class="input-field">
              <p>Bonificacion $</p>
            <input type="number" name="bonificacion"   id="bonificacion"   >
            
          </div>
          </div>
         
          </div>

          <button type="submit" class="btn" >Guardar</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>