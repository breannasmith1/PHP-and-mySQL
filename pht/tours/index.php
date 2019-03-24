<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=breannas_pht_db', 'breannas_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server. (tours index):' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM tours';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching PWT: ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $tours[] = array (
  'tour' => $row['tour'],	
  'body' => $row['body'],
  'duration' => $row['duration'],
  'transportation' => $row['transportation'],
  'food' => $row['food'],
  'price' => $row['price'],
  'included' => $row['included'],
  'testimonial' => $row['testimonial'],
  'image' => $row['image'],
	  );
}

include 'tours.html.php';
