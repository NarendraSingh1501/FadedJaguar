<?php
include 'include/common.php';
$result="";
if(isset($_POST['submit']))
{
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
    $mail->isSMTP();       //disable this when you go online
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='';   /*Please enter your email-id*/
  $mail->Password='';   /*Please enter your password*/

  $mail->setFrom(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
  $mail->addAddress('');    /*Please enter your email-id*/
  $mail->addReplyTo(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));

  $mail->isHTML(true);
  $mail->Subject='Query Related FadedJaguar';
  $mail->Body='<h2 align=center>Name : '.filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING).'<br>Email : '.filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING).'</h2><br> <h4>Query:<br> '.filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING).'</h4>';

  if(!$mail->send())
  {
    $result="Something went wrong.";
    header('location: contact.php');
  }
  header('location: index.php');
}