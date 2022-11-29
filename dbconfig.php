<?php
$host = 'localhost';
$dbname = 'TECH3740';
$username = 'root';
$password = '';
$port = "";
try {
    $conn = mysqli_connect($host, $username, $password, $dbname);
} catch (Exception $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
