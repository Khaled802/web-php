<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    print "<h1>welcome $name</h1>";
}

include 'design/index.php';