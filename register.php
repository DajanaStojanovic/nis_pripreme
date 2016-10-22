<?php
include_once 'konfiguracija.php';
if(!$_POST){
	echo "Polja za registraciju ne smiju biti prazna.";
}else{
	$login = $veza->prepare("select * from operater where email=:email or username=:username");
	$login->bindParam(":email", $_POST["email"]);
	$login->bindParam(":username", $_POST["username"]);
	$login->execute();
	$userdata = $login->fetch(PDO::FETCH_OBJ);
	
	if($userdata==null){
		$password = md5($_POST["password"]);
		$register = $veza->prepare("insert into operater(username, email, password, tel, type) values (:username, :email, :password, :tel, 0)");
		$register->bindParam(":username", $_POST["username"]);
		$register->bindParam(":email", $_POST["email"]);
		$register->bindParam(":password", $password);
		$register->bindParam(":tel", $_POST["tel"]);
		$register->execute();
		echo "OK";
	}else{
		echo "Korisnik već postoji.";
	}
}