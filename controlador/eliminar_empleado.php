<?php 

if(!empty($_GET["id"])){
	$id=$_GET["id"];
	$sql=$con->query("DELETE FROM empleados WHERE CodEmp=$id ");
}






 ?>