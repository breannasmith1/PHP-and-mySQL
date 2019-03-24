<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=breannas_pht_db', 'breannas_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM content WHERE id=1';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching PWT: ' . $e->getMessage();
  include 'includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $contents[] = array (
  'title' => $row['title'],
  'body' => $row['body'],
	  );
}

include 'home/home.html.php';
