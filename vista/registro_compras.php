<?php 
 session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
 	header("Location:index.php");

 }  
include("../modelo/conexion.php");
$us=$_SESSION['us'];
$cod=$_SESSION['cod'];
if($cod==1){
	$where ='';
}else {
	$where = "WHERE CodCli=$cod";
}



$sqlc=$con->query("SELECT * FROM confirmar $where");

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
		<img src="ferre.jpg">
		<nav>
			<ul>
				<li><a href="principal.php">Pagina Principal</a></li>
				<?php if($_SESSION['nom']=='Administrador'){  ?>
				<li><a href="categorias.php">Categorias</a></li>
				<?php }
			    ?>
				<li><a href="catalogo.php">Catalogo</a></li>

                <?php if($_SESSION['nom']=='Administrador'){  ?>
				<li><a href="empleados.php">Empleados</a></li>
				<?php }
			    ?>
				<li><a href="registro_compras.php">Registros</a></li>
                <?php 
                 if($_SESSION['nom']=='Administrador'){?>
				<li><a href="actualizar.php">Actualizar</a></li>
			    <?php }
			    ?>
				<li><a href="../controlador/controlador_cerrar_sesion.php">Salir</a></li>
			</ul>
		
	    </nav>
	</header>

	<div class="row">
		<h3 class="text-center alert alert-secondary">Control de compras de <?= $_SESSION['nom']?></h3>
		<div class="col-8 p-4 m-auto">
			<table class="table">
              <thead class="bg-info">
                <tr>
                  <th scope="col">ID Registro</th>
                  <th scope="col">ID Producto</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Unidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">ID Categoria</th>
                  <th scope="col">ID Cliente</th>
                  <th scope="col"><a href="mostrar_factura.php" class="btn btn-small btn-warning" ><i class="fa-solid fa-eye"></i></a></th>
                  
                  <th scope="col"></th>
                  <th scope="col"></th>
                  

                </tr>
              </thead>
              <tbody>
              	<?php 
              	while($datos=$sqlc->fetch_object()){?>
              		<tr>
                      <td><?= $datos->codcon?></td>
                      <td><?= $datos->cprocon?></td>
                      <td><?= $datos->nomcon ?></td>
                      <td><?= $datos->unicon ?></td>
                      <td><?= $datos->precon ?></td>
                      <td><?= $datos->marcon ?></td>
                      <td><?= $datos->descon ?></td>
                      <td><?= $datos->ccatcon ?></td>
                      <td><?= $datos->CodCli ?></td>

                      <!--            
                      <td>
                  	      <a href="mostrar_factura.php" class="btn btn-small btn-warning" ><i class="fa-solid fa-eye"></i></a>
                      </td>                                  
                      <td>
                  	      <a href="" class="btn btn-small btn-warning" ><i class="fa-regular fa-eye"></i></a>
                      </td>
                      -->
                      <?php if($_SESSION['nom']=='Administrador'){ ?>
                          <td>
                  	          <a href="factura.php?id=<?= $datos->CodCli ?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-file-pen"></i></a>
                          </td> 
                        <?php } ?>               
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