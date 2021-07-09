<?php

	include_once "koneksi.php";

	class usr{}

	// if($_SERVER['REQUEST_METHOD']=='POST'){

	$no_bpjs = $_POST["no_bpjs"];
	$nik = $_POST["nik"];
	$jalur = $_POST["jalur"];
	$nama = $_POST["nama"];
	$ttl = $_POST["ttl"];
	$jk = $_POST["jk"];


if ((empty($nik))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "NIK tidak boleh kosong";
		die(json_encode($response));

	} else if ((empty($nama))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Nama tidak boleh kosong";
		die(json_encode($response));
	}  else if ((empty($ttl))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Tempat tanggal lahir tidak boleh kosong";
		die(json_encode($response));
	} else {
		
				$query = mysqli_query($con, "INSERT INTO tbl_poli_gigi (no_antrian, no_bpjs, nik, jalur, nama, ttl, jk) VALUES(NULL,'".$no_bpjs."','".$nik."','".$jalur."','".$nama."','".$ttl."','".$jk."')");

					$query2 = mysqli_query($con, "SELECT * FROM tbl_poli_gigi ORDER BY no_antrian DESC limit 1");
					$row = mysqli_fetch_array($query2);

				if ($row){
					$response = new usr();
					$response->success = 1;
					$response->message = "Berhasil mendaftar";
					$response->no_antrian = $row['no_antrian'];
					die(json_encode($response));

				}
		}
	

	mysqli_close($con);
// }
?>	