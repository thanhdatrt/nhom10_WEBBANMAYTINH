<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
		}else{
			echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
		}
	} 
?>


<h3 style="text-align: center;">ĐỔI MẬT KHẨU</h3>
<div class="container">
	<div class="row">
		<div class="col-sm align-self-center">
			<form action="" autocomplete="off" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Tài khoản</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Mật khẩu cũ</label>
					<input type="password" name="password_cu" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu cũ">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Mật khẩu mới</label>
					<input type="password" name="password_moi" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu mới">
				</div>
				<button type="submit" name="doimatkhau" class="btn btn-primary">Đổi mật khẩu</button>
			</form>
		</div>
	</div>
</div>
