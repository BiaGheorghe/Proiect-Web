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



<body style="font-family:Goudy Old Style;">

<div class="header" id="myHeader">
  <img src="imagini/trans3.png" width=30% height=1%>
</div>

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



<!--rand ( int $min , int $max )-->
<section>

<form action="result.php" method="POST" id="quiz">

<?php
$name=$_SESSION['username'];
$sql = "SELECT Scor FROM utilizatori where Username='$name'";
$result = OpenCon()->query($sql) ;
$row1 = $result->fetch_assoc();


$scor=$row1['Scor'];

?>
<br>
<center>
<div class="newsSection">
<div class="news">
<?php
if($scor==0){
echo "Scorul tau este 0, uite niste intrebari pentru incepatori:";
$min=1;
$max=20;//va fi mai mare cand adaugam reguli
}
else
	if($scor>0&&$scor<=30){
			echo "Scorul tau este $scor, uite niste intrebari pentru incalzire:";
			$min=1;
			$max=30;
		}
else
	if($scor>30&&$scor<=60){
			echo "Scorul tau este $scor, uite niste intrebari cu dificultate medie:";
			$min=1;
			$max=40;
		}
else
	if($scor>60&&$scor<=100){
			echo "Scorul tau este $scor, uite niste intrebari pentru avansati:";
			$min=1;
			$max=50;
		}
else
	if($scor>100){
			echo "Scorul tau este $scor, uite niste intrebari pentru expertii manierelor:";
			$min=1;
			$max=60;
		}
?>

<img src="imagini/top.png" class="img">
</div>
</div>
</center>
<br>
<?php
for($i=1;$i<=10;$i++){
?>


<HR SIZE = 2  Color =pink WIDTH =100%>


	<?php
	$p=rand($min,$max);
	if($i==1)
		$arr[$i]=$p;
	if($i>1){
		while(in_array($p,$arr)){
		   $p=rand($min,$max);
	    }
		$arr[$i]=$p;
	}      
 


$sql = "SELECT * FROM intrebari where qid=$p";

$result = OpenCon()->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<br>
		<?php echo $row['text']?><br>
		
<?php
    }
} else { 
    echo "0 results";
}

$sqlrasp="SELECT * from raspunsuri where answid=$p";
$result_rasp = OpenCon()->query($sqlrasp);

if ($result_rasp->num_rows > 0) {
    // output data of each row
    while($row = $result_rasp->fetch_assoc()) {
		?>
		
		<?php
		if($i==1){
		?>
		<input type="radio" name="A" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==2){
		?>
		<input type="radio" name="B" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==3){
		?>
		<input type="radio" name="C" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==4){
		?>
		<input type="radio" name="D" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==5){
		?>
		<input type="radio" name="E" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==6){
		?>
		<input type="radio" name="F" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==7){
		?>
		<input type="radio" name="G" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==8){
		?>
		<input type="radio" name="H" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==9){
		?>
		<input type="radio" name="I" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		if($i==10){
		?>
		<input type="radio" name="J" value="<?php echo $row['corect']?>">
		<?php echo $row['textr']?><br>
		
		<?php
		}
		?>
<?php
    }
} else { 
    echo "0 results";
}

}
?>

<br><br>
<button type="submit">Submit</button>
</form>
</section>

</body>