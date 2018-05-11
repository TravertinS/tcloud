<?php
class Jscript{
	function warning($msg,$link_t,$link_f){
		$sc ="
			<script>
				var r = confirm('$msg');
				if (r == true) {
					 window.location ='$link_t';
				} else {
					window.location ='$link_f';
				}
			</script>
		";
		return $sc;
	}
	
	function alert($msg){
		$sc = "
		<script>
			alert('$msg');
		</script>
		";
		return $sc;
	}
	
	function onchange($name){
		$sc = "
			<script>
			function myFunction() {
				var x = document.getElementById('".$name."').value;
				document.getElementById('demo').innerHTML = 'aww';
			}
			</script>
		";
	}
}
?>