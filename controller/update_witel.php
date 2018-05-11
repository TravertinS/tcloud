<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/Witel.php");
include("../model/Jscript.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$wit = new Witel;
$js = new Jscript;

$id_wit = $_GET['id'];
$id_reg = $_GET['id_reg'];
$alt = $_GET['alt'];

if($alt == 1){
	echo $js->alert("Update Gagal Silahkan Masukkan data yang Valid!");
}else if($alt == 2)
{
	echo $js->alert("Data Berhasil Disimpan");
}

$con = $db->connection();

$field_wit = $wit->show("id_witel",$id_wit);
$witel = mysql_fetch_array($field_wit);


$item[1] =  "Witel";
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
		$input_text = $ele->te_input("text","witel","Masukkan ".$item[$i],$witel['witel']);
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Update Witel</h2>");
$form = $ele->form("POST","auten_witel.php?ket=upd&amp;id=$id_wit&amp;id_reg=$id_reg",$table);
$main = $temp->main_a($header."<br>".$form);



$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Update Witel");
echo $page;
?>