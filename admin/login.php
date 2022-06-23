<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Login Admin</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Include the above in your HEAD tag -->

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../admin/public/styles/style_login.css">
</head>
<body>

<div class="main">
    
    
    <div class="container">
		<center>
			<div class="middle">
				<div id="login">

					<form action="" autocomplete="off" method="POST">

						<fieldset class="clearfix">

							<p ><span class="fa fa-user"></span><input type="text" name="username" Placeholder="Username" required></p> 
							<!-- JS because of IE support; better: placeholder="Username" -->
							<p><span class="fa fa-lock"></span><input type="password" name="password" Placeholder="Password" required></p> 
							<!-- JS because of IE support; better: placeholder="Password" -->
							
							<div>
								<span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Đăng Nhập" name="dangnhap"></span>
							</div>

						</fieldset>
						<div class="clearfix"></div>						
					</form>
					<div class="clearfix"></div>
				</div> <!-- end login -->
				<div class="logo">
					<img src="../admin/public/images/logo.png" alt="">
					<div class="clearfix"></div>
				</div>
			</div>
		</center>
    </div>

</div>

<!-- <div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
		<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>

</div> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
