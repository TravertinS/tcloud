<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/User.php");
include("../model/Sto.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$user = new User;
$sto = new Sto;

$title[1] = "STO";
$title[2] = "BELUM MAPPING";
$title[3] = "SIAP MIGRASI";
$title[4] = "OGP KONTRUKSI";
$title[5] = "CLOSED";


$user_id =  $_COOKIE['id_user'];
$list_user = $user->show("user_id",$user_id);
$id_sto = $list_user['id_sto'];

$list_sto =  $sto->show1("id_sto",$id_sto);
$nama_sto = $list_sto['nama_sto'];

$i = 1;
$header = "";
while($i <= 5)
{
	$content = "<b><font color='white' size='2px'>".$title[$i]."</font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header = $tab->table_row($header);

$j = 1;
$data = "";
while($j <= 5)
{
	if ($j ==1 ){
		$content = $tab->table_ctct("BDK");
	}else if ($j == 2 ){
		$content = $tab->table_ctct("0");
	}else if ($j == 3 ){
		$content = $tab->table_ctct("0");
	}else if ($j == 4 ){
		$content = $tab->table_ctct("418");
	}else if ($j == 5 ){
		$content = $tab->table_ctct("1746");
	}
	$data = $data.$content;
	$j++;
}
$row = $tab->table_row($data);
	
	
$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Summary Migrasi<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_agt_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"HOME");

echo $page;

?>