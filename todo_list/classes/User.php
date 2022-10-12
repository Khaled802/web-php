<?php

require 'Item.php';

class User {
    // attributes
    private $name;
    private $email;
    private $list; // array[title: item]

    // constructor
    function __construct(string $name, string $email, $list=array()) {
        $this->name = $name;
        $this->email = $email;
        $this->list = $list;
    }

    // public methods
    function get_list() {
        return $list->copy();
    }
    
    function add_item($new_item) {
        $this->list[] = $new_item;
        // TODO: add it to the database
    }

    function delete_item(string $title) {
        $this->phone_numbers[$title]->delete_it();
    }

    // static methods
    static function sorted_list(array $list) {
        $new_array = $list.copy();
        usort($new_array, function ($a, $b) {
            return strtotime($a->get_start_date()) - strtotime($b->get_end_date());
        });
        return $new_array;
    }
        
    static function add_user($name, $email, $password) {
        $con = new mysqli('localhost', 'root', '', 'todo');
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $select_names = "SELECT username FROM auth WHERE username = '{$name}'";
        $select_query = $con->query($select_names);
        print $select_query->num_rows;
        if ($select_query->num_rows) {
            return false;
        }
        $query = "INSERT INTO auth VALUES ('{$name}', '{$email}', '{$password}')";
        $con->query($query);
        return true;
    }

    static function is_login($name, $password) {
        $con = new mysqli('localhost', 'root', '', 'todo');
        $select_query = "SELECT * FROM auth WHERE username = '$name' AND password='$password'";
        $result = $con->query($select_query);
        return $result->num_rows === 1;
    }


}