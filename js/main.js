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

    $.ajax({
        data: data,
        type: "post",
        url: "/php/register.php",
        success: function (data) {
            console.log(data);
            console.log("AJAX worked.");
    ***REMOVED***
***REMOVED***);
});

$("#submit-login").click(function () {
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
});