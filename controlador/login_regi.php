<?php 
session_start();
include("../modelo/conexion.php");
#include("../vista/index.php");
#include("../vista/registrar.php");



if(!empty($_POST['btningresar'])){
	if(!empty($_POST["user"]) and !empty($_POST["password"])){
		$us=$_POST["user"];
        $pass=$_POST["password"];
        $sql=$con->query("SELECT * FROM cliente WHERE UsuCli='$us' AND PasCli='$pass'");
        if($datos=$sql->fetch_object()){
            $_SESSION['cod']=$datos->CodCli;
        	$_SESSION['us']=$datos->UsuCli;
        	$_SESSION['pass']=$datos->PasCli;
            $_SESSION['nom']=$datos->NomCli;
            
            $nom= $_SESSION['nom'];
            
        	echo "<script> alert('Bievenid@:  $nom') ;window.location='../vista/principal.php'</script>";
        }else{
    	#header("Location:../vista/index.php");
    	    echo "<script> alert('Usuario no existe') ;window.location='../vista/index.php'</script>";
             }

         
     }else{
     	echo "<script> alert('Los campos estan vacios') ;window.location='../vista/index.php'</script>";
     }
}
$nombre=$_POST["nom"];
$dir=$_POST["dir"];
$ciudad=$_POST["ciu"];
$us=$_POST["user"];
$pass=$_POST["password"];

if(isset($_POST['btnregistrar'])){
	#$sqlgrabar = "INSERT INTO registros (Id,Pass) VALUES ('$us','$pass')";
	$sqlc="SELECT * FROM cliente WHERE UsuCli = '$us' AND PasCli= '$pass'";
	$res = $con->query($sqlc);
  if($us!='' and $pass!=''){	

	if($res->num_rows==0){
        
		$sqlgrabar = "INSERT INTO cliente (NomCli,DirCli,CiuCli,UsuCli,PasCli) VALUES ('$nombre','$dir','$ciudad','$us','$pass')";
		  if($con->query($sqlgrabar)===TRUE){
			      echo "<script> alert('Usuari@ registrado con exito: $nombre') ;window.location='../vista/index.php'</script>";
		        }

	}else{
		echo "<script> alert('El usuari@ ya existe') ;window.location='../vista/registrar.php'</script>";
	}
}else{
	echo "<script> alert('Los campos estan vacios') ;window.location='../vista/registrar.php'</script>";
}
}   


