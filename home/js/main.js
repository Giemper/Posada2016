//Startup
exclusive();
var match = [];

// Clases
var Match = function () {
    this.santa = 0;
    this.giftee = 0;
}

function truefalse(value) {
    if (value == 1 || value == "1")
        return true;
    else
        return false;
}

function exclusive() {
    if (giftee === "-1" || inter === "0" || ban === "1")
        $(".gift-enable").toggleClass("disable");
    if (cardee == "-1")
        $(".card-enable").toggleClass("disable");
}

var random = Math.floor((Math.random() * 5) + 1);
function shuffle(a) {
    var temp, rand;
    for (var i = a.length; i; i--) {
        rand = Math.floor(Math.random() * i);
        temp = a[i - 1];
        a[i - 1] = a[rand];
        a[rand] = temp;
***REMOVED***
}

function mixer(number) {
    return ((number + 3) * 7) - random;
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

$("#submit-message").click(function () {
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

$("#submit-vote").click(function () {
    // var data = $("#form-1").serialize();
    //var data = $('.vote-check:checked').map(function(){return {"Category": this.title, "Vote": this.value}}).get();
    var data = new Array(10);
    for (var i = 0; i < 10; i++) {
        data[i] = $('.vote-check.q-' + (i + 1) + ':checked').map(function () { return { "Category": this.title, "Vote": this.value } }).get();
***REMOVED***
    var serial = data.serializeArray();
    console.log(serial);
});

$(".sidebar-toggle").click(function () {
    $("#sidebar").toggleClass("toggle");
    $("#directive-cards").toggleClass("toggle");
    $("#navbar").toggleClass("toggle");
});

//ANGULAR
app.controller('MainVars', function ($scope) {
    $scope.name = name;
});

app.controller('AsideVars', function ($scope) {

    $scope.admin = truefalse(admin);
    $scope.Gift_Enable = true;
    $scope.Card_Enable = true;

    if (giftee === "-1" || inter === "0" || ban === "1")
        $scope.Gift_Enable = false;
    if (cardee == "-1")
        $scope.Card_Enable = false;
});

app.controller('UserVars', function ($scope) {
    $scope.Users = [];
    $scope.Index = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $scope.Category = ['El/La borracho/borracha',
        'El/La que más necesita a Jesús',
        'El/La que nadie sabe qué hace',
        'El/La nini',
        'El/La que su mama le dice que es "especial"',
        'El/La que ya no vive en Mexicali porque la ciudad es un rancho, y le dicen a todos que tienen que salir y explorar el mundo',
        'El/La que juega a las escondidas cada vez que se hace una juntada',
        'El/La que no tomo vida suero oral de niño/niña',
        'El/La más Kawaii',
        'Mr./Mrs. 2016'];
    var check_count = ["q-1", "q-2", "q-3", "q-4", "q-5", "q-6", "q-7", "q-8", "q-9", "q-10"];
    check_count.forEach(function (e) { check_count[e] = 0; });

    $.ajax({
        type: "post",
        url: "/home/php/users.php",
        success: function (data) {
            $scope.Users = $.parseJSON(data);
    ***REMOVED***
***REMOVED***);

    $("#directive-cards").on("click", ".vote-check", function () {
        var val = $(this).val();
        var title = $(this).prop('title');
        var num = parseInt(title.replace("q-", ""));

        if ($(".vote-check." + title + ".op-" + val).prop('checked')) {
            if (check_count[title] < 3) {
                $(".vote-check.op-" + val).not(this).prop('disabled', true);
                $(".vote-option label.op-" + val).parent().not($(".vote-option label." + title + ".op-" + val).parent()).hide();
                // $(".vote-option label.op-" + val).not($(".vote-option label." + title + ".op-" + val)).toggleClass("disable");

                check_count[title]++;
                if (check_count[title] == 3) {
                    $(".vote-option label." + title).find(".vote-check").each(function (index, elem) {
                        if (!$(elem).prop('checked')) {
                            $(elem).parent().toggleClass("disable");
                            $(elem).prop('disabled', true);
                    ***REMOVED***
                ***REMOVED***);
                    $('html,body').animate({
                        scrollTop: $(".head-" + (num + 1)).offset().top - 80
                ***REMOVED***,
                        'slow');
            ***REMOVED***
            ***REMOVED***
                    $('html,body').animate({
                        scrollTop: $(".head-" + num).offset().top - 80
                ***REMOVED***,
                        0);
            ***REMOVED***
        ***REMOVED***
    ***REMOVED***
    ***REMOVED***
            if (check_count[title] == 3) {
                $(".vote-option label." + title).find(".vote-check").each(function (index, elem) {
                    if ($(elem).prop('disabled')) {
                        $(elem).parent().toggleClass("disable");
                        $(elem).prop('disabled', false);
                ***REMOVED***
            ***REMOVED***);
        ***REMOVED***

            $(".vote-check.op-" + val).prop('disabled', false);
            $(".vote-option label.op-" + val).parent().show();
            check_count[title]--;

            $('html,body').animate({
                scrollTop: $(".head-" + num).offset().top - 80
        ***REMOVED***,
                0);

            $(".vote-check.op-" + val).each(function (index, elem) {
                if ($(elem).parent().hasClass("disable"))
                    $(elem).prop('disabled', true);
        ***REMOVED***);
    ***REMOVED***

***REMOVED***);
});

app.controller('AdminVars', function ($scope) {
    $scope.Users = [];
    update();

    function update() {
        $.ajax({
            type: "post",
            url: "/home/php/admin.php",
            success: function (data) {
                $scope.Users = $.parseJSON(data);
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
                if (data === "oh oh") {
                    $("#button_" + ID).css("background-color", "#C43131");
                    $("#button_" + ID + " i").text("error");
            ***REMOVED***
            ***REMOVED***
                    $("#button_" + ID + " i").text("done");
            ***REMOVED***
        ***REMOVED***
    ***REMOVED***);
***REMOVED***);

    var card_clicked = false;
    $("#directive-cards").on("click", "#card-execute", function () {
        $(".card-result").remove();
        $("#card-execute").text("RESET");

        match = [];
        var id = [];
        var used = [];
        var blocked = [];

        $scope.Users.forEach(function (e) {
            id.push(parseInt(e.ID));
            blocked.push(e.Giftee);
    ***REMOVED***);

        for (var i = 0; i < id.length; i++) {
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

                if (current_id === id[temp])
                    go = false;
                else if (used.includes(temp))
                    go = false;
                else if (block.includes(" " + id[temp] + " "))
                    go = false;

                count++;
                if (count > 100)
                    break;
        ***REMOVED*** while (!go);

            if (go) {
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

        shuffle(match);
        for (var i = 0; i < id.length; i++) {
            $('#card-match').prepend('<h4 class="card-result" style="font-weight:400; font-size: 14px;">' + mixer(match[i].santa) + ' - ' + mixer(match[i].giftee) + '</h4>');
    ***REMOVED***

        // Add upload button
        if (!card_clicked) {
            card_clicked = true;
            $("#card-execute").after('<button id="card-submit" type="button" style="margin-left: 16px; color: white; background: #3696B5;" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Aceptar</button>');
    ***REMOVED***

        // Upload to DB
        $("#card-submit").click(function () {
            var santa = [];
            var giftee = [];
            match.forEach(function (e) {
                santa.push(e.santa);
                giftee.push(e.giftee);
        ***REMOVED***);

            var data = { 'santa': JSON.stringify(santa), 'cardee': JSON.stringify(giftee) }

            $.ajax({
                data: data,
                type: "post",
                url: "/home/php/card_match.php",
                success: function (data) {
                    $("#card-submit").after('<p style="color: rgb(139,195,74);">Oh shit! Ya se hizo el match!</p>');
                    $("#card-submit").remove();
                    console.log(data);
            ***REMOVED***
        ***REMOVED***);
    ***REMOVED***);
***REMOVED***);

    var clicked = false;
    $("#directive-cards").on("click", "#gift-execute", function () {
        $(".gift-result").remove();
        $("#gift-execute").text("RESET");

        match = [];
        var id = [];
        var blocked = [];
        var used = [];

        $scope.Users.forEach(function (e) {
            if (e.Inter === "1" && e.Ban === "0") {
                id.push(parseInt(e.ID));
                blocked.push(e.Blocked);
        ***REMOVED***
    ***REMOVED***);

        for (var i = 0; i < id.length; i++) {
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

                if (current_id === id[temp])
                    go = false;
                else if (used.includes(temp))
                    go = false;
                else if (block.includes(" " + id[temp] + " "))
                    go = false;

                count++;
                if (count > 100)
                    break;
        ***REMOVED*** while (!go);

            if (go) {
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

        shuffle(match);
        for (var i = 0; i < id.length; i++) {
            $('#gift-match').prepend('<h4 class="gift-result" style="font-weight:400; font-size: 14px;">' + mixer(match[i].santa) + ' - ' + mixer(match[i].giftee) + '</h4>');
    ***REMOVED***

        // Add upload button
        if (!clicked) {
            clicked = true;
            $("#gift-execute").after('<button id="gift-submit" type="button" style="margin-left: 16px; color: white; background: #3696B5;" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect">Aceptar</button>');
    ***REMOVED***

        // Upload to DB
        $("#gift-submit").click(function () {
            var santa = [];
            var giftee = [];
            match.forEach(function (e) {
                santa.push(e.santa);
                giftee.push(e.giftee);
        ***REMOVED***);

            var data = { 'santa': JSON.stringify(santa), 'giftee': JSON.stringify(giftee) }

            $.ajax({
                data: data,
                type: "post",
                url: "/home/php/match.php",
                success: function (data) {
                    $("#gift-submit").after('<p style="color: rgb(139,195,74);">Oh shit! Ya se hizo el match!</p>');
                    $("#gift-submit").remove();
                    console.log(data);
            ***REMOVED***
        ***REMOVED***);
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
        type: "post",
        url: "/home/php/cardee.php",
        success: function (data) {
            $scope.q = $.parseJSON(data);
    ***REMOVED***
***REMOVED***);
});