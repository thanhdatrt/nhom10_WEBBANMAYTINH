<!-- Header Section Begin -->
    <!-- start PC -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> tkltweb@gmail.com</li>
                                <li>Thiết Kế & Lập trình Web</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="header__top__right__social">
								<?php
									if(isset($_SESSION['dangky'])){
								?>
                                <a href="index.php?quanly=thaydoimatkhau"><i class="fa fa-user"></i> Đổi mật khẩu</a>
								<a href="index.php?quanly=lichsudonhang"><i class="fas fa-history"></i>Lịch sử đơn hàng</a>
                                <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
								<?php
								} else {
									?>
									<a href="index.php?quanly=dangnhap"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
									<a href="index.php?quanly=dangky"><i class="fas fa-user-plus"></i> Đăng ký</a>
								<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang Chủ</a></li>
                            <li><a href="main/index.php">Cửa Hàng</a></li>
                            <li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
                            <li><a href="index.php?quanly=lienhe">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- End PC -->
    <!-- Header Section End -->



    