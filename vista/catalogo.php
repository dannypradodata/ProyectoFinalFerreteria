<?php 
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
		<h3 class="text-center alert alert-secondary">Lista de catalogo</h3>
		<div class="col-8 p-4 m-auto">
			<table class="table">
              <thead class="bg-info">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre del producto</th>
                  <th scope="col">Unidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Codigo categoria</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              	<?php 
              	include("../modelo/conexion.php");
              	$sqlc=$con->query("SELECT * FROM productos");
              	while($datos=$sqlc->fetch_object()){?>
              		<tr>
                      <td><?= $datos->codpro ?></td>
                      <td><?= $datos->nompro ?></td>
                      <td><?= $datos->unipro ?></td>
                      <td><?= $datos->prepro ?></td>
                      <td><?= $datos->marcpro ?></td>
                      <td><?= $datos->despro ?></td>
                      <td><?= $datos->CodCat ?></td>              
                        <td>
                  	      <a href="confirmar_producto.php?id=<?= $datos->codpro?>&nom=<?= $datos->nompro?>&uni=<?= $datos->unipro?>&pre=<?= $datos->prepro?>&marc=<?= $datos->marcpro?>&des=<?= $datos->despro?>&idc=<?= $datos->CodCat?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-cart-shopping"></i></a>
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