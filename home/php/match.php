***REMOVED***
    session_start();
    include_once 'connect.php';

    if($success) {
        $santa = json_decode($_POST['santa']);
        $giftee = json_decode($_POST['giftee']);

        foreach($santa as $s) {
            echo $s . "\r\n";
    ***REMOVED***
***REMOVED***
***REMOVED***