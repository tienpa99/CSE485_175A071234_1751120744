<?php 
session_start();
if(isset($_SESSION["user"])){
	if(empty($_FILES['file']))
	{
		exit();	
	}
	$downloads_url = $_SERVER['SERVER_NAME'];
	$errorImgFile = "./img/img_upload_error.jpg";
	$temp = explode(".", $_FILES["file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$destinationFilePath = 'imgs/post/'.$newfilename ;
	if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
		echo $errorImgFile;
	}
	else{
		echo $destinationFilePath;
	}
}
else{
	mysqli_close($conn);
	header("Location: ../");
}

?>