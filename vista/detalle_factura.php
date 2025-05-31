<?php 
include("../modelo/conexion.php");



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
 	<h3 class="text-center p-3">Detalle de Factura</h3>
 	<div class="container-fluid row">
 		<form class="col-4 m-auto" method="POST">
 			<?php 
 			   include("../controlador/detalle_fac.php");
 			 ?>
 			  <!-- la etiqueta fieldset es para anular los campos con disabled-->
          <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?= $_GET["id"] ?>">
          </div>
 		  <div class="mb-3">
             <label for="disabledSelect" class="form-label">Codigo de producto</label>
             <select id="disabledSelect" class="form-select" name="idc">
             <?php 
             include("../modelo/conexion.php");
             $sql=$con->query("SELECT * from productos");
             while($datos=$sql->fetch_object()){?>
             	  <option value="<?= $datos->codpro ?>"><?= $datos->codpro ?></option>
             <?php }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cant">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="number" class="form-control" name="pre">
          </div>
          
          <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
          <a href="mostrar_factura.php">Regresar</a>
        </form>
 		


 	</div>
 



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
 </html>


