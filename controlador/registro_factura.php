<?php 
session_start();
if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
  header("Location:index.php");
  }


if(!empty($_POST["btnregistrar"])){
	if(!empty($_POST["cboemp"]) and !empty($_POST["id"]) and !empty($_POST["fecha"])){
		$cboemp=$_POST["cboemp"];
		$id=$_POST["id"];
		$fecha=$_POST["fecha"];
        $sql=$con->query("INSERT INTO factura(CodCli,CodEmp,FecFac) VALUES ($id,$cboemp,'$fecha')");
		    if($sql==1){
			    echo "<div class='alert alert-success'>Factura registrada correctamente</div>";
		    }else{
                echo "<div class='alert alert-danger'>Error al registrar factura</div>"; 
                }      
      
	}else{
		echo "<div class='alert alert-warning'>Alguno de los campos esta vacio</div>";
	}

}


 ?>