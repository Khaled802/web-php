<?php
session_start();

if (isset($_SESSION['name'])) {
    header('Location: index.php');
}

require 'lib.php';


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = hashing($_POST['password']);
    $name = login($email, $password);
    if ($name) {
        $_SESSION['name'] = $name;
        header("Location: index.php");
    } else {
        print 'wrong login';
    }

}


require 'design/login.html';