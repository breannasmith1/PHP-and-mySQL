<!DOCTYPE html>
<html lang="en">
	
<head>
  <title>Portland Historical Tours</title>
	
  <meta name="description" content="Portland Historical Tours has offered three Portland Tour options for over 33 years: the Downtown Tour, the Landmarks Tour and the Growth Tour.">
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  <link rel="stylesheet" href=project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
	
<body>
  <div id="wrapper">
	  
	<?php include 'includes/header.inc.html.php'; ?>
	  
    <?php include 'includes/nav.inc.html.php'; ?>
	  
    <main>
		 <?php foreach ($contents as $content): ?> 
		
        <a href="tours"><img src="images/downtown.png" alt="Portland Historical Tours" width="850" height="389"></a>
        <h1><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
		
        <p><?php echo $content['body']; ?></p>
		
      <!--
        <a href="tours.html"><img src="images/downtowntour.png" alt="Portland Historical Downtown Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
      <a href="tours.html"><img src="images/growthtour.png" alt="Portland Historical Growth Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
      <a href="tours.html"><img src="images/landmarkstour.png" alt="Portland Historical Landmarks Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
        -->
		<?php endforeach; ?>
    </main>
	  
    <?php include 'includes/footer.inc.html.php'; ?>
	  
  </div>
</body>
</html>