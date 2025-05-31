<?php 

if(!empty($_POST["btnregistrar"])){
	if(!empty($_POST["nombrep"]) and !empty($_POST["unip"]) and !empty($_POST["prep"]) and !empty($_POST["marcp"]) and !empty($_POST["descp"])){
		$id=$_POST["id"];
		$nombre=$_POST["nombrep"];
		$unidad=$_POST["unip"];
		$precio=$_POST["prep"];
		$marcpro=$_POST["marcp"];
		$despro=$_POST["descp"];
		$sql=$con->query("UPDATE productos SET nompro='$nombre', unipro='$unidad', prepro=$precio, marcpro='$marcpro', despro='$despro' WHERE codpro= $id ");
		if($sql==1){
			header("Location:actualizar.php");
		}else{
			echo "<div class='alert alert-danger'>Error al modificar producto</div>";
		}
		
	}else{
		echo "<div class='alert alert-warning'>Campos vacios</div>";
	}
}








 ?>