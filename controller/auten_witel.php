<?php
include ("../model/Database.php");
include ("../model/Witel.php");
include ("../model/Jscript.php");

$db = new Database;
$wit = new Witel;
$js = new Jscript;

$connect = $db->connection();

$ket = $_GET['ket'];

if($ket == "add"){	
	$wit_nama = $_POST['witel'];
	$id_reg = $_GET['id_reg'];
	$action = $wit->add($id_reg,$wit_nama);
	echo $action;
	if ($action == 0)
	{
		header("Location: tambah_witel.php?alt=2&id_reg=$id_reg");
	}else
	{
		header("Location: man_witel.php?alt=2&id_reg=$id_reg");
	}
}else if($ket == "del")
{
	$act = $_GET['act'];
	$id = $_GET['id'];
	$id_reg = $_GET['id_reg'];
	
	$list = $wit->show("id_witel",$id);
	$temp = mysql_fetch_array($list);
	$nama_wit = $temp['witel'];

	if ($act == 0)
	{
		$warning = $js->warning("Yakin Untuk Menghapus $nama_wit ?","auten_witel.php?ket=del&act=1&id=$id","man_regional.php");
		echo $warning;
	}else{
		$action = $wit->del($id);
		header("location: man_witel.php?alt=1&id_reg=$id_reg");
	}
}else if($ket == "upd"){
	$id = $_GET['id'];
	$id_reg = $_GET['id_reg'];
	$nama_wit = $_POST['witel'];
	$action = $wit->upd($id,$nama_wit);
	if ($action == 0)
	{
		header("Location: update_witel.php?id=$id&alt=1");
	}else
	{
		header("Location: man_witel.php?alt=2&id_reg=$id_reg");
	}
}


?>