<?php
include_once "dbconfig.php";
include_once "utilities.php";
if(!isset($_COOKIE['user'])){
    echo "please login to continue";
}
else{
    echo "logged in as: " .$_COOKIE['user'];
    $obj = get_admin_table("SELECT * FROM admin;", $conn);
    $extra = "There are <strong>{$obj->count}</strong> admin(s) in the database.";
    echo "{$extra}{$obj->table}";
}