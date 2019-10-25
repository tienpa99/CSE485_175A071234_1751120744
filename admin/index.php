<?php 
	session_start();
	if(isset($_SESSION["user"])){
		header("Location: trangchu.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0">
	<title>L O G I N - N T T</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="css-js/style.css">
</head>
<body class="body-content">
	<div class="container">
		<div id="page-header">
			<header>
				<div class="container">
					<img src="imgs/banner.png" class="img-responsive" style="width:100%;">
				</div>
			</header>
		</div>
	</div>

	<div class="container">
		<div class="row vh-100">
			<div class="center-login">
				<input id="ReturnUrl" name="ReturnUrl" type="hidden" value="" />
				<input name="__RequestVerificationToken" type="hidden" value="3p8qARHKtpcuHmRoK6c-V3BdzZdn5ajZURY9MeodZdGwzR7t-u9U7pWBeQP5P-8ii7pNT1xinoaw6tfmLVJWHXz-Z4_g7tZ6y29HJQobY3E1" />                
				<input asp-for="ReturnUrl" type="hidden">
				<div class="form-group">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text w154"><i class="fa fa-user"></i>&nbsp;Tài Khoản</div>
						</div>
						<input autocomplete="new-password" class="form-control" data-val="true" data-val-length="Tài khoản không được dài quá 12 ký tự" data-val-length-max="12" data-val-required="Tài khoản không được để trống." id="UserName" name="UserName" placeholder="Nhập tài khoản" type="text" value="" />

					</div>
				</div>
				<div class="form-group">
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text w154"><i class="fa fa-unlock-alt"></i>&nbsp;Mật khẩu</div>
						</div>
						<input autocomplete="new-password" class="form-control" data-val="true" data-val-required="Mật khẩu không được để trống" id="Password" name="Password" placeholder="Nhập mật khẩu" type="password" />
					</div>
				</div>

				<button id="btnLogin" name="btnLogin" class="btn btn-primary btn-100">ĐĂNG NHẬP</button>

			</div>
			<div id="page-footer" class="container">
				<div class="info-site-top clearfix" style="background-color:#0069d9">
					<div class="col-sm-6">
						<div class="txt-ft">
							TRƯỜNG ĐẠI HỌC NGUYỄN TẤT THÀNH<br>
							<strong>Địa chỉ:</strong>  300A Nguyễn Tất Thành, Phường 13, Quận 4, Tp.HCM<br> 
							<strong>Điện thoại (Tổng đài):</strong> 1900 2039 Fax:</strong> (028) 3940.4759<br>
							<strong>Số nội bộ:</strong> Phòng Công tác SV: 324, 325 | Phòng Quản lý Đào Tạo: 342, 344 <br> 				
							<strong>Email:</strong> <a target="_blank" href="mailto:tuvan-hotroSV@ntt.edu.vn" class="lf">tuvan-hotroSV@ntt.edu.vn</a> | <a target="_blank" href="mailto:phongdaotao@ntt.edu.vn" class="lf">phongdaotao@ntt.edu.vn</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="css-js/script.js"></script>
	</html>