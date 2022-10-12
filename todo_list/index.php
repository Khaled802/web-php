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


        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            print "$username";
            if (isset($_SESSION['username']) && isset($_POST['title'])) {
                $username = $_SESSION['username'];
                $title = $_POST['title'];
                $con = new mysql('localhost', 'root', '', 'todo');
                $result = $con->query("SELECT title FROM task WHERE title='title' and auth = '$username';");
                if ($result->num_rows > 0) {
                    print "<h1 style='color:red'>this title is already exist</h1>";
                }
                Item::add_task($_POST['title'], $_POST['description'], $_POST['start_date'], $_POST['end_date'], $_SESSION['username']);
            }
 
        } 

       
        
    ?>
     <div>
        <form action="index.php" method="post">
            <table class='register'>
                <tr>
                    <td><h2>title </h2></td><td><input type="text" name="title" id="title" placeholder='title' require=''></td>
                </tr>
                <tr>
                    <td><h2>description </h2></td><td><input type="text" name="description" id="description" placeholder='description' require=''></td>
                </tr>

                <tr>
                    <td><h2>start </h2></td><td><input type="datetime-local" name="start_date" id="start_date" require=''></td>
                </tr>

                <tr>
                    <td><h2>end </h2></td><td><input type="datetime-local" name="end_date" id="end_date" require=''></td>
                </tr>
                
                <tr>
                    <?php
                    if (isset($_SESSION['username'])) {
                        print '<td colspan="2"><button type="submit" id="submit">Add</button></td>';
                    } else {
                        print '<td colspan="2"><button type="submit" id="submit" disabled>Add</button></td>';
                    }
                    
                    ?>
                </tr>
                    
                
            </table>
        </form>
    </div>
    <div id="show_users">
    <h1>Users: </h1>
    <ul>
        <?php
            require 'functions.php';
            $users = get_all_users();
            foreach ($users as $user) {
                print "<form action='show.php' method='get'><li>$user</li> <input type='text' name='username' id='' value='$user' hidden> <button type='submit'>view</button></form>";
            }
                
        ?>
    </ul>
    </div>
    

</body>
</html>
