<?php
session_start();
if (!isset($_COOKIE['user'])) {
    echo "You must login first";
} else {
    include "course.php";
   echo "logged in as: " .$_COOKIE['user'];
}