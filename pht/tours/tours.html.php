<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Options</title>
  <meta name="description" content="Portland Historical Tours have offered three family run tours for decades:  the Downtown Tour, the Growth Tour, and the Landmarks Tour.">
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
		
		<table> 
	<span id="caption">Compare Tour Options</span>  
	
		<tr> 
			<th id="tourname">Tour</th> 
			<th id="tourduration">Duration</th> 
			<th id="transportation">Transportation</th> 
			<th id="food">Food</th> 
			<th id="price">Price</th> 
			<th id="reserve">Reserve</th> 
		</tr>
	
	<?php foreach ($tours as $tour): ?>  
		<tr> 
			<td headers="tourname"><?php echo htmlspecialchars($tour['tour'], ENT_QUOTES, 'UTF-8'); ?></td> 
			<td headers="tourduration"><?php echo htmlspecialchars($tour['duration'], ENT_QUOTES, 'UTF-8'); ?></td> 
			<td headers="transportation"><?php echo htmlspecialchars($tour['transportation'], ENT_QUOTES, 'UTF-8'); ?></td> 
			<td headers="food"><?php echo htmlspecialchars($tour['food'], ENT_QUOTES, 'UTF-8'); ?></td> 
			<td headers="price"><?php echo htmlspecialchars($tour['price'], ENT_QUOTES, 'UTF-8'); ?></td>
			
			<td class="reserve"><a href="<?php echo BASE_URL; ?>reservations.php">Reserve</a></td> 
		</tr>  
			
	<?php endforeach; ?> 
		</table>
		

		<?php foreach ($tours as $tour): ?>  
			<h1><?php echo htmlspecialchars($tour['tour'], ENT_QUOTES, 'UTF-8'); ?></h1>
		
		<img class="image" src=<?php echo BASE_URL, htmlspecialchars($tour['image'], ENT_QUOTES, 'UTF-8'); ?> "alt=Portland 
		
		<?php echo htmlspecialchars($tour['tour'], ENT_QUOTES, 'UTF-8'); ?> Tour" width="200" height="200">
		
		
		<?php echo htmlspecialchars($tour['body'], ENT_QUOTES, 'UTF-8'); ?>   
		
			<h2>What's Included?</h2>  
		
		<?php echo $tour['included']; ?>  
		
		<blockquote>
				<?php echo htmlspecialchars($tour['testimonial'], ENT_QUOTES, 'UTF-8'); ?> 
		</blockquote>  
		
		<?php endforeach;?>
		
        <a href="reservations.html" class="reserve"><div>Reserve</div></a>
        <br class="clearright">
    </main>
	  
   <?php include '../includes/footer.inc.html.php'; ?>
	  
  </div>
</body>
</html>