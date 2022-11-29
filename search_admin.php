<?php
include_once "dbconfig.php";
include_once "utilities.php";

if(!isset($_COOKIE['user'])){
    echo "please login to continue";
}
else{
    if (isset($_GET)) {
        $keyword = $_GET['keyword'];
        $sql = "SELECT * FROM Admin WHERE Address LIKE '%{$keyword}%';";
        if ($keyword == "*") {
            $sql = "SELECT * FROM Admin WHERE Address;";
        }
        $obj = get_admin_table($sql, $conn);
        if ($obj->count == 0) {
            $extra = "No records in the database for the keyword: <strong>{$keyword}</strong>.";
            echo $extra;
        } else {
            $extra = "There are <strong>{$obj->count}</strong> admin(s) in the database that the address contains search keyword <strong>{$keyword}</strong>.";
            echo "{$extra}{$obj->table}";
        }
    }
}
