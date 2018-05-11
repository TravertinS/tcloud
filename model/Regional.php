<?php
Class Regional{
	
	Function add($regional){
		if($regional == ""){
			$result[1] = 0;
			$result[2] = "Silahkan Lengkapi Data";
		}else{
			$sql = "INSERT INTO `regional`(`regional`) VALUES ('".$regional."')";
			$query = mysql_query($sql);
			$result[1] = 1;
			$result[2] = "Data Berhasil Disimpan";
		}
		return $result;
	}
	
	Function count_row(){
		$sql = "SELECT * FROM regional";
		$query = mysql_query($sql);
		$num = mysql_num_rows($query);
		return $num;
	}
	
	function show($filter,$content){
		if ($filter == ""){
			$sql = "SELECT * FROM `regional`";
			$query = mysql_query($sql);
		}else{
			$sql = "SELECT * FROM `regional` WHERE `$filter` = '$content'";
			$query = mysql_query($sql);
		}
		return $query;
	}
	
	function del($id){
		$sql = "DELETE FROM `regional` WHERE `id_reg` = '$id'";
		$query = mysql_query($sql);
		return $sql;
	}
	
	function upd($id,$reg){
		if($reg != ""){
			$sql = "UPDATE `regional` SET `regional`='$reg' WHERE `id_reg` = '$id'";
			$query = mysql_query($sql);
			$result[1] = 1;
			$result[2] = "Berhasil update";
		}else
		{
			$result[1] = 0;
			$result[2] = "Silahkan Lengkapi data dahulu";
		}
		return $result;
	}
	/*
	Function add(){
		if(){
			$sql = "";
			$query = mysql_query($sql);
			$result[1] = 1;
			$result[2] = "";
		}else
		{
			$result[1] = 0;
			$result[2] = "";
		}
		return $result;
	}
	*/
	
}
?>