<?php
	/* ===== www.dedykuncoro.com ===== */
	// include 'koneksi.php';
	
	// class usr{}
	
	// $username = $_POST["username"];
	// $password = $_POST["password"];
	
	// if ((empty($username)) || (empty($password))) { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "Kolom tidak boleh kosong"; 
	// 	die(json_encode($response));
	// }
	
	// $query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	
	// $row = mysql_fetch_array($query);
	
	// if (!empty($row)){
	// 	$response = new usr();
	// 	$response->success = 1;
	// 	$response->message = "Selamat datang ".$row['username'];
	// 	$response->id = $row['id'];
	// 	$response->username = $row['username'];
	// 	die(json_encode($response));
		
	// } else { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "Username atau password salah";
	// 	die(json_encode($response));
	// }
	
	// mysql_close();


	//=================== KALAU PAKAI MYSQLI YANG ATAS SEMUA DI REMARK, TERUS YANG INI RI UNREMARK ========
	include_once "koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ((empty($username)) || (empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM tbl_pengguna WHERE username='$username' AND password='$password'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['username'];
		$response->id_pengguna = $row['id_pengguna'];
		$response->username = $row['username'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Username atau password salah";
		die(json_encode($response));
	}
	
	mysqli_close($con);
}

// require_once 'DB_Functions.php';
// $db = new DB_Functions();
 
// // json response array
// $response = array("error" => FALSE);

// if($_SERVER['REQUEST_METHOD']=='POST'){

 
// if (isset($_POST['username']) && isset($_POST['password'])) {

	 
//     // menerima parameter POST ( username dan password )
//     $username = $_POST['username'];
//     $password = $_POST['password'];
 
//     // get the user by username and password
//     // get user berdasarkan username dan password
//     $user = $db->getUserByUsernameAndPassword($username, $password);
 
//     if ($user != false) {
//         // user ditemukan
//         $response["error"] = FALSE;
//         $response["uid"] = $user["id"];
//         $response["user"]["nama_pengguna"] = $user["nama_pengguna"];
//         $response["user"]["username"] = $user["username"];
//         echo json_encode($response);
//     } else {
//         // user tidak ditemukan password/username salah
//         $response["error"] = TRUE;
//         $response["error_msg"] = "Login gagal. Password/username salah";
//         echo json_encode($response);
//     }
// } else {
//     $response["error"] = TRUE;
//     $response["error_msg"] = "Parameter (username atau password) ada yang kurang";
//     echo json_encode($response);
// }
// }


?>