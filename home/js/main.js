//Startup
exclusive();
var users;
var lego = "lego";





// Clases
function truefalse (value) {
    if(value == 1)
        return true;
    else
        return false;
}

function exclusive () {
    if(giftee == -1 || inter == 0) {
        

***REMOVED***
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

$("#users-repeat").on("click", ".admin-update", function () {
    var ID = $(".admin-update").prop('title');
    console.log(ID);
    console.log("lol");
});

//ANGULAR
app.controller('MainVars', function ($scope) {
    $scope.name = name;
});

app.controller('AsideVars', function ($scope) {
    $scope.admin = truefalse(admin);
    $scope.Enable = true;

    if(giftee == -1 || inter == 0) {
        $scope.Enable = false;
        $(".enable").toggleClass("disable");
        
***REMOVED***
});

app.controller('AdminVars', function ($scope) {
    $scope.Users = [];
    $scope.Blocked = [];
    update("users");

    function update (file) {
        $.ajax({
            type: "post",
            url: "/home/php/" + file + ".php",
            success: function (data) {
                if(file === "users") {
                    $scope.Users = $.parseJSON(data);
                    console.log($scope.Users);
            ***REMOVED***
                else if(file === "blocked") {

            ***REMOVED***
        ***REMOVED***
    ***REMOVED***);
***REMOVED***
});