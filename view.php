<?php 
  require_once('admin/php/common/ketnoi.php');
  $ID = $_GET["id"];
  $ID = htmlentities($ID);
  $sql="SELECT * FROM `post` WHERE `id`='".$ID."'";
  $rs = $conn->query($sql);
  $row= $rs->fetch_assoc();
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
    <div class="row">
   <section id="content" class="col-12 content-fluid">
    
      <div class="cate-heading mb-3">
         <img class="img-fluid" src="<?php  
         echo $row["thumb"];
         ?>" style="width:100%">
         <!-- /heading -->
      </div>

      <div class="section-detail">
         <h3 class="c-blue-a5"><?php echo $row["title"] ?></h3>
         <div class="d-md-flex justify-content-between border-bottom">
            <div class="col-md-7 text-sm-right pr-0">
               <ul class="detail-tool hidden-md-down">
                 
                  <li>
                     <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
                  </li>

                  <li>
                    
                     <div style="position: absolute; width: 450px; left: -10000px;" id="___ytsubscribe_0">
                       
                     </div>
                     <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default"
                        data-count="hidden" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                  </li>
                  <li>
                    

                     <div style="position: absolute; width: 450px; left: -10000px;" id="___plusone_0">
                       
                     </div>
                     <div class="g-plusone" data-size="middle" data-annotation="none" data-gapiscan="true"
                        data-onload="true" data-gapistub="true"></div>
                  </li>

                  <li class="border-gray btn-print">
                     <a href="#" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
                  </li>
                  <li class="border-gray btn-envelope">
                     <a href="mailto:info@ntt.edu.vn"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  </li>
                  <li class="border-gray btn-pdf">
                     <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      <p><b><?php echo $row["ndcy"]?></b></p>
      <?php echo $row["pos"]?>   
      
      <div class="col-md-7 offset-md-5 text-sm-right pr-0 mt-3">
         <ul class="detail-tool hidden-md-down">

            <li>

               <div class="fb-like" data-href="http://ntt.edu.vn/web/tin-tuc/Thu-ngo-hieu-truong"
                  data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
                  data-share="true"></div>

            </li>

            <li>
               <div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
            </li>

            <li>


               <div style="position: absolute; width: 450px; left: -10000px;" id="___ytsubscribe_0">
                
               </div>
               <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="hidden"
                  data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
            </li>
            <li>
               

               <div style="position: absolute; width: 450px; left: -10000px;" id="___plusone_0">
                 
               </div>
               <div class="g-plusone" data-size="middle" data-annotation="none" data-gapiscan="true" data-onload="true"
                  data-gapistub="true"></div>
            </li>

            <li class="border-gray btn-print">
               <a href="#" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>
            </li>
            <li class="border-gray btn-envelope">
               <a href="mailto:info@ntt.edu.vn"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </li>
            <li class="border-gray btn-pdf">
               <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            </li>
         </ul>
      </div>
      
      <!-- /content -->
   </section>
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