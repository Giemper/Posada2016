<?php
    session_start();
    include_once 'connect.php';

    if(isset($_GET) && $success) {
        $log_user = $_POST['log_user'];
        $log_pass = $_POST['log_pass'];

        $sql = "SELECT ID, FirstName, Inter, Admin, Email, Giftee, Cardee, Ban FROM Santa WHERE User = '".$log_user."' AND Pass = '".$log_pass."'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_id"] = $row["ID"];
            $_SESSION["user_name"] = $row["FirstName"];
            $_SESSION["user_inter"] = $row["Inter"];
            $_SESSION["user_admin"] = $row["Admin"];
            $_SESSION["user_email"] = $row["Email"];
            $_SESSION["user_giftee"] = $row["Giftee"];
            $_SESSION["user_cardee"] = $row["Cardee"];
            $_SESSION["user_ban"] = $row["Ban"];
            $_SESSION["highlight"] = 1;

            // echo "Login Successful. \r\n";
        }
        else {
            // echo "Error: " .mysqli_error($con). "\r\n";
            echo '<p style="color: red">No existe Usuario/Contraseña. Intentalo otra vez, yo se que tu puedes.</p>';
        }

        mysqli_close($con);
    }
    else if (!isset($_GET)) {
        mysqli_close($con);
        echo '<p style="color: red">No hubo respuesta del Servidor. Intenta otra vez.</p>';
    }
?>