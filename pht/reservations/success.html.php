<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Reservations</title>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
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
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Tour: <?php echo htmlspecialchars($tour, ENT_QUOTES, 'UTF-8'); ?> <br>
                  First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Tour Date: <?php echo htmlspecialchars($mydate, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Number of participants: <?php echo htmlspecialchars($mygroup, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Sensitivities: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?> <br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>