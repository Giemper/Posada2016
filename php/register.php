***REMOVED***
    include_once 'connect.php';

    if(isset($_REQUEST) && $success) {
        $reg_user = json_encode($_POST['reg_user']);
        $reg_pass = json_encode($_POST['reg_pass']);
        $reg_first = json_encode($_POST['reg_first']);
        $reg_last = json_encode($_POST['reg_last']);
        $reg_email = json_encode($_POST['reg_email']);

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
        $Query_Santa = mysqli_query($con, "INSERT INTO Santa (User, Pass, FirstName, LastName, Email, Inter) VALUES (". $reg_user .", ". $reg_pass .", ". $reg_first .", ". $reg_last .", ". $reg_email .", ". $inter .")");
        $Query_Questions = mysqli_query($con, "INSERT INTO Questions (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8) VALUES (". $q1 .", ". $q2 .", ". $q3 .", ". $q4 .", ". $q5 .", ". $q6 .", ". $q7 .", ". $q8 .")");

        if($Query_Santa and $Query_Questions) {
            mysqli_query($con, "COMMIT");
            echo "Register Part III - MySQL should be correct now :D \r\n";
    ***REMOVED***
    ***REMOVED***
            mysqli_query($con, "ROLLBACK");
            echo "Result: " .mysqli_error($con);
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
    else if (!isset($_REQUEST)) {
        
***REMOVED***
***REMOVED***