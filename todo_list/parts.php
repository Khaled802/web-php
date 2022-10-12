<?php

function nav_bar() {
    print '<div class="nav_bar"><ul>';
    session_start();
    
    print '<li> <form action="index.php" method="get"><button type="submit" class="nav_link">Home</button></form></li>';
    if (isset($_SESSION['username'])) {
        print '<li> <form action="logout.php" method="get"><button type="submit" class="nav_link">logout</button></form></li>';
    } else {
        print '<li> <form action="login.php" method="get" ><button type="submit" class="nav_link">login</button></form> </li>';
        print '<li> <form action="register.php" method="get" ><button type="submit" class="nav_link">register</button></form></li>';
    } 

    print ' </ul> </div>';
 
}
