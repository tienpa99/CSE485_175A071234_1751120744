<?php 
	session_start();
	if(isset($_SESSION["user"])){
		require_once('ketnoi.php');
		$id = $_POST["ID"];
		$str = $_POST["str"];
		$titlee = $_POST["title"];
		$thumb = $_POST["AnhShow"];
		$ndcy = $_POST["ndcy"];
		$select = $_POST["select"];

		$sua ="UPDATE `post` SET `title`='".$titlee."',`danhmuc`='".$select."',`thumb`='".$thumb."',`ndcy`='".$ndcy."',`pos`='".$str."' WHERE `id` ='".htmlentities($id)."' ";
		$sua_k_anh="UPDATE `post` SET `title`='".$titlee."',`danhmuc`='".$select."',`ndcy`='".$ndcy."',`pos`='".$str."' WHERE `id` ='".htmlentities($id)."' ";

		if($thumb=='Lock'){
			$conn->query($sua_k_anh);
			echo 1;
			exit();
		}
		else{
			$conn->query($sua);
			echo 1;
			exit();
		}
	}
	else{
		mysqli_close($conn);
		header("Location: index.php");
	}

?>