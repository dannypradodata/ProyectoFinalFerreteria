<?php 
session_start();
if(empty($_SESSION['us']) and empty($_SESSION['pass'])){
  header("Location:index.php");
  }


if(!empty($_POST["btnregistrar"])){
	if(!empty($_POST["id"]) and !empty($_POST["idc"]) and !empty($_POST["cant"]) and !empty($_POST["pre"])){
		$id=$_POST["id"];
		$idc=$_POST["idc"];
		$cant=$_POST["cant"];
		$pre=$_POST["pre"];
		$pret=$cant*$pre;
        $sql=$con->query("INSERT INTO detfactura(codfac,codpro,cantidad,precio,preciototal) VALUES ($id,$idc,$cant,$pre,$pret)");
		if($sql==1){
			  echo "<div class='alert alert-success'>Detalle de factura registrada correctamente</div>";
		}else{
              echo "<div class='alert alert-danger'>Error al registrar detalle de factura</div>"; 
         }      
      
	}else{
		echo "<div class='alert alert-warning'>Alguno de los campos esta vacio</div>";
	}

}


