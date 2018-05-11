<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "ID Project";
$item[2] =  "Nama Project";
$item[3] =  "Type Prov";
$item[4] =  "Catuan";
$item[5] =  "Jumlah ODP";
$item[6] =  "Nilai Material";
$item[7] =  "Nilai Jasa";
$item[8] =  "Mitra";
$item[9] =  "Update Progress";
$item[10] =  "";

$progress[0] = "-- PROGRESS --";
$progress[1] = "OGP CONSTRUCTION";
$progress[2] = "SELESAI CONSTRUCTION";

$i = 1;
$row = "";
while ($i <= 10)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 9){
		$j = 0;
		$option = "";
		while($j <= 2)
		{
			$option = $option.$ele->option($j,$progress[$j]);
			$j++;
		}
		$content = $ele->select($option,"progress");
	}else if($i == 10)
	{
		$content = $ele->te_input("submit","input","","Update!");
	}else
	{
		$content = "";
	}
	$data2 = $tab->table_ctct($content);
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Detail Project 022678547</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_cons();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Detail SND");
echo $page;
?>