<?php
class Witel{
	function show($filter,$content){
		if($filter == ""){
			$sql = "SELECT * FROM `witel`";
		}else{
			$sql = "SELECT * FROM `witel` WHERE `$filter` = '$content'";
		}
		$query = mysql_query($sql);
		return $query;
	}
	
	function add($id_reg,$nama_witel){
		if ($nama_witel != "")
		{
			$sql = "INSERT INTO `witel`( `id_reg`, `witel`) VALUES ('$id_reg','$nama_witel')";
			$query = mysql_query($sql);
			$result = 1;
		}else
		{
			$result = 0;
		}
		return $result;
	}
	
	function del($id){
		$sql = "DELETE FROM `witel` WHERE `id_witel` = '$id'";
		$query = mysql_query($sql);
		return $sql;
		
	}
	
	function upd($id,$witel){
		if($witel != ""){
			$sql = "UPDATE `witel` SET `witel`='$witel' WHERE `id_witel`='$id'";
			$query = mysql_query($sql);
			$result = 1;
		}else
		{
			$result = 0;
		}
		return $result;
	}
}
?>