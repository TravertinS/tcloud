<?php
Class Excel{
	Function Download($content,$file_name){
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		// It will be called file.xls
		header('Content-Disposition: attachment; filename="$file_name.xls"');
		echo "$content";
		
	}
}
?>