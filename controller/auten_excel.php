<?php
include("../view/Elements.php");
include("../model/V_dossier.php");
include("../model/Database.php");
include("../model/Excel.php");

$ele = new Elements;
$v_dos = new V_dossier;
$db = new Database;
$exc = new Excel;

$arr[2]="ncli";
$arr[3]="snd";
$arr[4]="snd_grup";
$arr[5]="nama_pelanggan";
$arr[6]="alamat_pelanggan";
$arr[7]="longitude";
$arr[8]="nospeedy";
$arr[9]="rk";
$arr[10]="tipe";
$arr[11]="dp_name";
$arr[12]="phisik";
$arr[13]="status_actifity";
$arr[14]="status";
$arr[15]="validasi_lapangan";
$arr[16]="tanggal_update";
$arr[17]="keterangan";
$arr[18]="serial_number";
$arr[19]="nama_mitra";
$arr[20]="nama";


$conn = $db->connection();
$list = $v_dos->show();
$column = "";
while ($temps = mysql_fetch_array($list)){
	$row = "";
	$i = 2;
	while ($i <= 20){
		$content = $arr[$i];
		$content = $temps[$content];
		$ct = $ele->td_std($content);
		$row = $row.$ct;
		$i++;
	}
	$tr = $ele->tr_std($row);
	$column = $column.$tr;
}
$table = $ele->table_std($column);
$page = $ele->page_std($table);
$down = $exc->download($page,"dossier");

?>
