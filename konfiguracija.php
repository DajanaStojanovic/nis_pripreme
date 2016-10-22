<?php
//web
/*
$mysql_host = "localhost";
$mysql_database = "xxx";
$mysql_user = "xxx";
$mysql_password = "xxxx";
$putanjaApp="/ECLAT/"; //ako na server ide u root onda je putanjaapp /
$prefix="eclat";
*/

//lokalno

$mysql_host = "localhost";
$mysql_database = "nis_pripreme";
$mysql_user = "root";
$mysql_password = "";
$putanjaApp="/nis_pripreme/";


//spajanje na bazu
$veza = new PDO("mysql:dbname=" . $mysql_database . 
		";host=" . $mysql_host . 
		"", 
			$mysql_user, $mysql_password);
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$veza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$veza->exec("SET CHARACTER SET utf8");
$veza->exec("SET NAMES utf8");

//Current month
$now = new \DateTime('now');
$currentMonth = $now->format('m');
$currentYear = $now->format('Y');
