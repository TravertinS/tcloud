<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "NIK";
$item[2] =  "Nama";
$item[3] =  "Area";
$item[4] =  "Status";
$item[5] =  "Regional";
$item[6] =  "";

$i = 1;
$row = "";
while ($i <= 6)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 6)
	{
		$button = $ele->te_input("submit","input","","Simpan");
		$data2 = $tab->table_ctct($button);
	}else if($i == 3){
		
	}else{
		$input_text = $ele->te_input("text",$item[$i],"Masukkan ".$item[$i],"");
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Input Data User</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Input Data User");
echo $page;
?>