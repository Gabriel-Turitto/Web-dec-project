<?php
  if(isset($_POST['submit'])) {
    $email_to = "spoonfulofsugar353@gmail.com";
    $email_subject = "New Order";
  }
    function died($error) {
      // your error code can go here
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "These errors appear below.<br /><br />";
      echo $error."<br /><br />";
      echo "Please go back and fix these errors.<br /><br />";
      die();
    }

    // validation expected data exists
    if(!isset($_POST['firstname']) ||
        !isset($_POST['lastname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comments'])) {
      died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
    //creates variables that equal the users input in Contact.php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname']; 
    $email_from = $_POST['email']; 
    $phone = $_POST['phone']; 
    $comments = $_POST['comments']; 

    $error_message = "";
    $emailcheck_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';

    if(!preg_match($emailcheck_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$firstname)) {
      $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if(!preg_match($string_exp,$lastname)) {
      $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    if(strlen($comments) < 2) {
      $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

 