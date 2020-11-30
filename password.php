<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Proweb/CSS/bootstrap.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
      <label >Recuperar contraseña</label>
    </div>

    <div>
      <label for="idEmail" >Ingresa el email a recuperar</label>            
      <input type="email" class="form-control" id="idEmail" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <br>
    <div class="form-group">
      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
 
</form>


<!--- -->
	</div>
	</div>
</div>

</body>
</html>