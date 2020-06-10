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
    <title>WOMEN</title>
    <link rel="stylesheet" href="cssuri/reguli.css">
</head>

<body style="font-family:Goudy Old Style;">
    <div class="container">
        <header>
            <div class="content_header">
                <div class="img_header">
                    <img src="imagini/trans3.png">
                </div>
                <div class="text_header">
                    <h1>Manners for women</h1>
                </div>
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
                <img class="img_main" src="imagini/sus2_femei.jpg">
                <div class="text_main">
                    <p>The code of good manners for women is quite simple if you give them a chance to get to know it. Labeling rules are no longer as strict as they were in centuries past, however, many of them must be followed today.
                         because they will make you look sophisticated and very stylish. You will also have a correct posture and you will know how to behave in front of everyone. It's possible that many of these rules of conduct you've heard of
                         you know them well, however, it never hurts to remember what you already knew, right?
                    </p>
                </div>
            </div>
            <button type="button" class="collapsible">Every day manners</button>
            <div class="content">
                <p>Good manners in everyday life
					Here are some rules of good manners for women that will help you a lot in the future.</p>
                <p>Examples of good manners: </p>
				
				
				<?php
				$sql = "SELECT * FROM reguli where Tip='womenday'";
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
            <button type="button" class="collapsible">Greeting manners</button>
            <div class="content">
                <p>From a social point of view, the act of greeting is almost as important as the breath.
				It is a basic pillar in people's education, in the social connection between us.
				The greeting reveals many details about a person's character and a good education.
				Just meeting an acquaintance is enough to make a simple courtesy greeting.
				There is no need to talk or stop if you do not think it is appropriate, but the greeting is essential.
				It is good to greet a neighbor, a collaborator, a person who was recently introduced to you, etc.</p>
                <p> Greeting is a basic element of a good education and a way to maintain a cordial and pleasant social relationship. Good manners for greeting:</p>
                
				<?php
				$sql = "SELECT * FROM reguli where Tip='womengreeting'";
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
            <button type="button" class="collapsible">Table manners</button>
            <div class="content">
                <p>If you use good manners at home, you will have no difficulty
				when doing it in a friend's house, at the restaurant, at banquets and
				at formal meals. It is good to always remember the following rules of the
				code of good manners at the table. Meal behavior: </p>
                <?php
				$sql = "SELECT * FROM reguli where Tip='womentable'";
				$result2 = OpenCon()->query($sql) ;


				if ($result2->num_rows > 0) {
					// output data of each row
					while($row = $result2->fetch_assoc()) {
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
            <button type="button" class="collapsible">Restaurant Manners</button>
            <div class="content">
			<p>It is not surprising that someone is often judged by their table manners,
			hence the importance of knowing certain basic rules that will prevent us from
			feeling bad in front of other diners.
			</p>
			<p>
			Here are some of the most used rules in the restaurant:
			</p>
			
			
			
                <?php
				$sql = "SELECT * FROM reguli where Tip='womenrestaurant'";
				$result3 = OpenCon()->query($sql) ;


				if ($result3->num_rows > 0) {
					// output data of each row
					while($row = $result3->fetch_assoc()) {
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

            <button type="button" class="collapsible">Host manners</button>
            <div class="content">
                <p>People who live in society, who work, who have neighbors, family and friends,
				it is normal to have to fulfill certain social commitments throughout life.
				It is also common for them to have social commitments to which they must comply.
				Whenever we organize any type of meeting, we need to consider certain basic aspects
				of courtesy, education and behavior, in order for our guests to feel comfortable.
                </p>
                <p>Code of good manners when you are a host:</p>
				
								
				<?php
				$sql = "SELECT * FROM reguli where Tip='womenhost'";
				$result4 = OpenCon()->query($sql) ;


				if ($result4->num_rows > 0) {
					// output data of each row
					while($row = $result4->fetch_assoc()) {
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
            <button type="button" class="collapsible">Manners on the street</button>
            <div class="content">
                <p>Every day, without realizing it, people put into practice rules of social etiquette
				that they learned in childhood and in the following years, in their youth.
				These rules are general and of daily use. From the greeting when we enter a closed area 
				- office, shop, bar - to good manners at the table. All these actions are common to all people.</p>
                <p>On the street, there are also rules and regulations for walking on sidewalks, intersections, etc.
				Among the most important rules of good manners on the street are:</p>
                <?php
				$sql = "SELECT * FROM reguli where Tip='womenhost'";
				$result4 = OpenCon()->query($sql) ;


				if ($result4->num_rows > 0) {
					// output data of each row
					while($row = $result4->fetch_assoc()) {
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
            <button type="button" class="collapsible">Manners on the bus and plane</button>
            <div class="content">
                <p>Bus travel is as common as any other means of transportation. But it has its limits,
				especially in terms of space - the space in a train or plane tends to be a bit wider.
				For all these reasons, the code of good manners in long-distance means of transport must
				be slightly strict for the benefit of the rest of the passengers.</p>
                <p>If you are traveling in a non-urban bus, you must sit in your seat as soon as you
				board the bus. You are not safe standing when the bus is moving.</p>
				<?php
				$sql = "SELECT * FROM reguli where Tip='womentravel'";
				$result5 = OpenCon()->query($sql) ;


				if ($result5->num_rows > 0) {
					// output data of each row
					while($row = $result5->fetch_assoc()) {
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
				
				<p>Manners in Plane:</p>
				
				<?php
				$sql = "SELECT * FROM reguli where Tip='womenplane'";
				$result6 = OpenCon()->query($sql) ;


				if ($result6->num_rows > 0) {
					// output data of each row
					while($row = $result6->fetch_assoc()) {
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