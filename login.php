<?php
include_once "utilities.php";
include_once "dbconfig.php";
session_start();
if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $obj = get_admin($username, $conn);
    if ($obj) {
        if ($obj->password === $password) {
           
            $cookieName = "user";
            $cookieValue =$obj->name;
             setcookie ($cookieName,$cookieValue, time() + 3600, "/");
            echo $obj->get_admin_info();
        } else {
            echo "
                <script type=\"text/javascript\">
                    alert('User {$username} is in the system, but wrong password was entered.”');
                    window.location.href='index.html';
                </script>
            ";
        }
    } else {
        echo "
                <script type=\"text/javascript\">
                    alert('Login {$username} is not in the system');
                    window.location.href='index.html';
                </script>
            ";
    }
}
