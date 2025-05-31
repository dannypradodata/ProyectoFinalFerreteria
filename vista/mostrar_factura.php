<?php 
 session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
 	header("Location:index.php");

 }  
$us=$_SESSION['us']; 
include("../modelo/conexion.php");
$us=$_SESSION['us'];
$cod=$_SESSION['cod'];
if($cod==1){
	$where ='';
}else {
	$where = "WHERE CodCli=$cod";
}



$sqlc=$con->query("SELECT * FROM factura $where");


 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles2.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/3bbf337729.js" crossorigin="anonymous"></script>
</head>
<body>
  
	<header>
	</header>

	<div class="row">
		<h3 class="text-center alert alert-secondary">Registro de Factura de <?= $_SESSION['nom']?></h3>
		<div class="col-8 p-4 m-auto">
			<table class="table">
              <thead class="bg-info">
                <tr>
                  <th scope="col">ID Factura</th>
                  <th scope="col">ID Cliente</th>
                  <th scope="col">ID Empleado</th>
                  <th scope="col">Fecha de factura</th>
                  <!--
                  <th scope="col"><a href="mostrar_detalle_factura.php" class="btn btn-small btn-warning" ><i class="fa-regular fa-eye"></i></a></th>
                  -->
                  <th><a href="registro_compras.php" class="btn btn-small btn-danger" ><i class="fa-solid fa-right-from-bracket"></i></a></th>
                </tr>
              </thead>
              <tbody>
              	<?php 
              	while($datos=$sqlc->fetch_object()){?>
              		<tr>
                      <td><?= $datos->CodFac?></td>
                      <td><?= $datos->CodCli?></td>
                      <td><?= $datos->CodEmp ?></td>
                      <td><?= $datos->FecFac ?></td> 
                      <td><a href="mostrar_detalle_factura.php?idf=<?= $datos->CodFac ?>" class="btn btn-small btn-warning" ><i class="fa-regular fa-eye"></i></a></td>
                      <td>
                      	 <?php 
                       if($_SESSION['nom']=='Administrador'){?>
                      
                          <a href="detalle_factura.php?id=<?= $datos->CodFac ?>" class="btn btn-small btn-success" ><i class="fa-solid fa-file-pen"></i></a>
                       
                       <?php } ?>  
                      </td>                    
                     </tr>
              	<?php }


              	 ?>
                
                
              </tbody>
            </table>            

		</div>
    
		
			
		
	</div>

	<footer>
		<p style="font-size: 25px">Copyright &copy;2023 todos los derechos reservados</p>
		<a href="principal.php" style="color:blue"> click aqui para volver a la pagina principal</a>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>