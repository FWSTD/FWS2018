<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css"/> 
        <script src="scripts.js"></script>
    </head>

    <body>
        <div>
            Thank you, <?php echo htmlspecialchars($_POST['fname']) ,htmlspecialchars($_POST['lname']); ?>. Your feedback is appreciated
        </div>
    </body>
</html>