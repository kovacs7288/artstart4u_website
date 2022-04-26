<?php

use PHPmailer\PHPmailer\PHPmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'artstart4u2022@gmail.com';
        $mail->Password = 'Almaafaalatt22';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('artstart4u2022@gmail.com');
        $mail->addAddress('artstart4u2022@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Recived';
        $mail->Body = "<h3>fullName : $fullName <br>Email: $email <br>Phone : $phone <br>Message: $message</h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                     <span>Üzenet elküldve! Köszönjük a megkeresést. Hamarosan felvesszük Veled a kapcsolatot.</span>
                    </div>';
    } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                    </div>';
    }
}


?>