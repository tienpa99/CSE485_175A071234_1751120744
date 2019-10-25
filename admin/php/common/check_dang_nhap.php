<?php
	session_start();
	require_once("ketnoi.php");
	$user 	= $_POST['user'];
	$passwd = $_POST['pw'];
	$check = preg_match('/^[1-9a-zA-Z]+$/', $passwd);
	$check2 = preg_match('/^[1-9a-zA-Z]+$/', $user);
	if ($check==true && $check2==true) {
		$user=htmlentities($user);
		$pwmd5 = md5(htmlentities($passwd));
		$sql = "SELECT * FROM `tai-khoan` where user = '".$user."'";
		$result = $conn->query($sql);	
		$row = $result->fetch_assoc();
		if ($row['user']==$user && $row['pw']==$pwmd5){
			$_SESSION["user"]=$row['user'];
			echo 1;
			exit();
		}
		else{echo 3;exit();}
	}
	else{
		echo 2;
		exit();
	}

?>