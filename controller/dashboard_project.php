<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "ID PROJECT";
$title[2] = "NAMA PROJECT";
$title[3] = "TYPE PROV";
$title[4] = "CATUAN";
$title[5] = "JUMLAH ODP";
$title[6] = "NILAI MATERIAL";
$title[7] = "NILAI JASA";
$title[8] = "KETERANGAN";
$title[9] = "<center>FILE</center>";
$title[10] = "Update";

$i = 1;
$content = "";
while ($i <= 10)
{
	$data = "<b><font size='2px' color='white'>".$title[$i]."</font></b>";
	if ($i ==9)
	{
		$cs = 3;
	}else{
		$cs = 0;
	}
	$content = $content.$tab->table_hdct1($data,0,$cs);
	$i++;
}
$tab_hd = $tab->table_row($content);

$i = 1;
$row = "";
while($i <= 5)
{
	$j = 1;
	$data = "";
	while($j <= 12)
	{
		if ($j == 9)
		{
			$value = $ele->links("#","<font size='2px'>KML_DATA</font>");
		}
		else if ($j == 10)
		{
			$value = $ele->links("#","<font size='2px'>RAB_DATA</font>");
		}
		else if ($j == 11)
		{
			$value = $ele->links("#","<font size='2px'>APD_DATA</font>");
		}
		else if ($j == 12)
		{
			$value = $ele->button_small("update_project_by_cons.php","<font size='2px'>Update</font>");
		}
		else
		{
			$value = "";
		}
		$data = $data.$tab->table_ctct($value);
		$j++;
	}
	$row = $row.$tab->table_row($data);
	$i++;
}
$table = $tab->table_show($tab_hd.$row);
$header = $temp->headerm("<h2>PROJECT T_CLOUD STO LBG</h2>");
$search = $ele->left_content($temp->search());
$project_baru = $ele->button_small("update_project_by_sdi.php","new Project");
$main = $temp->main_a($header."<br>".$search.$project_baru."<br><br>".$table);
$menu = $temp->menu_survey();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Dispath Dossier");

echo $page;
?>