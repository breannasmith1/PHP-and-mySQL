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

if  (isset($_POST['myfname']) and ($_POST['honeypot'] == '')){
	
	$honeypot = $_POST['honeypot'];
	$tour = $_POST['tour'];
	$myfname = $_POST['myfname'];
	$mylname = $_POST['mylname'];
	$myemail = $_POST['myemail'];
	$myphone = $_POST['myphone'];
	$mydate = $_POST['mydate'];
	$mygroup = $_POST['mygroup'];
	$mycomments = $_POST['mycomments'];
	

try { $sql = 'INSERT INTO reservations SET
	tour = :tour,
	first_name = :myfname,
	last_name = :mylname,
	email = :myemail,
	phone = :myphone,
	date = :mydate,
	participants = :mygroup,
	sensitivities = :mycomments';
	 
	$s = $pdo->prepare($sql);
	 $s->bindValue(':tour', $_POST['tour']);
	 $s->bindValue(':myfname', $_POST['myfname']);
	 $s->bindValue(':mylname', $_POST['mylname']);
	 $s->bindValue(':myemail', $_POST['myemail']);
	 $s->bindValue(':myphone', $_POST['myphone']);
	 $s->bindValue(':mydate', $_POST['mydate']);
	 $s->bindValue(':mygroup', $_POST['mygroup']);
	 $s->bindValue(':mycomments', $_POST['mycomments']);
     $s->execute();
   }

catch (PDOException $e) {
  $error = 'Error fetching PWT: ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}
	include 'success.html.php';
}

else {
	include 'reservations.html.php';
}