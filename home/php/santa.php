***REMOVED***
    session_start();
    include_once 'connect.php';

    if($success) {
        $type = $_POST['type'];

        if($type == "giftee") {
            $sql = "SELECT q1, q2, q3, q4, q5, q6, q7, q8 FROM Questions WHERE ID=".$_SESSION['user_giftee'].";";
    ***REMOVED***
        else if($type == "cardee") {
            $sql = "SELECT q1, q2, q3, q4, q5, q6, q7, q8 FROM Questions WHERE ID=".$_SESSION['user_cardee'].";";
    ***REMOVED***

        
        $result = mysqli_query($con, $sql);

        $rows = array();
        if(mysqli_num_rows($result) > 0) {
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
        ***REMOVED***
            echo json_encode($rows); 
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
***REMOVED***