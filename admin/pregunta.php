<?php
include "header.php";
include "menu.php";
include "../class/classBaseDatos.php";

echo "<h3>Preguntas de la encuesta???</h3>";
	$queryi="SELECT P.Id,Pregunta,IdTipoPregunta,Obligatoria,Requiere from pregunta P join tipopregunta TP on P.IdTipoPregunta=TP.Id where IdEncuesta=".$_SESSION['Id'];
//var_dump($_POST);
if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'delete':
            $oBD->consulta("DELETE from pregunta where Id=".$_POST['Id']);
            echo $oBD->desplegarTabla($queryi,array("update","delete"));
            //echo 'borrando';
        break;

        case 'formUpdate': $registro=$oBD->saca_tupla("SELECT * from pregunta where Id=".$_POST['Id']);
        case 'formNew':
            echo '<div class="container">
            <h3>'.($_POST['accion']=="formNew"?"Nueva pregunta":"Actualizar pregunta '".$registro->Pregunta."'").'</h3>
                <form method="post">
                    <input type="hidden" name="accion" value="'.(isset($registro->Id)?"update":"insert").'"/>';
                    
                    if(isset($registro->Id))
                     echo '<input type="hidden" name="Id" value="'.$registro->Id.'"/>';
                    //else echo '<input type="hidden" name="idUser" value="'.$_SESSION['Id'].'"/>';
                    
                    echo '<div class="row">
                        <label class="col-md-4">Pregunta</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Pregunta" value="'.(isset($registro->Pregunta)?"$registro->Pregunta":"").'"/>
                        </div>
                    </div>

                    

                    <div class="row">
                        <label class="col-md-4">Obligatoria</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Obligatoria" value="'.(isset($registro->Obligatoria)?"$registro->Obligatoria":"").'"/>
                        </div>
                    </div>

					<div class="row">
                        <label class="col-md-4">IdTipo</label>
                        <div class="col-md-8">';

                        echo $oBD->creaSELECT("tipoencuesta","Id","Tipo","IdEncuesta",isset($registro->Id)?$registro->IdEncuesta:-1);

                        echo '</div>
                    </div>

                    <div class="row">
                        <label class="col-md-4">IdTipo</label>
                        <div class="col-md-8">';

                        echo $oBD->creaSELECT("tipopregunta","Id","Tipo","IdTipoPregunta",isset($registro->Id)?$registro->IdTipo:-1);

                        echo '</div>
                    </div>

                    <div class="row">
                    <label class="col-md-4">Requiere</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="Requiere" value="'.(isset($registro->Requiere)?"$registro->Requiere":"").'"/>
                    </div>
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

        case 'insert':

        case 'update':
            if($_POST['accion']=='insert'){$query="INSERT INTO pregunta SET ";
            }else{$query="UPDATE pregunta SET ";}
            foreach($_POST as $nombCampo => $valor){
                if(!in_array($nombCampo,($_POST['accion']=="update"?array("accion","Id"):array("accion"))))
                    $query.=$nombCampo."='".$valor."', ";
            }
            $query=substr($query,0,-2);
            if($_POST['accion']=='update'){$query.=" where Id=".$_POST['Id'];}
            $oBD->consulta($query);
            echo $oBD->desplegarTabla($queryi,array("update","delete"));
        break;

        case 'list':
            $_SESSION['IdEncuesta']=$_POST['Id'];
            echo $oBD->desplegarTabla($queryi,array("update","delete"));
        break;

        default: echo "No se ha programado : ".$_POST['accion'];
    }
}else{echo $oBD->desplegarTabla($queryi,array("update","delete"));}
?>