app.controller('DailyVars', function ($scope) {
    $scope.question = "¯\\_(ツ)_/¯";
    $scope.team1 = "genry";
    $scope.team2 = "vidal";
    $scope.image1 = "img/vote_genry.jpg";
    $scope.image2 = "img/vote_vidal.jpg";
    
    if(dater("today") == dater("12/01/2016"))
        $scope.question = "Dia #1 - ¿Quien es mas YOLO?";
    else if(dater("today") == dater("12/02/2016"))
        $scope.question = "Dia #2 - Si tuvieras que escoger a alguien para pasar el resto de tu vida en una isla desierta.. ¿Quien seria?";
    else if(dater("today") == dater("12/03/2016"))
        $scope.question = "Dia #3 - Es el año 2028, Rusia ha invadido y conquistado exitosamente gran parte del continente americano. Un pequeño grupo de rebeldes elititas se preparan para ir a la guerra contra Mecha-Putin. ¿Quien es el lider del Frente Neo-Azteca Nacional para el Derecho de los Hombres Incandescentes?";
    else if(dater("today") == dater("12/04/2016"))
        $scope.question = "Dia #4 - ¿Cuantas chupadas toma para llegar al centro de una Tutsi-Pop?";
    else if(dater("today") == dater("12/05/2016")) {
        $scope.question = "Dia #5 - ¿Cual de ellos es tu tipo de Vidal Favorito?";
        $scope.team2 = "Sonic";
        $scope.image2 = "img/vote_sonic.jpg";
***REMOVED***
    else if(dater("today") == dater("12/06/2016"))
        $scope.question = "Dia #6 - Knock, Knock ¿Quien es?";
    else if(dater("today") == dater("12/07/2016"))
        $scope.question = "Dia #7 - En una granja avícola se producen 12,384 pollitos, los mismos que serán transportados en cajas con ventilación en las que caben 96 pollitos. ¿Cuantas cajas se necesitan para transportar a todos los pollitos?";
    else if(dater("today") == dater("12/08/2016"))
        $scope.question = "Dia #8 - Who let the dogs out?";
    else if(dater("today") == dater("12/09/2016"))
        $scope.question = "Dia #9 - En la nueva entrega de la exitosa franquicia de libros 'Discipulos del Amor' del aclamado autor Hector Manuel Elias Oliver, ___________ debera revelar su más grande secreto a su peor enemigo. ¿Podra ___________ salvar la relación con su esposa y el mundo? ¿O vera como todo su mundo cae sobre el?";
    else if(dater("today") == dater("12/10/2016")) {
        $scope.question = "Dia #10 - Fuck, Marry, Kill: __________, Thomas the Tank Engine, Donald Trump";
        $scope.team1 = "genrykun";
        $scope.image1 = "img/vote_genrykun.jpg"
***REMOVED***
    else if(dater("today") == dater("12/12/2016"))
        $scope.question = "Dia #12 - ¿Quien puso una serpiente en mi bota?";
    else if(dater("today") == dater("12/13/2016"))
        $scope.question = "Día #13 - Are we Humans? Or are we _______ ?";
    else if(dater("today") == dater("12/14/2016"))
        $scope.question = "Día #14 - A little bit of Monica in my life. A little bit of Erica by my side. A little bit of Rita is all I need. A little bit of ____________ makes me your man.";
    else if(dater("today") == dater("12/15/2016"))
        $scope.question = "Día #15 - ¿Quien de estos dos galanazos tiene la mejor posibilidad de actuar en la Pelicula Autobiografica del Dr. Gustavo Ortiz como el personaje principal?";
    else if(dater("today") == dater("12/16/2016"))
        $scope.question = "Día #16 - ¿Quien sera elegido como el chambelan de Ruby en sus XV?";
    else if(dater("today") == dater("12/17/2016"))
        $scope.question = "Día #17 - 8 de Cada __________ prefieren Whiskas";
    else if(dater("today") == dater("12/18/2016")) {
        $scope.question = "Dia #18 - ¿Quien es el Discipulo favorito de todos los niños?";
        $scope.team1 = "Trump";
        $scope.image1 = "img/vote_trump.jpg";
***REMOVED***
    else if(dater("today") == dater("12/19/2016")) 
        $scope.question = "Mirror, Mirror on the wall, Who's the fairest of them all?";
});

$('#directive-cards').on('click', '.votepad-div', function() {
    var side = $(this).prop('title');
    var dt = new Date();
    var simple = (dt.getMonth() + 1) + "/" + dt.getDate() + "/" + dt.getFullYear();
    
    if(side == "left")
        var data = "vote=Genry&date=" + simple;
    else if(side == "right")
        var data = "vote=Vidal&date=" + simple;

    $(".votepad-overlay").toggleClass("off");

    $.ajax({
        data: data,
        type: "post",
        url: "/home/php/daily.php",
        success: function (data) {
            // console.log(data);
    ***REMOVED***
***REMOVED***);
});

function dater (date) {
    if(date == "today")
        var day = new Date();
    else
        var day = new Date(date);
    var exactday = day.setHours(0,0,0,0);
    return exactday;
}