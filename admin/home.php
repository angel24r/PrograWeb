<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<h1>Bienvenido <span class="badge badge-danger"><?php echo $_SESSION['nombre']; ?></span></h1>

<a href="../index.php">Cerrar Sesión</a>
</body>
</html>
