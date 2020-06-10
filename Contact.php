<!DOCTYPE html>


<?php
session_start();
?>




<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>



<HTML>
<!--Introducerea fisierului css-->
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT</title>
    <link rel="stylesheet" href="cssuri/contact.css">
</HEAD>


<BODY style="font-family:Goudy Old Style;">


<!--Header-->
<div class="header" id="myHeader">
  <img src="imagini/trans3.png" width=30% height=1%>
</div>

<!--Navigatie-->
<center>
<a href="Home.php">
<img src="imagini/butonHome.png" width=24.4%>
</a>
<a href="Manners.php">
<img src="imagini/butonManiere.png" width=24.4%>
</a>
<a href="Joc.php">
<img src="imagini/butonJoc.png" width=24%>
</a>
<a href="top.php">
<img src="imagini/butonTop.png" width=24.4%>
</a>
</center>


<!--Sectiunea noutati-->
<center>
<div class="newsSection">
<br>
<div class="news">
		Let us know...
</div>
<br>
	
<div class="news">

<a href="https://www.facebook.com/profile.php?id=100004193737249">
<img src="imagini/facebook.jpg" width=8%>
</a>
<a href="https://www.instagram.com/alexandraolariu13/?hl=ro">
<img src="imagini/instagram.png" width=8%>
</a>
<a href="https://ro.pinterest.com/alexandraolariu2000/">
<img src="imagini/pinterest.png" width=8%>
</a>
<a href="https://www.youtube.com/channel/UCDiJt_QY45r0ZDZT_qo-hEQ?view_as=subscriber">
<img src="imagini/youtube.png" width=8%>
</a>
<img src="imagini/top.png" class="img">

email: alexandra.olariu2000@gmail.com<br>
tel: 0753642935
</div>
<br><br>
</center>


</BODY>
</HTML>