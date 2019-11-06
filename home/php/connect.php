<?php
    $host_name  = "db655932672.db.1and1.com";
    $database   = "db655932672";
    $user_name  = "dbo655932672";
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