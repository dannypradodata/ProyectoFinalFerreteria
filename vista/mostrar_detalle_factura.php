<?php 
 session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
 	header("Location:index.php");

 }  
$us=$_SESSION['us']; 

include("../modelo/conexion.php");
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
		<h3 class="text-center alert alert-secondary">Detalle de factura de <?= $_SESSION['nom'] ?></h3>
		<div class="col-8 p-4 m-auto">
			<table class="table">
              <thead class="bg-info">
                <tr>
                  <th scope="col">ID Detalle Factura</th>
                  <th scope="col">ID Factura</th>
                  <th scope="col">ID Producto</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">PrecioTotal</th>
                  <th scope="col">ID Cliente</th>
                  <th><a href="mostrar_factura.php" class="btn btn-small btn-danger" ><i class="fa-solid fa-right-from-bracket"></i></a></th>
                </tr>
              </thead>
              <tbody>
              	<?php 
              	include("../modelo/conexion.php");
              	$codf=$_GET['idf'];
              	$cod=$_SESSION['cod'];
              	if($cod==1){
	                  $where ='';
                }else {
	                  $where = "WHERE b.CodCli=$cod and a.codfac=$codf";
                      }
              	$sqlc=$con->query("SELECT a.coddfa,a.codfac,a.codpro,a.cantidad,a.precio,a.preciototal,b.CodCli               FROM detfactura a  
              	                   INNER JOIN factura b           		                                          
              		               ON a.codfac=b.CodFac
              		               $where");
              	while($datos=$sqlc->fetch_object()){?>
              		<tr>
                      <td><?= $datos->coddfa ?></td>
                      <td><?= $datos->codfac ?></td>
                      <td><?= $datos->codpro ?></td>
                      <td><?= $datos->cantidad ?></td>
                      <td><?= $datos->precio ?></td>
                      <td><?= $datos->preciototal ?></td>
                      <td><?= $datos->CodCli ?></td>                                   
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
