<?php
include("../view/Template.php");
include("../view/Elements.php");
include("../view/Table.php");

$temp = new Template;
$ele = new Elements;
$tab = new Table;

$title_header[1]="<b><font size='2' color='white'>NO</font></b>";
$title_header[2]="<b><font size='2' color='white'>WITEL</font></b>";
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

$colum_ct[1]= "<b><font size='2' color='black'>DGO</font></b>";
$colum_ct[2]= "<b><font size='2' color='black'>HGM</font></b>";
$colum_ct[3]= "<b><font size='2' color='black'>BDK</font></b>";
$colum_ct[4]= "<b><font size='2' color='black'>TRG</font></b>";
$colum_ct[5]= "<b><font size='2' color='black'>LBG</font></b>";
$colum_ct[6]= "<b><font size='2' color='black'>CJA</font></b>";
$colum_ct[7]= "<b><font size='2' color='black'>UBR</font></b>";

$i = 1;
$row = "";
while ($i <= 7)
{
	$j = 1;
	$data = "";
	while ($j <= 25)
	{
		if ($j == 1)
		{
			$content = $i;
		}else if ($j == 2)
		{
			$content = $colum_ct[$i];
		}else
		{
			$content = "3000";
		}
		$data = $data.$tab->table_ctct("<b><font size='2' color='black'>". $content ."</font></b>");
		$j = $j + 1;
	}
	$row = $row.$tab->table_row($data);
	$i = $i+1;
}
$table = $tab->table_show($tab_hd1.$tab_hd2.$row);
$headerm = $temp->headerm("<h2>Dashboard WITEL Bandung</h2>");
$main = $temp->main_a($headerm."<br>".$table);

$menu = $temp->menu();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dashboard STO");

echo $page;

?>
