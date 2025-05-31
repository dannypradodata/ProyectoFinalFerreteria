<?php 

if(!empty($_GET["id"])){
	$id=$_GET["id"];
	$sql=$con->query("DELETE FROM productos WHERE codpro=$id ");
	/*if ($sql==1){
		echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
	}else{
		echo '<div class="alert alert-danger">Error al eliminar</div>';
	}*/

}








 ?>