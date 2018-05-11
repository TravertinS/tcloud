<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$title[1] = "STO";
$title[2] = "OGP KONTRUKSI";
$title[3] = "SELESAI KONTRUKSI";

$subtitle[1] = "PT2";
$subtitle[2] = "PT3";
$subtitle[3] = "PT2";
$subtitle[4] = "PT3";

$i = 1;
$header = "";
while($i <= 3)
{
	if ($i == 1){
		$cs = 0;
		$rs = 2;
	}else
	{
		$cs = 2;
		$rs = 0;
	}
	$content = "<b><font color='white' size='2px'><center>".$title[$i]."</center></font></b>";
	$header = $header.$tab->table_hdct1($content,$rs,$cs);
	$i++;
}
$header1 = $tab->table_row($header);

$i = 1;
$header = "";
while($i <= 4)
{
	$content = "<b><font color='white' size='2px'><center>".$subtitle[$i]."</center></font></b>";
	$header = $header.$tab->table_hdct1($content,0,0);
	$i++;
}
$header2 = $tab->table_row($header);



$j = 1;
$data = "";
while($j <= 5)
{
	$data = $data.$tab->table_ctct("");
	$j++;
}
$row = $tab->table_row($data);
	
	
$table = $tab->table_show($header1.$header2.$row);
$headerm = $temp->headerm("<h2>Construction Summary<h2>");
$main = $temp->main_a($headerm."<br>".$table);
$menu = $temp->menu_cons();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"HOME");

echo $page;

?>