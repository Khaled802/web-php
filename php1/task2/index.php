<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="first_num" id="num1">
        <input type="text" name="operator" id="op" maxlength=1 minlength=1>
        <input type="text" name="second_num" id="num2">
        <input type="submit" value="calculate">
    </form>
    <?php
        // print  $first_num.$second_num.$operator;
        if (!is_null($_POST['first_num']) && !is_null($_POST['second_num']) && !is_null($_POST['operator'])) {
            $first_num = $_POST['first_num'];
            $second_num = $_POST['second_num'];
            $operator = $_POST['operator'];
            $result = NULL;
            switch ($operator) {
                case '+':
                    $result = $first_num + $second_num;
                    break;
                case '-':
                    $result = $first_num - $second_num;
                    break;
                case '*':
                    $result = $first_num * $second_num;
                    break;
                case '/':
                    if ($second_num == 0) {
                        print '<h2>cannot divide by zero</h2>';
                        $result = 0;
                    } else {
                        $result = $first_num / $second_num;
                    }
                    
                    break;
            }
            if (is_null($result)) {
                echo "<p>syntax error</p>";
            } else {
                echo "<h1>result=</h1><p>$result</p>";
            }
        }
    ?>
</body>
</html>