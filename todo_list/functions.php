<?php

function get_all_users() {
    $con = new mysqli('localhost', 'root', '', 'todo');
    $query = 'SELECT * FROM auth';
    $result = $con->query($query);
    $list = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $list[] = $row['username'];
        }
    }
    return $list;
}