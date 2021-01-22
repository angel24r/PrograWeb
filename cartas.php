<html>
<head>
<script type="text/javascript">
function carga()
{ 
	posicion=0; elMovimiento=null;
	
	// IE
	if(navigator.userAgent.indexOf("MSIE")>=0 || navigator.userAgent.indexOf("Trident")>=0) navegador=0;
	// Otros
	else 
		navegador=1;
}

function evitaEventos(event)
{
	// Funcion que evita que se ejecuten eventos adicionales
	if(navegador==0)
	{
		window.event.cancelBubble=true;
		window.event.returnValue=false;
	}
	if(navegador==1) event.preventDefault();
}

function comienzoMovimiento(event, id)
{ 
	elMovimiento=document.getElementById(id);
	if(navegador==0)
	 { 
	 	cursorComienzoX=window.event.clientX+document.documentElement.scrollLeft+document.body.scrollLeft;
		cursorComienzoY=window.event.clientY+document.documentElement.scrollTop+document.body.scrollTop;

		document.attachEvent("onmousemove", enMovimiento);
		document.attachEvent("onmouseup", finMovimiento);
	}
	if(navegador==1)
	{    
		cursorComienzoX=event.clientX+window.scrollX;
		cursorComienzoY=event.clientY+window.scrollY;
		document.addEventListener("mousemove", enMovimiento, true); 
		document.addEventListener("mouseup", finMovimiento, true);
	}
	
	elComienzoX=parseInt(elMovimiento.style.left);
	elComienzoY=parseInt(elMovimiento.style.top);
	// Actualizo el posicion del elemento
	elMovimiento.style.zIndex=++posicion;
	evitaEventos(event);
}

function enMovimiento(event)
{  
	var xActual, yActual;
	if(navegador==0)
	{    
		xActual=window.event.clientX+document.documentElement.scrollLeft+document.body.scrollLeft;
		yActual=window.event.clientY+document.documentElement.scrollTop+document.body.scrollTop;
	}  
	if(navegador==1)
	{
		xActual=event.clientX+window.scrollX;
		yActual=event.clientY+window.scrollY;
	}
	
	elMovimiento.style.left=(elComienzoX+xActual-cursorComienzoX)+"px";
	elMovimiento.style.top=(elComienzoY+yActual-cursorComienzoY)+"px";
	evitaEventos(event);
}

function finMovimiento(event)
{
	if(navegador==0)
	{    
		document.detachEvent("onmousemove", enMovimiento);
		document.detachEvent("onmouseup", finMovimiento);
	}
	if(navegador==1)
	{
		document.removeEventListener("mousemove", enMovimiento, true);
		document.removeEventListener("mouseup", finMovimiento, true); 
	}
}
function voltear(event)
{
	console.log(event);
	let id= (event.target["attributes"].id.value);
	var url = "/ProWeb/cartas/fondo2.jpg";
	switch(id)
	{
		case "enviar1":
		document.getElementsByTagName("img")[0].src=url;
		break;
		case "enviar2":
		document.getElementsByTagName("img")[1].src=url;
		break;
		case "enviar3":
		document.getElementsByTagName("img")[2].src=url;
		break;
		case "enviar4":
		document.getElementsByTagName("img")[3].src=url;
		break;
		case 'enviar5':
		document.getElementsByTagName("img")[4].src=url;
		break;
	}
}
function regresar(numero,imagen)
{	
		var url = "./cartas/"+imagen+".jpg";
		document.getElementsByTagName("img")[numero-1].src=url;
}
function ocultar()
{
	var url = "/ProWeb/cartas/fondo.png";
	let id= (event.target["attributes"].id.value);	
	switch(id)
	{
		case "ocultar1":
		document.getElementsByTagName("img")[0].src=url;
		break;
		case "ocultar2":
		document.getElementsByTagName("img")[1].src=url;
		break;
		case "ocultar3":
		document.getElementsByTagName("img")[2].src=url;
		break;
		case "ocultar4":
		document.getElementsByTagName("img")[3].src=url;
		break;
		case 'ocultar5':
		document.getElementsByTagName("img")[4].src=url;
		break;
	}
}
</script>
</head>
<body onLoad="carga();">
	<?php
	$variable=00;
	for ($i=1; $i < 6; $i++) { 
	$num = rand(1,13);
	$letra = rand(1,4);
	switch ($letra) {
    case 1:
        $T = "C";
        break;
    case 2:
        $T = "D";
        break;
    case 3:
        $T = "P";
        break;
    case 4:
        $T = "T";
        break;
}
if($variable>=10){

	echo '<div id="div'.$i.'" style="top:100px; width:112px; left:'.$i.$variable.'px; position:absolute; height:158px; " onmousedown="comienzoMovimiento(event, this.id);" onmouseover="this.style.cursor=\'move\'">
		<center>
			<img src="/ProWeb/cartas/'.$num.$T.'.jpg"/>
			<input name="enviar" id="enviar'.$i.'" type="button" value="Voltear" onclick="voltear(event);">
			<input name="enviar" id="ocultar'.$i.'" type="button" value="Ocultar" onclick="ocultar(event);">
			<input name="enviar" id="regresar'.$i.'" type="button" value="Regresar" onclick="regresar('.$i.','.'\''. $num.$T.'\''.');">
		</center>
		</div>';

}
else
{

	echo '<div id="div'.$i.'" style="top:100px; width:112px; left:'.$i.'0'.$variable.'px; position:absolute; height:158px; " onmousedown="comienzoMovimiento(event, this.id);" onmouseover="this.style.cursor=\'move\'">
		<center>
			<img src="/ProWeb/cartas/'.$num.$T.'.jpg"/>
			<input name="enviar" id="enviar'.$i.'" type="button" value="Voltear" onclick="voltear(event);">
			<input name="enviar" id="ocultar'.$i.'" type="button" value="Ocultar" onclick="ocultar(event);">
			<input name="enviar" id="enviar'.$i.'" type="button" value="Regresar" onclick="regresar('.$i.','.'\''.$num.$T.'\''.');">
		</center>
		</div>
		';

}
			$variable+=12;
	}

	?>

</body>
</html>