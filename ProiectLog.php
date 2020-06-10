<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="cssuri/style.css">

</head>

<body>


   <div class="container">

      <header>
        <img src="images/trans3.png">
      </header>
  
      <nav id="navbar">
          <a href="ProiectLog.php">HOME</a>
          <a href="#">MENU</a>
          <a href="Joc.php">JOC</a>
          <a href="logout.php">LOGOUT </a>
          <a href="#">CONTACT</a>
      </nav>
    
      <main>
      <div class="container">
       <h2 class="text-center text-succes">Welcome <?php echo $_SESSION['username']; ?> </h2>
       <h3 class="text-center"> You can play now!</h3>
       
       
      </main>
    
    
      <footer>
        salut sunt footer-ul
      </footer>
  </div>




</body>
</html>
