<?php 

if(!empty($_POST["btnconfirmar"])){
	if(!empty($_POST["idp"]) and !empty($_POST["nomp"]) and !empty($_POST["unip"]) and !empty($_POST["prep"]) and !empty($_POST["marcp"]) and !empty($_POST["descp"]) and !empty($_POST["idc"]) and !empty($_POST["idcl"])){
		$idp=$_POST["idp"];
		$nomp=$_POST["nomp"];
		$unip=$_POST["unip"];
		$prep=$_POST["prep"];
		$marcp=$_POST["marcp"];
		$descp=$_POST["descp"];
		$idc=$_POST["idc"];
		$idcl=$_POST["idcl"];

	    $sql=$con->query("INSERT INTO confirmar(cprocon,nomcon,unicon,precon,marcon,descon,ccatcon,CodCli) VALUES ($idp,'$nomp','$unip',$prep,'$marcp','$descp',$idc,$idcl)");

		if($sql==1){
			  echo "<script> alert('Produto Registrado') ;window.location='../vista/catalogo.php'</script>";
		}else{
			  echo "<div class='alert alert-danger'>Error al registrar producto</div>";
		      }
		
	}else{
		echo "<div class='alert alert-warning'>Campos vacios</div>";
	}


}








 ?>