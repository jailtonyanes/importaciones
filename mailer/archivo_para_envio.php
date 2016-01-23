<?php
//Librerías para el envío de mail
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = $_POST['email'];
$asunto = 'Prueba';
$mensaje = file_get_contents('../correo_coti.php');
 
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
$mail->AddAddress("jailtonyanesromero@gmail.com");
$mail->Subject = $asunto;
$mail->MsgHTML($mensaje);

 if($mail->Send())
{
    echo 'Comentario Ingresado Existosamente.';
}
else{
     echo $mail->ErrorInfo;
}




 


?>
