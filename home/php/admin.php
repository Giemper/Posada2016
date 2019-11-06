<?php
    session_start();
    include_once 'connect.php';

    if($success) {
        $sql = "SELECT ID, FirstName, LastName, Inter, Blocked, Ban, Giftee FROM Santa ORDER BY ID";
        $result = mysqli_query($con, $sql);

        $rows = array();
        if(mysqli_num_rows($result) > 0) {
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            echo json_encode($rows);
        }
        else {
            echo "hola";
        }
        mysqli_close($con);
    }
?>