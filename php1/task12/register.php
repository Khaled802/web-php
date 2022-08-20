<?php
session_start();

if (isset($_SESSION['name'])) {
    header('Location: index.php');
}


require 'lib.php';

if (isset($_POST['name'])) {
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = hashing($_POST['password']);

    register($name, $email, $password);

    header('Location: login.php');
    $_SESSION['name'] = $name;

}

# require
include 'design/register.html';