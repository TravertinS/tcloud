<?php
Class Sto{
	function show(){
		$sql = "SELECT * FROM `sto`";
		$query = mysql_query($sql);
		return $query;
	}
	
	function show1($filter,$content){
		$sql = "SELECT * FROM `sto` WHERE `$filter` = '$content'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function show2($id_reg,$id_witel){
		$sql = "SELECT * FROM `sto` WHERE `id_reg` = '$id_reg' AND `id_witel` = '$id_witel'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function add($sto,$id_wit,$id_reg){
		if($sto == ""){
			$result = 0;
		}else{
			$sql = "INSERT INTO `sto`( `nama_sto`, `id_witel`, `id_reg`) VALUES ('$sto','$id_wit','$id_reg')";
			$query = mysql_query($sql);
			$result = 1;
		}
		return $result;
	}
	
	function del($id_sto){
		$sql = "DELETE FROM `sto` WHERE `id_sto` = '$id_sto'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function up($sto,$id_sto){
		if($sto == ""){
			$result = 0;
		}else{
			$sql = "UPDATE `sto` SET `nama_sto`='$sto' WHERE `id_sto` = '$id_sto'";
			$query = mysql_query($sql);
			$result = 1;
		}
		return $result;
	}
}
?>