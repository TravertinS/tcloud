<?php

Class Elements{
	function form($post,$action,$content){
		$sc= "
		<form method='".$post."' action='".$action."'>
		".$content."
		</form>
		";
		return $sc;
	}
	
	function box($content){
		$hd= "
		<div class='box'>
		";
		$ft = "</div>";
		$sc = $hd.$content.$ft;
		return $sc;
	}
	function te_input($type,$name,$ctnt,$val){
		
		$sc = "
			<input type='".$type."' name='".$name."' id='demo-name' value='".$val."' placeholder='".$ctnt."' />
		";
		return $sc;
	}
	function left_content($ct){
		$sc = "
		<div class='6u 12u$(small)'>
		".$ct."
		</div>
		";
		return $sc;
	}
	function button_sub($val){
		$sc = "
		<input type='submit' value='".$val."' class='special' />
		";
		return $sc;
	}
	
	function content_mid($ct){
		$ct = "
			<section>
			".$ct."
			</section>
		";
		return $ct;
	}
	
	function paragraph($ct){
		$sc = $ct;
		return "<section id='banner'>
									<div class='content'>".$sc."</div></section>";
	}
	
	function text_area($name,$row,$col,$ct){
		$sc = "<textarea rows='".$row."' cols='".$col."' name='".$name."' form='usrform'>".$ct."</textarea>";
		return $sc;
	}
	
	function select($option,$name){
		$sc = "<div class='select-wrapper'>
					<select name='".$name."' id='demo-category'>
					".$option."
					</select>
				</div>
		";
		return $sc;
	}
	
	function option($val,$ct){
		$sc = "
		<option value='".$val."'>".$ct."</option>
		";
		return $sc;
	}
	
	function button_small($link,$value){
		$sc = "<a href='".$link."' class='button small'>".$value."</a>";
		return $sc;
	}
	
	function links($link,$value){
		$sc = "<a href='".$link."' >".$value."</a>";
		return $sc;
	}
	
	function table_std($ct){
		$sc = "
		<table>
		$ct
		</table>
		";
		return $sc;
	}
	
	function th_std($ct){
		$sc = "<th bgcolor='blue'><font color='white'><b><center>$ct
		</center></b></th>";
		return $sc;
	}
	function tr_std($ct){
		$sc = "
		<tr>$ct<tr>
		";
		return $sc;
	}
	function td_std($ct){
		$sc ="<td>
				$ct
			</td>
		";
		return $sc;
	}
	function page_std($ct){
		$sc = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		$ct
		</body>
		</html>
		
		";
		return $sc;
	}
	
}
?>