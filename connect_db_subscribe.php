<?php 
	$link = mysqli_connect('localhost', 'root','','mtbpuromotor');
	if ($link) {
		mysqli_select_db($link,"mtbPMsubs");		
	}
?>