***REMOVED***
    session_start();
    include_once 'connect.php';

    if(isset($_REQUEST) && $success) {
        $q1 = json_encode($_POST['reg_question_1']);
        $q2 = json_encode($_POST['reg_question_2']);
        $q3 = json_encode($_POST['reg_question_3']);
        $q4 = json_encode($_POST['reg_question_4']);
        $q5 = json_encode($_POST['reg_question_5']);
        $q6 = json_encode($_POST['reg_question_6']);
        $q7 = json_encode($_POST['reg_question_7']);
        $q8 = json_encode($_POST['reg_question_8']);

        if($_POST['inter_switch'] == 'on') {
            $inter = 1;
    ***REMOVED***
    ***REMOVED***
            $inter = 0;
    ***REMOVED***

        mysqli_query($con, "START TRANSACTION");
        $Query_Santa = mysqli_query($con, "UPDATE Santa SET Inter = ". $inter ." WHERE ID = ".$_SESSION["user_id"].";");
        $Query_Questions = mysqli_query($con, "UPDATE Questions SET Q1 = ".$q1.", Q2 = ".$q2.", Q3 = ".$q3.", Q4 = ".$q4.", Q5 = ".$q5.", Q6 = ".$q6.", Q7 = ".$q7.", Q8 = ".$q8." WHERE ID = ".$_SESSION["user_id"].";");

        if($Query_Santa and $Query_Questions) {
            mysqli_query($con, "COMMIT");
            echo '<br><p style="color:green">Tus respuestas fueron exitosamente actualizadas!</p>';
    ***REMOVED***
    ***REMOVED***
            mysqli_query($con, "ROLLBACK");
            echo '<br><p style="color: red">Error: ' .mysqli_error($con). '</p>';
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
    else if (!isset($_REQUEST)) {
        mysqli_close($con);
        echo '<br><p style="color: red">Hubo un error con el servidor, intenta mas tarde.</p>';
***REMOVED***
***REMOVED***