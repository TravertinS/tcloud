<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "SND";
$item[2] =  "SND GRUP";
$item[3] =  "Nama";
$item[4] =  "Alamat";
$item[5] =  "STO";
$item[6] =  "HASIL SURVEY";
$item[7] =  "Pilih Project";
$item[8] =  "";

$user[1] = "R3-BANDUNG-JL BELITUNG";
$user[2] = "R3-BANDUNG-JL ACEH";
$user[3] = "R3-BANDUNG-JL JAWA";

$i = 1;
$row = "";
while ($i <= 8)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 8)
	{
		$button = $ele->te_input("submit","input","","Dispath!");
		$data2 = $tab->table_ctct($button);
	}else if ($i == 7)
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

$menu = $temp->menu_survey();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Detail SND");
echo $page;
?>