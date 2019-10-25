<?php
	session_start();
	if(isset($_SESSION["user"])){
		require_once('ketnoi.php');
		$str = htmlentities($_POST["str"]);
		$titlee = htmlentities($_POST["title"]);
		$thumb = htmlentities($_POST["AnhShow"]);
		$ndcy = htmlentities($_POST["ndcy"]);
		$select = htmlentities($_POST["select"]);
		$them = "INSERT INTO `post`(`title`,`danhmuc`,`thumb`, `ndcy`, `pos`) VALUES ('".$titlee."','".$select."','".$thumb."','".$ndcy."','".$str."')";
		if($rs=$conn->query($them))
		{echo 'ok';}
	}
	else{
		mysqli_close($conn);
		header("Location: index.php");
	}
	
 ?>