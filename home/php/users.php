***REMOVED***
    session_start();
    include_once 'connect.php';

    if($success) {
        $sql = "SELECT ID, FirstName, LastName, Inter FROM Santa";
        $result = mysqli_query($con, $sql);

        $rows = array();
        if(mysqli_num_rows($result) > 0) {
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
                // echo $r . "\r\n";
        ***REMOVED***
            echo json_encode($rows); 
    ***REMOVED***
        mysqli_close($con);
        // echo "here";
***REMOVED***
***REMOVED***