<html>
<head>
<title>so was haben wir denn da:</title>
</head>
<body>
<?php
$vorname=$_GET['vn'];
$name=$_GET['nn'];
$Long=$_GET['lon'];
$Lat=$_GET['lat']; 


?>
	<h1>Details zu meinen Freunden</h1><a><?php echo "$vorname $name"?></a>  ==> <a><?php echo "($Long/$Lat)"?></a>
</body>
</html>