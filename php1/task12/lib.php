<?php

function make_connction() {
    try {
        return new mysqli('localhost', 'root', '', 'test');
    } catch (mysqli_sql_exception $error) {
        print 'there is a problem with connection with database';
        return NULL;
    }
}

function register($name, $email, $password) {
    $db = make_connction();
    if (is_null($db)) {
        die();
    }
    $query = "INSERT INTO acount(name, email, password) VALUES ('$name', '$email', '$password')";
    try {
        $db->query($query);
        if ($db->affected_rows == 0) {
            print 'it is already registered';
        } else if (~$db->affected_rows) {
            print 'registed succesfully';
        } else {
            print 'there is a problem at registeration';
        }
    } catch (mysqli_sql_exception $error) {
        print 'register failed';
        print $error;
    }
}


function login($email, $password) {
    $db = make_connction();
    if (is_null($db)) {
        die();
    }

    $query = "SELECT password, name FROM acount WHERE email = '$email'";
    $password_acount = $db->query($query);
    $array_info = $password_acount->fetch_assoc();
    if (empty($array_info)) {
        print 'not found'.'<br>';
        return false;
    }
    $real_password = $array_info['password'];
    if ($password === $real_password) {
        return $array_info['name'];
    } else {
        return false;
    }
}

function get_data() {
    $db = make_connction();
    if (is_null($db)) {
        print 'hi';
        return NULL;
    }
    $data = [];
    $query = "SELECT id, name, email  FROM acount";
    $data_selected = $db->query($query);
    while ($row = $data_selected->fetch_assoc()) {
        $data[] = $row;
    }
    

    return $data;
}


function hashing($password) {
    return sha1($password);
}