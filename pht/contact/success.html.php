<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Contact</title>
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
                <p>The following was emailed to our team:<br>
                  Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?> <br>
                  Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?> <br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>