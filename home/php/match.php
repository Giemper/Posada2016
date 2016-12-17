***REMOVED***
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
        ***REMOVED***
    ***REMOVED***

        if(!$error) {
            mysqli_commit($con);

            // $sql = "SELECT ID, FirstName, LastName, Inter, Blocked, Ban FROM Santa ORDER BY ID";
            // $result = mysqli_query($con, $sql);

            // $rows = array();
            // if(mysqli_num_rows($result) > 0) {
            //     while($r = mysqli_fetch_assoc($result)) {
            //         $rows[] = $r;
            // ***REMOVED***
            //     echo json_encode($rows); 
            // }
    ***REMOVED***
    ***REMOVED***
            mysqli_rollback($con);
    ***REMOVED***

        mysqli_close($con);
***REMOVED***
***REMOVED***