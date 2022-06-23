
<?php
    ob_start();
	if(isset($_POST['dangky'])) {

		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];

		$sql_check = mysqli_query($mysqli,"Select * from tbl_dangky where email='$email' ");
		$count = mysqli_num_rows($sql_check);

		if($count == 0){
			$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
			if($sql_dangky){
				$_SESSION['dangky'] = $tenkhachhang;
				$_SESSION['email'] = $email;
				$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
                
                echo '<script type="text/javascript">window.location.href="index.php?quanly=giohang"</script>';
			}
		}
		else{
			echo '<p style="color:green">Email đã tồn tại</p>';
		}
	}
?>
<H3 style="text-align: center;">Đăng ký thành viên</H3>

<div class="container">
	<div class="row">
		<div class="col-sm align-self-center">
			<form action="" autocomplete="off" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Tên khách hàng</label>
					<input type="text" name="hovaten" class="form-control" placeholder="Nhập họ tên">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Nhập email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Số điện thoại</label>
					<input type="text" name="dienthoai" class="form-control" placeholder="Nhập số điện thoại">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Địa chỉ</label>
					<input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Mật khẩu</label>
					<input type="password" name="matkhau" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
				</div>
				<button type="submit" name="dangky" class="btn btn-primary">Đăng ký</button>
			</form>
		</div>
	</div>
</div>
