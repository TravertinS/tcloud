<?php

include("../model/User.php");
include("../model/Database.php");

$user = new User;
$db = new Database;

$con = $db->connection();
$id = $_GET['id'];
if ($id == 1){
	$nik = $_POST['nik'];
	$pwd =$_POST['pwd'];
	$login = $user->login($nik,$pwd);
	$status = $_COOKIE['status'];
	echo $login;
	if($login != 0){
		if ($status == "migrasi"){
			header( "refresh:2;url=home_agt_migrasi.php" );
		}else if ($status == "tl_migrasi"){
			header( "refresh:2;url=home_tl_migrasi.php" );
		}
	}else{
		header("location: Login.php?err=1");
	}
}else if(id == 2){
	setcookie("id_user","");
	setcookie("status","");
	header( "refresh:2;url=login.php?err=0" );
}

?>
