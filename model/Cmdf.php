<?php
Class Cmdf{
	function add($nama,$witel,$reg){
		if ($nama != "" || $witel != "" || $reg != "")
		{
			$sql = "INSERT INTO `cmdf`(`nama_cmdf`, `witel`, `Regional`) VALUES ('".$nama."','".$witel."','".$reg."')";
			$query = mysql_query($sql);
			$result[1] = 1;
			$result[2] = "Data Berhasil Diinput";
		}else
		{
			$result[1] = 0;
			$result[2] = "Lengkapi Data Terlebih Dahulu";
		}
		return $result;
	}
}
?>