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
$item[9] =  "";

$name[1] =  "id_project";
$name[2] =  "nama_project";
$name[3] =  "type";
$name[4] =  "catuan";
$name[5] =  "jumlah_odp";
$name[6] =  "material";
$name[7] =  "jasa";
$name[8] =  "mitra";

$type_prov[0] = "-- TYPE PROV --";
$type_prov[1] = "PT2";
$type_prov[2] = "PT3";

$mitra[0] = "-- NAMA MITRA --";
$mitra[1] = "RK";
$mitra[2] = "SPSI";
$mitra[3] = "FIBER HOME";

$i = 1;
$row = "";
while ($i <= 9)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 1 || $i == 2 || $i == 4 || $i == 5|| $i == 6|| $i == 7)
	{
		$button = $ele->te_input("text",$name[$i],"masukkan ".$item[$i],"");
		$data2 = $tab->table_ctct($button);
	}else if ($i == 3)
	{
		$j = 0;
		$option = "";
		while ($j <= 2)
		{
			$option = $option.$ele->option($j,$type_prov[$j]);
			$j++;
		}
		$select = $ele->select($option,"user");
		$data2 = $tab->table_ctct($select);
	}else if ($i == 8)
	{
		$j = 0;
		$option = "";
		while ($j <= 3)
		{
			$option = $option.$ele->option($j,$mitra[$j]);
			$j++;
		}
		$select = $ele->select($option,"user");
		$data2 = $tab->table_ctct($select);
	}
	else{
		$button = $ele->te_input("submit","input","","Update!");
		$data2 = $tab->table_ctct($button);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Detail Project 022678547</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_survey();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Detail SND");
echo $page;
?>