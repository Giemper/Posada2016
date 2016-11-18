***REMOVED***
    session_start();
    include_once 'connect.php';

    if(isset($_GET) && $success) {
        $log_user = $_POST['log_user'];
        $log_pass = $_POST['log_pass'];

        $sql = "SELECT ID FROM Santa WHERE Username = '".$log_user."' AND Password = '".$log_pass."'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_row($result);
            $_SESSION["user_id"] = $row[0];

            echo "Login Successful. \r\n";
    ***REMOVED***
    ***REMOVED***
            echo "Error. \r\n";
            echo "Result: " .mysqli_num_rows($result). "\r\n";
    ***REMOVED***

        mysqli_close($con);
***REMOVED***
    else if (!isset($_GET)) {
        mysqli_close($con);
***REMOVED***
***REMOVED***