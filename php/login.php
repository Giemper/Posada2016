***REMOVED***
    session_start();
    include_once 'connect.php';

    if(isset($_GET) && $success) {
        $log_user = $_POST['log_user'];
        $log_pass = $_POST['log_pass'];

        $sql = "SELECT ID, FirstName, Inter, Admin, Email, Giftee FROM Santa WHERE User = '".$log_user."' AND Pass = '".$log_pass."'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_id"] = $row["ID"];
            $_SESSION["user_name"] = $row["FirstName"];
            $_SESSION["user_inter"] = $row["Inter"];
            $_SESSION["user_admin"] = $row["Admin"];
            $_SESSION["user_email"] = $row["Email"];
            $_SESSION["user_giftee"] = $row["Giftee"];
            $_SESSION["highlight"] = 1;

            echo "Login Successful. \r\n";
    ***REMOVED***
    ***REMOVED***
            echo "Error: " .mysqli_error($con). "\r\n";
    ***REMOVED***

        mysqli_close($con);
***REMOVED***
    else if (!isset($_GET)) {
        mysqli_close($con);
***REMOVED***
***REMOVED***