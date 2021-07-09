<?php

include_once "koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$nik = $_POST["nik"];
	$password = $_POST["password"];
	
	if ((empty($nik)) || (empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM tbl_pasien WHERE nik='$nik' AND password='$password'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['nik'];
		$response->id_pasien = $row['id_pasien'];
		$response->nik = $row['nik'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "nik atau password salah";
		die(json_encode($response));
	}
	
	mysqli_close($con);
}

?>