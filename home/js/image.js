// 'image.js' handles the request to the CSE API.

// To exceed the '100 query' limit of Google CSE API,
// I ended up creating two separate APIs. If one is not
// loaded, use the other one. 
// I went way over the limit while testing this app. 
// Sorry Google. I really don't want to wait a whole 
// day to test my app.
// var cseID is my Client ID
var apiKey = 'AIzaSyBxtyZmUFKCzNYxAy2VUBQ12qhHK_mw0-g';
var cseID = '002919751662395594107:hetlad5jjpe';

// getGoogle creates the query request url,
// parses through the response json,
// sets a fail callback
function getGoogle (query, api) {
    var title = query;
    var repeat = false;
    var imgURL;
    var snippet;

    //Creates the query url
    var gImage =  'https://www.googleapis.com/customsearch/v1';
    gImage += '?' + $.param({
        'q': query + ' The Hedgehog',
        'cx': cseID,
        'fileType': 'png jpg',
        'num': '1',
        'searchType': 'image',
        'key': api
    });

    // If there's a JSON response, it reads the received image link
    // and a small snippet of information of said image to be
    //displayed in the marker's' infowindow.
    $.getJSON(gImage, function (data) {
        imgURL = data.items[0].link;
        snippet = data.items[0].snippet;
    })
    
    // always() will generate the content of the infowindow either way.
    .always(function() {
        var content = '<img src="'+ imgURL +'">';
        $("#sanic-panel").append(content);
    });
}

getGoogle(name, apiKey);