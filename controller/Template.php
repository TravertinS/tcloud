<?php
include("../view/Template.php");

$temp = new Template;
$ct_main = 
$temp->headerm("").
$temp->banner().
$temp->section1().
$temp->section2()
;
$main = $temp->main_a($ct_main);

$ct_side = 
$temp->search().
$temp->menu().
$temp->section3().
$temp->section4().
$temp->footer()
;
$sidebar = $temp->sidebar($ct_side);

$ct_wrapper = $main.$sidebar;
$wrapper = $temp->wrapper($ct_wrapper);
$page = $temp->page($wrapper);
echo $page;
?>