<?php

$myfile = fopen("temp/INFO.txt", "w") or die("Unable to open file!");
fwrite($myfile, gethostbyaddr($_SERVER['REMOTE_ADDR']));
fclose($myfile);


// include "PHPMailer/src/PHPMailer.php"; 
// include "PHPMailer/src/SMTP.php"; 
// include "PHPMailer/src/Exception.php"; 

	
////SEND MAIL 
	// function Send_Mail(){
	

		// $address 	= "automail@s-stec.com";
		// $pass_mail 	= "u8V%e&4#Rs2Ew";
		// $host 		= "113.52.35.19";
		// $port 		= "25";
		// $email_receiver = "ducthanh@s-stec.com";
		// $subject = "result";
		// $content = $filename;
						
		
		// $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
		// try {
			// $mail->SMTPDebug 	= 0; 								//0,1,2: ch? d? debug
			// $mail->isSMTP();  
			// $mail->CharSet  	= "utf-8";
			// $mail->Host 		= $host;  							//SMTP servers
			// $mail->SMTPAuth 	= true; 							// Enable authentication
			// $mail->Username 	= $address; 						// SMTP address
			// $mail->Password 	= $pass_mail;   					// SMTP password
			// $mail->Port 		= $port;  							// port to connect to                
			// $mail->setFrom($address, $address ); 					// email sender, name of sender
			// $mail->addAddress($email_receiver, $email_receiver); 	// email receiver, name of receiver
			// $mail->isHTML(true);  									// Set email format to HTML
			// $mail->Subject 		= $subject;
			// $mail->Body 		= $content;
			// $mail->smtpConnect( array(
				// "ssl" => array(
					// "verify_peer" => false,
					// "verify_peer_name" => false,
					// "allow_self_signed" => true
					// )
				// ));
			// $mail->send();
		// } catch (Exception $e) {
			// echo 'Error: '.$e, $mail->ErrorInfo;
		// }
	// }
	
	
	// Send_Mail();

?>
<html>
OK
</htmL>