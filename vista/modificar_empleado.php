<?php 

include("../modelo/conexion.php");
session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
  header("Location:index.php");

 } 
 $us=$_SESSION['us']; 


$id=$_GET["id"];
$sql=$con->query(" SELECT * FROM empleados WHERE CodEmp=$id ");



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
 	<form class="col-4 p-3 m-auto" method="POST">
		<h3 class="text-center text-secondary ">Modificar empleado</h3>
		<input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php 
        include("../controlador/modi_empleado.php");

        while ($datos=$sql->fetch_object()){?>
        	<div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Nombres del empleado</label>
             <input type="text" class="form-control" name="nombre" value="<?= $datos->NomEmp ?>">
            </div>
            <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Apellidos del empleado</label>
             <input type="text" class="form-control" name="apellido" value="<?= $datos->ApeEmp ?>">
            </div>
            <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
             <input type="date" class="form-control" name="fecha" value="<?= $datos->FnaEmp ?>">
            </div>
            <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Correo</label>
             <input type="text" class="form-control" name="correo" value="<?= $datos->CorEmp ?>">
            </div>
   
        	
        <?php }
        
         ?>
        
                
            <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Empleado</button>
    </form>
 
 </body>
 </html>