<?php
    session_start();
    include_once 'connect.php';

    if($success) {
        $type = $_POST['type'];

        if($type == "giftee") {
            $sql = "SELECT FirstName, LastName, q1, q2, q3, q4, q5, q6, q7, q8 FROM Questions JOIN Santa ON Santa.ID = Questions.ID WHERE Santa.ID=".$_SESSION['user_giftee'].";";
        }
        else if($type == "cardee") {
            $sql = "SELECT FirstName, LastName, q1, q2, q3, q4, q5, q6, q7, q8 FROM Questions JOIN Santa On Santa.ID = Questions.ID WHERE Santa.ID=".$_SESSION['user_cardee'].";";
        }

        
        $result = mysqli_query($con, $sql);

        $rows = array();
        if(mysqli_num_rows($result) > 0) {
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows); 
        }
        mysqli_close($con);
    }
?>