<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            for ($row=0 ; $row < 8 ; $row++) {
                echo "<tr>";
                for ($col=0 ; $col < 8 ; $col++) {
                    if (($row&1)^($col&1)) {
                        echo "<td width='30px' height='30px'bgcolor='#386200'></td>";
                    } else {
                        echo "<td width='30px' height='30px'bgcolor='#01cc00'></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>


    