***REMOVED***
    include_once 'connect.php';
    $error = false;

    if(isset($_REQUEST) && $success) {
        $reg_user = $_POST['reg_user'];
        $reg_pass = $_POST['reg_pass'];
        $reg_pass_2 = $_POST['reg_pass_2'];
        $reg_first = json_encode($_POST['reg_first']);
        $reg_last = json_encode($_POST['reg_last']);
        $reg_email = $_POST['reg_email'];

        $q1 = json_encode($_POST['reg_question_1']);
        $q2 = json_encode($_POST['reg_question_2']);
        $q3 = json_encode($_POST['reg_question_3']);
        $q4 = json_encode($_POST['reg_question_4']);
        $q5 = json_encode($_POST['reg_question_5']);
        $q6 = json_encode($_POST['reg_question_6']);
        $q7 = json_encode($_POST['reg_question_7']);
        $q8 = json_encode($_POST['reg_question_8']);

        if($reg_pass != $reg_pass_2) {
            echo '<p style="color: red">Las contraseñas no coinciden.</p>';
            $error = true;
    ***REMOVED***

        if($reg_user == '""' || $reg_user == '') {
            echo '<p style="color: red">Por favor ingresa tu usuario.</p>';
            $error = true;
    ***REMOVED***

        if(strlen($reg_pass) < 8 || strlen($reg_pass_2) < 8) {
            echo '<p style="color: red">Por favor ingresa una contraseña valida mayor a 8 caracteres.</p>';
            $error = true;
    ***REMOVED***

        if($reg_first == '' || $reg_last == '') {
            echo '<p style="color: red">Por favor ingresa tus nombres.</p>';
            $error = true;
    ***REMOVED***

        if($reg_email == '') {
            echo '<p style="color: red">Por favor ingresa un correo valido.</p>';
            $error = true;
    ***REMOVED***
        
        if(!$error) {
            if($_POST['inter_switch'] == 'on') {
                $inter = 1;
        ***REMOVED***
        ***REMOVED***
                $inter = 0;
        ***REMOVED***

            mysqli_query($con, "START TRANSACTION");
            $Query_Santa = mysqli_query($con, "INSERT INTO Santa (User, Pass, FirstName, LastName, Email, Inter) VALUES ('". $reg_user ."', '". $reg_pass ."', ". $reg_first .", ". $reg_last .", '". $reg_email ."', ". $inter .")");
            $Query_Questions = mysqli_query($con, "INSERT INTO Questions (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8) VALUES (". $q1 .", ". $q2 .", ". $q3 .", ". $q4 .", ". $q5 .", ". $q6 .", ". $q7 .", ". $q8 .")");

            if($Query_Santa and $Query_Questions) {
                mysqli_query($con, "COMMIT");

                $subject = "Bienvenido a la Posada 2016!";
                $message_body = '<html>
                <head><link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300,400,700" rel="stylesheet"></head>
                <body><style>
                p { font-family: "Lato", "Arial", sans-serif; font-size: 15px; text-align: justify; }
                h1, h2 { color: #BD605C; font-family: "Roboto Slab", "Arial", serif; font-weight: normal; }</style>
                <h1>&iexcl;Hola '.$reg_first.'!</h1><br>
                <p style="color:#A2A7A8">Ya quedaste exitosamente registrado.</p><br>
                <p style="color:#A2A7A8">Tu información es:</p><br>
                <b><p>Usuario: '.$reg_user.'</p><br>
                <p>Contrase&ntilde;a: '.$reg_pass.'</p></b><br>

                <p style="color:#A2A7A8">No olvides visitar http://posada.giemper.com y actualizar tu informaci&oacute;n si es necesario.</p><br>
                <h2>Nos vemos en la <b>Posada Discipulos 2016</b></h2>
                </body></html>';

                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $headers .= "To: ". $reg_first . " <" . $reg_email . ">" . "\r\n";
                $headers .= "From: Posada Discipulos 2016 <posada@giemper.com>" . "\r\n";

                mail($reg_email, $subject, $message_body, $headers);
        ***REMOVED***
        ***REMOVED***
                mysqli_query($con, "ROLLBACK");
                echo '<p style="color: red">Hubo un error al registrarse. Por favor revisa tu información.</p>';
        ***REMOVED***
    ***REMOVED***
        mysqli_close($con);
***REMOVED***
    else if (!isset($_REQUEST)) {
        echo '<p style="color: red">Hubo un error con el servidor. Por favor intenta más tarde.</p>';
***REMOVED***
***REMOVED***