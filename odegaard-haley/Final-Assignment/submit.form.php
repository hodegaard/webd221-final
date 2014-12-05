<?php

  $to = "haleyodegaard@hotmail.com";
  $subject = "UIBrush";

  $from = $_POST["email"]; 
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $message = $_POST["message"]; 

  
  if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["message"] == ""){

  	echo "Please fill in all the fields.";

  } else {

  	
  	$body = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;

  	$success = mail($to, $subject, $body, "From: <$email>");

    if($success){

      echo "You're message has been sent.";
    } else { 
      echo "There was an error. Try again later.";
    }
  }

?>