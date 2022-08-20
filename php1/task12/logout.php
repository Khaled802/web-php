<?php

session_start();

if (isset($_SESSION['name'])) {
    session_destroy();
    print 'loged out sucessfully';
} else {
    header('Location: login.php');
}