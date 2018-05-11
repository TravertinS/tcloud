<?php
include("../view/Template.php");
include("../view/Elements.php");
include("../model/Jscript.php");

$temp = new Template;
$ele = new Elements;
$js = new Jscript;

$err = $_GET['err'];
if ($err ==1){
	echo $js->alert("SIlahkan Masukkan Data Yang Valid!");
	
}

$tb1 = $ele->te_input("text","nik","NIK","");
$tb2 = $ele->te_input("password","pwd","Password","");
$btn = $ele->button_sub("Login");
$form = $ele->form("post","auten_user.php?id=1","<br>".$tb1."<br>".$tb2."<br>".$btn);
$cover = $ele->left_content($form);
$ct_head = "<left>Silahkan <strong>Login</STRONG> Terlebih Dahulu</left>";
$head = $temp->headerm($ct_head);
$main = $temp->main_a($head.$cover);
$side = $temp->sidebar($temp->left_sidebar_pic());
$wrap = $temp->wrapper($main.$side);
$page = $temp->page($wrap,"Login");

echo $page;
?>