<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/Witel.php");
include("../model/Regional.php");
include("../model/Jscript.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$wit = new Witel;
$js = new Jscript;
$reg = new Regional;

$id_reg = $_GET['id_reg'];
$alt = $_GET['alt'];

if($alt == 1){
	echo $js->alert("Data Berhasil Disimpan");
}else if($alt == 2){
	echo $js->alert("Silahakan Masukan Data Yang Valid");
}

$con = $db->connection();

$field = $reg->show("id_reg",$id_reg);
$list = mysql_fetch_array($field);
$nama_reg = $list['regional'];

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
		$input_text = $ele->te_input("text","witel","Masukkan ".$item[$i],"");
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Tambah List Witel $nama_reg</h2>");
$form = $ele->form("POST","auten_witel.php?ket=add&amp;id_reg=$id_reg",$table);
$main = $temp->main_a($header."<br>".$form);



$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Tambah Regional");
echo $page;
?>