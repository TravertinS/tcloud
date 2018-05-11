<?php
include("../view/Template.php");
include("../view/Table.php");
include("../view/Elements.php");

$temp = new Template;
$tab = new Table;
$ele = new Elements;

$item[1] =  "ID Dossier";
$item[2] =  "SND";
$item[3] =  "SND GROUP";
$item[4] =  "Nama";
$item[5] =  "Alamat";
$item[6] =  "STO";
$item[7] =  "Lattitude";
$item[8] =  "Longitude";
$item[9] = "Pilih User Migrasi";
$item[10] = "";

$pilihan[1] = "PS";
$pilihan[2] = "PT2";
$pilihan[3] = "PT3";
$pilihan[4] = "Konfirmasi Ulang";
$pilihan[5] = "Alamat Tidak Ditemukan";
$pilihan[6] = "Tunggakan";
$pilihan[7] = "Rumah Kosong";
$pilihan[8] = "Pelanggan menolak";
$pilihan[9] = "No Billing";
$pilihan[10] = "ODP LOSS";

$i = 1;
$row = "";
while ($i <= 10)
{
	$data1 = $tab->table_ctct("<b><font size='2px' color='black'>".$item[$i]."</font></b>");
	if ($i == 10)
	{
		$button = $ele->te_input("submit","input","","Update!");
		$data2 = $tab->table_ctct($button);
	}else if ($i == 9)
	{
		$j = 1;
		$option = "";
		while ($j <= 10)
		{
			$option = $option.$ele->option($i,$pilihan[$j]);
			$j++;
		}
		$select = $ele->select($option,"user");
		$data2 = $tab->table_ctct($select);
	}else if ($i == 8 || $i == 7)
	{
		$te_input = $ele->te_input("text",$item[$i],"Masukkan ".$item[$i]. " Pelanggan","");
		$data2 = $tab->table_ctct($te_input);
	}
	else{
		$data2 = $tab->table_ctct("");
	}
	
	$row = $row.$tab->table_row($data1.$data2);
	$i++;
}
$table = $tab->table_show($row);

$header = $temp->headerm("<h2>Update SND 022678547</h2>");
$main = $temp->main_a($header."<br>".$table);

$menu = $temp->menu_agt_migrasi();
$sidebar = $temp->sidebar($menu);
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Updaet Progress");
echo $page;
?>