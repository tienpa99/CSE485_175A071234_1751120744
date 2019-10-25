<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: index.php");
}
if (isset($_POST) && !empty($_FILES['file'])) {
    $duoi = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    // Kiểm tra xem có phải file ảnh không
    if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif') {
        // tiến hành upload
        $time = round(microtime(true)); 
        if (move_uploaded_file($_FILES['file']['tmp_name'], '../../imgs/thumbnails/'.$time.'.'.$duoi )) {
            // Nếu thành công
            echo 'admin/imgs/thumbnails/'.$time.'.'.$duoi;
            } //in ra thông báo + tên file
         else { // nếu không thành công
            die('Có lỗi!'); // in ra thông báo
        }
    } else { // nếu không phải file ảnh
        die('Chỉ được upload ảnh'); // in ra thông báo
    }
} 
else {
    die('Lock'); // nếu không phải post method
}
?>