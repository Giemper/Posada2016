<style>
    #directive-cards .header-6 {
        background: url('img/header_admin.png') center / cover;
    }

    #directive-cards .header-6-2 {
        background: url('img/header_santa.png') center / cover;
    }
    #directive-cards .header-6-3 {
        background: url('img/header_card.png') center / cover;
    }
    #directive-cards .header-6-4 {
        background: url('img/header_vote.png') center / cover;
    }

    .card-dock {
        width: 90%;
        max-width: 1280px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
    }

    .card-dock .mdl-card { width: 50%; }
    #directive-cards .card-dock .mdl-card.left { margin-right: 10px; }
    #directive-cards .card-dock .mdl-card.right { margin-left: 10px; }

    #users-repeat h4 { font-size: 16px; font-weight: bold; }
    #users-repeat .disable { color: #ABB6BA; font-weight: normal; }

    @media only screen and (max-width: 750px), screen and (max-height: 585px) {
        .card-dock {
            width: 100%;
            display: block;
        }

        .card-dock .mdl-card { width: 100%; }
        #directive-cards .card-dock .mdl-card.left { margin-right: 0; }
        #directive-cards .card-dock .mdl-card.right { margin-left: 0; }
    }

</style>
<div id="users-list" class="mdl-card">
    <div class="mdl-card__title header-6"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Admin Panel</h2>
    </div>
    <div class="mdl-card__supporting-text" ng-controller="AdminVars">
        <h1>Lista de Usuarios y Compatibilidad</h1>
        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="participant">
            <input type="checkbox" id="participant" class="mdl-switch__input" ng-model="participant">
            <span class="mdl-switch__label">Ver solo participantes del Gran Intercambio.</span>
        </label>
        <hr style="margin: 16px 0">
        <div>
            <div id="users-repeat" ng-repeat="x in Users" class="mdl-row" style="display: flex" ng-hide="x.Inter == 0 && participant">
                <h4 ng-class="{'disable' : x.Inter == 0 }" class="mdl-cell mdl-cell--5-col">{{x.ID}} - {{x.FirstName}} {{x.LastName}}</h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--6-col" style="padding:0">
                    <input ng-disabled="x.Inter == 0" class="mdl-textfield__input" type="text" id="input_{{x.ID}}" name="input_{{x.ID}}" style="width:100%;" value="{{x.Blocked}}">
                </div>
                <button ng-disabled="x.Inter == 0" id="button_{{x.ID}}" title="{{x.ID}}" type="button" style="color: white" class="admin-update mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect mdl-cell mdl-cell--1-col"><i class="material-icons">backup</i></button>
            </div>
        </div>
    </div>
</div>

<div class="card-dock">
    <div class="mdl-card left">
        <div class="mdl-card__title header-6-2"></div>
        <div class="mdl-card__title header-title">
            <h2 class="mdl-card__title-text">Match Regalos</h2>
        </div>
        <div id="gift-match" class="mdl-card__supporting-text">
            <button id="gift-execute" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Executar</button>
        </div>
    </div>

    <div class="mdl-card right">
        <div class="mdl-card__title header-6-3"></div>
        <div class="mdl-card__title header-title">
            <h2 class="mdl-card__title-text">Match Tarjetas</h2>
        </div>
        <div id="card-match" class="mdl-card__supporting-text">
            <button id="card-execute" type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Executar</button>
        </div>
    </div>    
</div>

<div class="mdl-card">
    <div class="mdl-card__title header-6-4"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Resultados de Votos</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <p>Esta funcion la dejare hasta el ultimo. Probablemente no este lista hasta el 20 algo de Diciembre.</p>
    </div>
</div>