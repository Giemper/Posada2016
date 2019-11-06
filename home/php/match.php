<?php
    session_start();
    include_once 'connect.php';

    if($success) {
        $santa = json_decode($_POST['santa']);
        $giftee = json_decode($_POST['giftee']);
        $error = false;

        mysqli_begin_transaction($con, MYSQLI_TRANS_START_READ_ONLY);

        for($i = 0; $i < count($santa); $i++) {
            $query = mysqli_query($con, "UPDATE Santa SET Giftee = ". $giftee[$i] ." WHERE ID = ". $santa[$i] .";");
            
            if(!$query && !$error) {
                $error = true;
                echo 'Error: ' . mysqli_error($con) . '\r\n' . $i; 
            }
        }

        if(!$error) {
            mysqli_commit($con);
        }
        else {
            mysqli_rollback($con);
        }

        mysqli_close($con);
    }
?>