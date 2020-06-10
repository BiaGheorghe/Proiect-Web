<!DOCTYPE html>

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


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KIDS</title>
    <link rel="stylesheet" href="cssuri/reguli.css">
</head>

<body style="font-family:Goudy Old Style;">
    <div class="container">
        <header>
            <div class="content_header">
                <div class="img_header">
                    <img src="imagini/trans3.png">
                </div>
                <h1>Manners for kids</h1>
            </div>
        </header>

        <!--Navigatie-->
		<center>
<a href="Home.php">
<img src="imagini/butonHome.png" width=19%>
</a>
<a href="Manners.php">
<img src="imagini/butonManiere.png" width=19%>
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

        <main>
            <div class="content_main">
                <img class="img_main" src="imagini/sus2_copii.jpg">
                <div class="text_main">
                    <p>It is never too early to teach children to behave civilly. At home, children usually enjoy a certain "freedom", in many cases, due to their young age. But in most cases, it is a mistake
                        to give them too much freedom when it comes to misbehavior. You can be tolerant, but you do not agree that everything I do wrong is irrelevant. Education is important at all ages, but in
                        Childhood and youth It is crucial to teach children and young people to improve their social skills. The code of good manners for children is the best passport for the different phases of our lives. What we learn
                        as children, it serves us for the rest of our lives. Educating children requires time and effort. The two ingredients are important. There are parents who have time, but do not try. Conversely, parents who try hard but do not have time.
                        It is important to have rules of good manners for children in any family.
                    </p>
                </div>
            </div>
			
			
			
            <button type="button" class="collapsible">School manners</button>
            <div class="content">
                <p>A well-educated and well-trained child will be accepted by his teachers and colleagues. Most children enter preschool; At this stage you need to learn some rules of good manners at school. </p>
                <p> What the code of good manners says at school: </p>
				<?php
				$sql = "SELECT * FROM reguli where Tip='kidsschool'";
				$result = OpenCon()->query($sql) ;


				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					?>
					<br>📖
					<?php 
					echo $row['Text'];
					?><br>
		
					<?php
					}
				} else { 
						echo "0 results";
					}?>
             
            </div>
            <button type="button" class="collapsible">Table manners</button>
            <div class="content">
                <p>A child does not always listen to the advice and instructions of his parents. You have to be very patient, insist and try to get him used to doing things a certain way and teach them to differentiate between what
                    what is right from what is wrong. What should never be missing are good manners at the children's table. </p>
                <?php
				$sql = "SELECT * FROM reguli where Tip='kidstable'";
				$result1 = OpenCon()->query($sql) ;


				if ($result1->num_rows > 0) {
					// output data of each row
					while($row = $result1->fetch_assoc()) {
					?>
					<br>📖
					<?php 
					
					echo $row['Text'];
					?><br>
		
					<?php
					}
				} else { 
						echo "0 results";
					}?>
             
            </div>
            <script>
                var collapsible = document.querySelectorAll("button.collapsible");

                for (var i = 0; i < collapsible.length; i++) {
                    collapsible[i].onclick = function() {
                        this.classList.toggle("active");
                        this.nextElementSibling.classList.toggle("show");
                    };
                }
            </script>
        </main>
    </div>

    <footer>
        email: alexandra.olariu2000@gmail.com<br>
		tel: 0753642935
    </footer>
    </div>

</body>

</html>