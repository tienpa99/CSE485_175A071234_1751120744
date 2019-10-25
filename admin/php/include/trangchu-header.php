<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>A D M I N - N T T</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="css-js/trangchu-css.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<img src="imgs/banner.png" alt="">
		</div>
		<div class="topnav">
			<div class="topnav">
				<a class="active" href="trangchu.php">Trang Chủ</a>
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Danh Mục</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=MTHT">Môi Trường Học Tập</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=HTQT">Hợp Tác Quốc Tế</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=TT">Tin Tức</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=GT">Giới Thiệu</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=TS">Tuyển Sinh</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=DT">Đào Tạo</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=NC">Nghiên Cứu</a>
					<a class="dropdown-item" href="trangchu-category.php?danhmuc=HTDN">Hợp Tác Doanh Nghiệp </a>
				</div>
				<a href="them-bai.php">Thêm Bài</a>
				<a href="php/common/dang_xuat.php" id="logOut">Đăng Xuất</a>

				<div class="search-container">
					<form action="tim-kiem.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>