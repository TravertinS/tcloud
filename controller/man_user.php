<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/User.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$user = new User;

$con = $db->connection();

$title[1] = "NIK";
$title[2] = "NAMA";
$title[3] = "STATUS";
$title[4] = "AREA";
$title[5] = "ACTION";

$name[1] = "nik";
$name[2] = "nama";
$name[3] = "status";
$name[4] = "area";

$i = 1;
$header = "";
while($i <= 5)
{
	$content = "<b><font color='white' size='2px'><center>".$title[$i]."</center></font></b>";
	if ($i == 5)
	{
		$cs = 2;
	}else
	{
		$cs = 0;
	}
	$header = $header.$tab->table_hdct1($content,0,$cs);
	$i++;
}
$header = $tab->table_row($header);

$field = $user->show_all();

$i = 1;
$row = "";
while ($list = mysql_fetch_array($field))
{
	$j = 1;
	$data = "";
	while($j <= 6)
	{
		
		if($j == 5)
		{
			$content = "<center>".$ele->button_small("edit_anggota_migrasi.php","Edit")."</center>";
		}else if ($j == 6)
		{
			$content = "<center>".$ele->button_small("#","Hapus")."</center>";
		}else
		{
			
			$content = "";
		}
		$content = "<font color='black' size='2px'>".$content."</font>";
		$data = $data.$tab->table_ctct($content);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}

$tambah = $ele->button_small("tambah_user.php","Tambah");

$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Manajemen User<h2>");
$main = $temp->main_a($headerm."<br>".$tambah."<br><br>".$table);
$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Manajemen User");

echo $page;


?>