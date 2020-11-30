<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Proweb/CSS/bootstrap.CSS">

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

<form class="form-group" action="validar.php" method="post">

      <div>
        <label>Entrar</label>
      </div>
      <div>
      <label for="idEmail">Email address</label>
      <input type="email" class="form-control" id="idEmail" aria-describedby="emailHelp" placeholder="Enter email" name="x">
 
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="y">
    </div>
    
    <button type="submit" class="btn btn-primary">Entrar</button>
 
</form>
	</div>
	</div>
</div>
<?php
session_start();
if(isset($_SESSION['error']) && $_SESSION['error']==1)
echo '<h1>'.$SESSION['error'].'</h1>';
?>
</body>
</html>