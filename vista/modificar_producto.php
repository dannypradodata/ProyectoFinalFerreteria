<?php 
include("../modelo/conexion.php");
session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
  header("Location:index.php");

 } 
$us=$_SESSION['us']; 
$id=$_GET["id"];
$_SESSION["idp"]=$id;
$sql=$con->query("SELECT * FROM productos WHERE codpro=$id ");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
 	<form class="col-4 p-3 m-auto" method="POST">
		<h3 class="text-center text-secondary ">Modificar productos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php 
        include("../controlador/modi_producto.php");
        while ($datos=$sql->fetch_object()) {?>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                  <input type="text" class="form-control" name="nombrep" value="<?= $datos->nompro ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Unidad</label>
                  <input type="text" class="form-control" name="unip" value="<?= $datos->unipro ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Precio</label>
                  <input type="number" class="form-control" name="prep" value="<?= $datos->prepro ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Marca</label>
                  <input type="text" class="form-control" name="marcp" value="<?= $datos->marcpro ?>">
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                  <input type="text" class="form-control" name="descp" value="<?= $datos->despro ?>">
            </div>


        <?php  }
        
         ?>
        
                
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar producto</button>
            <a href="actualizar.php">Regresar</a>
            <a href="../controlador/controlador_cerrar_sesion.php">Cerrar sesion</a>
 
 </body>
 </html>