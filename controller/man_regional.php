<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include ("../model/Database.php");
include ("../model/Regional.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$reg = new Regional;

$con = $db->connection();

$title[1] = "No";
$title[2] = "Regional";
$title[3] = "Action";

$q = $reg->show("","");

$i = 1;
$content = "";
while ($i <= 3)
{
	$data = "<b><font size='2px' color='white'><center>".$title[$i]."</center></font></b>";
	if ($i == 3)
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
while($list = mysql_fetch_array($q))
{
	$id = $list['id_reg'];
	$j = 1;
	$data = "";
	while($j <= 4)
	{
		if ($j == 3)
		{
			$value = "<center>".$ele->button_small("update_regional.php?id=$id&amp;alt=0","Update")."</center>";
		}else if ($j == 1)
		{
			$value = "<center><b><font color='black' size='2px '>".$i."</font></b></center>";
		}else if ($j == 4)
		{
			$value = $ele->button_small("auten_regional.php?ket=del&amp;id=$id&amp;act=0","Delete");
		}else
		{
			$link_reg = $ele->links("man_witel.php?alt=0&amp;id_reg=$id",$list['regional']);
			$value = "<center><b><font color='black' size='2px '>".$link_reg."</font></b></center>";
		}
		$data = $data.$tab->table_ctct($value);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>Data Regional</h2>");
$search = $ele->left_content($temp->search());

$tambah = $ele->button_small("tambah_regional.php","Tambah");

$main = $temp->main_a($header."<br>".$tambah."<br><br>".$table);
$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Data regional");
//echo $i;
echo $page;
?>