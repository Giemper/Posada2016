var app = angular.module('posada', []);

app.run(function () {
    var mdlUpgradeDom = false;

    setInterval(function() {
        if (mdlUpgradeDom) {
            componentHandler.upgradeDom();
            mdlUpgradeDom = false;
        }
    }, 200);

    var observer = new MutationObserver(function () {
        mdlUpgradeDom = true;
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});

app.controller("TabController", function(){
    this.tab = 0;
    this.selectTab = function(setTab){
        this.tab = setTab;
    };
    this.isSelected = function(checkTab){
        return this.tab === checkTab;
    };
});

app.directive('contentHome', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-home.php'
    }
});

app.directive('contentSanta', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-santa.php'
    }
});

app.directive('contentCard', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-card.php'
    }
});

app.directive('contentMessage', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-message.php'
    }
});

app.directive('contentVote', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-vote.php'
    }
});

app.directive('contentEdit', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-edit.php'
    }
});

app.directive('contentAdmin', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-admin.php'
    }
});

app.directive('contentSanic', function () {
    return {
        restrict: 'E',
        templateUrl: 'directives/content-sanic.php'
    }
});