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

class Actiune{
	public function addUser($username,$password,$scor){
		$sql="INSERT INTO utilizatori (Username, Parola, Scor) VALUES (:uname, :pass, :scor)";
		$cerere = Bd::getConn()->prepare($sql);
		$cerere->execute([
			'uname'=>$username,
			'pass' => $password,
			'scor' => '0'
		]);
	}
	
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
	?>
	<script type="text/javascript"> 
    alert("Choose another username!"); 
    window.location.href = "signup.html";
	</script>;
	<?php
}else{
    $actiune = new Actiune();
	$actiune->addUser($name,$pass, 0);
	header('location:login.html');

}


$actiune = new Actiune();
$actiune->addUser($name,$pass, 0);
?>
