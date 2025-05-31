<?php 
include("../modelo/conexion.php");
session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
  header("Location:index.php");

 } 
 $us=$_SESSION['us']; 
 


 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
 	<form class="col-4 p-3 m-auto" method="POST">
		<h3 class="text-center text-secondary ">Confirmar producto elegido</h3>
        <?php 
        include("../controlador/confirmar_pedido.php");

         ?>
            <div class="mb-3">
                  <input type="hidden" class="form-control" name="idp" value="<?= $_GET["id"] ?>">
            </div>
            <div class="mb-3">
                  <input type="hidden" class="form-control" name="idc" value="<?= $_GET["idc"] ?>">
            </div>
            <div class="mb-3">
                  <input type="hidden" class="form-control" name="idcl" value="<?= $_SESSION['cod'] ?>">
            </div>

            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre Producto</label>
                  <input type="text" class="form-control" name="nomp" value="<?= $_GET["nom"] ?>">
            </div>

            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Unidad Producto</label>
                  <input type="text" class="form-control" name="unip" value="<?= $_GET["uni"] ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Precio Producto</label>
                  <input type="text" class="form-control" name="prep" value="<?= $_GET["pre"] ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Marca Producto</label>
                  <input type="text" class="form-control" name="marcp" value="<?= $_GET["marc"] ?>">
            </div> 
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Descripcion Producto</label>
                  <input type="text" class="form-control" name="descp" value="<?= $_GET["des"] ?>">
            </div>
            

        <?php  
        
         ?>
        
                
            <button type="submit" class="btn btn-primary" name="btnconfirmar" value="ok">Confirmar producto</button>
            <a href="catalogo.php">Regresar</a>
            <a href="../controlador/controlador_cerrar_sesion.php">Cerrar sesion</a>
 
 </body>
 </html>