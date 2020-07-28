<?php
session_start();
?>

<html>
<head>
<title>So das schreiben wir jetzt weg : </title>
</head>
<body>
    <?php
	 $vorname=$_SESSION['vn'];
     $name= $_SESSION['nn'];
     $Long=$_SESSION['Long'];
     $Lat= $_SESSION['Lat'] ;
     $sel = $_SESSION['Selection'];
	 
        echo "<h3>das war der Input</h3>";
        if (isset($vorname,$name,$Long,$Lat,$sel)){
           

            $output = "$vorname;$name;$Long;$Lat;$sel\n";
            
            echo "das wird gespeichert: -".$output."- ";

            $fname = "wrmyfriends.txt"; 
            $handle = fopen($fname, "a");
            if ($handle) { 
                fputs($handle, $output); 
                fclose($handle); 
            } 
            else
                echo "speicher hat nicht funktioniert";        
        }
        else 
            echo "du depp, nur über Formular ";
    


    ?>
    <p>
    <a href="InputData.html">Mehr Input</a>
</p>
    <p>
    <a href="listmyfriends.php">ListMyFriends</a>
</p>
    <p>
    <a href="listmyfriends2.php">ListMyFriends - Different</a>
</p>

</p>
    <p>
    <a href="listmyfriends3.php">ListMyFriends - Different even more different</a>
</p>
<p>
    <a href="allmyFriendsmap.php">show all my friends on the map</a>
</p>
    <p>


<hr>
    <p>
    <a href="showsourcecode.php?file=speichern.php">showmycode</a>
</p>
</body>
</html>