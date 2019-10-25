<?php 
    include('admin/php/common/ketnoi.php');
    $sqlTT="SELECT * FROM `post` WHERE `danhmuc`='TT' ORDER BY `id` DESC LIMIT 3 ";
    $sqlHTQT="SELECT * FROM `post` WHERE `danhmuc`='HTQT' ORDER BY `id` DESC LIMIT 1";
    $sqlMTHT="SELECT * FROM `post` WHERE `danhmuc`='MTHT' ORDER BY `id` DESC LIMIT 1";
    $rs=$conn->query($sqlTT);
    $rs2=$conn->query($sqlHTQT);
    $row2=$rs2->fetch_assoc();
    $rs3=$conn->query($sqlMTHT);
    $row3=$rs3->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ĐẠI HỌC NGUYỄN TẤT THÀNH</title>
    <link rel="stylesheet" href="./bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/5a84353.css">
</head>
<body>
    <?php include'iclPHP/header.php' ?>
    <div class="container">
        <main>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="admin/imgs/slides/slide01.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>ĐH Nguyễn Tất Thành nhận hồ sơ xét tuyển học bạ đợt cuối đến ngày 03/09/2019</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/imgs/slides/slide02.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Chính sách học bổng Trường Đại học Nguyễn Tất Thành năm 2019></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/imgs/slides/slide03.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Tuyển sinh liên thông 2019</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/imgs/slides/slide04.jpg" alt="Fourth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Tuyển sinh trình độ Thạc sỹ đợt 1 năm 2019 tại ĐH Nguyễn Tất Thành</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="d-md-flex section mt-4">
                <div class="col-md-9">
                    <h2 class="heading-2"><a href="./category.php?danhmuc=TT">Tin tức</a></h2>
                    <div class="row">
                        <?php while ($row=$rs->fetch_assoc()) {
                            
                        ?>
                        <article class="col-md-4 col-sm-6 post-home">
                            <a class="thumbnail" href="view.php?id=<?php echo $row["id"] ?>">
                                <img src="<?php echo $row["thumb"] ?>" alt="" width="100%" heigh="100%">
                            </a>
                            <a href="view.php?id=<?php echo $row["id"] ?>" class="title" style="overflow: hidden; height: 65px;"><?php echo $row["title"]?></a>
                            <div class="content">
                                <p><?php echo $row["ndcy"] ?></p>
                            </div>
                        </article>
                    <?php }?>
                    </div>
                    <ul class="list-unstyled" style="float: right;">
                        <li><a class="c-blue-a5 mr-2" href="./category.php?danhmuc=TT"><i class="fa fa-chevron-circle-right "></i>Xem thêm</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 class="heading-2">Media</h2>
                    <article class="post-video">
                        <iframe style="width: 95%;" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allowfullscreen="" style="width: 20%;"></iframe>
                        <div class="description">
                            <ul class="list-style-1">
                                <li><i class="fa fa-angle-right"></i><a style="overflow: hidden;height: 30px;" href="https://www.youtube.com/watch?v=SwWJkVE6vMg">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="https://www.youtube.com/watch?v=txdD9O_bGXA">NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="https://www.youtube.com/watch?v=gE_RSL0ad6c">NỎ THẦN | TẬP CUỐI: ĐƯỜNG VỀ QUY LẠC</a></li>
                            </ul>
                        </div>
                        <ul class="list-unstyled" style="float: right;">
                            <li><a class="c-blue-a5  mr-2" href="#"><i class="fa fa-chevron-circle-right "></i>Xem thêm</a></li>
                        </ul>
                    </article>
                </div>
            </div>
            <div class="section sub-slider">
                <h3 class="title-carousel"><b>TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?</b></h3>
                <div class="bx-wrapper">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 350px;">
                        <div class="multi-slide" style="width: 715%; position: relative; transition-duration: 0s; transform: translate3d(-2800px, 0px, 0px);">
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_nhatruong-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                                    <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_sinhvien-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Top 10 thương hiệu nổi tiếng</a></p>
                                    <p class="line">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_doanhnghiep-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">95% sinh viên tốt nghiệp có việc làm</a></p>
                                    <p class="line">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center" style="background-image: url(&quot;admin/imgs/quotes/hp_nguoithay-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></p>
                                    <p class="line">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center" style="background-image: url(&quot;admin/imgs/quotes/hp_xhoi-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Đạt chuẩn chất lượng quốc gia</a></p>
                                    <p class="line">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center" style="background-image: url(&quot;admin/imgs/quotes/hp_nhatruong-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                                    <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center" style="background-image: url(&quot;admin/imgs/quotes/hp_sinhvien-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Top 10 thương hiệu nổi tiếng</a></p>
                                    <p class="line">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center" style="background-image: url(&quot;admin/imgs/quotes/hp_doanhnghiep-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">95% sinh viên tốt nghiệp có việc làm</a></p>
                                    <p class="line">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_nguoithay-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></p>
                                    <p class="line">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_xhoi-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Đạt chuẩn chất lượng quốc gia</a></p>
                                    <p class="line">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
                                </div>
                            </div>
                            <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;admin/imgs/quotes/hp_nhatruong-01.svg&quot;); float: left; list-style: none; position: relative; width: 400px;">
                                <div class="caption text-center">
                                    <p class="highlight"><a href="#" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                                    <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bx-controls bx-has-controls-direction">
                        <div class="bx-controls-direction">
                            <a class="bx-prev" href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                            <a class="bx-next" href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section d-md-flex border-top pt-4">
                <div class="col-lg-8">
                    <div class="row">
                        <article class="col-sm-6 post-home">
                            <h2 class="heading-2"><a href="./category.php?danhmuc=HTQT">Hợp tác quốc tế</a></h2>
                            <a class="thumbnail large" href="view.php?id=<?php echo $row2["id"] ?>">
                                <img src="<?php echo $row2["thumb"] ?>" alt="" width="100%">
                            </a>
                            <a href="view.php?id=<?php echo $row2["id"] ?>" class="title" style="overflow: hidden; height: 65px;"><?php echo $row2["title"] ?></a>
                            <div class="content">
                                <p><?php echo $row2["ndcy"] ?></p>
                            </div>
                            <ul class="list-unstyled">
                                <li><a class="c-blue-a5 font-weight-bold" href="category.php?danhmuc=HTQT"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                            </ul>
                        </article>

                        <article class="col-sm-6 post-home">
                            <h2 class="heading-2"><a href="./category.php?danhmuc=MTHT">Môi trường học tập</a></h2>
                            <a class="thumbnail large" href="#">
                                <img src="<?php echo $row3["thumb"] ?>" alt="" width="100%">
                            </a>
                            <a href="view.php?id=<?php echo $row3["id"] ?>" class="title" style="overflow: hidden; height: 65px;"><?php echo $row3["title"] ?></a>
                            <div class="content">
                                <p><?php echo $row3["ndcy"] ?></p>
                            </div>
                            <ul class="list-unstyled">
                                <li><a class="c-blue-a5 font-weight-bold" href="category.php?danhmuc=MTHT"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="heading-2"><a href="#">Sự kiện nổi bật</a></h2>
                    <ul class="list-unstyled">
                        <li class="media event">
                            <div class="d-flex align-items-center mr-3 thumb c-white">
                                <span class="inner text-center w-100">Sep<br><b>14</b></span>
                            </div>
                            <div class="media-body">
                                <h5 class="title mt-0"><a href="#">Lễ ký kết hợp tác với Tạp chí Dân chủ &amp; Pháp luật</a></h5>
                                <ul class=" breadcrumb mb-0 bgm-white">
                                    <li class="breadcrumb-item col-xs-auto time">
                                        <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>08:00
                                    </li>
                                    <li class="breadcrumb-item col-xs-auto">Phòng họp 1 - Cơ sở An Phú Đông</li>
                                </ul>
                            </div>
                        </li>
                        <li class="media event">
                            <div class="d-flex align-items-center mr-3 thumb c-white">
                                <span class="inner text-center w-100">Sep<br> <b>14</b>
                                </span>
                            </div>
                            <div class="media-body">
                                <h5 class="title mt-0"><a href="#">Họp mặt giảng viên thực hành Khoa Luật</a></h5>
                                <ul class="breadcrumb mb-0 bgm-white">
                                    <li class="breadcrumb-item col-xs-auto time">
                                        <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>08:00
                                    </li>
                                    <li class="breadcrumb-item col-xs-auto">Phòng họp 1 - Cơ sở An Phú Đông</li>
                                </ul>
                            </div>
                        </li>
                        <li class="media event">
                            <div class="d-flex align-items-center mr-3 thumb c-white">
                                <span class="inner text-center w-100">Sep<br>
                                    <b>11</b>
                                </span>
                            </div>
                            <div class="media-body">
                                <h5 class="title mt-0"><a href="#">Chương trình "Đồng hành cùng sức khỏe học đường: Tư vấn, chăm sóc, điều trị các bện về da" năm 2019</a></h5>
                                <ul class="breadcrumb mb-0 bgm-white">
                                    <li class="breadcrumb-item col-xs-auto time">
                                        <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                                    </li>
                                    <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li><a class="c-blue-a5 font-weight-bold" href="#"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <?php include'iclPHP/footer.php' ?>
</body>
<script src="./js/jquery-3.4.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="./js/javacrip.js"></script>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
</html>