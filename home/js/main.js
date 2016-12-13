//Startup
exclusive();
var users = [];
var match = [];

// Clases
var Match = function () {
    this.santa = 0;
    this.giftee = 0;
    this.cardee = 0;
}

function truefalse (value) {
    if(value == 1 || value == "1")
        return true;
    else
        return false;
}

function exclusive () {
    if(giftee === "-1" || inter === "0" || ban === "1")
        $(".gift-enable").toggleClass("disable");
    if(cardee == "-1")
        $(".card-enable").toggleClass("disable");
}


// JQUERY
$("#submit-logout").click(function () {
    $.ajax({
        type: "post",
        url: "/home/php/logout.php",
        success: function (data) {
            console.log("Logout Sucessful.");
            window.location.href = "http://posada.giemper.com";
    ***REMOVED***
***REMOVED***);
});

$("#submit-message").click(function() {
    $(".added").remove();
    var data = $('#form-message').serialize();

    $.ajax({
        data: data,
        type: "post",
        url: "/home/php/message.php",
        success: function (data) {
            console.log("Message Sent.");
            $("#form-message").append(data);
    ***REMOVED***
***REMOVED***);
    $("#message-text").val("");
});

$("#submit-update").click(function () {
    var data = $('#form-update').serialize();
    console.log(data);

    $.ajax({
        data: data,
        type: "post",
        url: "/home/php/update.php",
        success: function (data) {
            console.log("Update Sucessful.");
            $("#form-update").append(data);
    ***REMOVED***
***REMOVED***);
});

$(".sidebar-toggle").click(function () {
    $("#sidebar").toggleClass("toggle");
    $("#directive-cards").toggleClass("toggle");
    $("#navbar").toggleClass("toggle");
});

$("#directive-cards").on("click", "#gift-execute", function () {
    $(".gift-result").remove();
    $("#gift-execute").text("RESET");

    var id = [];
    var blocked = [];
    var used = [];

    users.forEach(function (e) {            
        if(e.Inter === "1" && e.Ban === "0") {
            id.push(parseInt(e.ID));
            blocked.push(e.Blocked);
    ***REMOVED***
***REMOVED***);

    for(var i = 0; i < id.length; i++) {
        var current_id = id[i];
        var block = " " + blocked[i] + " ";
        match.push(new Match());
        match[i].santa = current_id;

        var temp;
        var go = true;
        var count = 0;
        do {
            go = true;
            temp = Math.floor((Math.random() * id.length));

            if(current_id === id[temp])
                go = false;
            else if(used.includes(temp))
                go = false;
            else if(block.includes(" " + id[temp] + " "))
                go = false;

            count++;
            if(count > 100)
                break;
    ***REMOVED*** while(!go);

        if(go) {
            match[i].giftee = id[temp];
            block[temp] = block[temp] + " " + id[temp];
            used.push(temp);
    ***REMOVED***     
    ***REMOVED***
            i = -1;
            match = [];
            used = [];
    ***REMOVED***
***REMOVED***

    for(var i = 0; i < id.length; i++) {
        $('#gift-match').prepend('<h4 class="gift-result" style="font-weight:400; font-size: 14px;">' + mixer(match[i].santa) +' - ' + mixer(match[i].giftee) + '</h4>');
***REMOVED***

    function mixer (number) {
        return (((((number + 3) * 10) / 2) * 7) / 5) - 17;
***REMOVED***

    $("#gift-execute").after('<button id="gift-submit" type="button" style="margin-left: 16px; color: white; background: #3696B5;" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Aceptar</button>');

    $("#gift-submit").click(function () {
        var santa = [];
        var giftee = [];
        match.forEach(function (e) {
            santa.push(e.santa);
            giftee.push(e.giftee);
    ***REMOVED***);

        var data = { 'santa': JSON.stringify(santa), 'giftee': JSON.stringify(giftee) }
        console.log(data);
        $.ajax({
            data: data,
            type: "post",
            url: "/home/php/match.php",
            success: function (data) {
                // $("#gift-submit").after('<p style="color: rgb(139,195,74);">Oh shit! Ya se hizo el match!</p>');
                console.log(data);
        ***REMOVED***
    ***REMOVED***);
***REMOVED***);
});

//ANGULAR
app.controller('MainVars', function ($scope) {
    $scope.name = name;
});

app.controller('AsideVars', function ($scope) {
    $scope.admin = truefalse(admin);
    $scope.Gift_Enable = true;
    $scope.Card_Enable = true;

    if(giftee === "-1" || inter === "0" || ban === "1")
        $scope.Gift_Enable = false;
    if(cardee == "-1")
        $scope.Card_Enable = false;
});

app.controller('AdminVars', function ($scope) {
    $scope.Users = [];
    update();

    function update () {
        users = [];

        $.ajax({
            type: "post",
            url: "/home/php/users.php",
            success: function (data) {
                $scope.Users = $.parseJSON(data);
                users = $scope.Users;
        ***REMOVED***
    ***REMOVED***);
***REMOVED***

    $("#users-list").on("click", ".admin-update", function () {
        var button = $(this);
        var ID = button.prop('title');
        var data = "id=" + ID + "&block=" + $('#input_' + ID).val();

        $.ajax({
            data: data,
            type: "post",
            url: "/home/php/block.php",
            success: function (data) {
                if(data === "oh oh") {
                    $("#button_" + ID).css("background-color", "#C43131");
                    $("#button_" + ID + " i").text("error");
            ***REMOVED***
            ***REMOVED***
                    $("#button_"+ ID +" i").text("done");
            ***REMOVED***
        ***REMOVED***
    ***REMOVED***);
***REMOVED***);
});

app.controller('SantaVars', function ($scope) {
    $scope.q = [];
    $.ajax({
        data: "type=giftee",
        type: "post",
        url: "/home/php/santa.php",
        success: function (data) {
            $scope.q = $.parseJSON(data);
    ***REMOVED***
***REMOVED***);
});

app.controller('CardVars', function ($scope) {
    $scope.q = [];
    $.ajax({
        data: "type=cardee",
        type: "post",
        url: "/home/php/santa.php",
        success: function (data) {
            $scope.q = $.parseJSON(data);
    ***REMOVED***
***REMOVED***);
});