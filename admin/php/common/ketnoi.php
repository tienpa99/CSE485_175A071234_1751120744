<?php 
//lấy thông tin đăng nhập
	$username = "root"; // Khai báo username
	$password = "";      // Khai báo password
	$server   = "localhost";   // Khai báo server
	$dbname   = "nttu";      // Khai báo database
	// Kết nối database users
	$conn = new mysqli($server, $username, $password, $dbname);
	mysqli_set_charset($conn, 'UTF8');
	//
?>