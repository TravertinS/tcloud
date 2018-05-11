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
	$status = $login['stat'];
	setcookie('id_user',$login['id']);
	echo $login;
	if($login['num'] != 0){
		$list_user = $user->show();
		if ($status == "migrasi"){
			header("location: home_agt_migrasi.php");
		}else if ($status == "tl_migrasi"){
			header("location: home_tl_migrasi.php");
		}
	}else{
		header("location: Login.php?err=1");
	}
}else if($id == 2){
	$user->logout();
}

?>
