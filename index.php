<?
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Proweb/CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/Proweb/CSS/mycss.css">
<style type="text/css">
  .centradito
  {
    
        width: 200px;       
        height: 200px;
        position: absolute;
        top:50%;
        left: 50%;           
        margin-top: -100px;
        margin-left: -100px;
  }
  .abajo
  {
    
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
  position: absolute;    
  top:62%;               
        
  }
</style>
</head>
<body style="background-color: #D3FFE0">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">GG-Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Entrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.html">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="password.html">Contrase&ntilde;a</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
    </ul>
  </div>
</nav>


  <div class="container-fluid" >
  <div class="centradito">
    <div class="col-md-12">
      <form role="form">
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            Ingresa el codigo
          </label>
          <input type="text" class="form-control" id="exampleInputEmail1" />
        </div>               
        <button type="submit" class="btn btn-nuevo">
          Ok
        </button>
      </form>
    </div>
  </div>

  <div  class="abajo">
    <div class="col-md-4">
      <h2>
        Encuesta de Angel
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <button type="submit" class="btn btn-primary2">
         ver
        </button>
    </div>
    <div class="col-md-4">
      <h2>
        Encuesta de Estela
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <button type="submit" class="btn btn-primary2">
         ver
      </button>
    </div>
    <div class="col-md-4">
      <h2>
        Encuesta de Oscar
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <button type="submit" class="btn btn-primary2">
         ver
        </button>
    </div>
  </div>
</div>	


</body>
</html>