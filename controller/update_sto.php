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

$con = $db->connection();

$sto = new Sto;

$id_sto = $_GET['id_sto'];
$alt = $_GET['alt'];

if ($alt == 1){
	$alert = $js->alert("Silahkan Masukkan Data Yang Valid");
}else{
	$alert = "";
}

$con = $db->connection();

$field = $sto->show1("id_sto",$id_sto);
$list = mysql_fetch_array($field);
$nama_sto = $list['nama_sto'];


$item[1] =  "STO";
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
		$input_text = $ele->te_input("text","sto","Masukkan ".$item[$i],$nama_sto);
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Update STO $nama_sto</h2>");
$form = $ele->form("POST","auten_sto.php?ket=up&amp;id_sto=$id_sto",$table);
$main = $temp->main_a($alert.$header."<br>".$form);

$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Tambah STO");
echo $page;                                                                                                                                                                                                                  
?>