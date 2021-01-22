<?php 
include "header.php";
include "menu.php";
include "../class/classBaseDatos.php";
echo $oBD->desplegarTabla("SELECT * from tipoencuesta");
?>