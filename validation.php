<?php

session_start();


$name=$_POST['username'];
$pass=$_POST['user-pw'];

class Bd {
	private static $conn = NULL;

	public static function getConn() {
		if(is_null(self::$conn)){
			self::$conn = new PDO('mysql:host=localhost;dbname=TW', 'root', '');
		}
		return self::$conn;
	}
}

$name=$_POST['username'];
$pass=$_POST['user-pw'];
class Actiune{
	
	public function getUser($username,$password){
		$sql="select * from utilizatori where Username=:uname && Parola=:pass";
		$cerere = Bd::getConn()->prepare($sql);
		$cerere->execute([
			'uname'=>$username,
			'pass' => $password
			]);
		return $cerere->rowCount();
		
	}
}


$actiune2 = new Actiune();



if(($actiune2->getUser($name,$pass))>0){
    
    $_SESSION['username']=$name;
    header('location:Joc.php');

}else{
    ?>
	<script type="text/javascript"> 
    alert("You entered a wrong password/username!"); 
    window.location.href = "login.html";
	</script>;
<?php
}

?>