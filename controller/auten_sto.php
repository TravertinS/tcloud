<?php
include("../model/Database.php");
include ("../model/Sto.php");
include ("../model/Jscript.php");

$db = new Database;
$sto = new Sto;
$js = new Jscript;

$ket = $_GET['ket'];

$con = $db->connection();

if ($ket == "add"){
	$id_wit = $_GET['id_wit'];
	$id_reg = $_GET['id_reg'];
	$nama_sto = $_POST['sto'];
	$add = $sto->add($nama_sto,$id_wit,$id_reg);
	if ($add == 1){
		header("Location: man_sto.php?id_reg=$id_reg&id_wit=$id_wit&alt=1");
	}else
	{
		header("tambah_sto.php?id_reg=$id_reg&id_wit=$id_wit");
	}
}else if ($ket == "del"){
	$id_sto = $_GET['id_sto'];
	$id_reg = $_GET['id_reg'];
	$id_wit = $_GET['id_wit'];
	$sr = $_GET['sr'];
	
	$field = $sto->show1("id_sto",$id_sto);
	$list = mysql_fetch_array($field);
	$nama_sto = $list['nama_sto'];
	
	if ($sr == 0){
		$warn = $js->warning("Apakah anda yakin untuk menghapus data $nama_sto ?","auten_sto.php?id_sto=$id_sto&id_wit=$id_wit&id_reg=$id_reg&sr=1&ket=del","man_sto.php?id_reg=$id_reg&id_wit=$id_wit&alt=1");
		echo $warn;
	}else if($sr == 1)
	{
		$delete  = $sto->del($id_sto);
		header("Location: man_sto.php?id_reg=$id_reg&id_wit=$id_wit&alt=2");
	}
}else if($ket = "up"){
	$nama_sto = $_POST['sto'];
	$id_sto = $_GET['id_sto'];
	
	$field = $sto->show1("id_sto",$id_sto);
	$list = mysql_fetch_array($field);
	$id_reg = $list['id_reg'];
	$id_wit = $list['id_witel'];
	
	$up = $sto->up($nama_sto,$id_sto);
	if ($up == 0){
		header("Location: update_sto.php?id_sto=$id_Sto&alt=1");
	}else{
		header("Location: man_sto.php?id_reg=$id_reg&id_wit=$id_wit&alt=1");
	}
}
?>