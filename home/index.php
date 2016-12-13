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
        $user_cardee = $_SESSION['user_cardee'];
        $user_ban = $_SESSION['user_ban'];
***REMOVED***
***REMOVED***
<html ng-app="posada">
<head>
    <title>Posada Discípulos 2016</title>
    <link rel="shortcut icon" href="http://posada.giemper.com/img/2016.ico">
    <meta property="og:image" content="http://posada.giemper.com/img/Logo2016.png"/>
    <meta property="og:title" content="Posada Discipulos 2016"/>
    <meta property="og:description" content="La gran fiesta anual en donde se une un grupo de personas que, aunque ya no viven en las mismas ciudades, se reúnen cada Navidad para celebrar las cosas importantes en la vida: amistad, tolerancia, y José."/>
    <meta property="og:url" content="http://posada.giemper.com"/>

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
                <a data-toggle="modal" data-target="#nav-mobile-menu">menu</a>
            </i>
            <i class="material-icons" style="float: right">
                <a data-toggle="modal" data-target="#logout">power_settings_new</a>
            </i>
        </div>
    </nav>

    <aside id="sidebar" class="shadow" ng-controller="AsideVars">
        <div id="sidebar-top">
            <ul>
                <li class="sidebar-toggle">
                    <i class="material-icons">
                        <a>menu</a>
                    </i>
                </li>
            </ul>
        </div>
        <div id="sidebar-menu">
            <ul>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(0)">person_pin</a>
                    </i>
                    <a class="extended" ng-click="tab.selectTab(0)"><b>Home</b></a>
                </li>
                <li class="gift-enable">
                    <i class="material-icons">
                        <a ng-click="!Gift_Enable||tab.selectTab(1)">card_giftcard</a>
                    </i>
                    <a class="extended" ng-click="!Gift_Enable||tab.selectTab(1)">Intercambio</a>
                </li>
                <li class="card-enable">
                    <i class="material-icons">
                        <a ng-click="!Card_Enable||tab.selectTab(2)">ac_unit</a>
                    </i>
                    <a class="extended" ng-click="!Card_Enable||tab.selectTab(2)">Tarjetas</a>
                </li>
                <li class="gift-enable">
                    <i class="material-icons">
                        <a ng-click="!Gift_Enable||tab.selectTab(3)">email</a>
                    </i>
                    <a class="extended" ng-click="!Gift_Enable||tab.selectTab(3)">Mensajeria</a>
                </li>
                <li class="disable">
                    <i class="material-icons">
                        <!--<a ng-click="tab.selectTab(4)">local_play</a>-->
                        <a>local_play</a>
                    </i>
                    <a class="extended">Votaciones</a>
                </li>
                <li>
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(5)">create</a>
                    </i>
                    <a class="extended" ng-click="tab.selectTab(5)">Perfil</a>
                </li>
                <li ng-show="admin == true">
                    <i class="material-icons">
                        <a ng-click="tab.selectTab(6)">grade</a>
                    </i>
                    <a class="extended" ng-click="tab.selectTab(6)">Admin</a>
                </li>
            </ul>
        </div>
        <div id="sidebar-bottom">
            <ul>
                <li>
                    <i class="material-icons">
                        <a data-toggle="modal" data-target="#logout">power_settings_new</a>
                    </i>
                    <a class="extended" data-toggle="modal" data-target="#logout">Logout</a>
                </li>
            </ul>
        </div>
    </aside>
    
    <main id="directive-cards" ng-controller="MainVars">

        <div ng-show="tab.isSelected(0)">
            <content-home></content-home>
        </div>

        ***REMOVED*** 
            if($user_giftee != -1) {
        ***REMOVED***

        <div class="mdl-card" ng-show="tab.isSelected(1)">
            <content-santa></content-santa>
        </div>

        <div class="mdl-card" ng-show="tab.isSelected(3)">
            <content-message></content-message>
            <div class="mdl-dialog__actions" style="padding-right:50px">
                <button id="submit-message" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Enviar</button>
            </div>
        </div>
        ***REMOVED*** } ***REMOVED***

        ***REMOVED*** 
            if($user_cardee != -1) {
        ***REMOVED***
        <div class="mdl-card" ng-show="tab.isSelected(2)">
            <content-card></content-card>
        </div>
        ***REMOVED*** } ***REMOVED***
        
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

    <section id="nav-mobile-menu" class="modal fade" role="dialog" ng-controller="AsideVars">
        <div class="mdl-dialog" role="document">
            <div class="shadow">
                <h4 class="mdl-dialog__title">
                    <a data-dismiss="modal">Posada Discipulos 2016</a>
                </h4>
                <i class="material-icons" style="">
                    <a data-dismiss="modal">arrow_back</a>
                </i>
                <div class="mdl-dialog__content">
                    <ul>
                        <li><a ng-click="tab.selectTab(0)" data-dismiss="modal"><b>Home</b></a></li>
                        <li ng-show="Gift_Enable == true"><a ng-click="!Gift_Enable||tab.selectTab(1)" data-dismiss="modal">Intercambio</a></li>
                        <li ng-show="Card_Enable == true"><a ng-click="!Card_Enable||tab.selectTab(2)" data-dismiss="modal">Tarjetas</a></li>
                        <li ng-show="Gift_Enable == true"><a ng-click="!Gift_Enable||tab.selectTab(3)" data-dismiss="modal">Mensajeria</a></li>
                        <li style="display:none"><a data-dismiss="modal">Votaciones</a></li>
                        <li><a ng-click="tab.selectTab(5)" data-dismiss="modal">Perfil</a></li>
                        <li ng-show="admin == true"><a ng-click="tab.selectTab(6)" data-dismiss="modal">Admin</a></li>
                        <li><a data-dismiss="modal" data-toggle="modal" data-target="#logout">Logout</a></li>
                    </ul>
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
        var cardee = '***REMOVED*** echo $user_cardee; ***REMOVED***';
        var ban = '***REMOVED*** echo $user_ban; ***REMOVED***';
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    <script src="js/daily.js?a=***REMOVED*** echo rand(); ***REMOVED***"></script>
</body>
</html>