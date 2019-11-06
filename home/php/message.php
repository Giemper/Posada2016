<?php
    session_start();
    include_once 'connect.php';

    if($success) {
        $message_text = $_POST['message-text'];

        $sql = "SELECT FirstName, Email FROM Santa WHERE ID=".$_SESSION['user_giftee'].";";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $name = $row["FirstName"];
            $mail = $row["Email"];

            $to = $mail;
            $subject = "Tu Querido Santa te envio un mensaje!";
            $message_body = '<html>
            <head><link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300,400,700" rel="stylesheet"></head>
            <body><style>
            p { font-family: "Lato", "Arial", sans-serif; font-size: 15px; text-align: justify; }
            h1, h2 { color: #BD605C; font-family: "Roboto Slab", "Arial", serif; font-weight: normal; }</style>
            <h1>&iexcl;Hola '.$name.'!</h1><br>
            <p style="color:#A2A7A8">Tu querido santa te tiene un mensaje:</p><br>
            <b><p>'.$message_text.'</p><br><p>Atte. Tu Santa</p></b><br>
            <p style="color:#A2A7A8">Que bonito mensaje. No olvides visitar http://posada.giemper.com y actualizar tu informaci&oacute;n si es necesario.</p><br>
            <h2>Posada Discipulos 2016</h2>
            </body></html>';

            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            $headers .= "To: ". $name . " <" . $mail . ">" . "\r\n";
            $headers .= "From: Posada Discipulos 2016 <posada@giemper.com>" . "\r\n";

            mail($to, $subject, $message_body, $headers);
            echo '<p class="added" style="color: green">Correo enviado</p>';
        }
    }
?>