<?php

if (isset($_POST['id'])) {
    
    $db = new mysqli('localhost', 'root', '', 'test');
    if ($_POST['edit'] === 'add') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sal = $_POST['salary'];
        $pos = $_POST['position'];
        $query = "INSERT INTO employee VALUES($id, '$name', $sal, '$pos');";
    } else {
        $id = $_POST['id'];
        $query = "DELETE FROM employee WHERE id=$id;";
    }
    print $query.'<br>';
    try {
        $db->query($query);
    } catch(mysqli_sql_exception $error) {
        print 'this id is already exist';
        die;
    }

    
    if (~$db->affected_rows) {
        if ($db->affected_rows === 0) {
            print 'not change at database';
        } else {
            $state = $_POST['edit'];
            print "{$state}ed successfully";
        }
        
    } else {
        print 'failed';
    }
     
}