<?php
    $host_name  = "host_name";
    $database   = "database";
    $user_name  = "user_name";
    $password   = "password";

    $con = mysqli_connect($host_name, $user_name, $password, $database);

    if(!mysqli_connect_errno()) {
        $success = true;
    }
    else {
        $success = false;
        echo "There was an error. Sorry. \r\n";
    }
?>