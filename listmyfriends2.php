<html>
<head>
<title>so was haben wir denn da:</title>
</head>
<body>
    <?php
        echo "<h1>Alle meine Freunde</h1>";
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
					
					echo"<a href=\"detailsOfMyFriends.php?vn=$arrayOfData[0]&nn=$arrayOfData[1]&lon=$arrayOfData[2]&lat=$arrayOfData[3]\">Details zu meinen Freunden<br></a>";
                    echo"<a href=\"karte.php?vn=$arrayOfData[0]&nn=$arrayOfData[1]&lon=$arrayOfData[2]&lat=$arrayOfData[3]\">show me the location on the map</a>";
				}
				
				
				
            }
            fclose($handle);
        } else {
            echo " Beim &Ouml;ffnen der Datei trat ein Fehler auf.";
        }
                
    ?>
    <hr>
    <p>
    <a href="showsourcecode.php?file=listmyfriends2.php">showmycode</a>
</p>
</body>
</html>
