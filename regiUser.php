<?php
//include "classBD.php";
$conexion=mysqli_connect();

$cadena="ABCDEFGHJKLMNPQRSTUVWXYZ2345678923456789";
$numeC=strlen($cadena);
$nuevPWD="";
for ($i=0; $i<8; $i++)
  $nuevPWD.=$cadena[rand()%$numeC]; 

 include("servicios/class.phpmailer.php");
 include("servicios/class.smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
    $mail->Host="smtp.gmail.com"; //mail.google
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Port = 465;     // set the SMTP port for the GMAIL server
    $mail->SMTPDebug  = 1;  // enables SMTP debug information (for testing)
                              // 1 = errors and messages
                              // 2 = messages only
    $mail->SMTPAuth = true;   //enable SMTP authentication
    
    $mail->Username =   ""; // SMTP account username
    $mail->Password = "";  // SMTP account password
      //-> apuntador
    $mail->From="";
    $mail->FromName="";
    $mail->Subject = "Registro completo";
    $mail->MsgHTML("<h1>BIENVENIDO ".$_POST['nombre']." ".$_POST['apellido']."</h1><h2> tu clave de acceso es : ".$nuevPWD."</h2>");
    $mail->AddAddress($_POST['correo']);
    //$mail->AddAddress("admin@admin.com");

    if (!$mail->Send()) 
          echo  "Error: " . $mail->ErrorInfo;
    else { 
       $bloque=mysqli_query($conexion,"SELECT Email from usuario where Email='".$_POST['email']."';");

      if(mysqli_num_rows($bloque)==0){
        $cad="insert into usuario set Nombre='".$_POST['nombre']."', Apellidos='".$_POST['apellido']."', Email='".$_POST['correo']."', Password=password('".$nuevPWD."')"; 
        mysqli_query($conexion,$cad);
        header("location: record.html?m=1");   
    } else

         header("location: record.html?m=2"); 
        }
        
/*
PROBLEMAS A SOLUCIONAR EN EL REGISTRO
1) DETECTAR QUE EL CORREO YA ESTA REGISTRADO, 
   YA QUE ES LA LLAVE PRIMARIA Y NO SE DEBE ENVIAR
   EL CORREO SI YA ESTABA REGISTRADO.
2) LA CLAVE DEBE DE CIFRARSE, POR QUE EN EL 
   LOGUEO SE CIFRA.
*/

?>