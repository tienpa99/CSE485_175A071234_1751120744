<?php
session_start();
if(isset($_SESSION["user"])){
  require_once('php/common/ketnoi.php');
}
else{
  mysqli_close($conn);
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>A D D P O S T - N T T</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>THÊM BÀI VIẾT</h1>
        <hr>
        <h2>Tiêu đề</h2>
        <input type="text" id="title-name" placeholder="Tên tiêu đề"><br><br>
        <h2>Loại tin</h2>
        <select id="mySelect">
          <optgroup label="Danh Mục">
            <option value="MTHT">Môi Trường Học Tập</option>
            <option value="HTQT">Hợp Tác Quốc Tế</option>
            <option value="TT">Tin Tức</option>
            <option value="GT">Giới Thiệu</option>
            <option value="TS">Tuyển Sinh</option>
            <option value="DT">Đào Tạo</option>
            <option value="NC">Nghiên Cứu</option>
            <option value="HTDN">Hợp Tác Doanh Nghiệp</option>
        </select>
        <br><br>
        <h2>Ảnh chủ đề</h2>
        <input id="file" type="file" onchange="readURL(this);" /><br>
        <img id="blah" src="#" alt="Ảnh Chủ Đề" width="300" onerror="this.onerror=null" />
        <br><br><br>
        <h2>Nội dung chủ yếu</h2>
        <textarea name="" id="ndcy" cols="70" rows="10"></textarea>
        <br><br><br>
        <div id="summernote"></div><br>
        <div align="center">
            <button class="pure-button" id="ok">Thêm Bài Mới</button>
            <button class="pure-button" id="huy">Hủy</button>
        </div>
        <br><br><br><br><br>
    </div>
</body>
<script>
$('#summernote').summernote({
    placeholder: 'Nhập Nội Dung Ở Đây',
    height: 500,
    callbacks: {
        onImageUpload: function(files, editor, welEditable) {
            for (var i = files.length - 1; i >= 0; i--) {
                sendFile(files[i], this);
            }
        }
    }
});

function sendFile(file, el) {
    var form_data = new FormData();
    form_data.append('file', file);
    $.ajax({
        data: form_data,
        type: "POST",
        url: 'editor-upload.php',
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
            $(el).summernote('editor.insertImage', 'http://dashboard-soc.bsoc.vn:8008/myweb/admin/'+url);
        }
    });
}
$('#ok').click(function(event) {
    var title = $("#title-name").val();
    var select = $("#mySelect").val();
    var ndcy = $("#ndcy").val();
    var str = $('#summernote').summernote('code');
    var file_data = $('#file').prop('files')[0];
    if (str == "<p><br></p>") {
        alert("Nội dung bài không được để trống")
    }
    else{
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: 'php/common/upload.php', 
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(res) {
                var AnhShow = res;
                $.ajax({
                    url: 'php/common/them.php',
                    type: 'POST',
                    data: {
                        str: str,
                        AnhShow: AnhShow,
                        title: title,
                        ndcy: ndcy,
                        select: select
                    },
                    success: function(response){   
                        if (response ==='ok') {
                            alert("Thêm thành công");
                            window.location="./trangchu.php";
                        }
                    }

                })
            }
        });
    }
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="css-js/script.js"></script>
</html>