<?php

var_dump($_FILES);
if (is_uploaded_file($_FILES['info']['tmp_name'])) {
    $dir = __DIR__.'\files\\';
    $original = $_FILES['info']['name'];
    $extention = substr($original, strpos($original, '.'));
    $new_name = $_POST['name'].$extention;
    print $extention;
    move_uploaded_file($_FILES['info']['tmp_name'], $dir.$new_name);
   
}

