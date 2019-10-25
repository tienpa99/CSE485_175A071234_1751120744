<?php 
   if(isset($_GET["danhmuc"])){
      require_once('admin/php/common/ketnoi.php');
      $dm = $_GET["danhmuc"];
      $dm = htmlentities($dm);
      $limit = 5;  
      if (isset($_GET["page"])) { $page  = htmlentities($_GET["page"]); } else { $page=1; };
      $start_from = ($page-1) * $limit;
      $sql = "SELECT * FROM `post` WHERE `danhmuc`='".$dm."' ORDER BY `id` DESC LIMIT $start_from,$limit ";
      $rs_result = $conn->query($sql);
      
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>ĐẠI HỌC NGUYỄN TẤT THÀNH - TIN TỨC</title>
   <link rel="stylesheet" href="./bootstrap-4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./css/5a84353.css">
</head>
<body>
   <?php include'iclPHP/header.php' ?>
   <div class="container">
      <div class="row">
   <aside id="sidebar" class="col-md-3 col-sm-4 mb-3">
      <div class="heading p-4">
         <h3>Đại Học Nguyễn Tất Thành</h3>
         <ul class="list-unstyled">
            <li class="c-lime-a5 font-weight-bold">“Đoàn kết - Hội nhập - Năng Động - Trí tuệ - Trách nhiệm”</li>
         </ul>
         <!-- /heading -->
      </div>

      <article class="p-4">
         <p><img alt class="img-fluid" src="admin/imgs/BacHo.jpg"></p>
         <p>QUY MÔ ĐÀO TẠO</p>

         <ul>
            <li>Hơn 20.000 sinh viên</li>
         </ul>

         <p>ĐỘI NGŨ GIẢNG VIÊN</p>

         <ul>
            <li>924 giảng viên</li>
            <li>90% có bằng TS, ThS</li>
         </ul>

         <p>CƠ SỞ VẬT CHẤT</p>

         <ul>
            <li>4 cơ sở đào tạo</li>
            <li>100.000 m&sup2; sàn xây dựng</li>
            <li>3.000 máy tính</li>
            <li>50.000 bản sách</li>
            <li>Thư viện đạt chuẩn Quốc gia</li>
         </ul>

         <p>CHẤT LƯỢNG</p>

         <ul>
            <li>Đạt chuẩn kiểm định chất lượng của Bộ GD&ĐT</li>
            <li>Đạt chuẩn QS-Stars 3 sao (Anh Quốc)</li>
         </ul>

         <p>KHOA</p>

         <ul>
            <li>Y</li>
            <li>Dược</li>
            <li>Điều dưỡng</li>
            <li>Quản trị Kinh doanh</li>
            <li>Khoa Luật</li>
            <li>Tài chính - Kế toán</li>
            <li>Cơ khí - Điện - Điện tử - Ô tô</li>
            <li>Kỹ thuật Thực phẩm và Môi trường </li>
            <li>Công nghệ Sinh học </li>
            <li>Công nghệ Thông tin</li>
            <li>Âm nhạc</li>
            <li>Kiến trúc - Xây dựng - Mỹ thuật ứng dụng</li>
            <li>Ngoại ngữ</li>
            <li>Du lịch và Việt Nam học</li>
            <li>Ngoại thương</li>
            <li>Giáo dục Quốc phòng - An ninh và Giáo dục Thể chất</li>
         </ul>
      </article>
      <!-- /sidebar -->
   </aside>

   <section id="content" class="col-md-9 col-sm-8">

      <div class="cate-heading mb-3">
         <img class="img-fluid" src="admin/imgs/logo_ntt.png" alt="" width="100%">
         <article class="p-4">
            <h4 class="c-black"></h4>
            <p><span class="c-lime-a5 font-weight-bold"></span>NTTU : Trường đại học Nguyễn Tất Thành được đặt tại Quận
               4.
               Từ Trường đến trung tâm thành phố Hồ chí Minh chỉ mất 5 phút đi bằng ô-tô. Trường nằm cạnh bờ sông Sài
               Gòn
               lộng gió. Từ trên sân thượng tòa nhà, phóng tầm mắt ra xa, chúng ta có thể thấy bao quát toàn thành phố.
               Phía trước tòa nhà là dòng sông Sài Gòn dịu dàng uốn quanh, với nhiều tàu thuyền qua lại.</p>
            <ul class="list-unstyled">
               <li><a class="font-weight-bold" href="http://ntt.edu.vn"><i
                        class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>http://ntt.edu.vn</a></li>
            </ul>
         </article>
      </div>

      <?php while ($row=$rs_result->fetch_assoc()) {?>
        <article class="media sub-cate">
         <figure class="thumb mb-0 mr-3"><img class="d-flex img-fluid"
            src="<?php echo $row["thumb"] ?>" alt="Generic placeholder image"></figure>
            <div class="media-body">
               <h5 class="title mt-0">
                  <a href="view.php?id=<?php echo $row["id"] ?>"><?php echo $row["title"] ?></a>
               </h5>
               <?php echo $row["ndcy"] ?>
            </div>
         </article>
      <?php } ?>
      <br>
         <?php  
         $sql = "SELECT COUNT(`id`) FROM `post` WHERE `danhmuc`='".$dm."'";  
         $rs_result = $conn->query($sql);
         $row = $rs_result->fetch_assoc();  
         $total_records = $row["COUNT(`id`)"];  
         $total_pages = ceil($total_records / $limit);
         $pagLink = "<div class='pagination'>";  
         for ($i=1; $i<=$total_pages; $i++) {  
           $pagLink .= "<a href='category.php?danhmuc=".$dm."&page=".$i."'>".$i."</a>";  
        };  
        echo $pagLink . "</div>";  
        ?>
      </article>
     
   </section>
</div>
   </div>

   <?php include'iclPHP/footer.php' ?>
</body>
</html>