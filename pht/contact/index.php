<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=breannas_pht_db', 'breannas_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}

catch (PDOException $e) {
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

if (isset($_POST['myName']) and ($_POST['honeypot'] == '')){

$myName =  $_POST['myName'];
$myEmail = $_POST['myEmail'];
$myQuestion = $_POST['myQuestion'];
		
require '../PHPMailer/PHPMailerAutoload.php';

date_default_timezone_set('Etc/UTC');
		
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = "mail.breannasmith.webhostingforstudents.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "breanna.smith1@breannasmith.webhostingforstudents.com";
$mail->Password = "Oregon.2016";
$mail->CharSet = 'utf-8';
$mail->Debugoutput = 'html';
$mail->SMTPAuth = true;

$mail->setFrom($myEmail, $myName);
$mail->addAddress('breanna.smith1@breannasmith.webhostingforstudents.com', 'Breanna Smith');
$mail->addReplyTo($myEmail, $myName);
$mail->Subject = 'PHPMailer SMTP test';	

$mail->Body= 'Email: '.$_POST['myEmail']."\n";
$mail->Body.='Name: '.$_POST['myName']."\n";
$mail->Body.='Question: '.$_POST['myQuestion'];
      
if (!$mail->send()) {
	include 'contact.html.php';
   } 
	
else {
	include 'success.html.php';
   }
} 

else {
   include 'contact.html.php';
}
?>