var app = angular.module('posada', []);

app.run(function () {
    var mdlUpgradeDom = false;

    setInterval(function() {
        if (mdlUpgradeDom) {
            componentHandler.upgradeDom();
            mdlUpgradeDom = false;
    ***REMOVED***
***REMOVED***, 200);

    var observer = new MutationObserver(function () {
        mdlUpgradeDom = true;
***REMOVED***);

    observer.observe(document.body, {
        childList: true,
        subtree: true
***REMOVED***);
});

app.controller("TabController", function(){
    this.tab = 0;
    this.selectTab = function(setTab){
        this.tab = setTab;
***REMOVED***;
    this.isSelected = function(checkTab){
        return this.tab === checkTab;
***REMOVED***;
});

app.directive('contentHome', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-home.php'
***REMOVED***
});

app.directive('contentSanta', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-santa.php'
***REMOVED***
});

app.directive('contentCard', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-card.php'
***REMOVED***
});

app.directive('contentMessage', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-message.php'
***REMOVED***
});

app.directive('contentVote', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-vote.php'
***REMOVED***
});

app.directive('contentEdit', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-edit.php'
***REMOVED***
});

app.directive('contentAdmin', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-admin.php'
***REMOVED***
});