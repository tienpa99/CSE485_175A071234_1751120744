<?php
	session_start();
	if(isset($_SESSION["user"])){
		require_once('ketnoi.php');
		$ID = $_POST["id"];
		$sql = "DELETE FROM `post` WHERE `id` = '".$ID."'";
		if($rs=$conn->query($sql)){
			echo 1;
		}
	}
	else{
		mysqli_close($conn);
		header("Location: index.php");
	}
	
 ?>