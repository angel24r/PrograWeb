<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="CSS/materia.css">
</head>
<body>
<? include "header.php"; ?>
      <div class="container" style="background: rgba(200,200,200,0.3);">
        <div class="row mt-3"> 
            <div class="col-md-12">
               <!--------    --> 
               <form action="regiUser.php" method="POST">
                  <div class="form-group">
                    <div class="row">
                        <label class="col-md-4" for="inputDefault">User Name</label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Name" id="inputDefault" name="nombre">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4" for="inputDefault">Last Name </label>
                      <div class="col-md-8">
                      <input type="text" class="form-control" placeholder="Last Name" id="inputDefault" name="apellido">
                    </div>
                  </div>
              </div>
                <div class="form-group">
                    <div class="row">
                    <label for="exampleInputEmail1" class="col-md-4">Email address</label> 
                <div class="col-md-8">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo">
                </div> 
            </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Register</button>
            
              </form>
               <!---------   -->
        </div> 
    </div>
 </div>

</body>
</html>