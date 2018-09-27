<?php
Class Dossier{
	Function counts_sto($sto){
		$sql = "SELECT * FROM `dossier` WHERE `id_sto` ='$sto'";
		$query = mysql_query($sql);
		$num = mysql_num_rows($query);
		return $num;
	}

	Function counts_by($sto,$by,$ct){
		$sql = "SELECT * FROM `dossier` WHERE `$by` = '$ct' AND `id_sto` = $sto";
		$query = mysql_query($sql);
		$num = mysql_num_rows($query);
		return $num;
	}

	function show(){
			$sql = "";

	}
}

?>
