<?php
include "header.php";
include "menu.php";
include "../class/classEncuesta.php";

$objEncuesta=new classEncuesta();
$objEncuesta->accion("list");
?>
<script src="../controller/encuesta.js"></script>
</body>
</html>