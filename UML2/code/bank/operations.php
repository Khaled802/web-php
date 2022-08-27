<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            balance <input type="radio" name="choose" id="getBalance" value="getBalance" checked>
            withdraw <input type="radio" name="choose" id="withdraw" value="withdraw">
            deposed <input type="radio" name="choose" id="deposit" value="deposit">
        </div>
        <div id='wanted' name='wanted'>
            amount of money <input type="number" name="value" id="value">
        </div>
        <button type="submit">enter</button>  
    </form>

    <?php
        session_start();
        
        define('root', __DIR__.'\\');
       
        require root.'Classes\\ATM.php';
        
        if (isset($_SESSION['start'])) {
           
            var_dump($_POST);
            if ($_POST['choose'] == 'getBalance') {
                print 'hi';
                define('atm', $_SESSION['atm']);
                print atm->get_balance();
            }
        } else {
            $_SESSION['start'] = true;
        }

    ?>

    <script src="script/main.js"></script>
</body>
</html>