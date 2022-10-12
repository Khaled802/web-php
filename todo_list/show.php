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
    ?>
   
   <ul class='register'>
   <?php

if (isset($_GET['username'])) {
    session_start();
   
    $show_user = $_GET['username'];

    $con = new mysqli('localhost', 'root', '', 'todo');
    $query = "SELECT * FROM task WHERE auth = '$show_user'";
    $items_from_db = $con->query($query);
    $items = [];
    if ($items_from_db->num_rows > 0) {
        while($row = $items_from_db->fetch_assoc()) {
            $items[] = new Item($row['title'], $row['description'], strtotime($row['start']), strtotime($row['end']));
            // $title = $row['title'];
            // print "<form action='show.php' method='get'><li>$title</li> <input type='text' name='title' id='' value='$title' hidden> <button type='submit'>view</button></form>";
        }
    }

    $order = [[], [], []];
    foreach ($items as $item) {
        $order[$item->get_state()][] = $item;
    }

    $states = ['white', 'gray', 'red'];

    for ($i = 0 ; $i < 3 ; $i++) {
        $color = $states[$i];
        foreach ($order[$i] as $item) {
            $title = $item->get_title();
            $start = $item->get_start_date();
            $end = $item->get_end_date();

            
            print "<div style='background-color:$color; margin: 10px;'><form action='show_item.php' method='get'><li>$title from $start to $end </li> <input type='text' name='title' id='' value='$title' hidden>";
            if (isset($_SESSION['username']) && strcasecmp($show_user, $_SESSION['username']) == 0) {
                print "<button type='submit'>view</button>";
            }
            
            print "</form></div>";
        }
    }

}
?>
   </ul>
  
    <!-- <script src="templates/script/register.js"></script> -->
</body>
</html>
