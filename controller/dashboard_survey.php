<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "SND";
$title[2] = "SND GRUP";
$title[3] = "NAMA";
$title[4] = "ALAMAT";
$title[5] = "STO";
$title[6] = "HASIL SURVEY";
$title[7] = "TANGGAL UPDATE";
$title[8] = "KETERANGAN";
$title[9] = "ACTION";

$i = 1;
$content = "";
while ($i <= 9)
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
	while($j <= 9)
	{
		if ($j == 9)
		{
			$value = $ele->links("update_survey.php","<font size='2px'>Update</font>");
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
$menu = $temp->menu_survey();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dispath Dossier");

echo $page;
?>