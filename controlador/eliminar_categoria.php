<?php 

if(!empty($_GET["id"])){
	$id=$_GET["id"];
	$sql=$con->query("DELETE FROM categorias WHERE CodCat=$id");

}







 ?>