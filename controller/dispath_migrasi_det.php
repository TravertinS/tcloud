<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "ID Dossier";
$item[2] =  "Nama";
$item[3] =  "Alamat";
$item[4] =  "STO";
$item[5] = "Pilih User Migrasi";
$item[6] = "";

$user[1] = "adit";
$user[2] = "acil";
$user[3] = "valendra";

$i = 1;
$row = "";
while ($i <= 6)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 6)
	{
		$button = $ele->te_input("submit","input","","Dispath!");
		$data2 = $tab->table_ctct($button);
	}else if ($i == 5)
	{
		$j = 1;
		$option = "";
		while ($j <= 3)
		{
			$option = $option.$ele->option($i,$user[$j]);
			$j++;
		}
		$select = $ele->select($option,"user");
		$data2 = $tab->table_ctct($select);
	}
	else{
		$data2 = $tab->table_ctct("");
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Detail SND 022678547</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_tl_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Detail SND");
echo $page;
?>