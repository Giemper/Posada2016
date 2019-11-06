<?php
    session_start();
    include_once 'connect.php';
    
    $date = getDate();
    $day = $date["mday"];
    $month = $date["mon"];
    $year = $date["year"];
    $format = $month . "/" . $day . "/" . $year;

    $result = mysqli_query($con, "SELECT Vote FROM Daily WHERE ID = ".$_SESSION['user_id']." AND DATE = '".$format."';");
    $vote = mysqli_num_rows($result);
    mysqli_close($con);
?>
<style>
    #directive-cards .header-0 {
        background: url('img/header_home.png') center / cover;
    }

    #directive-cards .header-0-1 {
        background: url('img/header_home1.png') center / cover;
    }
    h3 {
        font-size: 20px;
        padding-left: 25px;
        padding-top: 3px;
    }

    #votepad {
        display: inline-flex; 
        padding: 10px 10px 0 10px; 
        height: 200px;
    }

    .votepad-div {
        min-height: 0;
        height: 100%;
        cursor: pointer;
    }

    .votepad-circle {
        width: 123px;
        height: 135px;
        position: relative;
        overflow: hidden;
        border-radius: 50%;
        border-style: solid;
        border-width: 6px;
        border-color: white;
        margin: 12px auto 5px auto;
    }

    .votepad-div img {
        display: inline;
        margin: 0 auto;
        height: 100%;
        width: auto;
    }

    .votepad-team {
        color: white;
        text-align: center;
        text-transform: uppercase;
        margin: 10px 0 0 0;
        font-size: 25px;
        font-weight: bold;
    }

    .votepad-div img,
    .votepad-team {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .votepad-overlay {
        height: 220px;
        background-color: rgba(0,0,0,0.5);
        z-index: 5;
        margin-top: -210px;
    }

    .votepad-overlay p {
        color: white;
        text-align: center;
        font-size: 25px;
    }

    .off {
        display: none;
    }
    
    @media only screen and (max-width: 380px) {
        .votepad-team {
            font-size: 20px;
        }
    }
</style>

<?php
    $hector = rand(0, 9);

    if($hector == 2) {
        ?>
        <style>
            #directive-cards .header-0-1 {
                background: url('img/hector1.jpg') top / cover;
            }

            #directive-cards .header-0 {
                background: url('img/hector2.jpg') top / cover;
            }
        </style>
        <?php
    }
    else if ($hector == 8) {
        ?>
        <style>
            #directive-cards .header-0-1 {
                background: url('img/hector3.jpg') center / cover;
            }

            #directive-cards .header-0 {
                background: url('img/hector4.jpg') top / cover;
            }
        </style>
        <?php
    }
?>

<header class="mdl-card">
    <div class="mdl-card__supporting-text">
        <h1>Bienvenido {{name}}!</h1>
        <p>Hola hola. Oficialmente ya estan listos los resultados de ambos intercambios. ¿Ya sabes que le vas a regalar a tu Giftee (Si Estas participando)? ¿Ya sabes que le vas a escribir a tu Cardee (No te queda de otra)? En la semana se abriran las votaciones para los Discipulos Awards 2016. Han tardado un poco, pero no es mi culpa, es culpa de las series que estoy viendo ahorita.</p>
    </div>
</header>

<div class="mdl-card" ng-controller="DailyVars">
    <div class="mdl-card__title header-0-1"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Encuesta Diaria</h2>
    </div>
    <div id="question-text" class="mdl-card__supporting-text" style="margin-bottom:0">
        <p id="question-angular"><b>{{question}}</b></p>
    </div>
    <div id="votepad">
        <div class="mdl-card votepad-div left" style="background-color:#8DB5D6; margin-right:5px" title="left">
            <div class="votepad-circle">
                <img src="{{image1}}" alt="">
            </div>
            <p class="votepad-team">#team{{team1}}</p>
        </div>
        <div class="mdl-card votepad-div right" style="background-color:#DB9C9C; margin-left:5px" title="right">
            <div class="votepad-circle">
                <img src="{{image2}}" alt="">
            </div>
            <p class="votepad-team">#team{{team2}}</p>
        </div>
    </div>
    <div class="votepad-overlay <?php if($vote == 0) { ?>off<?php } ?>">
        <p style="margin-top: 60px;">¡Gracias por votar!</p>
        <p title="Mentira, siempre seran Genry y Vidal">Regresa mañana para una nueva pregunta con nuevos candidatos.</p>
    </div>
</div>

<div class="mdl-card">
    <div class="mdl-card__title header-0"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Noticias</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <div style="display: inline-flex">
            <h1>Christmas Work</h1>
            <h3>11/25/16</h3>
        </div>
        <p>Gracias por usar la nueva página de la Posada Discípulos. Este es el tercer año consecutivo donde en el cual desarrollamos un “encuentro digital” para ayudarnos con todo el evento. No puedo creer que ya van tres veces que hago esto desde cero, pero vale completamente la pena. 
            <br><br>
            Este año las reglas cambiaron un poco. Habrá dos intercambios separados: el clásico intercambio de regalos que se hace cada ocasión donde la participación es completamente opcional, y un intercambio “pequeño” donde cambiaremos tarjetas navideñas. Este nuevo intercambio será obligatorio para todos los que asistan a la posada, pero tiene la meta de ser completamente accesible. Sabemos que algunos no disfrutan participar en intercambios “sorpresa”, tienen miedo de “gente desconocida”, o no tienen los fondos para participar en algo más grande. La tarjeta tiene que ser algo fácil, breve, bonito y de mínima inversión. Puedes comprarla en una tienda o diseñarlo tú mismo, siempre y cuando transmitas el bello mensaje navideño.
            <br><br>
            También regresan por segunda ocasión los Discípulos Awards, en donde se “premia” a los distintos miembros del grupo. Estamos pensando en cómo incluir a TODOS los asistentes de la posada. Más adelante daremos más noticias sobre la dinámica y la fecha en que se puede empezar a votar.
            <br><br>
            Si llegaste hasta este punto en la nota, gracias. Espero que disfrutes usar tanto este sitio como yo disfrute desarrollarlo. Me atrevo a decir que esta edición de la página será la mejor que hemos tenido, y prometo que todavía hay muchas sorpresas que encontrar aquí en el transcurso del mes.
            <br><br>
            <b>- Guillermo</b>
        </p>
    </div>    
</div>