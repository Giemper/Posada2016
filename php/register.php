***REMOVED***
    include_once 'connect.php';

    echo "Register Part I \r\n";

    if(isset($_REQUEST) && $success) {
        echo "Register Part II \r\n";
        $reg_user = $_POST['reg_user'];
        $reg_pass = $_POST['reg_pass'];
        $reg_first = $_POST['reg_first'];
        $reg_last = $_POST['reg_last'];
        $reg_email = $_POST['reg_email'];

        $sql = "INSERT INTO Santa(Username, Password, First_Name, Last_Name, Email) VALUES ('". $reg_user ."', '". $reg_pass ."', '". $reg_first ."', '". $reg_last ."', '". $reg_email ."')";
        // echo "Con: " .$con. "\r\n";
        $result = mysqli_query($con, $sql);

        if($result) {
            echo "Register Part III - MySQL should be correct now :D \r\n";
    ***REMOVED***
    ***REMOVED***
            echo "MySQL is not working yet. \r\n";
            echo "Result: " .mysqli_error($con). "\r\n";
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
    else if (!isset($_REQUEST)) {
        
***REMOVED***
***REMOVED***