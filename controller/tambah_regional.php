<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/Regional.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$reg = new Regional;

$item[1] =  "Regional";
$item[2] = "";


$i = 1;
$row = "";
while ($i <= 2)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 2)
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

$header = $temp->headerm("<h2>Tambah List Regional</h2>");
$form = $ele->form("POST","auten_regional.php?ket=add",$table);
$main = $temp->main_a($header."<br>".$form);



$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Tambah Regional");
echo $page;
?>