app.controller('DailyVars', function ($scope) {
    $scope.question = "¯\\_(ツ)_/¯";
    $scope.team1 = "genry";
    $scope.team2 = "vidal";
    
    if(dater("today") == dater("11/30/2016"))
        $scope.question = "Quien es mas YOLO?";
    else if(dater("today") == dater("12/01/2016"))
        $scope.question = "Si tuvieras que escoger a alguien para pasar una eternidad en una isla.. quien seria?";
});

function dater (date) {
    if(date == "today")
        var day = new Date();
    else
        var day = new Date(date);
    var exactday = day.setHours(0,0,0,0);
    return exactday;
}

$("#votepad").click(function () {
    // var side = $(this).prop('title');
    // console.log(side);
    console.log("lol");
});

$('#directive-cards').on('click', '.votepad-div', function() {
    var side = $(this).prop('title');
    console.log(side);
});