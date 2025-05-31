<?php 
if(!empty($_POST["btnregistrar"])){
	if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$fecha=$_POST["fecha"];
		$correo=$_POST["correo"];

		$sql=$con->query("INSERT INTO empleados(NomEmp,ApeEmp,FnaEmp,CorEmp) VALUES('$nombre','$apellido','$fecha','$correo')");
		if($sql==1){
			echo '<div class ="alert alert-success">Empleado registrado correctamente</div>';
		}else{
			echo '<div class ="alert alert-danger">Error al registrar empleado</div>';
		}

	}else{
		echo '<div class ="alert alert-warning">Alguno de los campos esta vacio</div>';
	}
}





 ?>