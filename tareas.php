
<!DOCTYPE html>
<html>
<head>
	<title>Practica 30-11-2020</title>
	<style type="text/css">
	
body {
    display: flex;
    justify-content: center;
    align-items: center;
    margin:0;
	padding:0;
	background-color:silver;
}
.form-group {
  margin-bottom: 1rem;
}
.form-control-file{
  display: block;
  width: 100%;
}
.form-text {
  display: block;
  margin-top: 0.25rem;
}
.text-muted {
  color: #868e96 !important;
}
.recuadro {
	
	width:49.5%;
	display:inline-block;
	height:49.5%;
	overflow:hidden;
}
	</style>
</head>
<body>
<div class="recuadro">
    <form enctype="multipart/form-data" action="tareas.php" method="POST">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="archivo" aria-describedby="fileHelp">
      <input type="submit" class="btn btn-primary" name="enviar"></input> 
  </fieldset>
</form>
  </div>
  <div class="recuadro">
    <h1>Adios</h1>
  </div>
</body>
</html>

<?php
if(isset($_REQUEST['enviar'])) //preguntamos si el botón ya fue pulsado o presionado
{
  $cadenatexto = $_POST["cadenatexto"];
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";
$target_path = "./archivos/";
//datos del arhivo
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];
$target_path = $target_path . basename( $_FILES['archivo']['name']);
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "xlsx") || strpos($tipo_archivo, "doc") || strpos($tipo_archivo, "jpge") || strpos($tipo_archivo, "pdf")))) {

       echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
       if (move_uploaded_file($_FILES['archivo']['tmp_name'],  $target_path)){
              echo "El archivo ha sido cargado correctamente.";
       }else{
              echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
       }
       
}
}
?>