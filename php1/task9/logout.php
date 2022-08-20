<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    <h1>Loged out</h1>
    <?php
        session_start();
        if (!isset($_SESSION['name'])) {
            header('Location: login.php'); 
        }
        unset($_SESSION['name']);
        unset($_SESSION['password']);
    ?>
</body>
</html>