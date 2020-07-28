<?php
session_start();
?>

<html>

<head>
<title>Klausur</title>
</head>
<body>
<h1>Verwalten von meinen Freunden </h1>
 <?php
 
 /*session_start();*/
      
      
 $vorname = $_SESSION['vn'];
 $name= $_SESSION['nn'];
 $Long=$_SESSION['Long'];
 $Lat= $_SESSION['Lat'] ;
 $sel = $_GET['Selection'];
 $_SESSION['Selection'] = $sel;
 /*if ($sel == "super"){
    echo "Mein Freund $vorname,$name wohnt in ($Long/$Lat) mag ich gerne";
 }
 else{
	 echo "Mein Freund $vorname,$name is ok ";	 
 }*/
 
 
 
 
 
 
 
 
 
 
 
 ?>
<?php
  
if($sel == "super") : ?>
<p> <a><?php  echo "Mein Freund $vorname,$name wohnt in ($Long/$Lat) mag ich gerne";?></a> <img src="mag.gif" alt="Smiley face" width="42" height="42" align="middle"></p>
<img src="mag2.gif" alt="Smiley">
<?php else : ?>
  <p><a><?php echo "Mein Freund $vorname,$name is ok ";?></a> <img src="ok.gif" alt="Smiley face" width="42" height="42"align="middle"></p>
   <img src="ok2.gif" alt="Smiley">
  
<?php endif; ?>
<p>Willst du noch weitere Freunde eingeben, dann klicke hier:<a href="index.php">Zum Portal</a>
</p>
<p>Willst du es speichern, dann <a href="speichern.php">klicke hier</a>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>