<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "STO";
$title[2] = "BELUM DESIGN";
$title[3] = "SELESAI DESIGN";

$i = 1;
$header = "";
while($i <= 3)
{
	$content = "<b><font color='white' size='2px'>".$title[$i]."</font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header = $tab->table_row($header);

$j = 1;
$data = "";
while($j <= 3)
{
	$data = $data.$tab->table_ctct("");
	$j++;
}
$row = $tab->table_row($data);
	
	
$table = $tab->table_show($header.$row);
$headerm = $temp->headerm("<h2>Summary Migrasi<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_survey();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"HOME");

echo $page;

?>