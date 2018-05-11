<?php
include ("../model/Database.php");
include ("../model/Regional.php");
include ("../model/Jscript.php");

$db = new Database;
$reg = new Regional;
$js = new Jscript;

$connect = $db->connection();

$act = $_GET['act'];
$id = $_GET['id'];

$list =$reg->show("id_reg",$id);
$temp = mysql_fetch_array($temp);
$nama_reg = $temp['regional'];


if ($sct == 0)
{
	$warning = $js->warning("Yakin Untuk Menghapus $nama_reg ?","auten_del_regional.php?act=1&amp;id=$id","");
}
$action = $reg->add($id);

header("location: manregional.php");
}
?>