<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>HOME PAGE</h1>
    <?php
        session_start();
        print "hi, ".$_SESSION['name'];
        if (!isset($_SESSION['name'])) {
            header('Location: login.php');
        }
    ?>
</body>
</html>