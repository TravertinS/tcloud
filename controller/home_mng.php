<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");
include("../model/Database.php");
include("../model/Dossier.php");
include("../model/Sto.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;
$db = new Database;
$dossier = new Dossier;
$sto = new Sto;

//db connection
$conn = $db->connection();

$title[1] = "STO";
$title[2] = "TOTAL";
$title[3] = "CLOSED";
$title[4] = "BELUM MAPPING";
$title[5] = "SIAP MIGRASI";
$title[6] = "OGP KONTRUKSI";
$title[7] = "KENDALA";

$i = 1;
$header = "";
while($i <= 7)
{
	$content = "<b><font color='white' size='2px'>".$title[$i]."</font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header = $tab->table_row($header);

//Sto show
$list_sto = $sto->show1('id_reg','3');
$row = "";
while ($temps = mysql_fetch_array($list_sto))
{
	$j = 1;
	$data = "";
	while($j <= 7)
	{
		$id_sto = $temps['id_sto'];
		if ($j == 1){
			$content = $tab->table_ctct($temps['nama_sto']);
		}else if ($j == 2){
			$num = $dossier->counts_sto($id_sto);
			$content = $tab->table_ctct($num);
		}else if ($j == 3){
			$num = $dossier->counts_by($id_sto,'status','closed');
			$content = $tab->table_ctct($num);
		}else if ($j == 4){
			$num = $dossier->counts_by($id_sto,'status','free');
			$content = $tab->table_ctct($num);
		}else if ($j == 5){
			$num = $dossier->counts_by($id_sto,'status','ready');
			$content = $tab->table_ctct($num);
		}else if ($j == 6){
			$num = $dossier->counts_by($id_sto,'status','cons');
			$content = $tab->table_ctct($num);
		}else if ($j == 7){
			$num = $dossier->counts_by($id_sto,'status','kendala');
			$content = $tab->table_ctct($num);
		}
		$data = $data.$content;
		$j++;
	}
	$row = $row.$tab->table_row($data);
}
$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Summary Migrasi<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_agt_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"HOME");

echo $page;

?>

?>