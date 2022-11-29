<?php
include_once "my_classes.php";

function get_admin_table($sql, $conn)
{
    if ($result = mysqli_query($conn, $sql)) {
        $table = "";
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
            $obj = new Admin($row);
            $count++;
            $table = "{$table}{$obj->get_row()}";
        }
        $header = Admin::getHeader();
        $table = "<table border=1>{$header}{$table}</table>";
        $returnAdmin = new TableReturn($table, $count);
        mysqli_free_result($result);
        return $returnAdmin;
    }
}


function get_courses_table($sql, $conn)
{
    if ($result = mysqli_query($conn, $sql)) {
        $table = "";
        $count = 0;
        $enrollement = 0;
        while ($row = mysqli_fetch_array($result)) {
            $obj = new Course($row);
            $enrollement = $obj->enrollment + $enrollement;
            $count++;
            $table = "{$table}{$obj->get_row()}";
        }
        $header = Course::getHeader();
        $table = "<table border=1>{$header}{$table}</table> Total Enrolment: {$enrollement}";
        $return = new TableReturn($table, $count);
        mysqli_free_result($result);
        return $return;
    }
}



function get_rooms($sql, $conn)
{
    if ($result = mysqli_query($conn, $sql)) {
        $table = "";
        $count = 0;
        while ($row = mysqli_fetch_array($result)) {
            $obj = new Rooms($row);
            $count++;
            $table = "{$table}{$obj->get_row()}";
        }
        $table = "<table border=1>{$table}</table>";
        mysqli_free_result($result);
        return $$table;
    }
}

function get_admin($login, $conn)
{
    $sql = "SELECT * FROM Admin WHERE Login = '$login' LIMIT 1;";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_array($result);
        if ($row) {
            $obj = new Admin($row);
            return $obj;
        } else {
            return null;
        }
    }
    return null;
}