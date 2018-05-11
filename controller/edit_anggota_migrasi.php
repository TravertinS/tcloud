<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "Nama";
$item[2] =  "Area";
$item[3] = "";


$i = 1;
$row = "";
while ($i <= 3)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 3)
	{
		$button = $ele->te_input("submit","input","","Simpan");
		$data2 = $tab->table_ctct($button);
	}else{
		$input_text = $ele->te_input("text",$item[$i],"Masukkan ".$item[$i],"");
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Update Data Anggota migrasi</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_tl_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"T-Cloud");
echo $page;
?>