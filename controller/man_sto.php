<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include ("../model/Database.php");
include ("../model/Regional.php");
include ("../model/Witel.php");
include ("../model/Jscript.php");
include ("../model/Sto.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$reg = new Regional;
$wit = new Witel;
$js = new Jscript;
$sto = new Sto;

$id_reg = $_GET['id_reg'];
$id_wit = $_GET['id_wit'];

$alt = $_GET['alt'];
if($alt == 1)
{
	$alert = $js->alert("Data Berhasil Disimpan!");
}else if($alt == 2)
{
	$alert = $js->alert("Data Terhapus!");
}else{
	$alert = "";
}

$con = $db->connection();

$field_reg = $reg->show("id_reg",$id_reg);
$list_reg = mysql_fetch_array($field_reg);
$nama_reg = $list_reg['regional'];

$field = $wit->show("id_witel",$id_wit);
$list = mysql_fetch_array($field);
$nama_witel = $list['witel'];

$field = $sto->show2($id_reg,$id_wit);

$title[1] = "No";
$title[2] = "STO";
$title[3] = "Action";

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
while($list_sto = mysql_fetch_array($field))
{
	$id_sto = $list_sto['id_sto'];
	$j = 1;
	$data = "";
	while($j <= 4)
	{
		if ($j == 3)
		{
			$value = "<center>".$ele->button_small("update_sto.php?id_sto=$id_sto&amp;alt=0","Update")."</center>";
		}else if ($j == 1)
		{
			$value = "<center><b><font color='black' size='2px '>".$i."</font></b></center>";
		}else if ($j == 4)
		{
			$value = $ele->button_small("auten_sto.php?ket=del&amp;id_sto=$id_sto&amp;sr=0&amp;id_reg=$id_reg&amp;id_wit=$id_wit","Delete");
		}else
		{
			$value = "<b><font color='black' size='2px '>".$list_sto['nama_sto']."</font></b>";
		}
		$data = $data.$tab->table_ctct($value);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>Data STO Witel $nama_witel $nama_reg</h2>");
$search = $ele->left_content($temp->search());

$tambah = $ele->button_small("tambah_sto.php?id_reg=$id_reg&amp;id_wit=$id_wit&amp;alt=0","Tambah");

$main = $temp->main_a($alert.$header."<br>".$search.$tambah."<br><br>".$table);
$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Data Sto");
//echo $i;
echo $page;
?>