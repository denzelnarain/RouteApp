/**
 * Created by Denzel on 3/22/2017.
 */

//geolocationPage
var x = document.getElementById("geoLocation");

//Geeft huidige postitie aan
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is niet gebruikbaar op deze browser.";
    }
}
// Haalt lat & long op van huidige pos
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
}

$(document).on('click', '#getGeolocation', function(){
    console.log("clicked");
    getLocation();
});

//map page
var y = document.getElementById("map-canvas");
var mapLatitude;
var mapLongitude;
var myLatlng;


function getMapLocation() {
    console.log("getMapLocation");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMapPosition);
    } else {
        Y.innerHTML = "Geolocation is niet gebruikbaar op deze browser.";
    }
}

// haalt map Lat & Long op
function showMapPosition(position) {
    console.log("showMapPosition");
    mapLatitude = position.coords.latitude;
    mapLongitude = position.coords.longitude;
    myLatlng = new google.maps.LatLng(mapLatitude,mapLongitude);
    getMap();
}

// Displays map met marker als huidige positie
var map;
function getMap() {
    var mapOptions = {
        zoom: 18,
        center: new google.maps.LatLng(mapLatitude, mapLongitude)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"U bent hier!!"
    });
}

$( document ).on( "pageinit", "#mapPage", function( event ) {
    getMapLocation();
});

//directionsPage

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var directionsMap;
var z = document.getElementById("directions-canvas");
var start;
var end;

function getDirectionsLocation() {
    console.log("getDirectionsLocation");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showDirectionsPosition);
    } else {
        z.innerHTML = "GGeolocation is niet gebruikbaar op deze browser.";
    }
}

// haalt directions Lat & Long op
function showDirectionsPosition(position) {
    console.log("showDirectionsPosition");
    directionsLatitude = position.coords.latitude;
    directionsLongitude = position.coords.longitude;
    directionsLatLng = new google.maps.LatLng(directionsLatitude,directionsLongitude);
    getDirections();
}
// haalt de route op
function getDirections() {
    console.log('getDirections');
    directionsDisplay = new google.maps.DirectionsRenderer();

    var directionsOptions = {
        zoom:18,
        center: start
    }
    directionsMap = new google.maps.Map(document.getElementById("directions-canvas"), directionsOptions);
    directionsDisplay.setMap(directionsMap);
    calcRoute();
}

// berekent de route naar de destination
function calcRoute() {
    console.log("calcRoute");
    start = directionsLatLng;
    end = " Toko Hoi Yun, Benthuizerstraat 52, 3036 CJ Rotterdam";
    var request = {
        origin:start,
        destination:end,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(result);
        }
    });
}

$( document ).on( "pageshow", "#directionsPage", function( event ) {
    getDirectionsLocation();
});


