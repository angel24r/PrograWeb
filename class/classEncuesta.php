<?php
/*
include "../class/classBaseDatos.php";


$queryi="SELECT E.Id,Titulo,Descripcion,Estatus,Tipo from encuesta E join TipoEncuesta TE on E.IdTipo=TE.Id where idUser=".$_SESSION['Id'];
//var_dump($_POST);
if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'delete':
            $oBD->consulta("DELETE from encuesta where Id=".$_POST['Id']);
            echo $oBD->desplegarTabla($queryi,array("update","delete","addPreg","vista"));
            //echo 'borrando';
        break;

        case 'formUpdate': $registro=$oBD->saca_tupla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where Id=".$_POST['Id']);
        case 'formNew':
            echo '<div class="container">
            <h3>'.($_POST['accion']=="formNew"?"Nueva encuesta":"Actualizar encuesta '".$registro->Titulo."'").'</h3>
                <form method="post">
                    <input type="hidden" name="accion" value="'.(isset($registro->Id)?"update":"insert").'"/>';
                    
                    if(isset($registro->Id))
                     echo '<input type="hidden" name="Id" value="'.$registro->Id.'"/>';
                    else echo '<input type="hidden" name="idUser" value="'.$_SESSION['Id'].'"/>';
                    
                    echo '<div class="row">
                        <label class="col-md-4">Titulo</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Titulo" value="'.(isset($registro->Titulo)?"$registro->Titulo":"").'"/>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">Descripcion</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="Descripcion">'.(isset($registro->Descripcion)?"$registro->Descripcion":"").'</textarea>

                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">Estatus</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Estatus" value="'.(isset($registro->Estatus)?"$registro->Estatus":"").'"/>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">IdTipo</label>
                        <div class="col-md-8">';

                        echo $oBD->creaSELECT("TipoEncuesta","Id","Tipo","idTipo",isset($registro->Id)?$registro->IdTipo:-1);

                        echo '</div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <input type="submit" value="'.($_POST['accion']=="formNew"?"Agregar":"Actualizar").'"/>
                        </div>
                    </div>
                <form>
            </div>';
        break;
        
        /*case 'update':
            $query="UPDATE encuesta SET ";
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,array("accion","Id")))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            $query.=" where Id=".$_POST['Id'];
            $oBD->consulta($query);
            echo $oBD->desplegarTabla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where idUser=".$_SESSION['Id'],array("update","delete"));
        break;

        case 'insert':
            $query="INSERT INTO encuesta SET ";
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,array("accion")))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            $oBD->consulta($query);
            echo $oBD->desplegarTabla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where idUser=".$_SESSION['Id'],array("update","delete"));
        break;*/
/*
        case 'insert':
        case 'update':
            if($_POST['accion']=='insert'){$query="INSERT INTO encuesta SET ";
            }else{$query="UPDATE encuesta SET ";}
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,($_POST['accion']=="update"?array("accion","Id"):array("accion"))))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            if($_POST['accion']=='update'){$query.=" where Id=".$_POST['Id'];}
            $oBD->consulta($query);
            echo $oBD->desplegarTabla($queryi,array("update","delete","addPreg","vista"));
        break;


        default: echo "No se ha programado : ".$_POST['accion'];
    }
}else{echo $oBD->desplegarTabla($queryi,array("update","delete","addPreg","vista"));}

*/

include "../class/classBaseDatos.php";

