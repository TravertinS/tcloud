<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "ID DOSSIER";
$title[2] = "SND";
$title[3] = "SND GRUP";
$title[4] = "NAMA";
$title[5] = "ALAMAT";
$title[6] = "STO";
$title[7] = "ACTION";

$i = 1;
$content = "";
while ($i <= 7)
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
	while($j <= 7)
	{
		if ($j == 7)
		{
			$value = $ele->links("dispath_migrasi_det.php","<font size='2px'>Dispath</font>");
		}else
		{
			$value = "";
		}
		$data = $data.$tab->table_ctct($value);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>Data Dossier STO LBG</h2>");
$search = $ele->left_content($temp->search());
$main = $temp->main_a($header."<br>".$search.$table);
$menu = $temp->menu_tl_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dispath Dossier");

echo $page;
?>