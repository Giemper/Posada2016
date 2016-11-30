$(".btn_home").click(function() {
    $('html,body').animate({
        scrollTop: $("#intro").offset().top},
        'slow');
});

$(".btn_activities").click(function() {
    $('html,body').animate({
        scrollTop: $("#highlight").offset().top - 80},
        'slow');
});

$("#submit-register").click(function () {
    var data = $('#form-register').serialize();
    $("#register-echo").empty();

    $.ajax({
        data: data,
        type: "post",
        url: "/php/register.php",
        success: function (data) {
            if(data.length > 0) {
                $("#register-echo").append(data);
        ***REMOVED***
        ***REMOVED***
                console.log("AJAX worked.");
                $("#register").modal("toggle");
                $("#success").modal("toggle");
                $("input").val(null);
        ***REMOVED***
    ***REMOVED***
***REMOVED***);
});

$("#submit-login").click(function () {
    Login();
});

$(".input-login").keypress(function (key) {
    if(key.which == 13) {
        Login();
***REMOVED***
});

function Login () {
    var user = $("#log_user").val();
    var pass = $("#log_pass").val();
    
    if(user != "" && pass != "") {
        var data = $("#form-login").serialize();

        $.ajax({
            data: data,
            type: "post",
            url: "/php/login.php",
            success: function (data) {
                console.log(data);
                console.log("Login AJAX worked.");
                window.location.href = "/home/";
        ***REMOVED***
    ***REMOVED***);
***REMOVED***

***REMOVED***
        $("#error-login").text("Ingresa todos los datos por favor.")
***REMOVED***
}