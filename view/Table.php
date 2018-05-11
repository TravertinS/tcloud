<?php
 class Table{
	 
	 function table_invis($ct){
		 $sc = "
		 <table width='50px' >
			<tr>
				<td>".$ct."</td>
			</tr>
		 </table>
		 ";
		 return $sc;
	 }
	 Function table_show($ct){
		 $sc = "
		 <div class='table-wrapper'>
			<table class='alt' width='3000px'>
			".$ct."
			</table>
		 </div>
		 ";
		 return $sc;
	 }
	 
	 function table_hd1($ct){
		 $sc = "<tr align='center' valign='center'>".$ct."</tr>";
		 return $sc;
	 }
	 
	 function table_hdct1($ct,$rs,$cs){
		 if ($rs == 0)
		 {
			 $row = "";
		 }else
		 {
			 $row = " rowspan='".$rs."' ";
		 }
		 if ($cs == 0)
		 {
			 $col = "";
		 }else
		 {
			 $col = " colspan='".$cs."' ";
		 }
		 $sc = "<td ".$row." ".$col." bgcolor='#33ccff'>".$ct."</td>";
		 return $sc;
	 }
	 
	 function table_row($ct){
		 $sc = "<tr>".$ct."</tr>";
		 return $sc;
	 }
	 
	 function table_ctct($ct){
		 $sc = "<td>".$ct."</td>";
		 return $sc;
	 }
	 
 }

?>