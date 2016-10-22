<?php
include_once 'konfiguracija.php';
if(!$_POST){
	echo "Polja za prijavu ne smiju biti prazna";
}else{
	$password = md5($_POST["password"]);
	$login = $veza->prepare("select * from operater where email=:email and password=:password");
	$login->bindParam(":email", $_POST["email"]);
	$login->bindParam(":password", $password);
	$login->execute();
	$userdata = $login->fetch(PDO::FETCH_OBJ);
	
	if($userdata!=null){
		session_start();
		$_SESSION["userData"] = $userdata;
		echo "OK";
	}else{
		echo "Nepostojeći korisnik";
	}
}