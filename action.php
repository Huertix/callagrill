<?php

  	$email_to = "dhuerta23@gmail.com";
 
  	$email_subject = "Call a Grill Web";


    function died($error) { 
        // your error code can go here
       	$aux = 'Message Error:\n\n';
       	$aux .= $error;

       	echo '<script type="text/javascript">'; 
		echo "var m = '{$aux}'; ";  
		echo 'alert(m);'; 
		echo 'window.history.back();';
		echo '</script>';		
        die();
    }



 	if(!isset($_POST['vorname']) ||
 
        !isset($_POST['betreff']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['tel']) ||
 
        !isset($_POST['nachricht'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }


    $first_name = $_POST['vorname']; // required
 
    $subject = $_POST['betreff']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['tel']; // not required
 
    $comments = $_POST['nachricht']; // required

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	  if(!preg_match($email_exp,$email_from)) {
	 
	    $error_message .= 'The Email Address you entered does not appear to be valid.\n';
	 
	  }
	 
	    $string_exp = "/^[A-Za-z .'-]+$/";
	 
	  if(!preg_match($string_exp,$first_name)) {
	 
	    $error_message .= 'The First Name you entered does not appear to be valid.\n';
	 
	  }
	 
	  if(!preg_match($string_exp,$subject)) {
	 
	    $error_message .= 'The Subject you entered does not appear to be valid.\n';
	 
	  }
	 
	  if(strlen($comments) < 2) {
	 
	    $error_message .= 'The Comments you entered do not appear to be valid.\n';
	 
	  }
	 
	  if(strlen($error_message) > 0) {
	 
	    died($error_message);
	 
	  }

	  $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($subject)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";





	  $headers = 'From: '.$email_from."\r\n".
	 
	'Reply-To: '.$email_from."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	mail($email_to, $email_subject, $email_message, $headers);


	  	echo '<script type="text/javascript">';  
		echo 'alert("Thanks....");'; 
		echo 'window.history.back();';
		echo '</script>';	
		

?>