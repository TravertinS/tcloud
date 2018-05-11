<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include ("../model/Database.php");
include ("../model/Regional.php");
include ("../model/Witel.php");
include ("../model/Jscript.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$reg = new Regional;
$wit = new Witel;
$js = new Jscript;

$id_reg = $_GET['id_reg'];
$alt = $_GET['alt'];
if($alt == 1)
{
	echo $js->alert("Data Berhasil Dihapus!");
}else if($alt == 2)
{
	echo $js->alert("Data Berhasil Disimpan!");
}

$con = $db->connection();

$field_reg = $reg->show("id_reg",$id_reg);
$list_reg = mysql_fetch_array($field_reg);
$nama_reg = $list_reg['regional'];

$field_witel = $wit->show("id_reg",$id_reg);

$title[1] = "No";
$title[2] = "Witel";
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
while($list_witel = mysql_fetch_array($field_witel))
{
	$id_witel = $list_witel['id_witel'];
	$j = 1;
	$data = "";
	while($j <= 4)
	{
		if ($j == 3)
		{
			$value = "<center>".$ele->button_small("update_witel.php?id=$id_witel&amp;alt=0&amp;id_reg=$id_reg","Update")."</center>";
		}else if ($j == 1)
		{
			$value = "<center><b><font color='black' size='2px '>".$i."</font></b></center>";
		}else if ($j == 4)
		{
			$value = $ele->button_small("auten_witel.php?ket=del&amp;id=$id_witel&amp;act=0&amp;id_reg=$id_reg","Delete");
		}else
		{
			$links = $ele->links("man_sto.php?id_reg=$id_reg&amp;id_wit=$id_witel&amp;alt=0",$list_witel['witel']);
			$value = "<b><font color='black' size='2px '>".$links."</font></b>";
		}
		$data = $data.$tab->table_ctct($value);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>Data Witel $nama_reg</h2>");
$search = $ele->left_content($temp->search());

$tambah = $ele->button_small("tambah_witel.php?id_reg=$id_reg&amp;alt=0","Tambah");

$main = $temp->main_a($header."<br>".$search.$tambah."<br><br>".$table);
$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Data regional");
//echo $i;
echo $page;
?>