<style>
    #directive-cards .header-2 {
        background: url('img/header_card.png') center / cover;
***REMOVED***
    h1 {
        font-size: 25px;
        font-weight: bold;
***REMOVED***
    p.name {
        font-size: 22px;
        font-weight: bold;
***REMOVED***
    h2 {
        font-size: 22px;
***REMOVED***
</style>
<div class="mdl-card__title header-2"></div>
<div class="mdl-card__title header-title">
    <h2 class="mdl-card__title-text">Intercambio de Tarjetas</h2>
</div>
<div class="mdl-card__supporting-text" ng-controller="CardVars">
    <h1>Tu Cardee: </h1>
    <span class="name">{{q[0]["FirstName"]}} {{q[0]["LastName"]}}</span>
    <hr style="margin: 16px 0">

    <h2>Platicame de ti</h2>
    <p>{{q[0]["q1"]}}</p>

    <h2>¿Que es lo que te disgusta?</h2>
    <p>{{q[0]["q2"]}}</p>

    <h2>Series Favoritas</h2>
    <p>{{q[0]["q3"]}}</p>

    <h2>Peliculas Favoritas</h2>
    <p>{{q[0]["q4"]}}</p>

    <h2>Equipos Favoritos</h2>
    <p>{{q[0]["q5"]}}</p>

    <h2>Musica Favorita</h2>
    <p>{{q[0]["q6"]}}</p>
    
    <h2>¿Cual ha sido un buen recuerdo Navideño para ti?</h2>
    <p>{{q[0]["q7"]}}</p>

    <h2>Si fueras un <b>Meme</b>, ¿Cual serias?</h2>
    <p>{{q[0]["q8"]}}</p>
</div>