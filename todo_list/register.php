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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            if (User::add_user($name, $email, $password)) {
                header('Location: login.php');
            } else {
                print '<p class="message">user name is already exist</p>';
            }

            
        }
    ?>
    <div>
        <form action="register.php" method="post">
            <table class='register'>
                <tr>
                    <td><h2>name </h2></td><td><input type="text" name="name" id="name" placeholder='name'></td>
                </tr>
                <tr>
                    <td><h2>email </h2></td><td><input type="text" name="email" id="email" placeholder='email'></td>
                </tr>
                <tr>
                    <td><h2>password </h2></td><td><input type="password" name="password" id="password" placeholder='password'></td>
                </tr>
                <tr>
                    <td><h2>confirm password </h2></td><td><input type="password" name="password2" id="password2" placeholder='password'></td>
                </tr>
                
                <tr>
                    <td colspan="2"><button type="submit" id="submit">Register</button></td>
                </tr>
                    
                
            </table>
        </form>
    </div>
    <script src="templates/script/register.js"></script>
</body>
</html>
