<?php
include("../view/Template.php");
$temp = new Template;

$menu = $temp->menu_admin();
$sidebar = $temp->sidebar($menu);
$main = $temp->main_a("");
$wrapper = $temp->wrapper($main.$sidebar);
$page = $temp->page($wrapper,"Home Admin");

echo $page;
?>