<?php
include "header.php";
include "menu.php";
include "../class/classBaseDatos.php";

if(!isset($_SESSION['IdEncuesta']))
	if(isset($_POST['Id'])) $_SESSION['IdEncuesta']=$_POST['Id'];
$encuesta=$oBD->saca_tupla("SELECT * from encuesta where Id=".$_SESSION['IdEncuesta']);

echo "<h3> ENCUESTA: ".$encuesta->Titulo."</h3>";

if(isset($_POST['accion']))
switch ($_POST['accion']) {

	case 'vista':
	$registro=$oBD->consulta("SELECT * from pregunta where IdEncuesta=".$_SESSION['IdEncuesta']);
		echo '<div class="container">

			<form method="post">';

			while($fila=mysqli_fetch_array($registro)){
				echo "<br>";
				if($fila['IdTipoPregunta']==1)
				{
				echo "<h3>".$fila['Pregunta']."</h3>";	
				echo 
				'<div class="custom-control custom-checkbox">
      			<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
      			<label class="custom-control-label" for="customCheck1">Opcion 1</label>
   				</div>

   				<div class="custom-control custom-checkbox">
      			<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
      			<label class="custom-control-label" for="customCheck1">Opcion 2</label>
   				</div>

   				<div class="custom-control custom-checkbox">
      			<input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
      			<label class="custom-control-label" for="customCheck1">Opcion 3</label>
   				</div>
   				';
				}
				if($fila['IdTipoPregunta']==4)
				{
					echo "<h3>".$fila['Pregunta']."</h3>";

			echo '<div class="form-group row">
   		 		<label class="col-sm-2 col-form-label">Tu Respuesta</label>
   		 		<div class="col-sm-10">
    	  		<input type="text" class="form-control" name="Pregunta" placeholder="Agrega tu respuesta"/>
   		 		</div>
        		</div>';
				}

				if($fila['IdTipoPregunta']==3)
				{
				echo "<h3>".$fila['Pregunta']."</h3>";

				echo 
				'<div class="form-group row">
				<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
 				 <label class="form-check-label" for="flexRadioDefault1">
    				SI
  				</label>
  				</div>
  				</div>	
  				<div class="form-group row">
				<div class="form-check">
  				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
 				 <label class="form-check-label" for="flexRadioDefault2">
 		   		No
 			 </label>
 			 </div>
			</div>';

			}
}

			echo '</form>

		 </div>';

		break;
		default: echo "No se ha programado : ".$_POST['accion'];
}

?>