<?php
    session_start();
    include_once 'connect.php';

    if($success) {
        $id = json_encode($_POST['id']);
        $block = json_encode($_POST['block']);

        $result = mysqli_query($con, "UPDATE Santa SET Blocked = " . $block . " WHERE ID = " . $id);

        if(!$result) {
            echo "oh oh";  
        }
        mysqli_close($con);
    }
?>