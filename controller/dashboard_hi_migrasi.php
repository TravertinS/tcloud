<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "ID MIGRASI";
$title[2] = "ID DOSSIER";
$title[3] = "NAMA";
$title[4] = "ALAMAT";
$title[5] = "STO";
$title[6] = "VALIDASI LAPANGAN";
$title[7] = "TANGGAL UPDATE";
$title[8] = "PIC";
$title[9] = "KETERANGAN";

$i = 1;
$header = "";
while($i <= 9)
{
	$content = "<b><font color='white' size='2px'>".$title[$i]."</font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header = $tab->table_row($header);

$i = 1;
$row = "";
while ($i <= 5)
{
	$j = 1;
	$data = "";
	while($j <= 9)
	{
		$data = $data.$tab->table_ctct("");
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Dashboard Migrasi HI<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_tl_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dashboard Migrasi");

echo $page;

?>