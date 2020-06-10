<!DOCTYPE html>


<?php
session_start();
?>




<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "TW";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }   
?>



<HTML>
<!--Introducerea fisierului css-->
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHAKEHANDS</title>
    <link rel="stylesheet" href="cssuri/Queen.css">
</HEAD>


<BODY style="font-family:Goudy Old Style;">


<!--Header-->
<div class="header" id="myHeader">
  <img src="imagini/trans3.png" width=30% height=1%>
</div>

<!--Navigatie-->
<a href="Home.php">
<img src="imagini/butonHome.png" width=19%>
</a>
<a href="Manners.php">
<img src="imagini/butonManiere.png" width=19.5%>
</a>
<a href="Joc.php">
<img src="imagini/butonJoc.png" width=19.5%>
</a>
<a href="top.php">
<img src="imagini/butonTop.png" width=19%>
</a>
<a href="Contact.php">
<img src="imagini/butonContact.png" width=19.5%>
</a>
</center>




<!--Sectiunea poze din stanga-->
<div class="pics">
<img src="imagini/transparent.png" class="img">
<img src="imagini/shake1.jpg" class="img">

<img src="imagini/transparent.png" class="img">
<img src="imagini/shake2.jpg" class="img">

<img src="imagini/transparent.png" class="img">
<img src="imagini/shake3.jpg" class="img">


</div>

<!--Sectiunea noutati-->
<div class="newsSection">
<br><br>
<div class="news">
7 Tips on Proper Handshake Etiquette
</div>
<br><br>	
	
<div class="news">


<?php
$sql = "SELECT * FROM reguli where Tip='handshake'";
$result = OpenCon()->query($sql) ;


if ($result->num_rows > 0) {
	$i=1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<br>
		<?php 
		echo $i,". ";
		echo $row['Text'];
		$i=$i+1;
		?><br>
		
<?php
    }
} else { 
    echo "0 results";
}
?>

<img src="imagini/top.png" class="img">
</div>
<br><br>


</div>

</BODY>
</HTML>