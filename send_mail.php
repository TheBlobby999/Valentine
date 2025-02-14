<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try { //https://raw.githubusercontent.com/OhhMyGehlee/pi/refs/heads/main/ie
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nakjai450@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'fztoxgmqwoasqwpz';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; //465

    //Recipients
    $mail->setFrom('nakjai450@gmail.com', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('brfxxx450@gmail.com', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'สุขสันต์วันวาเลนไทน์น้าที่รักก 😘';
    $mail->Body    = 'สุขสันต์วันวาเลนไทน์ที่รักของเค้า เค้ารักเธอมากที่สุดเลย. เธอคือของขงัญที่ดีที่สุดเลย 🥰';

    $mail->send();
    echo 'ข้อความถูกส่งแล้ว';
} catch (Exception $e) {
    echo "ไม่สามารถส่งข้อความได้ ข้อผิดพลาดของจดหมาย: {$mail->ErrorInfo}";
}
