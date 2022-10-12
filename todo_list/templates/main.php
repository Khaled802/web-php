<div class='nav_bar'>
        <ul>
            <?php
                session_start();
                print '<li>Home</li>';
                if (isset($_SESSION['login'])) {
                    print '<li>logout</li>';
                } else {
                    print '<li>login</li>';
                    print '<li>register</li>';
                } 
            ?>
        </ul>

</div>