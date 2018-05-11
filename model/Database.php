<?php
Class Database{
	function connection(){
		$server = "localhost";
		$user = "root";
		$pass = "";
		$database = "tcloud";
		$setting = mysql_connect($server,$user,$pass);
		$select_db = mysql_select_db($database);
	}
}
?>