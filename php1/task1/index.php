<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='#' method="post">
        <input type="range" id="range_degree" title="range" name="degree">
        <p id="text_degree" style='display: inline-block;padding-right: 10px;'>50</p>
        <input type="submit">
       
    </form>
    <?php 
        if ($_POST) {
            $degree = $_POST["degree"];
            echo "<h1>degree $degree</h1>";
            echo '<h1>Your Grade:</h1>';
            if ($degree >= 85)
                echo 'excellent';
            else if ($degree >= 75)
                echo 'verygood';
            else if ($degree >= 65)
                echo 'good';
            else if ($degree >= 50)
                echo 'pass';
            else
                echo 'fail';
        }
    ?>

    <script src="script.js"></script>
</body>
</html>