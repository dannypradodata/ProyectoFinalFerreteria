<?php 

if(!empty($_POST["btnmodificar"])){
	if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
		$id=$_POST["id"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$fecha=$_POST["fecha"];
		$correo=$_POST["correo"];
		$sql=$con->query("UPDATE empleados SET NomEmp='$nombre',ApeEmp='$apellido',FnaEmp='$fecha',CorEmp='$correo' WHERE CodEmp=$id ");
		if ($sql==1) {
			header("Location: empleados.php");

			
		}else{
			echo "<div class='alert alert-danger'>Error al modificar empleado</div>";

		}

	}else{
		echo "<div class='alert alert-warning'>Campos vacios</div>";
	}
}




 ?>