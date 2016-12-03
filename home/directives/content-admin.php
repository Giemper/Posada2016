<style>
    #directive-cards .header-6 {
        background: url('img/header_admin.png') center / cover;
***REMOVED***

    #directive-cards .header-6-2 {
        background: url('img/header_santa.png') center / cover;
***REMOVED***
    #directive-cards .header-6-3 {
        background: url('img/header_card.png') center / cover;
***REMOVED***
    #directive-cards .header-6-4 {
        background: url('img/header_vote.png') center / cover;
***REMOVED***
</style>
<div class="mdl-card">
    <div class="mdl-card__title header-6"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Admin Panel</h2>
    </div>
    <div class="mdl-card__supporting-text" ng-controller="AdminVars">
        <h1>Lista de Usuarios y Compatibilidad</h1>
        <div>
            <div id="users-repeat" ng-repeat="x in Users" class="mdl-row" style="display: flex">
                <h4 ng-show="x.Inter == 1" style="font-size: 16px" class="mdl-cell mdl-cell--4-col">{{x.ID}} - {{x.FirstName}} {{x.LastName}}</h4>
                <h4 ng-show="x.Inter == 0" style="font-size: 16px; color: #B89695" class="mdl-cell mdl-cell--4-col">{{x.ID}} - {{x.FirstName}} {{x.LastName}}</h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--6-col" style="padding:0">
                    <input class="mdl-textfield__input" type="text" name="input_{{x.ID}}" style="width:100%;">
                </div>
                <button id="button_{{x.ID}}" title="{{x.ID}}" type="button" style="color: white" class="admin-update mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect mdl-cell mdl-cell--2-col">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="mdl-card">
    <div class="mdl-card__title header-6-2"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Match Regalos</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <button type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Executar</button>
    </div>
</div>

<div class="mdl-card">
    <div class="mdl-card__title header-6-3"></div>
    <div class="mdl-card__title header-title">
        <h2 class="mdl-card__title-text">Match Tarjetas</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <button type="button" style="color: white" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Executar</button>
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