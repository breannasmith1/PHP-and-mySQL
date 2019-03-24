<!DOCTYPE html>
<html lang="en">
	
<head>
  <title>About Portland Historical Tours</title>
	
  <meta name="description" content="Portland Historical Tours is a family owned Portland Tour Guide company specializing in Portland History for over 33 years.">
	
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  <link rel="stylesheet" href=../project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
	
<body>
  <div id="wrapper">
	  
<?php include '../includes/header.inc.html.php'; ?>
	  
    <?php include '../includes/nav.inc.html.php'; ?>
	  
    <main>
      <h1>Questions? We'd love to hear from you!</h1>
		
      <form method="post" action=" " id="inquiryForm">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myQuestion">Question:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
		
    </main>
	  
    <?php include '../includes/footer.inc.html.php'; ?>
	  
  </div>
</body>
</html>