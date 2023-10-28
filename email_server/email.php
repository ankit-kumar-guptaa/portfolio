<?php
require 'PHPMailerAutoload.php';
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.hostinger.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "inquiry@adjointinfocom.com";
$mail->Password = "Inq@clients#012";
?>