<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Proweb/CSS/bootstrap.css">

</head>
<body>

	<?php include "header.php" ?>
  <div class="contrainer" style="background: rgba(200,200,200);">
    <div class="row mt-3">
      <div class="col-md-12">
      </div>
    </div>    
  </div>

<div class="container" style="background: rgba(200,200,200,.7);">
	<div class="row mt-3">
	<div class="col-md-12">

<!---Formulario de Internet-->


<form class="form-group">
      
    <div>
      <label >Registro</label>
    </div>

    <div>
      <label for="idNombre">Nombres</label>
      <input type="text" class="form-control" id="idNombre" placeholder="Ingrese los nombres">
    </div>

    <div>
      <label for="idEmail">Email address</label>
      <input type="email" class="form-control" id="idEmail" placeholder="Ingresa el email">
    </div>

    <div>
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el password">
    </div>

    <div class="form-group">
      <label for="idDate">Fecha de Nacimiento</label>
      <input type="date" class="form-control" id="idDate">
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar</button>
 
</form>


<!--- -->
	</div>
	</div>
</div>

</body>
</html>