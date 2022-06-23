<?php
	include 'koneksi.php';
	$response = array();
    $code = "code";
    $message = "message";
	$query = "select * from studio";
	$getData = $konek->query($query);
	$result = $getData->fetch_all(MYSQLI_ASSOC);
	foreach($result as $data){
        array_push($response, 
        array(
       'nama'=>$data['nama'],
        'latitude'=>$data['latitude'],
        'longitude'=>$data['longitude'])
        );
    }

	// fetch all
	

	echo json_encode(array("data"=>$response,$code=>1,$message=>"Success"));
?>