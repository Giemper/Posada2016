<style>
    #directive-cards .header-1 {
        background: url('img/header_santa.png') center / cover;
    }
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
    span.name {
        font-size: 22px;
        font-weight: bold;
    }
    h2 {
        font-size: 22px;
    }
</style>

<div class="mdl-card__title header-1"></div>
<div class="mdl-card__title header-title">
    <h2 class="mdl-card__title-text">Intercambio de Regalos</h2>
</div>
<div class="mdl-card__supporting-text" ng-controller="SantaVars">
    <h1>Tu Giftee: </h1>
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