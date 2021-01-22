<?php
class BaseDatos{
    var $conexion; //atributo
    //constructor con el mismo nombre de la bd
    var $numeRegistros;
    function conecta(){
        $this->conexion=mysqli_connect("localhost","root","","encuestas");

    }
    function cierraBD(){mysqli_close($this->conexion);}
        
        function consulta($query){
            $this->conecta();
            $bloque=mysqli_query($this->conexion,$query);

            if(strpos(strtoupper($query),"SELECT")!==false){
            $this->numeRegistros=mysqli_num_rows($bloque);
            }
            else{$this->numeRegistros=0;}

            $this->error=mysqli_error($this->conexion);

            $this->cierraBD();

            if($this->error>""){
                echo $query."    => ".$this->error;
                exit;
            }

            return $bloque;
        }

        function saca_tupla($query){
            $this->conecta();
            $bloque=mysqli_query($this->conexion,$query);
            $this->numeRegistros=mysqli_num_rows($bloque);
            $this->cierraBD();
            return mysqli_fetch_object($bloque);
        }

        //funcion para desplegar una tabla dinamica
        function desplegarTabla($query,$iconos=array(),$coloTabla="table-primary",$anchos=array()){
            
            $registros=$this->consulta($query);
            $columnas=mysqli_num_fields($registros);
            $countatabla=0;
            $result='<div class="container"><table class="table table-hover '.$coloTabla.' ">';
            //crear la cabecera
            //"","","","","","","","","","","",""
            $result.='<tr class="table-dark">';
            
            if(count($iconos)){
                //foreach($iconos as $icono){
                    //echo '<td width=1%>&nbsp;</td>';
                    //if(isset($anchos[$countatabla])){
                    //}else{$anchos[$countatabla]="";}
                    $result.='<td colspan="'.count($iconos).'" width="1%">
                    <form method="post">
                    <input type="hidden" name="accion" value="formNew"/>
                    <input type="image" src="../Imagenes/add.png">
                    </form>
                    </td>';
                    //$countatabla++;
                //}
            }
        
            for ($c=0; $c < $columnas; $c++){
                $campo=mysqli_fetch_field_direct($registros,$c);
                if(isset($anchos[$countatabla])){
                }else{$anchos[$countatabla]="100";}
                $result.='<td width='.$anchos[$countatabla].'>'.$campo->name.'</td>';
                $countatabla++;
            }
            
            $result.='</tr>';
            
            //fin de la cabecera
            for ($r=0; $r < $this->numeRegistros; $r++){ 
                $result.='<tr>';
                $campos=mysqli_fetch_array($registros);
                if(in_array("update",$iconos)){
                    $result.='<td>
                    <form method="post">
                        <input type="hidden" name="Id" value="'.$campos['Id'].'"/>
                        <input type="hidden" name="accion" value="formUpdate"/>
                        <input type="image" src="../Imagenes/update.png">
                    </form>
                    </td>';
                }
                
                if(in_array("delete",$iconos))
                { 
                    $result.='<td>
                    <form method="post">
                        <input type="hidden" name="Id" value="'.$campos['Id'].'"/>
                        <input type="hidden" name="accion" value="delete"/>
                        <input type="image" src="../Imagenes/delete.png"
                        onClick="return confirm(\'Estas seguro?\')">
                    </form>
                    </td>';
                }
                if(in_array("addPreg",$iconos)){
                    $result.='<td>
                    <form method="post" action="pregunta.php">
                        <input type="hidden" name="Id" value="'.$campos['Id'].'"/>
                        <input type="hidden" name="accion" value="list"/>
                        <input type="image" src="../imagenes/add.png">
                    </form>
                    </td>';
                }
                if(in_array("vista",$iconos)){
                    $result.='<td>
                    <form method="post" action="pregunta.php">
                        <input type="hidden" name="Id" value="'.$campos['Id'].'"/>
                        <input type="hidden" name="accion" value="list"/>
                        <input type="image" src="../imagenes/add.png">
                    </form>
                    </td>';
                }
                
                for ($c=0; $c < $columnas; $c++){ 
                    $result.='<td>'.$campos[$c].'</td>';
                }
                $result.='</tr>';
            }
            $result.='</table></div>';
            return $result;
        }
        //termina funcion de tabla
        public function creaSELECT($tabla,$PK,$campDesplegar,$nameSelect,$IdSeleccionado=0){
            $cad="SELECT ".$PK." as PK, ".$campDesplegar." as dato from ".$tabla." order by ".$campDesplegar;
            $registros=$this->consulta($cad);
            $result='<select class="form-control" name="'.$nameSelect.'">';
            $result.='<option value="0">Selecciona</option>';
            foreach ($registros as $registro) {
                $result.='<option value="'.$registro['PK'].'" '.(($IdSeleccionado==$registro['PK'])?" selected ":"").' >'.$registro['dato'].'</option>';
            }
            $result.='</select>';
            return $result;
        }
    }
 $oBD=new BaseDatos();// puede estar arriba o abajo