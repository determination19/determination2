<?php
	$mysqli = new mysqli("localhost","root","","penjualan");

	if ($mysqli->connect_error) {
		echo"tidak tersambung";
	}
?>