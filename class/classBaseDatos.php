<?php 
class BaseDatos{
var $conexion; // atributo
var $numeRegistros;

function conecta()
	{
		$this->conexion=mysqli_connect("localhost","root","","encuestas");
	}
function cierraBD()
	{ 
		mysqli_close($this->conexion);
	}
function consulta($query)
	{
		$this->conecta();
		$bloque=mysqli_query($this->conexion,$query);
		if ( strpos( strtoupper($query),"SELECT")!==false)
		{
			$this->numeRegistros=mysqli_num_rows($bloque);
		}
		else
		{
			$this->numeRegistros=0;
		}

		$this->cierraBD();
		return $bloque;
	}

function saca_tupla($query)
{
        $this->conecta();
        $bloque=mysqli_query($this->conexion,$query);
        $this->numeRegistros=mysqli_num_rows($bloque);
        $this->cierraBD();
        return mysqli_fetch_object($bloque);
    }

}
$oBD=new BaseDatos();
?>