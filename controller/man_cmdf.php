<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "No";
$title[2] = "STO";
$title[3] = "Witel";
$title[4] = "Regional";

$i = 1;
$content = "";
while ($i <= 4)
{
	$data = "<b><font size='2px' color='white'><center>".$title[$i]."</center></font></b>";
	if ($i == 4)
	{
		$cs = 2;
	}else{
		$cs = 0;
	}
	$content = $content.$tab->table_hdct1($data,0,$cs);
	$i++;
}
$tab_hd = $tab->table_row($content);

$i = 1;
$row = "";
while($i <= 5)
{
	$j = 1;
	$data = "";
	while($j <= 5)
	{
		if ($j == 4)
		{
			$value = "<center>".$ele->button_small("dispath_migrasi_det.php","<font size='2px'>Update</font>")."</center>";
		}else if ($j == 5)
		{
			$value = "<center>".$ele->button_small("dispath_migrasi_det.php","<font size='2px'>Delete</font>");
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
$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dispath Dossier");

echo $page;
?>