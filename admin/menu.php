<?php 
 
if(!isset($_SESSION['nombre']))
    header("location: ../index.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">GG-Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
                  <a class="nav-link" href="home.php">inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="encuestas.php">Encuestas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tipoE.php">TipoE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tipoP.php">TipoP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Cerrar sesion</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="verencuesta.php">Ver Encuesta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../about.php">About</a>
                </li>
              </ul>

            </div>
            <span class="badge badge-pill badge-secondary" style="font-size: 1.5em width"><img width="40" style="border-radius: 50px;" height="40" class="minifoto" src="../fotos/<?php echo $_SESSION['foto']; ?>"/><?php echo "     ".$_SESSION['nombre']; ?></span>
          </nav>