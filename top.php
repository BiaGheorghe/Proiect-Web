
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssuri/style-top.css">
</head>
<BODY style="font-family:Goudy Old Style;">
<?php
    include 'iadate.php';
?>
    <header>
        <img src="imagini/trans3.png"/>
    </header>

	<center>
		<a href="Home.php">
		<img src="imagini/butonHome.png" width=24%>
		</a>
<a href="Manners.php">
<img src="imagini/butonManiere.png" width=24%>
</a>
<a href="Joc.php">
<img src="imagini/butonJoc.png" width=24%>
</a>
<a href="Contact.php">
<img src="imagini/butonContact.png" width=24%>
</a>
</center>

<br><br>

    <div class="main">
         <div class="title">
			<HR SIZE = 2  Color =pink WIDTH =40% align=center>
             <h1>Top Players</h1>
			 <HR SIZE = 2  Color =pink WIDTH =40% align=center>
         </div>
         <div class="button">
            <button id="btnj">Fetch info for 2 new players</button>
         </div>
         <img src="imagini/t5.2.png" align="left"/>
         <img src="imagini/t5.1.png" align="right"/>
         <div id="player-info" class="container"></div>
         <script src="main.js"></script>
         
    </div>

</body>
</html>