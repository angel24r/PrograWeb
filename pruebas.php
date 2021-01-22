<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php 

include "class/classBaseDatos.php";
function desplegarTabla($query,$t_tamano=array(),$iconos=array(),$colorTabla="table-warning"){
    global $oBD;
	$registros=$oBD->consulta($query);
    $columnas=mysqli_num_fields($registros);
    echo '<table border="0" class="table table-hover table-warning'.$colorTabla.'">';
		echo '<tr class="table-warning">';	

	
	for ($c=0; $c <$columnas ; $c++){
		$campo=mysqli_fetch_field_direct($registros,$c);
		echo '<th  width="'.$t_tamano[$c].'">'.$campo->name.'</td>';
	}
	if (count($iconos))
		foreach ($iconos as $icono)
			echo '<th  width="1">&nbsp;</td>';
	echo '</tr>';
	

	for ($r=0; $r <$oBD->numeRegistros ; $r++) 
	{ 	echo '<tr>';

		$campo=mysqli_fetch_array($registros);
		for ($c=0; $c <$columnas ; $c++){
			echo '<td>'.$campo[$c].'</td>';
		}
		if (in_array("update",$iconos)) 
		{	echo '<td><img src="./Imagenes/update.png"></td>';
		}
		if (in_array("delete",$iconos)) {
			echo '<td><img src="./Imagenes/delete.png"> </td>';
		}  
		echo '</tr>';		
	}
	echo '</table>';
}
?>
<form><input type="" name="renglones"><input type="" name="columnas"> <button>Mostrar</button>
</form>
<?php
if(isset($_GET['renglones']))
{
	desplegarTabla("SELECT * from encuesta",array("5%","25%","30%","10%","10%"),array("update","delete"),"table-warning");
}
?>