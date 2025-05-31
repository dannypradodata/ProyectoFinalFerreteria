<?php 

if(isset($_POST["btnregistrar"])){
	if(!empty($_POST["nombrep"]) and !empty($_POST["unip"]) and !empty($_POST["prep"]) and  !empty($_POST["marcp"])and  !empty($_POST["descp"]) and  !empty($_POST["cat"])){

		$nombre=$_POST["nombrep"];
		$unie=$_POST["unip"];
		$prec=$_POST["prep"];
		$marca=$_POST["marcp"];
		$descrip=$_POST["descp"];
		$cat=$_POST["cat"];

		$sql = $con->query("INSERT INTO productos(nompro,unipro,prepro,marcpro,despro,CodCat)values('$nombre','$unie',$prec,'$marca','$descrip',$cat)");
		if ($sql==1){
			echo '<div class ="alert alert-success">Producto registrado correctamente</div>';
		}else{
			echo '<div class ="alert alert-danger">Error al registrar producto</div>';
		}

		


	}else{
		echo '<div class ="alert alert-warning">Alguno de los campos esta vacio</div>';
	}

}




 ?>