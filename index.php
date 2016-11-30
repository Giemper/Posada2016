***REMOVED***
    session_start();

    if(isset($_SESSION['user_id']) != "") {
        header("Location: http://posada.giemper.com/home");
***REMOVED***
***REMOVED***
<!DOCTYPE html>
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
            <ul id="nav-desk">
                <li><a id="btn_register" data-toggle="modal" data-target="#login"><b>Login</b></a></li>
                <li><a id="btn_register" data-toggle="modal" data-target="#register">Registro</a></li>
                <li><a class="btn_activities">Actividades</a></li>
                <li><a class="btn_home">Home</a></li>
            </ul>
        </div>
        <div id="nav-mobile">
            <i class="material-icons" style="float: left">
                <a data-toggle="modal" data-target="#nav-mobile-menu">menu</a>
            </i>
            <i class="material-icons" style="float: right">
                <a data-toggle="modal" data-target="#login">account_circle</a>
            </i>
        </div>
    </nav>

    <header id="intro" class="shadow">
        <div class="box">
            <h2>Posada Discipulos</h2>
            <h1>2016</h1>
            <h3>Diciembre 30</h3>
        </div>
    </header>

    <main id="highlight">
        <div class="mdl-card">
            <article class="content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <h1>Ho Ho Ho</h1>
                        <p>Oh la navidad. Una vez más llegamos a ese punto del año donde nos juntamos con nuestros seres queridos
                            y tomamos chocolate caliente junto a la orilla de una chimenea imaginaria.</p>
                        <p>Con esta hermosa época del año llega la ya clásica <b>Posada Discípulos</b>, la gran fiesta anual
                            donde cada ocasión se vuelve más especial al unir un grupo de personas que aunque ya no viven
                            en las mismas ciudades, se reúnen para celebrar las cosas importantes en la vida: amistad, tolerancia,
                            y <b>José</b>.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <img src="img/screen_3.jpg">
                    </div>
                </div>
            </article>

            <article class="content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone flip1">
                        <img src="img/screen_2.jpg">
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone flip2">
                        <h1>El Gran Intercambio</h1>
                        <p>¿Alguna vez has sentido el espíritu navideño entrar dentro de tu ser mientras absorbe toda tu voluntad,
                            forzándote a entrar a un perpetuo estado de paz y bondad que te invita a actuar desinteresadamente
                            a dar lo mejor de ti hacia el resto del mundo para alcanzar éxtasis total? Si la respuesta es
                            sí, por favor consulta a tu psicólogo, nos preocupas.</p>
                        <p>Al igual que años pasados, la posada trae consigo el gran intercambio. La actividad consiste en ser
                            el <b>santa</b> encontrar el mejor regalo que le puedas dar a una persona determinada dentro
                            de la posada. Para hacer todo más sencillo, nosotros te ayudaremos dándote información sobre
                            tu <b>giftee</b>. ¿La mejor parte? ¡Tú también recibes un regalo!</p>
                    </div>
                </div>
            </article>

            <article class="content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <h1>Confía en el Corazón de las Cartas</h1>
                        <p>Comprendemos que no todos pueden o quieren participar en el intercambio. No hay problema, no juzgamos
                            (mucho). Sin embargo, siempre queremos encontrar una manera en la que todos puedan participar
                            de una u otra manera.</p>
                        <p>Es por eso que en esta posada haremos un segundo pequeño intercambio, algo más breve pero bonito.
                            Introduciendo el Intercambio de Cartas. La intención es participar con algo simple, dándoles
                            un pequeño gran mensaje a nuestros amigos. Y al igual que la navidad, ¡todos participan!</p>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                        <img src="img/screen_1.jpg">
                    </div>
                </div>
            </article>

            <article class="content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <h2>XOXO. Tu Santa</h2>
                        <p>Al participar en cualquiera de los dos intercambios, podrás mandarle mensajes anónimos a tu giftee
                            previo a la posada para aclaran cualquier duda, o para volverlo loco con correos subliminales.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <h2>El Año de las Elecciones</h2>
                        <p>Los Discípulos Awards regresan más grandes que nunca. Este año para galardonar a nuestros amigos
                            más tremendos. Tendremos nuevas categorías que prometerán dar un mayor reflejo de nuestras virtudes.
                            ¿Quiénes se llevaran a casa al José de Oro?</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                        <h2>Pascua en Navidad</h2>
                        <p>Como siempre, ten los ojos abiertos a los Easter Eggs que aparecerán a través de la página. Prometemos
                            adornar tu navegador con fotos de Héctor.</p>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <div class="content">
            <span style="float: left">Code made with 💩</span>
            <span style="float: right">&copy; Giemper - 2016</span>
        </div>
    </footer>

    <section id="register" class="modal fade" role="dialog" style="padding-bottom: 30px">
        <div class="mdl-dialog" role="document" style="margin-left: auto; margin-right: auto">

            <div style="padding: 0 50px 25px 50px">
                <h1 class="mdl-dialog__title">Registro</h1>

                <div class="mdl-dialog__content">
                    <p>Asi que quieres participar en la <b>Posada Discipulos 2016</b>.</p>

                    <h3 style="font-size: 20px">Crea tu Usuario</h3>

                    <form id="form-register" action="***REMOVED*** echo $_SERVER['PHP_SELF'];***REMOVED***" method="post" style="display: inline-table; width: 100%">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_user">
                            <label class="mdl-textfield__label" for="reg_user">Ingresa Usuario</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:50%">
                            <input class="mdl-textfield__input" type="password" name="reg_pass">
                            <label class="mdl-textfield__label" for="reg_pass">Ingresa Contraseña (8)</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:50%">
                            <input class="mdl-textfield__input" type="password" name="reg_pass_2">
                            <label class="mdl-textfield__label" for="reg_pass_2">Confirma Contraseña</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_first">
                            <label class="mdl-textfield__label" for="reg_first">Ingresa Tus Nombres</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_last">
                            <label class="mdl-textfield__label" for="reg_last">Ingresa Tus Apellidos</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" name="reg_email">
                            <label class="mdl-textfield__label" for="reg_email">Ingresa Tu Email</label>
                        </div>

                        <br><br>

                        <h3 style="font-size: 20px">Questionario Navideño</h3>
                        <p>Una vez registrado podras modificar <b>casi</b> todos tus respuestas las veces que quieras.</p>
                        <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_1">
                            <label class="mdl-textfield__label" for="reg_question_1">Platicame de ti</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_2">
                            <label class="mdl-textfield__label" for="reg_question_2">¿Que es lo que te disgusta?</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_3">
                            <label class="mdl-textfield__label" for="reg_question_3">Series Favoritas</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_4">
                            <label class="mdl-textfield__label" for="reg_question_4">Peliculas Favoritas</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_5">
                            <label class="mdl-textfield__label" for="reg_question_5">Equipos Favoritos</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_6">
                            <label class="mdl-textfield__label" for="reg_question_6">Musica Favorita</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_7">
                            <label class="mdl-textfield__label" for="reg_question_7">¿Cual ha sido un buen recuerdo Navideño para ti?</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="reg_question_8">
                            <label class="mdl-textfield__label" for="reg_question_8">Si Fueras un <b>Meme</b>, ¿Cual serias?</label>
                        </div>
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="inter_switch">
                            <input type="checkbox" id="inter_switch" name="inter_switch" class="mdl-switch__input" checked>
                            <span class="mdl-switch__label">Quiero participar en el <b>Intercambio de Regalos</b>.</span>
                        </label>
                    </form>
                </div>

                <div id="register-echo"></div>

                <div class="mdl-dialog__actions">
                    <button id="submit-register" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Login</button>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="modal fade" role="dialog">
        <div class="mdl-dialog" role="document" style="margin-left: auto; margin-right: auto;">
            <div style="padding: 0 50px 25px 50px">
                <h1 class="mdl-dialog__title">Login</h1>

                <div class="mdl-dialog__content">
                    <form id="form-login" action="***REMOVED*** echo $_SERVER['PHP_SELF'];***REMOVED***" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input input-login" type="text" name="log_user" id="log_user">
                            <label class="mdl-textfield__label" for="log_user">Usuario</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input input-login" type="password" name="log_pass" id="log_pass">
                            <label class="mdl-textfield__label" for="log_pass">Password</label>
                        </div>
                    </form>
                    <p id="error-login" style="color: red"></p>
                </div>

                <div class="mdl-dialog__actions">
                    <button id="submit-login" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Login</button>
                </div>
            </div>

        </div>
    </section>

    <section id="nav-mobile-menu" class="modal fade" role="dialog">
        <div class="mdl-dialog shadow" role="document">
            <div>
                <h4 class="mdl-dialog__title">
                    <a data-dismiss="modal">Posada Discipulos 2016</a>
                </h4>
                <i class="material-icons" style="">
                    <a data-dismiss="modal">arrow_back</a>
                </i>
                <div class="mdl-dialog__content">
                    <ul>
                        <li><a class="btn_home" data-dismiss="modal">Home</a></li>
                        <li><a class="btn_activities" data-dismiss="modal">Actividades</a></li>
                        <li><a id="btn_register" data-dismiss="modal" data-toggle="modal" data-target="#register">Registro</a></li>
                        <li><a id="btn_register" data-dismiss="modal" data-toggle="modal" data-target="#login"><b>Login</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="success" class="modal fade" role="dialog">
        <div class="mdl-dialog" role="document" style="margin-left: auto; margin-right: auto;">
            <div style="padding: 0 50px 25px 50px">
                <h1 class="mdl-dialog__title">Registro Exitoso</h1>

                <div class="mdl-dialog__content">
                    <p>Pronto recibiras un correo confirmando tu registro. Por mientras ya puedes acceder a tu perfil.</p>
                </div>

                <div class="mdl-dialog__actions">
                    <button id="success-ok" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Chido</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>