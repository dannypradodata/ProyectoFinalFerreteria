<?php 
if(!empty($_POST["btnintro"])){
	if(!empty($_POST["nom"]) and !empty($_POST["des"])){
		$nom=$_POST["nom"];
		$des=$_POST["des"];
		$sql=$con->query("INSERT INTO categorias(NomCat,DesCat) VALUES ('$nom','$des')");
		if ($sql==1){
			echo "<div class='alert alert-success'> Categoria registrada correctamente</div>";
		}else{
			echo "<div class='alert alert-danger'> Error al registrar categoria</div>";
		}



	}else{
		echo "<div class='alert alert-warning'> Algun campo esta vacio</div>";
	}


}






 ?>