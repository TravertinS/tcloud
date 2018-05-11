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

$id_witel = $_GET['id_wit'];
$id_reg = $_GET['id_reg'];
$alt = $_GET['alt'];

if ($alt == 1){
	$alert = $js->alert("Silahkan Masukkan Data Yang Valid");
}else{
	$alert = "";
}

$con = $db->connection();

$field = $wit->show("id_witel",$id_witel);
$list = mysql_fetch_array($field);
$witel = $list['witel'];

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
		$input_text = $ele->te_input("text","sto","Masukkan ".$item[$i],"");
		$data2 = $tab->table_ctct($input_text);
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Tambah List STO Witel $witel</h2>");
$form = $ele->form("POST","auten_sto.php?ket=add&amp;id_reg=$id_reg&amp;id_wit=$id_witel",$table);
$main = $temp->main_a($alert.$header."<br>".$form);

$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Tambah STO");
echo $page;                                                                                                                                                                                                                  
?>