<?php
@extract($_POST);
if(isset($submit_form)){
require("email_server/email.php");
$mail->From = "inquiry@adjointinfocom.com";
$mail->FromName = "Enquiry Received From";
$mail->AddAddress("theankitkumarg@gmail.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "You have received an enquiry!";
$mail->Body = '
    <html>  
        <head> 
            <title>You have received an enquiry!</title> 
        </head> 
        <body>
        
        <table width="100%" style="border:1px solid;" cellpadding="1" cellspacing="1">
	<tbody>
		<table width="100%" style="border:1px solid;" cellpadding="35" cellspacing="1">
			<tr>
				<td style="background:#0183cf; text-align: center; font-size: 25px; color:#fff;">Ankit Kumar Gupta</td>
			</tr>			
		</table>
		<table width="100%" cellpadding="1" cellspacing="10">
			<tr>
				<td>You Have received a enquiry form <b>Your Portfolio Website</b></td>
			</tr>
			<tr>
				<td>Your Enquiry Details are given below:</b></td>
			</tr>			
		</table>
		<table width="50%" cellpadding="10" cellspacing="0" border="1px">
			<tr>
				<td><b>Name </b></td>
				<td>'.$name.'</td>
			</tr>
			<tr>
				<td><b>Email </b></td>
				<td>'.$email.'</td>
			</tr>
			<tr>
				<td><b>Mobile No. </b></td>
				<td>'.$phone.'</td>
			</tr>
			
			<tr>
				<td><b> Message </b></td>
				<td>'.$message.'</td>
			</tr>
		</table>
	</tbody>
</table>
        
          
        </body> 
        </html>
';
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
 // header("Location:/thank-you.php");
echo '<script>window.location = "thank-you.php";
</script>';
}
?>
