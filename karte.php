<?php
// intelligenes Programm
$Long=$_GET['lon'];
//echo"$Long";
//echo"$Lat";
$Lat=$_GET["lat"];
?>
<html lang="de">

<head>
    <meta charset="UTF-8"/>
 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
integrity="sha512puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
crossorigin=""></script>

<style>
html, body, #map {
height: 90%;
width: 90%;
}

body {
padding: 0;
margin: 0;
}
</style>
<title>Getting Started with Leaflet</title>
</head>
<body>
<div id="map"></div>
<script type="text/javascript">
var map = L.map('map', {center: [50.11552,8.684167],zoom: 3});
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution: '&copy; OpenStreetMap contributors'}).addTo(map);
L.marker([<?php echo$Long?>,<?php echo$Lat?>], {clickable: true})
.bindPopup("<?php echo$vn?>")//49.9951748.242090
.addTo(map);

map.locate({setView: true});

</script>
</body>
</html>