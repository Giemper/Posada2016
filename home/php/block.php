***REMOVED***
    session_start();
    include_once 'connect.php';

    if($success) {
        $id = json_encode($_POST['id']);
        $block = json_encode($_POST['block']);

        $result = mysqli_query($con, "UPDATE TABLE Santa ON Blocked = " . $block . "WHERE ID = " . $id);

        if($result) {

    ***REMOVED***
    ***REMOVED***
            
    ***REMOVED***
***REMOVED***
***REMOVED***