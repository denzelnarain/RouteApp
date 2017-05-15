<!DOCTYPE html>
<html>
<head>
    <title>Route app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="geolocation.css" />
</head>
<body>
<!-- eerste page -->
<div data-role="page" id="homePage">

    <?php include("header.php") ?>

    <div role="main" class="ui-content">
        <p><b>Geolocation Page</b></p>
        <div id="geoLocation"><b>geoLocation</b></div>
        <button class="btn btn-1 btn-1a" id="getGeolocation">get location</button>
    </div><!-- /content -->


</div><!-- /page -->

<!-- tweede page -->
<div data-role="page" id="mapPage">

    <?php include("header.php") ?>

    <div role="main" class="ui-content">
        <div id="map-canvas" style="height:100%;width:100%;">map-canvas</div>
    </div><!-- /content -->


</div><!-- /page -->

<!-- derde page -->
<div data-role="page" id="directionsPage">

    <?php include("header.php") ?>

    <div role="main" class="ui-content">
        <div id="directions-canvas">directions-canvas</div>
    </div><!-- /content -->

</div><!-- /page -->

<!-- vierde page -->
<div data-role="page" id="aboutPage">

    <?php include("header.php") ?>

    <h1><b> Wat is dit precies</b></h1>
    <p>Dit is de route app voor Echte gerechten. Hiermee krijgt u een route beschrijving vanuit het Millixpark Parkhuis naar elke Toko Supermarkt in de buurt voor het ophalen van de verschillende ingredienten en producten.
        Vanuit de diverse Toko Supermarkten kunt u weer een route beschrijving krijgen die u terug brengt naar het Millixpark Parkhuis.</p>
    <div class="use">
        <h1><b> Hoe gebruik je de app?</b></h1>
        <p>De app geeft een route beschrijving naar een Toko Supermarkt</p>
        <p><b> 1. Ga eerst op de pagina "Geolocation" en druk op de knop "get location"</b></p>
        <ul>
            <li>Hierdoor krijgt de app u locatie.</li>
        </ul>

        <p><b> 2. Ga hierna naar de pagina "Map"</b> </p>
        <ul>
            <li>Hier kunt u zien waar u op dat moment bent.</li>
        </ul>

        <p><b> 3. Ga hierna naar de pagina "Directions"</b> </p>
        <ul>
            <li>Hier wordt de route beschrijving getoond naar de dichtstbijzijnde Toko Supermarkt.</li>
        </ul>
    </div>


</div>
<!-- page -->

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcRS7i5KsTGRdi4pv9kykhQpSn_aFUSUY"></script>
<script src="geolocation.js"></script>

</body>
</html>
