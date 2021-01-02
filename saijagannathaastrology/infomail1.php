<?php

	$mail_info 	= "saijagannathaastrologycenter@gmail.com";

    if (!empty($_POST["email"])) {

	    	$name 					= $_POST['name'];
			$email 					= $_POST['email'];
			$phone 				    = $_POST['phone'];
			$url		            = $_POST['url']; 
			$information		    = $_POST['information'];

			// echo $name.'<br>';
			// echo $email.'<br>';
			// echo $contact.'<br>';
			// echo $message_content.'<br>';

			// die();
			
			if(is_null($email)){
				$email = $mail_info;
			}
			else{
				$email = $_POST['email'];
			}			
			

            $to 		= $mail_info;
			$subject 	= 'Best Astrologer in Bangalore';
			$rlysubject = 'Best Astrologer in Bangalore';				
				
			$headers 	= "From: ".$mail_info."\r\n";
			$headers 	.= "Reply-To: ". $email . "\r\n";			
			
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "";
			$message .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;font-family:arial;">';			
			$message .= '<tr><td  width="10%">Name</td><td> '.$name.' </td></tr>';	

			$message .= '<tr><td>Email</td><td>'.$email.'</td></tr>';
			$message .= '<tr><td>Phone Number</td><td>'.$phone.'</td></tr>';			
			$message .= '<tr><td>Date Of Birth</td><td>'.$url.'</td></tr>';
			$message .= '<tr><td>Subject</td><td>'.$information.'</td></tr>';

			

            $rlymessage = "";
			$rlymessage .= '<html><body><table width="100%" cellpadding="5" cellspacing="0" border="0" style="font-size:14px;font-family: arial;"><tr><td colspan="2" align="center">Testing</td></tr>';
			$rlymessage .= '<tr><td>Hi '.$name.' ,</td></tr>';		
			$rlymessage .= '<tr><td>Thank You for c<br/>We have received your enquiry. Our team will contact you soon. </br> </br> Thanks </br>Admin</br> info@Testing.com</br></br> </td></tr></table></body></html>';
			
			if (mail($to, $subject, $message, $headers)){
                 header('Refresh: 0; thanks.html');
                 exit;
             }else {
                header('Location: /?message=There was a problem sending the email.');
            }		

	}

	  

?>