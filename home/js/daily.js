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
        $scope.question = "Día #19 - Mirror, Mirror on the wall, Who's the fairest of them all?";
    else if(dater("today") == dater("12/20/2016")) {
        $scope.question = "Día #20 - ¿Le podrian dar un voto a mi buen amigo Martin?";
        $scope.team1 = $scope.team2 = "Martin";
        $scope.image1 = $scope.image2 = "img/vote_martin.jpg";
***REMOVED***
    else if(dater("today") == dater("12/21/2016")) {
        $scope.question = "";
        var anex = "<p><b>Día #21 - From the book of Twilight: \"That’s __________. He’s gorgeous, of course, but don’t waste your time. He doesn’t date. Apparently none of the girls here are good-looking enough for him.\"  She sniffed, a clear case of sour grapes. I wondered when he’d turned her down. I bit my lip to hide my smile. Then I glanced at him again. His face was turned away, but I thought his cheek appeared lifted, as if he were smiling, too. </b></p><p><b>After a few more minutes, the four of them left the table together. They all were noticeably graceful – even the big, brawny one. It was unsettling to watch. The one named __________ didn’t look at me again. </b></p><p><b> I sat at the table with Jessica and her friends longer than I would have if I’d been sitting alone. I was anxious not to be late for class on my first day. One of my new acquaintances, who considerately reminded me that her name was Angela, had Biology II with me the next hour. We walked to class together in silence. She was shy, too. </b></p><p><b> When we entered the classroom, Angela went to sit at a blacktopped lab table exactly like the ones I was used to. She already had a neighbor. In fact, all the tables were filled but one. Next to the center aisle, I recognized __________ by his unusual hair, sitting next to that single open seat. </b></p><p><b> As I walked down the aisle to introduce myself to the teacher and get my slip signed, I was watching him surreptitiously. Just as I passed, he suddenly went rigid in his seat. He stared at me again, meeting my eyes with the strangest expression on his face – it was hostile, furious. I looked away quickly, shocked, going red again. I stumbled over a book in the walkway and had to catch myself on the edge of a table. The girl sitting there giggled. </b></p><p><b> I’d noticed that his eyes were black – coal black.";
        
        $("#question-text").prepend(anex);
        $("#question-angular").remove();
***REMOVED***
    else if(dater("today") == dater("12/22/2016")) 
        $scope.question = "Día #22 - ¿Quien se merece un shot por pendejo?";
    else if(dater("today") == dater("12/23/2016")) 
        $scope.question = "Día #23 - All I want for Christmas is __________.";
    else if(dater("today") == dater("12/24/2016")) 
        $scope.question = "Día #24 - Pero mira como bebe [opción por la que votaste] en el rio. Pero mira como bebe [opción por la que votaste] por ver a [opción por la que NO votaste] nacido.";
    else if(dater("today") == dater("12/25/2016"))
        $scope.question = "Día #25 - Es tu día de suerte. Te has ganado un viaje a una tranquila cabaña en el bosque. Esta nevado, tienes listo tu sueter, el chocolate caliente y estas frente a la fogata. A tu lado se encontrara ___________ leyendote dulces historias navideñas. Feliz Navidad :)"
    else if(dater("today") == dater("12/26/2016")) 
        $scope.question = "Día #26 - His palms are sweaty, knees weak, arms are heavy. There's vomit on his sweater already, _________'s spaghetti.";
    else if(dater("today") == dater("12/27/2016")) {
        $scope.question = "Día #27 - Completa el enunciado: \"Hola, mi nombre es Hector Manuel __________ Oliver.\"";
        $scope.team2 = "Sonic";
        $scope.image2 = "img/vote_sonic.jpg";
***REMOVED***
    else if(dater("today") == dater("12/28/2016")) 
        $scope.question = "Día #28 - Azucar, Flores, y muchos colores. Estos fueron los ingredientes elegidos para crear a la niña perfecta, pero el profesor Utonio agregó otro ingrediente a la fórmula: la Sustancia X. De ahi nació __________, y con sus superpoderes dedica su vida a combatir el crimen y las fuerzas del mal.";
    else if(dater("today") == dater("12/29/2016")) {
        $scope.question = "";
        var anex = '<p><b>Día #29 - <a href="https://youtu.be/dQw4w9WgXcQ">Mirar video</a></b></p>';

        $("#question-text").prepend(anex);
        $("#question-angular").remove();
***REMOVED***
    else if(dater("today") == dater("12/30/2016")) 
        $scope.question = "Día #30 - ¿Listo para la posada? ___________ ya esta listo.";
***REMOVED***
        $scope.question = "Gracias a todos por votar todos los días. Nos vemos en la Posada Discipulos 2017!";
        $(".votepad-div.right").remove();
        $(".votepad-div.left").css("margin-right", "0");
***REMOVED***

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