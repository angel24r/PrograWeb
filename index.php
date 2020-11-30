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

	<?php include "header.php" ?>
  <div class="contrainer" style="background: rgba(200,200,200);">
    <div class="row mt-3">
      <div class="col-md-12">
      </div>
    </div>    
  </div>


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