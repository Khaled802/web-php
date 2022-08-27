<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="password" id="password" placeholder="password">
        <input type="submit" value="login">
    </form>
    <?php
        session_start();
        if (isset($_SESSION['name'])) {
            header("Location: index.php");
        }

        define('NAME', "Khaled");
        define('PASSWORD', "1234in");
        if (isset($_POST['name']) && isset($_POST['password'])) {
            if ($_POST['name'] == NAME && $_POST['password'] == PASSWORD) {
                $_SESSION['name'] = NAME;
                $_SESSION['password'] = PASSWORD;
                header('Location: index.php');
            }
        }
    ?>
</body>
</html>