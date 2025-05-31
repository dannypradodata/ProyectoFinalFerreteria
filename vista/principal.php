<?php 
 session_start();
 if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
 	header("Location:index.php");

 } 
 $us=$_SESSION['us']; 
 #$pass=$_SESSION['pass'];



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
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
		<section style="background-image: url(universal.gif);background-size: cover">
			<h2 style="color: blue">Construye Facil</h2>
			<p style="color:black"><b>Todo buen proyecto necesita todos los implementos para no dejar ningún detalle suelto. Puertas, productos de fijación, accesorios para muebles y más. Bienvenido a Ferretería Construye Facil.</b></p>
			<div class="container">
             <img src="muebles.jpg" width="800" height="400">
   
            </div>
			<!--<img class="poin"  src="puerta.jpg" height="318" style="border: 10px solid;color: purple;" >-->
			<article>
				<h2 style="color: blue">Mi nuevo emprendimiento</h2>
				<p style="color:black;"> <b>Aunque parece muy simple así explicado, para un establecimiento de ferretería que quiere funcionar correctamente resulta vital disponer de una organización y la especificación de las funciones que debe de efectuar cada empleado sea del puesto que sea. Para un punto de venta, todos los puestos son necesarios, desde el que recepciona, repone, etiqueta, rotula hasta el que vende, etc. Es una cadena de acciones todas imprescindibles, con un solo fin: vender y atender a nuestros clientes adecuadamente.</b></p>
			</article>

		</section>
		<aside>
			<h2>Actualidad</h2>
			<p>¡Otra nueva tienda se suma a nuestra gran familia!.<br>Ya hemos logrado conseguir nuestro objetivo más directo, y es el de convertirnos en una empresa de ferreteria dentro del sector industrial, y así poder ser la principal alternativa de nuevos inversores que deciden apostar.</p>
			<h2>Reflexiones</h2>
			<p>El trabajo es una faceta muy importante en nuestras vidas. Nuestro desarrollo profesional está íntimamente ligado a nuestro autoconcepto, y tener un buen clima en el lugar de trabajo nos hace vernos valorados y motivados.
            Sin embargo, todo trabajo está vinculado al esfuerzo y a la capacidad de superación. En un mundo donde los recursos son limitados, formarse en ámbitos productivos es casi la única forma de labrarse un futuro mejor.</p>
		</aside>
	</div>

	

	<footer>
		<p style="font-size: 25px">Copyright &copy;2023 todos los derechos reservados</p>
		<a href="principal.php" style="color:blue"> click aqui para volver a la pagina principal</a>
	</footer>

	

</body>
</html>
