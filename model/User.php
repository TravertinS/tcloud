<?php
Class User{
	function login($nik,$pass){
		$pass = md5($pass);
		$sql = "SELECT * FROM `user` WHERE `nik` = '$nik' AND `password`='$pass'";
		$query = mysql_query($sql);
		$temp = mysql_fetch_array($query);
		$status = $temp['status'];
		$id = $temp['user_id'];
		setcookie("id_user",$id);
		setcookie("status",$status);
		$num = mysql_num_rows($query);
		return $num;
	}
	
	function add($nik,$nama,$status,$pwd,$id_cmdf){
		if ($nik != "" && $nama != "" && $status != "" && $pwd != "" && $id_cmdf != "")
		{
			$sql = "INSERT INTO `user`(`nik`, `nama`, `status`, `password`, `id_cmdf`) VALUES ('".$nik."','".$nama."','".$status."','".$pwd."','".$id_cmdf."')";
			$query = mysql_query($sql);
			$result[1] = 1;
			$resull[2] = "Data Berhasil Dimasukkan";
		}else
		{
			$resul[1] = 0;
			$resull[2] = "Lengkapi Data Terlebih Dahulu";
		}
	  
	}
	
	function show($filter,$content){
		$sql = "SELECT * FROM `user` WHERE `$filter` = '$content'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function show_all(){
		$sql = "SELECT * FROM `user`";
		$query = mysql_query($sql);
		return $query;
	}

}
?>