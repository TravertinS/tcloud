<?php
class Java{
	function select($name,$ct){
		$result = "
		<select id='$name' onchange='myFunction()'>
		  $ct
		</select>
		";	
		return $result;
	}
	
	function option($name,$content){
		$result = "
			<option value='$name'>$content</option>
		";
		return $result;
	}
}

?>