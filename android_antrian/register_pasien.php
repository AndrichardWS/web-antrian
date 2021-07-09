<?php

include_once "koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){

	$nama_pasien = $_POST["nama_pasien"];
	$nik = $_POST["nik"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	if ((empty($nik))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom nik tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($password))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom password tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($confirm_password)) || $password != $confirm_password) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Konfirmasi password tidak sama";
		die(json_encode($response));
	} else {
		if (!empty($nik) && $password == $confirm_password){
			$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_pasien WHERE nik='".$nik."'"));

			if ($num_rows == 0){
				$query = mysqli_query($con, "INSERT INTO tbl_pasien (id_pasien, nama_pasien, nik, password) VALUES(0,'".$nama_pasien."','".$nik."','".$password."')");

				if ($query){
					$response = new usr();
					$response->success = 1;
					$response->message = "Register berhasil, silahkan login.";
					die(json_encode($response));

				} else {
					$response = new usr();
					$response->success = 0;
					$response->message = "nik sudah ada";
					die(json_encode($response));
				}
			} else {
				$response = new usr();
				$response->success = 0;
				$response->message = "nik sudah ada";
				die(json_encode($response));
			}
		}
	}

	mysqli_close($con);
}

?>