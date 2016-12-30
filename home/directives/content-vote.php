<style>
    #directive-cards .header-4 {
        background: url('img/header_vote.png') center / cover;
***REMOVED***

    #vote-panel .vote-option {
        padding: 8px 20px;
        background-color: #f3f7f2;
        box-shadow: 0px 0px 15px #CACFD9;
***REMOVED***

    #vote-panel .vote-option label.disable {
        opacity: 0.5;
***REMOVED***

    #vote-option span {
        font-size: 13px;
***REMOVED***

    #vote-panel h3 {
        padding-left: 0;
***REMOVED***

    @media only screen and (max-width: 750px), screen and (max-height: 585px) {
        #vote-panel {
            width:95%;
    ***REMOVED***
***REMOVED***
</style>
<div class="mdl-card__title header-4"></div>
<div class="mdl-card__title header-title">
    <h2 class="mdl-card__title-text">Discipulos Awards 2016</h2>
</div>
<div id="vote-panel" class="mdl-card__supporting-text" ng-controller="UserVars">
    <p>Los Discípulos Awards regresan más grandes que nunca. Este año para galardonar a nuestros amigos más tremendos. Tendr</p>
    <div ng-repeat="i in Index" style="width:100%">
        <h3 class="head-{{i}}">Pregunta #{{i}} - {{Category[i-1]}}</h3>
        <form method="post" id="form-{{i}}" class="mdl-grid">
            <div ng-repeat="x in Users" class="vote-option mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                <label class="mdl-checkbox q-{{i}} op-{{x.ID}} mdl-js-checkbox mdl-js-ripple-effect" for="pregunta-{{i}}-{{x.ID}}">
                    <input type="checkbox" id="pregunta-{{i}}-{{x.ID}}" class="vote-check q-{{i}} op-{{x.ID}} mdl-checkbox__input" value="{{x.ID}}" title="q-{{i}}">
                    <span class="mdl-checkbox__label">{{x.FirstName}} {{x.LastName}}</span>
                </label>
            </div>
        </form>
        

        <hr>
    </div>
</div>