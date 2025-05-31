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
		<div class="container- fluid row">
			<?php 
			include("../modelo/conexion.php");
			include("../controlador/eliminar_categoria.php");

			 ?>
			<form class="col-4 p-3" method="POST">
				<h3 class="text-center text-secondary">Registro de categoria de productos</h3>
				<?php 
				include("../controlador/registro_categoria.php");


				 ?>
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nombre categoria</label>
                 <input type="text" class="form-control" name="nom">
               </div>
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Descripcion Categoria</label>
                 <input type="text" class="form-control" name="des">
               </div>
               <button type="submit" class="btn btn-primary" name="btnintro" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
            	<table class="table">
                  <thead class="bg-info">
                    <tr>
                      <th scope="col">Codigo de categoria</th>
                      <th scope="col">Nombre de categoria</th>
                      <th scope="col">Descripcion de categoria</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 
                  	 include("../modelo/conexion.php");
                  	 $sql=$con->query("SELECT * FROM categorias");
                  	 while ($datos=$sql->fetch_object()){?>
                  	 	     <tr>
                                <td><?= $datos->CodCat?></td>
                                <td><?= $datos->NomCat?></td>
                                <td><?= $datos->DesCat?></td>
                                <td>
                      	           <a href="categorias.php?id=<?= $datos->CodCat ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                             </tr>
                  	 	
                  	<?php    }

                  	 ?>
                    
                  </tbody>
                </table>
            	
            </div>
			



		</div>
		            

		</div>
    
		
			
		
	</div>

	<footer>
		<p style="font-size: 25px">Copyright &copy;2023 todos los derechos reservados</p>
		<a href="principal.php" style="color:blue"> click aqui para volver a la pagina principal</a>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>