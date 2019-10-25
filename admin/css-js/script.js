$("#Password").keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        checkLog();
    }
});

$("#UserName").keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        checkLog();
    }
});


$("#btnLogin").click(function() {
	checkLog();
});
function checkLog() {
	var user = $("#UserName").val();
	var pw = $("#Password").val();
	if (user=="" || pw=="") {
		alert("Tài khoản hoặc mật khẩu trống")
		return false;
	}
	else{
		$.ajax({
			url: 'php/common/check_dang_nhap.php',
			type: 'POST',
			data: {user: user, pw: pw},
			success: function(response) {
                if (response == "1") {
                	alert("Đăng nhập thành công");
                	window.location = "./trangchu.php";
                }
                if (response=="2") {
                	alert("Tài khoản hoặc mật khẩu không đúng định dạng")
                }
                if (response=="3") {
                	alert("Tài khoản hoặc mật khẩu không chính xác")
                }
            }
        })
	}
}

function readURL(input){
     if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }
}

$(".xoaID").click(function() {
    var id = this.id;
    $.ajax({
        url: 'php/common/xoa.php',
        type: 'POST',
        data: {id: id},
        success: function(response){
            if (response == "1") {
                alert("Xóa thành công");
                location.reload();
            }
        }
    })
});

$("#huy").click(function(event) {
    window.location="trangchu.php"
    /* Act on the event */
});

$(".suaID").click(function(event) {
    var ID = this.id;
    window.location = "./sua-bai.php?id="+ID;
});

$("#okSua").click(function(event) {
    /* Act on the event */
    alert("ok")
});