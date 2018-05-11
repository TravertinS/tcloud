<?php
include('../view/Template.php');
include('../view/Table.php');
include('../view/Elements.php');

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title_header[1]="<b><font size='2' color='white'>NO</font></b>";
$title_header[2]="<b><font size='2' color='white'>STO</font></b>";
$title_header[3]="<b><font size='2' color='white'>LIST <BR>DOSSIER</font></b>";
$title_header[4]="<b><font size='2' color='white'>PLAN TCLOUD</font></b>";
$title_header[5]="<b><font size='2' color='white'>MAPPING</font></b>";
$title_header[6]="<b><font size='2' color='white'>SELESAI DESIGN /<BR> SIAP CONSTRUCTION</font></b>";
$title_header[7]="<b><font size='2' color='white'>OGP <BR>CONSTRUCTION</font></b>";
$title_header[8]="<b><font size='2' color='white'>PROSES GOLIVE</font></b>";
$title_header[9]="<b><font size='2' color='white'>MIGRASI</font></b>";
$title_header[10]="<b><font size='2' color='white'>% PROGRESS</font></b>";
$title_header[11]="<b><font size='2' color='white'>GRAND TOTAL</font></b>";

$i = 1;
$row = 0;
$col = 0;
$tab_hd_ct = "";
while ($i <= 11)
{
	if ($i <= 4 || $i >=10)
	{
		$row = 2;
	}else if ($i == 5)
	{
		$col = 6;
	}else if ($i >= 6 && $i <= 8)
	{
		$col = 3;
	}else if($i == 9)
	{
		$col = 4;
	}
	$head_content = $tab->table_hdct1($title_header[$i],$row,$col);
	$tab_hd_ct = $tab_hd_ct.$head_content;
	$i= $i +1;
	$row = 0;
	$col = 0;
}
$tab_hd1 = $tab->table_hd1($tab_hd_ct);

$title_sub[1] = "<b><font size='2' color='white'>Belum<br>Mapping</font></b>";
$title_sub[2] = "<b><font size='2' color='white'>PT2</font></b>";
$title_sub[3] = "<b><font size='2' color='white'>PT3</font></b>";
$title_sub[4] = "<b><font size='2' color='white'>KENDALA</font></b>";
$title_sub[5] = "<b><font size='2' color='white'>ENTERPRISE</font></b>";
$title_sub[6] = "<b><font size='2' color='white'>TOTAL</font></b>";
$title_sub[7] = "<b><font size='2' color='white'>PT2</font></b>";
$title_sub[8] = "<b><font size='2' color='white'>PT3</font></b>";
$title_sub[9] = "<b><font size='2' color='white'>TOTAL</font></b>";
$title_sub[10] = "<b><font size='2' color='white'>PT2</font></b>";
$title_sub[11] = "<b><font size='2' color='white'>PT3</font></b>";
$title_sub[12] = "<b><font size='2' color='white'>TOTAL</font></b>";
$title_sub[13] = "<b><font size='2' color='white'>PT2</font></b>";
$title_sub[14] = "<b><font size='2' color='white'>PT3</font></b>";
$title_sub[15] = "<b><font size='2' color='white'>TOTAL</font></b>";
$title_sub[16] = "<b><font size='2' color='white'>PT1</font></b>";
$title_sub[17] = "<b><font size='2' color='white'>KENDALA</font></b>";
$title_sub[18] = "<b><font size='2' color='white'>CLOSED</font></b>";
$title_sub[19] = "<b><font size='2' color='white'>TOTAL</font></b>";

$i = 1;
$tab_hd_ct = "";
while ($i <= 19)
{
	$head_content = $tab->table_hdct1($title_sub[$i],0,0);
	$tab_hd_ct = $tab_hd_ct.$head_content;
	$i = $i + 1;
}
$tab_hd2 = $tab->table_hd1($tab_hd_ct);


$i = 1;
$tab_content = "";
while ($i <= 25){
	if ($i == 1)
	{
		$content = "Regional 3";
	}else
	{
		$content = $i+1000;
	}
	$content = "<b><font size='2' color='black'>".$content."</font></b>";
	$content = $tab->table_ctct($content);
	$tab_content = $tab_content.$content;
	$i = $i +1;
}

$row = $tab->table_row($tab_content);
$table = $tab->table_show($tab_hd1.$tab_hd2.$tab_content);
$table_temp = $tab->table_invis("");
$content_mid = $ele->paragraph($table);
$main = $temp->main_a($content_mid);

$ct_side = 
$temp->search().
$temp->menu().
$temp->section3().
$temp->section4().
$temp->footer()
;
$sidebar = $temp->sidebar($ct_side);

$wrap = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrap,"Dashboard Regional");

echo $page;


?>