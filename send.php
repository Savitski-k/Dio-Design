<?php

$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {

    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                  
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'diodesignsite@gmail.com';               
    $mail->Password   = '80293064196';                             
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465; 
    $mail->CharSet = 'utf-8';                         


    $mail->setFrom('diodesignsite@gmail.com');
    $mail->addAddress('savitski.k@mail.ru');    

    
    $mail->isHTML(true);                        
    $mail->Subject = 'Новая заявка с сайта Dio-Design';
    $mail->Body    = "Имя: ${userName},  телефон: ${userPhone}.";

    $mail->send();
    header('Location: thank.html');
} catch (Exception $e) {
    echo "Письмо не отправлено, есть ошибка. Код ошибки: {$mail->ErrorInfo}";
}