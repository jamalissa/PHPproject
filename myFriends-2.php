<?php
session_start();
?>

<body>
<h1>Verwalten von meinen Freunden </h1>
 <?php
 if (isset($_GET['abgeschickt'])) {
	  $vorname = $_GET['vn'];
      $_SESSION['vn'] = $vorname;
      $name = $_GET['nn'];
      $_SESSION['nn'] = $name;
	   $Long = $_GET['Long'];
      $_SESSION['Long'] = $Long;
      $Lat = $_GET['Lat'];
      $_SESSION['Lat'] = $Lat;
	 
	echo  "Mein Freund $vorname $name ist von der volgenden katogorie" ;
	 
	 
}
?>

<p><a href="myFriends-3.php?Selection=normal">normal</a></p>
<p><a href="myFriends-3.php?Selection=super">super</a></p>

</body> </html> 