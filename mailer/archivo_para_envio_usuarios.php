<?php
//Librerías para el envío de mail
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = $_POST['email'];
$asunto = 'Creación de Usuario';
$mensaje = 'Señor (a) '.$_POST['nombre'].' '.$_POST['apellido'].', su usuario para ingresar al portal de la coroporación es: '.$_POST['nick'].' su contraseña provisional es: 1234 ingrese al portal y cámbiela.'
 ;
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nuestra cuenta
$mail->Username ='sopordes.1@gmail.com';
$mail->Password = 'Marialadelbarrio10*'; //Su password

 
//Agregar destinatario
$mail->AddAddress($_POST['email']);
$mail->Subject = $asunto;
$mail->Body = $mensaje;

 if($mail->Send())
{
    echo 'Comentario Ingresado Existosamente.';
}
else{
     echo $mail->ErrorInfo;
}




 


?>
