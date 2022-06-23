<?php
	$konek = new mysqli("localhost","root","","api_066_085_125_128_143");

	if ($konek->connect_errno) {
		echo "Failed to connect o MySQL: " . $koneksi->coonection_error;
		exit();
	}
?>