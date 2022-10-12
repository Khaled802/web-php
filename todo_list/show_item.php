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
        if (isset($_POST['title'])) {
            print 'weriono weqr';
            $con = new mysqli('localhost', 'root', '', 'todo');
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start = $_POST['start_date'];
            $end = $_POST['end_date'];
            print $title . $description . $start . $end;
            $query = "UPDATE `task` SET `description` = \"$description\", `start` = \"$start\", `end`=\"$end\" WHERE `task`.`title` = \"$title\";";

            print $query;
            $result = $con->query($query);
            // if ($result === TRUE) {
            //     echo "Record updated successfully";

            // } else {
            //     echo "Error updating record: " . $conn->error;
            // }
            print $con->affected_rows;
            $con->query("SELECT * From task WHERE `task`.`title` = \"$title\"");
            print $con->affected_rows;
            $con->close();
            
            // header('Location: index.php');
        } else {
            print 'hiiiiiiiio';
        }
    ?>
    
    <ul class='register'>
        <form action="show_item.php" method="post">
        <table class='register'>
        <?php
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
            $con = new mysqli('localhost', 'root', '', 'todo');
            $query = "SELECT * FROM task WHERE title = '$title'";
            
            $items_from_db = $con->query($query);
            if ($items_from_db->num_rows > 0) {
                while($row = $items_from_db->fetch_assoc()) {
                    $item = new Item($row['title'], $row['description'], strtotime($row['start']), strtotime($row['end']));
                    $start_date = $row['start'];
                    $end_date = $row['end'];
                }
            }
            $title = $item->get_title();
            $description = $item->get_description();
            $color = ['white', 'gray', 'red'][$item->get_state()];
            print "<tr><td><h2>title </h2></td><td><input type='text' name='title' id='title' placeholder='title' value='$title' hidden><h1 style='color:$color'>$title</h1></td></tr>";
            print "<tr><td><h2>description </h2></td><td><input type='text' name='description' id='description' placeholder='description' value=' $description'></td></tr>";
            print "<tr><td><h2>start </h2></td><td><input type='datetime-local' name='start_date' id='start_date' require='' value='$start_date'></td></tr>";
            print "<tr><td><h2>end </h2></td><td><input type='datetime-local' name='end_date' id='end_date' require='' value='$end_date'></td></tr>";
            print "<tr><td colspan='2'><button type='submit' id='submit'>Save</button></td></tr>";
            $con->close();
            // <tr>
            //     <td><h2>password </h2></td><td><input type="password" name="password" id="password" placeholder='password'></td>
            // </tr>
            // <tr>
            //     <td colspan="2"><button type="submit" id="submit">Login</button></td>
            // </tr>
        
        }
         
        ?>
        </table>
        </form>
    </ul>
  
    <!-- <script src="templates/script/register.js"></script> -->
</body>
</html>
