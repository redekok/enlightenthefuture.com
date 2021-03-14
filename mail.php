<?php

if(isset($_POST["submit"])) {
  require_once('PHPMailer/PHPMailerAutload.php');

  $host = "ssl://smtp.gmail.com";
  $port = "465"

  // $mail = new PHPMailer();
  // $mail->isSMTP();
  // $mail->SMTPAuth = true;
  // $mail->SMTPSecure = 'ssl';
  // $mail->Host = 'smtp.gmail.com';
  // $mail->Port = '465'
  // $mail->isHTML();
  // $mail->Username = 'roosdekok.93@gmail.com';
  // $mail->Password = '';
  // $mail->SetFrom('no-reply@enlightenthefuture.com');
  // $mail->Subject = 'Enlighten the future: say hello!'
  // $mail->Body = 'A test email!';
  // $mail->AddAddress('roos.dekok@quintel.com');
  //
  // $mail->Send();

  $name = $_POST['name'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "roos.dekok@quintel.com"; //my email
  $subject = "Enlighten the future - contact form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank you!";
}

?>
