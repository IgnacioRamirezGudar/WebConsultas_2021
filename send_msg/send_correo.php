<?php

    session_start(); 

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   require '../PHPMailer/Exception.php';
   require '../PHPMailer/SMTP.php';
   require '../PHPMailer/PHPMailer.php';
   $mail = new PHPMailer(true);
   
   try {
       $mail->SMTPDebug = 0;
       $mail->isSMTP();
       $mail->Host       = 'smtp.gmail.com';
       $mail->SMTPAuth   = true;
       $mail->Username   = '';//email para enviar
       $mail->Password   = '';//contraseña de nuestra cuenta
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
       $mail->Port       = 465;
       $mail->setFrom($_POST['email']);
       $mail->addAddress($_POST['correo']);
       /*$mail->addAddress('ellen@example.com');
       $mail->addReplyTo('info@example.com', 'Information');
       $mail->addCC('cc@example.com');
       $mail->addBCC('bcc@example.com');
       $mail->addAttachment('/var/tmp/file.tar.gz');
       $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/
       $mail->isHTML(true);
       $mail->Subject = 'Respusta a tu consulta';
       $mail->Body    = $_POST['respuesta'];
       $mail->AltBody = '';
       $mail->send();
       header('Location: ../admin/datos.php');
   } catch (Exception $e) {
      //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      require 'send.php';
       echo '
        <div class="alert">
         <h4> Mensaje no enviado </h4>
       </div>';
   }
?>
