<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="templates/style/index.css">
</head>
<body>
    <?php
        require 'parts.php';
        require 'classes/User.php';
        nav_bar();
        if (isset($_POST['name'])) {
            if (User::is_login($_POST['name'], $_POST['password'])) {
                session_start();
                $_SESSION['username'] = $_POST['name'];
                header('Location: index.php');
            } else {
                print '<p class="message">the user or password is wrong</p>';
            }
        }

    ?>
    <div>
        <form action="login.php" method="post">
            <table class='register'>
                <tr>
                    <td><h2>name </h2></td><td><input type="text" name="name" id="name" placeholder='name'></td>
                </tr>
                <tr>
                    <td><h2>password </h2></td><td><input type="password" name="password" id="password" placeholder='password'></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" id="submit">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="templates/script/login.js"></script>
</body>
</html>
