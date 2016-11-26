***REMOVED***
    session_start();

    if(isset($_SESSION['user_id']) == "") {
        header("Location: http://posada.giemper.com");
***REMOVED***
    
***REMOVED***
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        $user_inter = $_SESSION['user_inter'];
        $user_admin = $_SESSION['user_admin'];
        $user_email = $_SESSION['user_email'];
        $user_giftee = $_SESSION['user_giftee'];
***REMOVED***
***REMOVED***
<html ng-app="posada">
<head>
    <title>Posada Discípulos 2016</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.light_green-red.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</head>

<body ng-controller="TabController as tab">
    <nav id="navbar" class="shadow">
        <div class="content">
            <h1><a href="#">Posada Discípulos 2016</a></h1>
        </div>

        <div id="nav-mobile">
            <i class="material-icons" style="float: left">
                <a>menu</a>
            </i>
            <i class="material-icons" style="float: right">
                <a data-toggle="modal" data-target="#logout">power_settings_new</a>
            </i>
        </div>
    </nav>

    <aside id="sidebar" class="shadow" ng-controller="AsideVars">
        <div id="sidebar-top">
            <i class="material-icons">
                <a>menu</a>
            </i>
        </div>
        <div id="sidebar-menu">
            <ul>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(0)">person_pin</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(1)">card_giftcard</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(2)">ac_unit</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a class="enable" ng-click="tab.selectTab(3)">email</a>
                        <a class="disable">email</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(4)">local_play</a>
                    </i>
                </li>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(5)">create</a>
                    </i>
                </li>
                <li ng-show="admin == true">
                    <i class="material-icons">
                        <a class="admin-click" ng-click="tab.selectTab(6)">grade</a>
                    </i>
                </li>
            </ul>
        </div>
        <div id="sidebar-bottom">
            <i class="material-icons">
                <a data-toggle="modal" data-target="#logout">power_settings_new</a>
            </i>
        </div>
    </aside>
    
    <main id="directive-cards" ng-controller="MainVars">

        <div ng-show="tab.isSelected(0)">
            <content-home></content-home>
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(1)">
            <content-santa></content-santa>
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(2)">
            <content-card></content-card>
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(3)">
            <content-message></content-message>
            <div class="mdl-dialog__actions" style="padding-right:50px">
                <button id="submit-message" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Enviar</button>
            </div>
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(4)">
            <!--<content-vote></content-vote>-->
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(5)">
            <content-edit></content-edit>
            <div class="mdl-dialog__actions" style="padding-right:50px">
                <button id="submit-update" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Update</button>
            </div>
        </div>
        ***REMOVED*** 
            if($user_admin == 1) {
                ***REMOVED***
                <div ng-show="tab.isSelected(6)">
                    <content-admin></content-admin>
                </div>
                ***REMOVED***
        ***REMOVED***
        ***REMOVED***
        
    </main>

    <section id="logout" class="modal fade" role="dialog">
        <div class="mdl-dialog" role="document" style="margin-left: auto; margin-right: auto;">
            <div style="padding: 0 50px 25px 50px">
                <h1 class="mdl-dialog__title">Logout</h1>

                <div class="mdl-dialog__content">
                    <p>Deseas salir de tu sesión?</p>
                </div>

                <div class="mdl-dialog__actions">
                    <button id="submit-logout" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Logout</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        var id = '***REMOVED*** echo $user_id; ***REMOVED***';
        var name = '***REMOVED*** echo $user_name; ***REMOVED***';
        var inter = '***REMOVED*** echo $user_inter; ***REMOVED***';
        var admin = '***REMOVED*** echo $user_admin; ***REMOVED***';
        var email = '***REMOVED*** echo $user_email; ***REMOVED***';
        var giftee = '***REMOVED*** echo $user_giftee; ***REMOVED***';
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
</body>
</html>