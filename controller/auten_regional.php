<?php
include ("../model/Database.php");
include ("../model/Regional.php");
include ("../model/Jscript.php");

$db = new Database;
$reg = new Regional;
$js = new Jscript;

$connect = $db->connection();

$ket = $_GET['ket'];

if($ket == "add"){	
	$reg_nama = $_POST['Regional'];
	$action = $reg->add($reg_nama);
	if ($action[1] == 0)
	{
		header("Location: tambah_regional.php?id=0");
	}else
	{
		header("Location: man_regional.php");
	}
}else if($ket == "del")
{
	
	$act = $_GET['act'];
	$id = $_GET['id'];

	$list =$reg->show("id_reg",$id);
	$temp = mysql_fetch_array($list);
	$nama_reg = $temp['regional'];


	if ($act == 0)
	{
		$warning = $js->warning("Yakin Untuk Menghapus $nama_reg ?","auten_regional.php?ket=del&act=1&id=$id","man_regional.php");
		echo $warning;
	}else{
		$action = $reg->del($id);
		echo $action;
		header("location: man_regional.php");
	}
	
}else if($ket == "up"){
	$id = $_GET['id'];
	$nama_reg = $_POST['Regional'];
	$action = $reg->upd($id,$nama_reg);
	if ($action[1] == 0)
	{
		header("Location: update_regional.php?id=$id&alt=1");
	}else
	{
		header("Location: update_regional.php?id=$id&alt=2");
	}
}

?>