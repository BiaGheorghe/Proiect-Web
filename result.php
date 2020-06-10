<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.html');
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JOC</title>
<link rel="stylesheet" href="cssuri/joc.css">
</head>


<BODY style="font-family:Goudy Old Style;">
<div class="header" id="myHeader">
  <img src="imagini/trans3.png" width=30% height=1%>
</div>

<!--Navigatie-->
<center>
<a href="Home.php">
<img src="imagini/butonHome.png" width=19%>
</a>
<a href="Manners.php">
<img src="imagini/butonManiere.png" width=19.5%>
</a>
<a href="top.php">
<img src="imagini/butonTop.png" width=19%>
</a>
<a href="Contact.php">
<img src="imagini/butonContact.png" width=19.5%>
</a>
<a href="logout.php">
<img src="imagini/butonLogout.png" width=19.5%>
</a>
</center>
<center>
<div class="newsSection">
<br>
<div class="news">
Rezultatele tale:<br>
<img src="imagini/top.png" class="img">
</div>
<br>




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



<div class="news">
<?php
$name=$_SESSION['username'];
$sql = "SELECT Scor FROM utilizatori where Username='$name'";
$result_user = OpenCon()->query($sql);
$row1 = $result_user->fetch_assoc();
	
  
$scor=$row1['Scor'];

if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["A"])) {
		if ($_POST["A"]==1){
		echo "A. Ai raspuns corect.";
		$scor=$scor+1;}
		else
			echo "A. Ai raspuns gresit.";
    }
    else {
        echo "A. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["B"])) {
		if ($_POST["B"]==1){
			echo "B. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "B. Ai raspuns gresit.";
    }
    else {
        echo "B. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["C"])) {
		if ($_POST["C"]==1){
			echo "C. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "C. Ai raspuns gresit.";
    }
    else {
        echo "C. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["D"])) {
		if ($_POST["D"]==1){
			echo "D. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "D. Ai raspuns gresit.";  
	}
    else {
        echo "D. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["E"])) {
		if ($_POST["E"]==1){
			echo "E. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "E. Ai raspuns gresit.";
    }
    else {
        echo "E. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<BR>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["F"])) {
		if ($_POST["F"]==1){
			echo "F. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "F. Ai raspuns gresit.";
    }
    else {
        echo "F. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["G"])) {
		if ($_POST["G"]==1){
			echo "G. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "G. Ai raspuns gresit.";
    }
    else {
        echo "G. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["H"])) {
		if ($_POST["H"]==1){
			echo "H. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "H. Ai raspuns gresit.";
    }
    else {
        echo "H. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["I"])) {
		if ($_POST["I"]==1){
			echo "I. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "I. Ai raspuns gresit.";
    }
    else {
        echo "I. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}
?>
<br>
<?php
if (isset($_POST)) {
    // in cazul in care am dat submit, preiau datele date si le afisez
    if (isset($_POST["J"])) {
		if ($_POST["J"]==1){
			echo "J. Ai raspuns corect.";
			$scor=$scor+1;}
		else
			echo "J. Ai raspuns gresit.";
    }
    else {
        echo "J. Nu ai completat aceasta intrebare.";
    }
}
else {
    echo "mai intai trimite raspunsul chiftluto";
}?>
</div>
<br><br>
<div class="news">
<?php
echo "Noul tau scor:" ;
echo $scor;

$sql = "UPDATE utilizatori 
SET 
    scor = $scor
WHERE
   Username = '$name'";
$result_user = OpenCon()->query($sql);
//$row1 = $result_user->fetch_assoc();
?>
<br>
<a href="Joc.php">
<img src="imagini/butonPlay.png" width=19.5%>
</a>

</div>
</div>
</center>
</BODY>
</HTML>