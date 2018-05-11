<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/User.php");
include("../model/Sto.php");
include("../model/Dossier.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$user = new User;
$sto = new Sto;
$dos = new Dossier;

//data require
$db->connection();
$id_user = $_COOKIE['id_user'];

$list = $user->show('user_id',$id_user);
$data = mysql_fetch_array($list);
$id_sto = $data['id_sto'];
$list = $sto->show('id_sto',$id_sto);
$data = mysql_fetch_array($list);
$nama_sto = $data['nama_sto'];
$blm_mapping = $dos->counts_by($id_sto,'status','free');
$kendala = $dos->counts_by($id_sto,'status','kendala');
$sp_migrasi = $dos->counts_by($id_sto,'status','siap migrasi');
$cons = $dos->counts_by($id_sto,'status','cons');
$closed = $dos->counts_by($id_sto,'status','closed');


$title[1] = "STO";
$title[2] = "BELUM MAPPING";
$title[3] = "KENDALA";
$title[4] = "SIAP MIGRASI";
$title[5] = "OGP KONTRUKSI";
$title[6] = "CLOSED";

$i = 1;
$header = "";
while($i <= 6)
{
	$content = "<b><font color='white' size='2px'>".$title[$i]."</font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header = $tab->table_row($header);

$j = 1;
$data = "";
while($j <= 6)
{
	if($j == 1){
		$content = $tab->table_ctct($nama_sto);
	}else if ($j ==2){
		$content = $tab->table_ctct($blm_mapping);
	}else if ($j ==3){
		$content = $tab->table_ctct($kendala);
	}else if ($j ==4){
		$content = $tab->table_ctct($sp_migrasi);
	}else if ($j ==5){
		$content = $tab->table_ctct($cons);
	}else if ($j ==6){
		$content = $tab->table_ctct($closed);
	}
	$data = $data.$content;
	$j++;
}
$row = $tab->table_row($data);


$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Summary Migrasi<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_tl_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"HOME");

echo $page;

?>
