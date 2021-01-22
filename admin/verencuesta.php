<?php
include "header.php";
include "menu.php";
include "../class/classBaseDatos.php";
$contador=0;
if (!isset($_SESSION['IdEncuesta'])) 
	if (isset($_POST['Id'])) {$_SESSION['IdEncuesta']=$_POST['Id'];}
    $registros=$oBD->saca_tupla("select * from encuesta where Id=".$_SESSION['Id']);

echo '<div class="col-md-12"><h1 style="text-align:center; padding-top: .5em;">Preguntas de la encuesta '.$registros->Titulo.'</h1></div>';
$preguntas=$oBD->consulta("select * from pregunta p join tipopregunta tp on p.IdTipoPregunta=tp.Id where IdEncuesta=".$_SESSION['IdEncuesta']);
echo '<form method="post" style="padding-left: 3em; padding-top:3em; padding-right:3em;">
	<div class="alert alert-primary" role="alert" >';
foreach ($preguntas as $pregunta) {$contador++;

	echo '<div> <label>'.$pregunta['Pregunta'].'</label>';
	switch ($pregunta['Tipo']) {
		case 'Abierta':
			echo '<div style="position: relative">
				<textarea class="form-control"></textarea>
				</div>';
		break;
		case 'Opción Múltiple':
			echo '<div style="position: relative">
				<label>
					<input type="checkbox" name="eleccion'.$contador.'" /> Respuesta 1
				</label> 
				<label>
					<input type="checkbox" name="eleccion'.$contador.'" /> Respuesta 2
				</label> 
				<label>
					<input type="checkbox" name="eleccion'.$contador.'" /> Respuesta 3
				</label> 
				</div>';
		break;
		case 'Si/No':
			echo '<div style="position: relative">
				<label><input type="radio" name="eleccion'.$contador.'" value="Si" /> Si </label>
				<label><input type="radio" name="eleccion'.$contador.'" value="No" /> No </label> 
				</div>';
		break;
	}
	echo '</div></form>';
}
echo '</div>
		
		<div style="width:200px; margin:0 auto;">
			<input type="submit" class="btn btn-info" value="Send"/>
			<input type="submit" class="btn btn-info" value="Cancel"/>	
	</div>';
?>