<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMails {
    public function sendEmail($conf, $tryemail) {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host       = $conf['smtp_host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $conf['smtp_user'];
            $mail->Password   = $conf['smtp_pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $conf['smtp_port'];

            //Recipients
            $mail->setFrom($tryemail['mail_from'], $tryemail['name_from']);
            $mail->addAddress($tryemail['mail_to'], $tryemail['name_to']);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $tryemail['subject'];
            $mail->Body    = $tryemail['body'];

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
