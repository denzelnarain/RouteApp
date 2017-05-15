<head><link rel="stylesheet" href="geolocation.css" />
</head>

<div class="navbar" id="myNavbar">

    <a href="#homePage" style="color: #FFFFFF;">Geolocation</a>
    <a href="#mapPage" style="color: #FFFFFF;">Map</a>
    <a href="#directionsPage" style="color: #FFFFFF">Directions</a>
    <a href="#aboutPage" style="color: #FFFFFF">About</a>
    <a href="#" class="icon" onclick="responsiveNavbar()">&#9776;</a>

</div><!-- /navbar -->

<!--responsive navbar -->
<script>
    function responsiveNavbar() {
        var x = document.getElementById("myNavbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }

</script>