class classEncuesta extends BaseDatos
{ var $queryi;
//var_dump($_POST);
//if(isset($_POST['accion'])){
    function classEncuesta(){
        $this->queryi="SELECT E.Id,Titulo,Descripcion,Estatus,Tipo from encuesta E join TipoEncuesta TE on E.IdTipo=TE.Id where idUser=".$_SESSION['Id'];
    }
    function accion($pAccion){
    switch($pAccion){
        case 'delete':
            $this->consulta("DELETE from encuesta where Id=".$_POST['Id']);
            echo $this->desplegarTabla($this->queryi,array("update","delete","addPreg","vista"));
            //echo 'borrando';
        break;

        case 'formUpdate': $registro=$this->saca_tupla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where Id=".$_POST['Id']);
        case 'formNew':
            echo '<div class="container">
            <h3>'.($_POST['accion']=="formNew"?"Nueva encuesta":"Actualizar encuesta '".$registro->Titulo."'").'</h3>
                <form method="post">
                    <input type="hidden" name="accion" value="'.(isset($registro->Id)?"update":"insert").'"/>';
                    
                    if(isset($registro->Id))
                     echo '<input type="hidden" name="Id" value="'.$registro->Id.'"/>';
                    else echo '<input type="hidden" name="idUser" value="'.$_SESSION['Id'].'"/>';
                    
                    echo '<div class="row">
                        <label class="col-md-4">Titulo</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Titulo" value="'.(isset($registro->Titulo)?"$registro->Titulo":"").'"/>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">Descripcion</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="Descripcion">'.(isset($registro->Descripcion)?"$registro->Descripcion":"").'</textarea>

                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">Estatus</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Estatus" value="'.(isset($registro->Estatus)?"$registro->Estatus":"").'"/>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">IdTipo</label>
                        <div class="col-md-8">';

                        echo $this->creaSELECT("TipoEncuesta","Id","Tipo","idTipo",isset($registro->Id)?$registro->IdTipo:-1);

                        echo '</div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <input type="submit" value="'.($_POST['accion']=="formNew"?"Agregar":"Actualizar").'"/>
                        </div>
                    </div>
                <form>
            </div>';
        break;
        
        /*case 'update':
            $query="UPDATE encuesta SET ";
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,array("accion","Id")))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            $query.=" where Id=".$_POST['Id'];
            $this->consulta($query);
            echo $this->desplegarTabla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where idUser=".$_SESSION['Id'],array("update","delete"));
        break;

        case 'insert':
            $query="INSERT INTO encuesta SET ";
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,array("accion")))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            $this->consulta($query);
            echo $this->desplegarTabla("SELECT Id,Titulo,Descripcion,Estatus,IdTipo from encuesta where idUser=".$_SESSION['Id'],array("update","delete"));
        break;*/

        case 'insert':
        case 'update':
            if($_POST['accion']=='insert'){$query="INSERT INTO encuesta SET ";
            }else{$query="UPDATE encuesta SET ";}
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,($_POST['accion']=="update"?array("accion","Id"):array("accion"))))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            if($_POST['accion']=='update'){$query.=" where Id=".$_POST['Id'];}
            $this->consulta($query);
            echo $this->desplegarTabla($this->queryi,array("update","delete","addPreg","vista"));
        break;

        case 'list':
            echo $this->listado($this->queryi,array("update","delete","addPreg","vista"));
        break;

        default: echo "No se ha programado : ".$_POST['accion'];
    }
}//Fin de la funcion ACCION

function listado($query,$iconos=array(),$coloTabla="table-primary",$anchos=array()){
            
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
            <img src="../imagenes/add.png" onclick="encuesta(\'formNew\')">
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
            <img src="../Imagenes/update.png" onclick="encuesta(\'formUpdate\','.$campos['Id'].')">
            </td>';
        }
        if(in_array("delete",$iconos)){
            $result.='<td>
            <img src="../Imagenes/delete.png" onclick="encuesta(\'delete\','.$campos['Id'].')">
            </td>';
        }
        if(in_array("addPreg",$iconos)){
            $result.='<td>
            <img src="../Imagenes/add.png" onclick="preguntas(\'list\','.$campos['Id'].')">
            </td>';
        }
        if(in_array("vista",$iconos)){
            $result.='<td>
            <img src="../Imagenes/add.png" onclick="encuesta(\'view\','.$campos['Id'].')">
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

}//fin clase


?>
