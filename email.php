 // Code for sending e-mail. (Currently sent to send to Luke, this will be changed.)
 
 
  <?php
  		$name = $_POST['name'];
  		$email = $_POST['email'];
  		$message = $_POST['message'];
 
    		$email_subject = "New Form submission";
 
    		$email_body = "$name sent you a message concerning the Purpose and Identity Processes Lab.\n".
                            "$message".
 
  		$headers = "From: $email \r\n";

  		mail("lab343@cornell.edu",$email_subject,$email_body,$headers);
  		
  	?>
