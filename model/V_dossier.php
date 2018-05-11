<?php
Class V_dossier{
	Function show(){
		$sql = "SELECT * FROM `v_dossier`";
		$query = mysql_query($sql);
		return $query;
	}
	
}
?>