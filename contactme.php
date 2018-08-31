<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];

$email_from = $visitor_email;
$email_subject = "PUBG Tournament Registration";
$email_body = "Player name: $name.\n".
                "Player Email: $visitor_email.\n".
                "Player Paytm No.: $number.\n";
      $to = "billionaire630@gmail.com";
      $headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $visitor_email \r\n";
      mail($to,$email_subject,$email_body,$headers);
      header("Location: register.html");

?>
