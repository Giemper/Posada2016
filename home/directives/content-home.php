<style>
    #directive-cards .header-0 {
        background: url('https://phlow.github.io/feeling-responsive/images/unsplash_brooklyn-bridge_header.jpg') center / cover;
***REMOVED***
    h3 {
        font-size: 20px;
        padding-left: 25px;
        padding-top: 3px;
***REMOVED***

    #votepad {
        display: inline-flex; 
        padding: 10px 10px 0 10px; 
        height: 200px;
***REMOVED***

    .votepad-div {
        min-height: 0;
        height: 100%;
        cursor: pointer;
***REMOVED***

    .votepad-circle {
        width: 135px;
        height: 135px;
        position: relative;
        overflow: hidden;
        border-radius: 50%;
        margin: 12px auto 5px auto;
***REMOVED***

    .votepad-div img {
        display: inline;
        margin: 0 auto;
        height: 100%;
        width: auto;
***REMOVED***

    .votepad-team {
        color: white;
        text-align: center;
        text-transform: uppercase;
        margin: 10px 0 0 0;
        font-size: 25px;
        font-weight: bold;
***REMOVED***

    .votepad-div img,
    .votepad-team {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
***REMOVED***
    
    @media only screen and (max-width: 380px) {
        .votepad-team {
            font-size: 20px;
    ***REMOVED***
***REMOVED***
</style>

<header class="mdl-card">
    <div class="mdl-card__supporting-text">
        <h1>Bienvenido {{name}}!</h1>
        <p>Hola hola. Gracias por registrarte, pronto sera el "match" para ambos intercambios. Hasta entonces, te invitamos a que explores la pagina, y que edites tu información para hacer mas claro tu perfil. Nos vemos el 30 de Diciembre.</p>
    </div>
</header>

<div class="mdl-card" ng-controller="DailyVars">
    <div style="margin: 20px 30px 0 30px;">
        <h1 style="text-align: center">Encuesta Diaria</h1>
        <p><b>{{question}}</b></p>
    </div>
    <div id="votepad">
        <div class="mdl-card votepad-div" style="background-color:#8DB5D6; margin-right:5px" title="left">
            <div class="votepad-circle">
                <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person.png" alt="">
            </div>
            <p class="votepad-team">#team{{team1}}</p>
        </div>
        <div class="mdl-card votepad-div" style="background-color:#DB9C9C; margin-left:5px" title="right">
            <div class="votepad-circle">
                <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person.png" alt="">
            </div>
            <p class="votepad-team">#team{{team2}}</p>
        </div>
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
