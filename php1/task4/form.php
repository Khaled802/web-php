<?php
    $position = $_POST['position'];
    $name = $_POST['name'];
    for ($pos=1; $pos <= 10;$pos++) {
        if ($position == $pos) {
            print $name;
        } else {
            print $pos;
        }
        print '<br>';
    }