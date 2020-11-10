<?php 
session_start();

$conexion=mysqli_connect("localhost","root","","encuestas");

	if($conexion)
{
	
	$cad="SELECT * FROM usuario where Email='".$_POST['x']."' and Password='".$_POST['y']."'";

	$bloque=mysqli_query($conexion,$cad);

	mysqli_close($conexion);
	if (mysqli_num_rows($bloque)==1) 
	{
		$registro=mysqli_fetch_object($bloque);

		$_SESSION['nombre']=$registro->Nombre.' '.$registro->Apellidos;

		header("location: admin/home.php");
		
	}
	else{
		header("location: login.html?m=1");
	}
}

else
	echo "Se conecto mal";
 ?>
