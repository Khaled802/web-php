<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        require 'lib.php';

        $data = get_data();
        foreach ($data as $_=>$row) {
           foreach ($row as $key => $val) {
                print "$key: $val | ";
           }
           print "<br>";
        }
    ?>
</body>
</html>