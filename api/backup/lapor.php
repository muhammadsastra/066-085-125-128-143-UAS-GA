<?php
	include 'Connection.php';

	$connection = new Connection();
    $conn = $connection->getConnection();
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$latitude = $_POST['latitude'];
	$longtitude = $_POST['longtitude'];



	if($nama != "" && $latitude != "" && $longtitude != "") {
		$sql = mysqli_query($conn, "insert into studio values (NULL,'$nama','$latitude','$longtitude')");
	}

	if($sql) {
		echo "berhasil";
	} else {
		echo "gagal";
	}

?>