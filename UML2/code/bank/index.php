<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        enter name: <input type="text" name="name" id="name">
        enter password: <input type="password" name="password" id="password">
        <button type="submit">enter</button>
    </form>
    <?php
        session_start();
        define('root', __DIR__.'\\');
       
        require root.'Classes\\ATM.php';
        
        $bank_server = new BS();
        $name = 'khaled802';
        $bank_account1 = new BankAcount($name, sha1('123456'), 10000);

        $bank_server->add_client($name, $bank_account1);
        $atm1 = new ATM($bank_server);
        
        if (isset($_POST['name'])) {
            if ($atm1->is_found($_POST['name'])) {
                if ($atm1->is_correct_passward(sha1($_POST['password']))) {
                    $_SESSION['atm'] = $atm1;
                    header('Location: operations.php');
                } else {
                    print 'wrong password';
                    print '<br>';
                    print $_POST['password'];
                    
                }
            } else {
                print 'Not found';
            }
        }
        
    ?>
    
</body>
</html>





