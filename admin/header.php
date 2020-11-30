<?php  
session_start();
if(!isset($_SESSION['nombre']))
    header("location: ../index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/mycss.css?v=1.1">
</head>
<body>