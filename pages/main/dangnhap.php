<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['email'] = $row_data['email'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			echo '<script type="text/javascript">window.location.href="index.php"</script>';
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
		}
	} 
?>

<H3 style="text-align: center;">ĐĂNG NHẬP</H3>
<div class="container">
    <div class="row">
        <div class="col-sm align-self-center">
            <form action="" autocomplete="off" method="POST">

                <div class="form-group">
                    <label for="exampleInputEmail1">Tài khoản</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu...">
                </div>

                
                <div class="form-inline">
                    <div class="form-group mb-2">
						<button type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
						<button style="margin-left: 40px;" class="btn btn-primary"><a style="color: #fff" href="index.php?quanly=dangky">Đăng ký tài khoản</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>