<?php
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
var map = L.map('map', {center: [50.11552,8.684167],zoom: 20});
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution: '&copy; OpenStreetMap contributors'}).addTo(map);

</script>
<?php
$fname = "wrmyfriends.txt"; 
        $handle = fopen($fname, "r");
        if($handle != FALSE){
            while(!feof($handle)){    //Schleife bis zum Dateiende
                $zeile = fgets($handle);    //liest aktuelle Zeile
                if (strcmp ("", $zeile)!=0){
                    //sicherstelle, dass nicht passiert, 
                    //wenn zeile leer ist. 
                    $arrayOfData = explode (";", $zeile);
					
                    echo "<p><b>$arrayOfData[0]</b><br>";
                    echo "$arrayOfData[1]<br>";
                    echo "$arrayOfData[2]<br>";
                    echo "$arrayOfData[3]<br>";
					echo "$arrayOfData[4]</p>";
				?>	
				<script type="text/javascript">
                 L.marker([<?php echo $arrayOfData[2]?>,<?php echo$arrayOfData[3]?>],{clickable: true})
				.bindPopup('<?php echo"$arrayOfData[0] $arrayOfData[1]"?>')
				.addTo(map);
               </script>
			   <?php
				}
				
				
				
            }
            fclose($handle);
        } else {
            echo " Beim &Ouml;ffnen der Datei trat ein Fehler auf.";
        }
                







?>





</body>
</html>