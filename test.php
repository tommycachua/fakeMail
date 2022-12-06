<?php



include "PHPMailer/src/PHPMailer.php"; 
include "PHPMailer/src/SMTP.php"; 
include "PHPMailer/src/Exception.php"; 

	
//SEND MAIL 
	function Send_Mail(){
	

		$address 	= "tommy.nguyenthien@gmail.com";
		$pass_mail 	= "qkjdshsvnwdpxfnk";
		$host 		= "smtp.gmail.com";
		$port 		= "465";
		$email_receiver = "congthien@s-stec.com";
		$subject = "test";
		$content = "<a href='http://172.16.10.91:8080/test/info.php'>click to here</a>";
				
		 // $address 	= "automail@s-stec.com";
		 // $pass_mail 	= "u8V%e&4#Rs2Ew";
		 // $host 		= "113.52.35.19";
		 // $port 		= "25";
		 // $email_receiver = "congthien@s-stec.com";
		 // $subject = "result";
		 // $content = <a href='http://172.16.10.91:8080/test/info.php'>click to here</a>;
		
		
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
		try {
			$mail->SMTPDebug 	= 2; 								//0,1,2: ch? d? debug
			$mail->isSMTP();  
			$mail->CharSet  	= "utf-8";
			$mail->Host 		= $host;  							//SMTP servers
			$mail->SMTPAuth 	= true; 							// Enable authentication
			$mail->Username 	= $address; 						// SMTP address
			$mail->Password 	= $pass_mail;   					// SMTP password
			$mail->SMTPSecure 	= 'ssl';  // encryption TLS/SSL 
			$mail->Port 		= $port;  							// port to connect to                
			$mail->setFrom($address, $address ); 					// email sender, name of sender
			$mail->addAddress($email_receiver, $email_receiver); 	// email receiver, name of receiver
			$mail->isHTML(true);  									// Set email format to HTML
			$mail->Subject 		= $subject;
			$mail->Body 		= $content;
			$mail->smtpConnect( array(
				"ssl" => array(
					"verify_peer" => false,
					"verify_peer_name" => false,
					"allow_self_signed" => true
					)
				));
			$mail->send();
			echo "send mail complete";
		} catch (Exception $e) {
			echo 'Error: '.$e, $mail->ErrorInfo;
		}
	}
	
	
	Send_Mail();

?>