<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "NO";
$title[2] = "ID_DOSSIER";
$title[3] = "RK";
$title[4] = "DP_NAME";
$title[5] = "TYPE";
$title[6] = "PHISIK";
$title[7] = "STATUS ACTIFITY";
$title[8] = "NAMA";
$title[9] = "ALAMAT";
$title[10] = "STATUS";

$i = 1;
$content = "";
while ($i <= 10)
{
	$data = "<b><font size='2px' color='white'>".$title[$i]."</font></b>";
	$content = $content.$tab->table_hdct1($data,0,0);
	$i++;
}
$tab_hd = $tab->table_row($content);

$i = 1;
$row = "";
while($i <= 5)
{
	$j = 1;
	$data = "";
	while($j <= 10)
	{
		$data = $data.$tab->table_ctct("");
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>Data Dossier STO LBG</h2>");
$search = $ele->left_content($temp->search());
$main = $temp->main_a($header."<br>".$search.$table);
$menu = $temp->menu();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dossier");
echo $page;
?>