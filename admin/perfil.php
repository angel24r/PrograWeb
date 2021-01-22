<?php
include "header.php";
include "../class/classBaseDatos.php";
#procesar el update
if (isset($_POST['Nombre']))
{
  $oBD->consulta("UPDATE usuario set Nombre='".$_POST['Nombre']."', Apellidos='".$_POST['Apellido']."', 
  Password='".$_POST['pwd']."' where Id=".$_SESSION['Id']);

  $_SESSION['nombre'] =$_POST['Nombre'].' '.$_POST['Apellido']; 
if($_FILES['photo']['name']>"")
{
 $extension=explode(".",$_FILES['photo']['name']); 
 $extension=$extension[count($extension)-1];

  move_uploaded_file($_FILES['photo']['tmp_name'], 
  "../fotos/".$_SESSION['Id'].".".$extension);
  $oBD->consulta("UPDATE usuario set Foto='".$extension."' where Id=".$_SESSION['Id']); 
$_SESSION['foto']=$_SESSION['Id'].".".$extension."?".rand()%100;
}

} 
include "menu.php"; 

$usuario=$oBD->saca_tupla("SELECT * from  usuario where Id=".$_SESSION['Id']);
                         
?>

      <div class="container" style="background: rgba(200,200,200,0.3);">
      <div class="row mt-3"> 
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                   
     <div class="form-group">
      <label for="exampleTextarea">NAME</label>
      <input type="text" class="form-control" name="Nombre" rows="3" value="<?php echo $usuario->Nombre; ?>"></input>
    </div>

    <div class="form-group">
      <label for="exampleTextarea">LAST NAME</label>
      <input type="text" class="form-control" name="Apellido" value="<?php echo $usuario->Apellidos; ?>" rows="3"></input>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">PASSWORD</label>
      <input type="password" class="form-control" name="pwd" value="<?php echo $usuario->Password; ?>" id="exampleInputPassword1" placeholder="Password" >
    </div>
 
   
    <div class="form-group">
      <label for="exampleInputFile">PHOTO</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="photo">
      <small id="fileHelp" class="form-text text-muted">Puedes subir tu foto aqui</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
 
</div>
</body>
</html>