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
  <script>
    function eliminar(){
      var respuesta=confirm("Estas seguro que deseas eliminar?");
      return respuesta
    }

  </script>
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
    <?php 
    include("../modelo/conexion.php");
    include("../controlador/eliminar_producto.php");


     ?>
		<div class="container-fluid row">
			<form class="col-4 p-3" method="POST">
				<h3 class="text-center text-secondary ">Registro de productos</h3>
        <?php 
        
        include("../controlador/registro_producto.php");
         ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="nombrep">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Unidad</label>
            <input type="text" class="form-control" name="unip">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="number" class="form-control" name="prep">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marcp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Codigo de categoria</label>
            <input type="text" class="form-control" name="cat">
        </div>
                
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
              </form>
              <div class="col-8 p-4">
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include("../modelo/conexion.php");
                    $sql =$con->query("SELECT * from productos");
                    while($datos=$sql->fetch_object()){?>
                       <tr>
                        <td><?= $datos->codpro  ?></td>
                        <td><?=$datos->nompro?></td>
                        <td><?=$datos->unipro?></td>
                        <td><?=$datos->prepro?></td>
                        <td><?=$datos->marcpro?></td>
                        <td><?=$datos->despro?></td>
                        <td><?=$datos->CodCat?></td>
                        <td>
                          <a href="modificar_producto.php?id=<?= $datos->codpro ?>"class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a onclick="return eliminar()" href="actualizar.php?id=<?= $datos->codpro?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                       </tr>

                    <?php  }

                     ?>
                    
                    
                  </tbody>
                </table>
              	
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