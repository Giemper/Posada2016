***REMOVED***
    session_start();
    include_once 'connect.php';

    if($success) {
        $vote = json_encode($_POST['vote']);
        $date = json_encode($_POST['date']);

        $result = mysqli_query($con, "INSERT INTO Daily (ID, Vote, Date) VALUES(".$_SESSION['user_id'].", ".$vote.", ".$date.")");

        if($result) {
            echo "Success";
    ***REMOVED***
    ***REMOVED***
            echo '<br><p style="color: red">Error: ' .mysqli_error($con). '</p>';
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
***REMOVED***