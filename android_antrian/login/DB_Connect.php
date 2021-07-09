<?php
class DB_Connect {
    private $conn;
 
    // koneksi ke database
    public function connect() {

        define("DB_HOST", "localhost");
		define("DB_USER", "root");
		define("DB_PASSWORD", "");
		define("DB_DATABASE", "android_antrian");
         
        // koneksi ke mysql database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
         
        // return database handler
        return $this->conn;
    }
}
 
?>