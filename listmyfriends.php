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
                echo "<br>" .$zeile;
            }
            fclose($handle);
        } else {
            echo " Beim &Ouml;ffnen der Datei trat ein Fehler auf.";
        }
                
    ?>
    <hr>
    <p>
    <a href="showsourcecode.php?file=listmyfriends.php">showmycode</a>
</p>
</body>
</html>