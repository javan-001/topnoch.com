<?php
require 'dbconfig.php';

if (isset($_COOKIE['user'])) {
    if (isset($_POST)) {
        $cid = $_POST['course_id'];
        $name = $_POST['course_name'];
        $enr = $_POST['enrollment'];
        $fid = $_POST['faculty'];
        $rid = $_POST['room'];

        $sql = "INSERT INTO temp_courses(cid, name, FacultyName, Enrollment, BuildingRoom) VALUES ('$cid','$name','$fid','$enr','$rid')";
        $result = $conn->query($sql); 

        if ($result === TRUE) {
            echo "record inserted successfully";
            header('location: search_course.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
       

       
    

    }
} else {
    echo "please login as admin first!";
}