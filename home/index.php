***REMOVED***
    session_start();

    if(isset($_SESSION['user_id']) == "") {
        header("Location: http://posada.giemper.com");
***REMOVED***
***REMOVED***
<html>
<head>
    <title>Posada Discípulos 2016</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.light_green-red.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</head>

<body>
    <nav id="navbar" class="shadow">
        <div class="content">
            <h1><a href="#">Posada Discípulos 2016</a></h1>
        </div>
    </nav>

    <aside id="sidebar" class="shadow">
        <div id="sidebar-top">
            <i class="material-icons">
                <a>menu</a>
            </i>
        </div>
        <div id="sidebar-menu">
            <ul>
                <li>
                    <i class="material-icons">
                        <a>card_giftcard</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a>email</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a>sms_failed</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a>create</a>
                    </i>
                </li>
            </ul>
        </div>
        <div id="sidebar-bottom">
            <i class="material-icons">
                <a>power_settings_new</a>
            </i>
        </div>
    </aside>
</body>
</html>